using System;
using Microsoft.Quantum.Simulation.Core;
using Microsoft.Quantum.Simulation.Simulators;

namespace Quantum.ReadingOneQubit
{
    class Driver
    {
        static void Main(string[] args)
        {
            using (var qsim = new QuantumSimulator())
            {
                // Try initial values
                int count = 1000;

                Result[] initials = new Result[] { Result.Zero, Result.One };
                var res = ReadTest.Run(qsim, count).Result;
                var (numZeros, numOnes) = res;
                System.Console.WriteLine(
                    $"Total Qubits : {count,-4} | 0s={numZeros,-4} 1s={numOnes,-4}");
            }

            System.Console.WriteLine("Press any key to continue...");
            Console.ReadKey();
        }
    }
}