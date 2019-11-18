using Microsoft.Quantum.Simulation.Simulators;
using System;

namespace Quantum.ShorAlgorythm
{
    public static class Globals {
        public static int memo_rnd;
        public static int memo_gcd;
        public static int memo_n;
        public static double memo_result;
    }

    class Driver
    {
        static int Main()
        {
            using var qsim = new QuantumSimulator(); {
                Random rnd = new Random();
                System.Console.Write("Nombre choisi : ");
                string input = System.Console.ReadLine();
                Globals.memo_n = int.Parse(input);
                System.Console.Write("Nombre reçu : ");
                System.Console.WriteLine(Globals.memo_n);
                // boucle tant que l'on a pas un nombre a premier avec n
                Boolean test_get_non_trivial;
                test_get_non_trivial = false;
                // Nombre random choisi entre 2 et n
                Globals.memo_rnd = rnd.Next(2, Globals.memo_n);
                System.Console.Write("Nombre random choisi:");
                System.Console.WriteLine(Globals.memo_rnd);

                // Calcul du PGCD entre a et n
                int b = Gcd(Globals.memo_n, Globals.memo_rnd);
                // si gdc = 1 alors debut de l'algo quantique, sinon les facteurs ont étés trouvés
                if (b == 1) { test_get_non_trivial = true;
                };
                if (!test_get_non_trivial)
                {
                    System.Console.Write("factor1 of N is : ");
                    System.Console.WriteLine(Globals.memo_gcd);
                    System.Console.Write("factor2 of N is : ");
                    System.Console.WriteLine(Globals.memo_n / Globals.memo_gcd);
                    // fin de l'aglorithme, deux diviseurs ont étés trouvés
                    return 0;
                }
                else
                {
                    System.Console.Write("Non-trivial factor of n found : ");
                    System.Console.WriteLine(Globals.memo_rnd);
                    // calcul de q tel que n^2 <= 2^q < 2*n^2
                    int q = Q_finder(Globals.memo_n);
                    System.Console.Write("q found : ");
                    System.Console.WriteLine(q);
                    System.Console.WriteLine(" ");
                    double output = (double)Shor.Run(qsim, Globals.memo_n, Globals.memo_rnd, q).Result;
                    if (output == 0.0) { System.Console.WriteLine("result is null, stop processing"); return 0; }
                    int r = get_r(output);
                    // output est l'ordre r tel que x^r est congru à 1 modulo n
                    while (r % 2 != 0) // tant que l'ordre n'est pas pair recommencer :
                    {
                        test_get_non_trivial = false;
                        Globals.memo_rnd = rnd.Next(2, Globals.memo_n);
                        System.Console.Write("Nombre random choisi:");
                        System.Console.WriteLine(Globals.memo_rnd);

                        // Calcul du PGCD entre a et n
                        int b2 = Gcd(Globals.memo_n, Globals.memo_rnd);
                        // si gdc = 1 alors debut de l'algo quantique, sinon les facteurs ont étés trouvés
                        if (b2 == 1) { test_get_non_trivial = true; };
                        if (!test_get_non_trivial)
                        {
                            System.Console.Write("factor1 of N is : ");
                            System.Console.WriteLine(Globals.memo_gcd);
                            System.Console.Write("factor2 of N is : ");
                            System.Console.WriteLine(Globals.memo_n / Globals.memo_gcd);
                            // fin de l'aglorithme, deux diviseurs ont étés trouvés
                            return 0;
                        }
                        else
                        { 
                            System.Console.Write("Non-trivial factor of n found : ");
                            System.Console.WriteLine(Globals.memo_rnd);
                            // calcul de q tel que n^2 <= 2^q < 2*n^2
                            int q2 = Q_finder(Globals.memo_n);
                            System.Console.Write("q found : ");
                            System.Console.WriteLine(q2);
                            System.Console.WriteLine(" ");
                            output = (double)Shor.Run(qsim, Globals.memo_n, Globals.memo_rnd, q2).Result;
                            if (output == 0.0) { System.Console.WriteLine("result is null, stop processing"); return 0; }
                            r = get_r(output);
                        };
                    };
                    Globals.memo_result = Math.Pow((double)Globals.memo_rnd, r / 2.0) + 1;
                    while (((int)(Globals.memo_result)) % Globals.memo_n == 0)
                    {
                        test_get_non_trivial = false;
                        // Nombre random choisi entre 2 et n
                        Globals.memo_rnd = rnd.Next(2, Globals.memo_n);
                        System.Console.Write("Nombre random choisi:");
                        System.Console.WriteLine(Globals.memo_rnd);

                        // Calcul du PGCD entre a et n
                        int b3 = Gcd(Globals.memo_n, Globals.memo_rnd);
                        // si gdc = 1 alors debut de l'algo quantique, sinon les facteurs ont étés trouvés
                        if (b3 == 1){test_get_non_trivial = true;};
                        if (!test_get_non_trivial)
                        {
                            System.Console.Write("factor1 of N is : ");
                            System.Console.WriteLine(Globals.memo_gcd);
                            System.Console.Write("factor2 of N is : ");
                            System.Console.WriteLine(Globals.memo_n / Globals.memo_gcd);
                            // fin de l'aglorithme, deux diviseurs ont étés trouvés
                            return 0;
                        }
                        else
                        {
                            System.Console.Write("Non-trivial factor of n found : ");
                            System.Console.WriteLine(Globals.memo_rnd);
                            // calcul de q tel que n^2 <= 2^q < 2*n^2
                            int q3 = Q_finder(Globals.memo_n);
                            System.Console.Write("q found : ");
                            System.Console.WriteLine(q3);
                            System.Console.WriteLine(" ");
                            output = (double)Shor.Run(qsim, Globals.memo_n, Globals.memo_rnd, q3).Result;
                            if (output == 0.0) { System.Console.WriteLine("result is null, stop processing"); return 0; }
                            // output est l'ordre r tel que x^r est congru à 1 modulo n
                            r = get_r(output);
                            while (r % 2 != 0) // tant que l'ordre n'est pas pair recommencer :
                            {
                                Globals.memo_rnd = rnd.Next(2, Globals.memo_n);
                                System.Console.Write("Nombre random choisi:");
                                System.Console.WriteLine(Globals.memo_rnd);

                                // Calcul du PGCD entre a et n
                                int b4 = Gcd(Globals.memo_n, Globals.memo_rnd);
                                // si gdc = 1 alors debut de l'algo quantique, sinon les facteurs ont étés trouvés
                                if (b4 == 1) { test_get_non_trivial = true; };
                                if (!test_get_non_trivial)
                                {
                                    System.Console.Write("factor1 of N is : ");
                                    System.Console.WriteLine(Globals.memo_gcd);
                                    System.Console.Write("factor2 of N is : ");
                                    System.Console.WriteLine(Globals.memo_n / Globals.memo_gcd);
                                    // fin de l'aglorithme, deux diviseurs ont étés trouvés
                                    return 0;
                                }
                                else 
                                {
                                    System.Console.Write("Non-trivial factor of n found : ");
                                    System.Console.WriteLine(Globals.memo_rnd);
                                    // calcul de q tel que n^2 <= 2^q < 2*n^2
                                    int q4 = Q_finder(Globals.memo_n);
                                    System.Console.WriteLine(" ");
                                    output = (double)Shor.Run(qsim, Globals.memo_n, Globals.memo_rnd, q4).Result;
                                    if (output == 0.0) { System.Console.WriteLine("result is null, stop processing"); return 0; }
                                    r = get_r(output);
                                };
                            }
                            Globals.memo_result = Math.Pow((double)Globals.memo_rnd, output / 2.0) + 1;
                        };
                    };
                    System.Console.Write("factor1 of N is : ");
                    System.Console.WriteLine(Gcd((int)Globals.memo_result,Globals.memo_n));
                    System.Console.Write("factor2 of N is : ");
                    System.Console.WriteLine(Gcd((int)Globals.memo_result -2 , Globals.memo_n));
                    // fin de l'aglorithme, deux diviseurs ont étés trouvés
                    return 0;

                };
                // end of the program
            }
        }
        static int Gcd(int value_a, int value_b)
        {
            System.Console.Write("Current calculation of the gdc with b : ");
            System.Console.WriteLine(value_b);
            if (value_a < value_b) { 
                int tmp = value_a;
                value_a = value_b;
                value_b = tmp;
            };
            Globals.memo_gcd = value_b;
            int tmp2 = value_a % value_b;
            if (tmp2 == 0) { return value_b; }
            else { return Gcd(value_b, tmp2); };
        }
        static int Q_finder(int n)
        {
            int q;
            q = 0;
            while (Math.Pow(n, 2) > Math.Pow(2, q))
            { q += 1; };
            System.Console.Write("Q found : ");
            System.Console.WriteLine(q);
            if (Math.Pow(2, q) <= (2 * Math.Pow(n, 2))){return q;}
            else { return 0; };
	    }

        static int get_r(double c)
        {
            int r;
            r = 0;
            System.Console.Write("period r found : ");
            System.Console.WriteLine(r);
            return 0;
        }
    }
}
