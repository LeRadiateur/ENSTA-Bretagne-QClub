namespace Quantum.ShorAlgorythm
{
    open Microsoft.Quantum.Convert;
    open Microsoft.Quantum.Intrinsic;
    open Microsoft.Quantum.Canon;
	open Microsoft.Quantum.Math;
	open Microsoft.Quantum.Arrays;
	open Microsoft.Quantum.Arithmetic;

	operation Set (att : Result, q1 : Qubit) : Unit {
		let current = M(q1);
		if (current != att){
			X(q1);
		}
	}
	operation convert (reg : Qubit[], q : Int) : Int{
		mutable result = 0;
		for (i in 1..PowI(2,q)){
			if (IsResultOne(M(reg[i]))){
				set result = PlusI(result,PowI(2,i));
			}
		}
		return result;
	}

	operation Mesure(q : Qubit) : Unit {
		let m = M(q);
	}

	operation f (a : Int, i : LittleEndian, n : Int) : Int {
		//let m = PowCP(i,ComplexPolar(a));
		return 0;
		//return  ModI(PNorm(1.0,m),n);
	}


	operation u_f (rq: Qubit[], q : Int, a : Int, n : Int) : Unit {
		// ModI( Floor(AbsComplexPolar(PowCP()))
		
			set rq[q..TimesI(2,q)] =ExpModI( LittleEndian(rq[0..q]), a, n);
	}

    operation Shor (n : Int, a : Int, q : Int) : (Int) {
        Message("period-finding subroutine");
		using (register = Qubit[TimesI(q,2)]){
			// initialisation du registre 
			Message ("initialisation registre");
			ApplyToEach(H, register[0 .. q]);
			Message ("initialisation registre reussi");

			Message("apply operator Uf to both register");

			u_f(register, q, a, n);
				
			Message("operator as been applied");

			Message ("Début Transformation de Fourier Quantique");
			ApplyQuantumFourierTransformLE(LittleEndian(register[0..q]));	
			Message ("Fin Transformation de Fourier Quantique");
			ApplyToEach(Mesure,register[0..q]);
			// convertion du registre en un nombre décimal
			let c = convert(register[0..q],q);
			//reset des qubits
			Message ("reset registre");	
			ResetAll(register);
			// fin de l'algo
			return c;	
		}
    }
}
