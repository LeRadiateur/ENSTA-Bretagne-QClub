using Microsoft.Quantum.Simulation.Simulators;
using System;

namespace Quantum.ShorAlgorithm
{
    public static class References
    {
        public static string __author__ = "GEOFFROY Evan";
        public static string __last_update_date__ = "december 6 2019, 09:30";
        public static string __workplace__ = "ENSTA Bretagne, Brest, France";
        public static string __client__ = "COATANHAY Arnaud";
        public static string __projectname__ = "Shor's Algorithm";
    }
    public static class Globals
    {
        // class for long time storage data
        public static int memo_rnd;
        public static int memo_gcd;
        public static int memo_n;
        public static double memo_result;
    }

    class Driver
    {
        static int Main()
        {
            using var qsim = new QuantumSimulator();
            {
                System.Console.WriteLine("Project conduct by : " + References.__author__);
                System.Console.WriteLine("Project name is : " + References.__projectname__);
                System.Console.WriteLine("Last time update of the project : " + References.__last_update_date__);
                System.Console.WriteLine("Project developped in : " + References.__workplace__);
                System.Console.WriteLine("Project client is : " + References.__client__);

                // declaration of necessary variables for the next part of the code
                Random rnd = new Random();
                Boolean test_is_finished;
                test_is_finished = false;
                int r;
                int q;
                int b;
                double output;

                System.Console.Write("Nombre choisi : ");
                string input = System.Console.ReadLine();
                Globals.memo_n = int.Parse(input);
                System.Console.Write("Nombre reçu : ");
                System.Console.WriteLine(Globals.memo_n);

                // test if n is even (not necessary but time loss is negligible and reduce by two the number of case
                if (Globals.memo_n % 2 == 0)
                {
                    Globals.memo_result = 2;
                    test_is_finished = true;
                }

                while (!test_is_finished)
                {
                    // boucle while the algoritm haven't found a divider of n
                    // random number chosen between 2 and n
                    Globals.memo_rnd = rnd.Next(2, Globals.memo_n);
                    System.Console.Write("Nombre random choisi:");
                    System.Console.WriteLine(Globals.memo_rnd);

                    // Calcul du PGCD entre a et n
                    b = Gcd(Globals.memo_n, Globals.memo_rnd);
                    // if gdc = 1 then beginning of the quantum algorithm, else dividers have been found
                    if (b != 1)
                    {
                        test_is_finished = true;
                        Globals.memo_result = b;
                    };
                    if (test_is_finished)
                    {
                        Globals.memo_result = b;
                        Return_solution();
                        // end of the aglorithm, two dividers have been found
                        return 0;
                        // end of the program
                    }
                    else
                    {
                        System.Console.Write("Non-trivial factor of n found : ");
                        System.Console.WriteLine(Globals.memo_rnd);
                        // calcul de q tel que n <= 2^q < 2*n
                        q = Q_finder(Globals.memo_n);
                        System.Console.Write("q found : ");
                        System.Console.WriteLine(q);
                        System.Console.WriteLine(" ");
                        // beginning of the quantum algorithm
                        output = (double)Shor.Run(qsim, Globals.memo_n, Globals.memo_rnd, q).Result;
                        if (output == 0.0)
                        {
                            System.Console.WriteLine("result is null, restart process");

                        }
                        else
                        {
                            r = Get_r(output, q);
                            // output est l'ordre r tel que x^r est congru à 1 modulo n
                            Globals.memo_result = Math.Pow((double)Globals.memo_rnd, r / 2.0) + 1;
                            if (r % 2 == 0 & ((int)(Globals.memo_result)) % Globals.memo_n != 0)
                            {
                                test_is_finished = true;
                            };
                        };
                    };
                    // end of the loop
                };
                Return_solution();
                // end of the aglorithm, two dividers have been found
                return 0;
                // end of the program
            }
        }

        static void Return_solution()
        {

            int mem = 0;
            int mem2 = 0;

            if ((int)Globals.memo_result != 0)
            {
                mem = Gcd((int)Globals.memo_result, Globals.memo_n);
            };
            if ((int)Globals.memo_result - 2 != 0)
            {
                mem2 = Gcd((int)Globals.memo_result - 2, Globals.memo_n);
            };
            if (mem != 0 & mem != 1 & mem != Globals.memo_n)
            {
                System.Console.Write("factor1 of N is : ");
                System.Console.WriteLine(mem);
                System.Console.Write("factor2 of N is : ");
                System.Console.WriteLine(Globals.memo_n / mem);
            }
            else
            {
                if (mem2 != 0 & mem2 != 1 & mem2 != Globals.memo_n)
                {
                    System.Console.Write("factor1 of N is : ");
                    System.Console.WriteLine(mem2);
                    System.Console.Write("factor2 of N is : ");
                    System.Console.WriteLine(Globals.memo_n / mem2);
                }
                else
                {
                    System.Console.WriteLine("Bud report : solution found might be 0");
                };
            };
        }


        static int Gcd(int value_a, int value_b)
        {
            if (value_a == value_b) { return value_a; };
            if (value_a < value_b)
            {
                int tmp = value_a;
                value_a = value_b;
                value_b = tmp;
            };
            //System.Console.WriteLine(value_a);
            System.Console.Write("Current calculation of the gdc with b : ");
            System.Console.WriteLine(value_b);
            Globals.memo_gcd = value_b;
            if (value_b != 0)
            {
                int tmp2 = value_a % value_b;
                if (tmp2 == 0) { return value_b; }
                else { return Gcd(value_b, tmp2); };
            }
            else
            {
                System.Console.WriteLine("bug report : try to divide by 0");
                return 0;
            };
        }
        static int Q_finder(int n)
        {
            int q;
            q = 0;
            while (n > Math.Pow(2, q + 1))
            { q += 1; };
            if (Math.Pow(2, q + 1) > n & n >= Math.Pow(2, q)) { return q; }
            else { return 0; };
        }

        static int Get_r(double c, int q)
        {
            double q_dbl = Math.Pow(2.0, (double)q);
            double evaluate_div = c / q_dbl;
            //System.Console.WriteLine(evaluate_div);
            double current_divi = c / q_dbl;
            double global_div = 0;

            // limit to 32 bits, in case of a convergency problem

            int[] array_a = new int[32];
            int[] array_d = new int[32];
            int[] array_r = new int[32];
            int indice = 1;
            array_a[0] = (int)Math.Floor(evaluate_div);
            //System.Console.WriteLine(array_a[0]);
            while (indice < 32 & Math.Abs(evaluate_div - global_div) > 1.0 / (2 * q_dbl))
            {
                //System.Console.WriteLine(" ");
                //System.Console.Write("indice : ");
                //System.Console.WriteLine(indice);
                array_a[indice] = (int)Math.Floor(1.0 / (current_divi - array_a[indice - 1]));
                current_divi = 1.0 / (current_divi - (double)array_a[indice - 1]);
                array_d[indice] = Calculate_d(array_a, indice);
                array_r[indice] = Calculate_r(array_a, indice);
                global_div = (double)array_d[indice] / (double)array_r[indice];
                // debugging :
                //System.Console.Write("current_divi : ");
                //System.Console.WriteLine(current_divi);
                //System.Console.Write("array_a : ");
                //System.Console.WriteLine(array_a[indice]);
                //System.Console.Write("array_d: ");
                //System.Console.WriteLine(array_d[indice]);
                //System.Console.Write("array_r: ");
                //System.Console.WriteLine(array_r[indice]);
                //System.Console.Write("global div : ");
                //System.Console.WriteLine(global_div);
                indice += 1;
            }
            int r = Math.Abs(array_r[indice - 1]);
            System.Console.Write("period r found : ");
            System.Console.WriteLine(r);
            return r;
        }
        static int Calculate_d(int[] tab, int i)
        {
            int j;
            int dn;
            int dn_1 = tab[0];
            int dn_2 = tab[0];
            for (j = 1; j < i; j++)
            {
                if (j == 1) { dn_1 = 1 + tab[0] * tab[1]; }
                else
                {
                    dn = tab[j] * dn_1 + dn_2;
                    dn_2 = dn_1;
                    dn_1 = dn;
                };
            }
            return dn_1;
        }
        static int Calculate_r(int[] tab, int i)
        {
            int j;
            int rn;
            int rn_1 = tab[1];
            int rn_2 = 1;
            for (j = 2; j < i; j++)
            {
                rn = tab[j] * rn_1 + rn_2;
                rn_2 = rn_1;
                rn_1 = rn;
            }
            return rn_1;
        }
    }
}