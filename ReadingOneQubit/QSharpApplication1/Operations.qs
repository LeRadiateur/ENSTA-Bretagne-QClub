namespace Quantum.ReadingOneQubit {
    open Microsoft.Quantum.Intrinsic;
    open Microsoft.Quantum.Canon;

    operation Read (q1: Qubit) : Result {
        return M(q1);
    }

	operation ReadTest (count : Int) : (Int,Int) {
		mutable numOnes = 0;
		using (qubit = Qubit()) {
			for (numtest in 1..count) {
				H(qubit);
				let res = Read(qubit);
				if (res == One) {
					set numOnes += 1;
				}
			}
			Reset(qubit);
		}
		return (count-numOnes,numOnes);
	}
}