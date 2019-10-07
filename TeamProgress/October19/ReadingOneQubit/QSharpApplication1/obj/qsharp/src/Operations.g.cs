#pragma warning disable 1591
using System;
using Microsoft.Quantum.Core;
using Microsoft.Quantum.Intrinsic;
using Microsoft.Quantum.Simulation.Core;

[assembly: CallableDeclaration("{\"Kind\":{\"Case\":\"Operation\"},\"QualifiedName\":{\"Namespace\":\"Quantum.ReadingOneQubit\",\"Name\":\"Read\"},\"Attributes\":[],\"SourceFile\":\"D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs\",\"Position\":{\"Item1\":4,\"Item2\":4},\"SymbolRange\":{\"Item1\":{\"Line\":1,\"Column\":11},\"Item2\":{\"Line\":1,\"Column\":15}},\"ArgumentTuple\":{\"Case\":\"QsTuple\",\"Fields\":[[{\"Case\":\"QsTupleItem\",\"Fields\":[{\"VariableName\":{\"Case\":\"ValidName\",\"Fields\":[\"q1\"]},\"Type\":{\"Case\":\"Qubit\"},\"InferredInformation\":{\"IsMutable\":false,\"HasLocalQuantumDependency\":false},\"Position\":{\"Case\":\"Null\"},\"Range\":{\"Item1\":{\"Line\":1,\"Column\":17},\"Item2\":{\"Line\":1,\"Column\":19}}}]}]]},\"Signature\":{\"TypeParameters\":[],\"ArgumentType\":{\"Case\":\"Qubit\"},\"ReturnType\":{\"Case\":\"Result\"},\"Information\":{\"Characteristics\":{\"Case\":\"EmptySet\"},\"InferredInformation\":{\"IsSelfAdjoint\":false,\"IsIntrinsic\":false}}},\"Documentation\":[]}")]
[assembly: SpecializationDeclaration("{\"Kind\":{\"Case\":\"QsBody\"},\"TypeArguments\":{\"Case\":\"Null\"},\"Information\":{\"Characteristics\":{\"Case\":\"EmptySet\"},\"InferredInformation\":{\"IsSelfAdjoint\":false,\"IsIntrinsic\":false}},\"Parent\":{\"Namespace\":\"Quantum.ReadingOneQubit\",\"Name\":\"Read\"},\"Attributes\":[],\"SourceFile\":\"D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs\",\"Position\":{\"Item1\":4,\"Item2\":4},\"HeaderRange\":{\"Item1\":{\"Line\":1,\"Column\":11},\"Item2\":{\"Line\":1,\"Column\":15}},\"Documentation\":[]}")]
[assembly: CallableDeclaration("{\"Kind\":{\"Case\":\"Operation\"},\"QualifiedName\":{\"Namespace\":\"Quantum.ReadingOneQubit\",\"Name\":\"ReadTest\"},\"Attributes\":[],\"SourceFile\":\"D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs\",\"Position\":{\"Item1\":8,\"Item2\":1},\"SymbolRange\":{\"Item1\":{\"Line\":1,\"Column\":11},\"Item2\":{\"Line\":1,\"Column\":19}},\"ArgumentTuple\":{\"Case\":\"QsTuple\",\"Fields\":[[{\"Case\":\"QsTupleItem\",\"Fields\":[{\"VariableName\":{\"Case\":\"ValidName\",\"Fields\":[\"count\"]},\"Type\":{\"Case\":\"Int\"},\"InferredInformation\":{\"IsMutable\":false,\"HasLocalQuantumDependency\":false},\"Position\":{\"Case\":\"Null\"},\"Range\":{\"Item1\":{\"Line\":1,\"Column\":21},\"Item2\":{\"Line\":1,\"Column\":26}}}]}]]},\"Signature\":{\"TypeParameters\":[],\"ArgumentType\":{\"Case\":\"Int\"},\"ReturnType\":{\"Case\":\"TupleType\",\"Fields\":[[{\"Case\":\"Int\"},{\"Case\":\"Int\"}]]},\"Information\":{\"Characteristics\":{\"Case\":\"EmptySet\"},\"InferredInformation\":{\"IsSelfAdjoint\":false,\"IsIntrinsic\":false}}},\"Documentation\":[]}")]
[assembly: SpecializationDeclaration("{\"Kind\":{\"Case\":\"QsBody\"},\"TypeArguments\":{\"Case\":\"Null\"},\"Information\":{\"Characteristics\":{\"Case\":\"EmptySet\"},\"InferredInformation\":{\"IsSelfAdjoint\":false,\"IsIntrinsic\":false}},\"Parent\":{\"Namespace\":\"Quantum.ReadingOneQubit\",\"Name\":\"ReadTest\"},\"Attributes\":[],\"SourceFile\":\"D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs\",\"Position\":{\"Item1\":8,\"Item2\":1},\"HeaderRange\":{\"Item1\":{\"Line\":1,\"Column\":11},\"Item2\":{\"Line\":1,\"Column\":19}},\"Documentation\":[]}")]
#line hidden
namespace Quantum.ReadingOneQubit
{
    public partial class Read : Operation<Qubit, Result>, ICallable
    {
        public Read(IOperationFactory m) : base(m)
        {
        }

        String ICallable.Name => "Read";
        String ICallable.FullName => "Quantum.ReadingOneQubit.Read";
        protected ICallable<Qubit, Result> MicrosoftQuantumIntrinsicM
        {
            get;
            set;
        }

        public override Func<Qubit, Result> Body => (__in__) =>
        {
            var q1 = __in__;
#line 6 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
            return MicrosoftQuantumIntrinsicM.Apply(q1);
        }

        ;
        public override void Init()
        {
            this.MicrosoftQuantumIntrinsicM = this.Factory.Get<ICallable<Qubit, Result>>(typeof(Microsoft.Quantum.Intrinsic.M));
        }

        public override IApplyData __dataIn(Qubit data) => data;
        public override IApplyData __dataOut(Result data) => new QTuple<Result>(data);
        public static System.Threading.Tasks.Task<Result> Run(IOperationFactory __m__, Qubit q1)
        {
            return __m__.Run<Read, Qubit, Result>(q1);
        }
    }

    public partial class ReadTest : Operation<Int64, (Int64,Int64)>, ICallable
    {
        public ReadTest(IOperationFactory m) : base(m)
        {
        }

        public class Out : QTuple<(Int64,Int64)>, IApplyData
        {
            public Out((Int64,Int64) data) : base(data)
            {
            }

            System.Collections.Generic.IEnumerable<Qubit> IApplyData.Qubits => null;
        }

        String ICallable.Name => "ReadTest";
        String ICallable.FullName => "Quantum.ReadingOneQubit.ReadTest";
        protected Allocate Allocate
        {
            get;
            set;
        }

        protected IUnitary<Qubit> MicrosoftQuantumIntrinsicH
        {
            get;
            set;
        }

        protected Release Release
        {
            get;
            set;
        }

        protected ICallable<Qubit, QVoid> MicrosoftQuantumIntrinsicReset
        {
            get;
            set;
        }

        protected ICallable<Qubit, Result> Read
        {
            get;
            set;
        }

        public override Func<Int64, (Int64,Int64)> Body => (__in__) =>
        {
            var count = __in__;
#line 10 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
            var numOnes = 0L;
#line hidden
            {
#line 11 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
                var qubit = Allocate.Apply();
#line hidden
                Exception __arg1__ = null;
                try
                {
#line 12 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
                    foreach (var numtest in new Range(1L, count))
#line hidden
                    {
#line 13 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
                        MicrosoftQuantumIntrinsicH.Apply(qubit);
#line 14 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
                        var res = Read.Apply(qubit);
#line 15 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
                        if ((res == Result.One))
                        {
#line 16 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
                            numOnes = (numOnes + 1L);
                        }
                    }

#line 19 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
                    MicrosoftQuantumIntrinsicReset.Apply(qubit);
                }
#line hidden
                catch (Exception __arg2__)
                {
                    __arg1__ = __arg2__;
                    throw __arg1__;
                }
#line hidden
                finally
                {
                    if (__arg1__ != null)
                    {
                        throw __arg1__;
                    }

#line hidden
                    Release.Apply(qubit);
                }
            }

#line 21 "D:/MVS%20Quantum%20Project/testingArea/ReadingOneQubit/QSharpApplication1/Operations.qs"
            return ((count - numOnes), numOnes);
        }

        ;
        public override void Init()
        {
            this.Allocate = this.Factory.Get<Allocate>(typeof(Microsoft.Quantum.Intrinsic.Allocate));
            this.MicrosoftQuantumIntrinsicH = this.Factory.Get<IUnitary<Qubit>>(typeof(Microsoft.Quantum.Intrinsic.H));
            this.Release = this.Factory.Get<Release>(typeof(Microsoft.Quantum.Intrinsic.Release));
            this.MicrosoftQuantumIntrinsicReset = this.Factory.Get<ICallable<Qubit, QVoid>>(typeof(Microsoft.Quantum.Intrinsic.Reset));
            this.Read = this.Factory.Get<ICallable<Qubit, Result>>(typeof(Read));
        }

        public override IApplyData __dataIn(Int64 data) => new QTuple<Int64>(data);
        public override IApplyData __dataOut((Int64,Int64) data) => new Out(data);
        public static System.Threading.Tasks.Task<(Int64,Int64)> Run(IOperationFactory __m__, Int64 count)
        {
            return __m__.Run<ReadTest, Int64, (Int64,Int64)>(count);
        }
    }
}