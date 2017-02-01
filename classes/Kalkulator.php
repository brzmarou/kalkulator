<?php

class Kalkulator {
	
	public $num1;
	public $num2;
	public $dzialanie;
	
	public function __construct($liczba1POST, $liczba2POST, $dzialaniePOST) {
		
	$this->num1 = $liczba1POST;
	$this->num2 = $liczba2POST;
	$this->dzialanie = $dzialaniePOST;
	}
	
	public function oblicz() {
		switch ($this->dzialanie) {
			case '+' :
				echo 'Wynik działania '.$this->num1.' '.$this->dzialanie.' '.$this->num2.' to: ';
				return $this->num1 + $this->num2;
				break;
			case '-' :
				echo 'Wynik działania '.$this->num1.' '.$this->dzialanie.' '.$this->num2.' to: ';
				return  $this->num1 - $this->num2;
				break;
			case '*' :
				echo 'Wynik działania '.$this->num1.' '.$this->dzialanie.' '.$this->num2.' to: ';
				return  $this->num1 * $this->num2;
				break;
			case '/' :
				echo 'Wynik działania '.$this->num1.' '.$this->dzialanie.' '.$this->num2.' to: ';
				return  $this->num1 / $this->num2;
				break;
			default :
				echo 'Podaj dwie liczby i naciśnij przycisk OBLICZ';
				break;
		}
	}
}