<?php

class Kalkulator {
	
	public $num1;
	public $num2;
	public $dzialanie;
	public $errorInputData = false;
	public $formulka;
	
	public function __construct($liczba1POST, $liczba2POST, $dzialaniePOST) {
	$this->wskaznik1 = is_numeric($liczba1POST);
	$this->wskaznik2 = is_numeric($liczba2POST);

	$this->num1 = $liczba1POST;
	$this->num2 = $liczba2POST;

	if(is_numeric($liczba1POST)== false){
			$this->errorInputData = true;
		//	$this->eid = $errorInputData;
		} 
	if(is_numeric($liczba2POST)== false){
			$this->errorInputData = true;		
		//	$this->eid = $errorInputData;
		} 
	$this->dzialanie = $dzialaniePOST;
	}

	public function odpowiedz($pierwszaLiczba, $drugaLiczba, $dzialanieNaLiczbach, $errorInput){
	
		if($errorInput == true){
			$this->formulka = '<h1>Jedna z podanych wartosci nie jest liczbą.</br> Wartosc 1: '
			.$pierwszaLiczba.' Wartosc 2: '.$drugaLiczba.'</h1>';
			$this->errorInputData = true;
		} else {
			$this->formulka = '<h1>Wynik działania '.$pierwszaLiczba.' '.$dzialanieNaLiczbach.' '.$drugaLiczba.' to :'; 
		}
		return $this->formulka;
	}

	public function oblicz() {
		$wynikDzialania;
		switch ($this->dzialanie) {
			case '+' :
				
				$wynikDzialania =  $this->odpowiedz($this->num1, $this->num2, $this->dzialanie, $this->errorInputData);
				if($this->wskaznik1 && $this->wskaznik2){
					$wynikDzialania .= $this->num1 + $this->num2;
				}
				return $wynikDzialania;
				break;
			case '-' :
				$wynikDzialania =  $this->odpowiedz($this->num1, $this->num2, $this->dzialanie, $this->errorInputData);
				if($this->wskaznik1 && $this->wskaznik2){
					$wynikDzialania .= $this->num1 - $this->num2;
				}
				return $wynikDzialania;
				break;
			case '*' :
				$wynikDzialania =  $this->odpowiedz($this->num1, $this->num2, $this->dzialanie, $this->errorInputData);
				if($this->wskaznik1 && $this->wskaznik2){
					$wynikDzialania .= $this->num1 * $this->num2;
				}
				return $wynikDzialania;
				break;
			case '/' :
				$wynikDzialania =  $this->odpowiedz($this->num1, $this->num2, $this->dzialanie, $this->errorInputData);
				if($this->wskaznik1 && $this->wskaznik2){
					$wynikDzialania .= $this->num1 / $this->num2;
				}
				return $wynikDzialania;
				break;
			default :
				echo '<h1>Podaj dwie liczby i naciśnij przycisk OBLICZ</h1>';
				break;
		}
	}

	
}