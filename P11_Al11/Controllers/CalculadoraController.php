<?php
	Class CalculadoraController{
		public $entrada;
		public $accion;
		public $resultado;
		public $pantalla;

		function __construct(){
		$this->entrada=0;
		$this->accion = "";
		$this->resultado=0;
		$this->pantalla="0";
		}

		public function cacharParametros(){
			
		if(isset($_GET["pantalla"])){
		$this->pantalla=$_GET["pantalla"];
		}
		if(isset($_GET["resultado"])){
		$this->resultado=$_GET["resultado"];
		}
		if(isset($_GET["entrada"])){
		$this->entrada=intval($_GET["entrada"]);
		}
		if(isset($_GET["accion"])){
		$this->accion=$_GET["accion"];
		}
	}
	public function ejecutaOperacion(){
		switch($this->accion){
		case "suma": $this->suma(); break;
		case "resta": $this->resta(); break;
		case "multiplica": $this->multiplica; break;
		case "divide": $this->divide(); break; 
		}
	}

	private function suma(){
		$this->pantalla = $this->pantalla ." + ". $this->entrada;
		$this->resultado = $this->resultado + $this->entrada;	
	}
	private function resta(){
		$this->pantalla = $this->pantalla ." - ". $this->entrada;
		$this->resultado = $this->resultado - $this->entrada;	
	}
	private function multiplica(){
		$this->pantalla = $this->pantalla ." * ". $this->entrada;
		$this->resultado = $this->resultado * $this->entrada;
	}
	private function divide(){
		$this->pantalla = $this->pantalla ." / ". $this->entrada;
		$this->resultado = $this->resultado / $this->entrada;
	}
}