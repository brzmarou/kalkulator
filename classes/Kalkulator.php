<?php

class Kalkulator {
	
	public $num1;
	public $num2;
	public $dzialanie;
	public $errorInputData = 0;
	private $formulka;
	
	public function __construct($liczba1POST, $liczba2POST, $dzialaniePOST) {
	
	if(is_numeric($liczba1POST)){
		$this->num1 = $liczba1POST;
		} else {
			$errorInputData = 1;
			$this->num1 = 0;
		}
	if(is_numeric($liczba2POST)){
			$this->num2 = $liczba2POST;
		} else {
			$errorInputData = 1;
			$this->num2 = 0;
		}
	$this->dzialanie = $dzialaniePOST;
	}

	public function odpowiedz($pierwszaLiczba, $drugaLiczba, $dzialanieNaLiczbach, $errorInput){
	
		if($errorInput > 0){
			$this->formulka = '<h1>Jedna z podanych wartosci nie jest liczbą. Liczba 1: '.$pierwszaLiczba.' Liczba 2: '.$drugaLiczba.'</h1>';
		} else {
			$this->formulka = '<h1>Wynik działania '.$pierwszaLiczba.' '.$dzialanieNaLiczbach.' '.$drugaLiczba.' to :'; 
		}
		return $this->formulka;
	}

	public function oblicz() {
		$wynikDzialania;
		switch ($this->dzialanie) {
			case '+' :
				//echo '<h1>Wynik działania '.$this->num1.' '.$this->dzialanie.' '.$this->num2.' to: ';
				$wynikDzialania =  $this->odpowiedz($this->num1, $this->num2, $this->dzialanie, $this->errorInputData);
				return $wynikDzialania;
				//return $this->num1 + $this->num2;
				break;
			case '-' :
				echo '<h1>Wynik działania '.$this->num1.' '.$this->dzialanie.' '.$this->num2.' to: ';
				return  $this->num1 - $this->num2;
				break;
			case '*' :
				echo '<h1>Wynik działania '.$this->num1.' '.$this->dzialanie.' '.$this->num2.' to: ';
				return  $this->num1 * $this->num2;
				break;
			case '/' :
				echo '<h1>Wynik działania '.$this->num1.' '.$this->dzialanie.' '.$this->num2.' to: ';
				return  $this->num1 / $this->num2;
				break;
			default :
				echo '<h1>Podaj dwie liczby i naciśnij przycisk OBLICZ</h1>';
				break;
		}
	}

	
}