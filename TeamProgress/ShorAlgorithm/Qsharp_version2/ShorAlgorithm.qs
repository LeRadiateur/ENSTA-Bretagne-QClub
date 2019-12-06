namespace Quantum.ShorAlgorithm
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

	operation setregister (att : Result, rq1 : Qubit[]) : Unit {
		for (i in 0..Length(rq1)){
			let current = M(rq1[i]);
			if (current != att){
				X(rq1[i]);
			}
		}
	}

	operation convert (reg : Qubit[], q : Int) : Int{
		mutable result = 0;
		for (i in 0..MinusI(q,1)){
			if (One == (M(reg[i]))){
				set result = PlusI(result,PowI(2,i));
			}
		}
		return result;
	}

	operation Mesure(q : Qubit) : Unit {
		let m = M(q);
		if (m == One){
			Message("val mesuré : 1");}
		else {
			if (m==Zero){Message("val mesuré : 0");}
			else {Message("bug");}
		}
	}

	//operation f (a : Int, i : LittleEndian, n : Int) : Int {
		//let m = PowCP(i,ComplexPolar(a));

		// ModI( Floor(AbsComplexPolar(PowCP()))
		//set rq[q..TimesI(2,q)] =ExpModI( LittleEndian(rq[0..q]), a, n);

		//return  ModI(PNorm(1.0,m),n);
	//}

	operation sum (control1qubit: Qubit, control2qubit: Qubit, appliedqubit: Qubit) : Unit is Ctl{
		// opération élémentaire d'addition
		CX(control1qubit, appliedqubit);
		CX(control2qubit, appliedqubit);
	}

	operation carry(control1qubit: Qubit, control2qubit: Qubit, control3qubit: Qubit, appliedqubit: Qubit) : Unit is Ctl{
		// opération élémentaire d'addition
		CCNOT(control2qubit,control3qubit,appliedqubit);
		CX(control2qubit,control3qubit);
		CCNOT(control1qubit,control3qubit,appliedqubit);
	}
	
	operation add (inputreg_a : Qubit[],outputreg_b : Qubit[], q : Int) : Unit is Ctl {
		// opération qui étant donné deux registres de longueur q les additionnent, 
		// NB : cette opération utilise q qubits supplémentaires pour additionner les deux registres  
		// renvoie le qubit de retenu mais celui n'est pas necessaire à cause de l'utilisation du modulo
		body (...) {
			using(q2 = Qubit[PlusI(q,1)]){
				Message("add in progress");
				for (j in 0..MinusI(q,1)){
					carry(q2[j],inputreg_a[j], outputreg_b[j], q2[PlusI(j,1)]);
				}
				CX(inputreg_a[MinusI(q,1)], outputreg_b[MinusI(q,1)]);
				sum(q2[MinusI(q,1)], inputreg_a[MinusI(q,1)], outputreg_b[MinusI(q,1)]);
				for (j in MinusI(q,1)..-1..1){
					carry(q2[j],inputreg_a[j], outputreg_b[j], q2[PlusI(j,1)]);
					sum(q2[j], inputreg_a[j], outputreg_b[j]);
				}
				mutable qub =  q2[q];
				ResetAll(q2);
				//return qub;
			}


		}
		controlled (cs ,...) {
			using(q2 = Qubit[PlusI(q,1)]){
				Message("add in progress");
				for (j in 0..MinusI(q,1)){
					Controlled carry(cs,(q2[j],inputreg_a[j], outputreg_b[j], q2[PlusI(j,1)]));
				}
				Controlled CX(cs,(inputreg_a[MinusI(q,1)], outputreg_b[MinusI(q,1)]));
				Controlled sum(cs,(q2[MinusI(q,1)], inputreg_a[MinusI(q,1)], outputreg_b[MinusI(q,1)]));
				for (j in MinusI(q,1)..-1..1){
					Controlled carry(cs,(q2[j],inputreg_a[j], outputreg_b[j], q2[PlusI(j,1)]));
					Controlled sum(cs,(q2[j], inputreg_a[j], outputreg_b[j]));
				}
				mutable qub =  q2[q];
				ResetAll(q2);
				//return qub;
			}
		}
	}

	operation multiply(inputint : Int ,outputreg_b : Qubit[], q : Int) : Unit is Ctl {
		body (...) {
			using(dupli = Qubit[q]){ 
				for (k in 0..MinusI(q,1))
					{CX(outputreg_b[k],dupli[k]);}
				for (k in 0..MinusI(inputint,1)){
					add(dupli,outputreg_b,q);
				}
				ResetAll(dupli);
			}
			Message("multiply in progress");
		}
		controlled (cs, ...) {
			using(dupli = Qubit[q]){ 
				for (k in 0..MinusI(q,1))
					{Controlled CX( cs,(outputreg_b[k],dupli[k]));}
				for (k in 0..MinusI(inputint,1)){
					add(dupli,outputreg_b,q);
				}
				ResetAll(dupli);
			}
			Message("multiply in progress");
		}
	}

	operation multipass (controlqubit : Qubit, appliedregister: Qubit[], q1 : Qubit[], multiplier: Int, n:Int, q:Int) : Unit {
		using (cqs = Qubit[q]){
			for (i in 0..MinusI(q,1)){
				CX(controlqubit, cqs[i]);
			}
			Controlled multiply(cqs, (multiplier,appliedregister,q));
			ResetAll(cqs);
		}
	}

	operation swap_register(reg1 : Qubit[], reg2 : Qubit[], length : Int) : Unit {
		for (i in 0..MinusI(length,1)){
			SWAP(reg1[i],reg2[i]);
		}
	}

	operation beauregard (controlqubit : Qubit, appliedregister: Qubit[], multiplier: Int, n:Int, q:Int) : Unit{
		using(q1 = Qubit[q]){
			Message("beauregard step1 : multipicate");
			multipass(controlqubit, appliedregister,q1, multiplier, n,q);
			Message("beauregard step2 : swaping");
			swap_register(q1,appliedregister,q);
			Message("beauregard step3 : multiplicate");
			multipass(controlqubit, appliedregister,q1, InverseModI(multiplier,n), n,q);
			ResetAll(q1);
		}
	}

	operation u_f (rq: Qubit[], q : Int, a : Int, n : Int) : Unit {
		for (i in 0..MinusI(q,1)){
			Message("qubit number : "+IntAsString(i));
			beauregard(rq[i], rq[q..MinusI(TimesI(q,2),1)],PowI(a,i),n,q);
		}
	}

    operation Shor (n : Int, a : Int, q : Int) : (Int) {
        Message("period-finding subroutine");
		using (register = Qubit[TimesI(q,2)]){
			// initialisation du registre 

			Message ("initialisation registre");
			
			ApplyToEach(H, register[0 .. MinusI(q,1)]);
			ApplyToEach(X, register[q .. MinusI(TimesI(q,2),1)]);
			
			Message ("initialisation registre reussi");
			Message("apply operator Uf to both register");

			u_f(register, q, a, n);
			
			Message("operator as been applied");
			Message ("Début Transformation de Fourier Quantique");

			ApplyQuantumFourierTransformLE(LittleEndian(register[0 .. q]));	

			Message ("Fin Transformation de Fourier Quantique");
			Message ("Début de la mesure");

			ApplyToEach(Mesure,register[0..MinusI(q,1)]);

			Message ("Mesure effectuée");

			// convertion du registre en un nombre décimal
			let c = convert(register[0..MinusI(q,1)],q);

			Message("c = " + IntAsString(c));
			//reset des qubits
			Message ("reset registre");	

			ResetAll(register);

			// fin de l'algo
			return c;	
		}
    }
}