<?php

	if($_POST){
		$valor = $_POST['valor'];
		$medida = $_POST['medida'];
		$medida2 = $_POST['medida2'];
	}
	switch ($medida and $medida2) {
		//Longitud
		case ($medida==1 and $medida2==2)://cm->m
			$res=$valor/100;
			echo $res . " metros";
			break;
		case ($medida==1 AND $medida2==3)://cm->y
			$res=$valor/91.44;
			echo $res . " yardas";
			break;
		case ($medida==1 and $medida2==4)://cm->pulg
			$res = $valor/2.54;
			echo $res . " pulgadas";
			break;
		case ($medida==2 and $medida2==1)://m->cm
			$res = $valor * 100;
			echo $res . " centimetros";
			break;
		case ($medida==2 and $medida2==3)://m->y
			$res=$valor*1.094;
			echo $res . " yardas";
			break;
		case ($medida==2 and $medida2==4)://m->pulg
			$res=$valor*39.37;
			echo $res . " pulgadas";
			break;
		case ($medida==3 and $medida2==1)://y->cm
			$res=$valor*91.44;
			echo $res . " centimetros";
			break;
		case ($medida==3 and $medida2==2)://y->m
			$res=$valor/1.094;
			echo $res . " metros";
			break;
		case ($medida==3 and $medida2==4)://y->pulg
			$res=$valor*36;
			echo $res . " pulgadas";
			break;
		case ($medida==4 and $medida==1)://pulg->cm
			$res=$valor*2.54;
			echo $res . " centímetros";
			break;
		case ($medida==4 and $medida2==2)://pulg->m
			$res=$valor/39.37;
			echo $res . " metros";
			break;
		case ($medida==4 and $medida2==3)://pulg->y
			$res=$valor/36;
			echo $res . " yardas";
			break;
		//MASA
		case ($medida==5 and $medida2==6)://gr->kg
			$res=$valor/100;
			echo $res . " kilogramos";
			break;
		case ($medida==5 and $medida2==7)://gr->oz
			$res=$valor/28.35;
			echo $res . " onzas";
			break;
		case ($medida==6 and $medida2==5)://kg->gr
			$res=$valor*100;
			echo $res . " gramos";
			break;
		case ($medida==6 and $medida2==7)://kg->oz
			$res=$valor/35.274;
			echo $res . " onzas";
			break;
		case ($medida==7 and $medida2=5)://oz->gr
			$res=$valor*28.35;
			echo $res . " gramos";
			break;
		case ($medida==7 and $medida2==6)://oz->kg
			$res=$valor*35.274;
			echo $res . " kilogramos";
			break;

		//VOLUMEN
		case ($medida==8 and $medida2==9)://ml->lts
			$res=$valor/1000;
			echo $res . " litros";
			break;
		case ($medida==8 and $medida2==10)://ml->mc
			$res=$valor/1000000;
			echo $res . " metro cúbico";
			break;
		case ($medida==9 and $medida2==8)://lts->ml
			$res=$valor*1000;
			echo $res . " mililitro";
			break;
		case ($medida==9 and $medida2==10)://lts->mc
			$res=$valor/1000;
			echo $res . " metro cúbico";
			break;
		case ($medida==10 and $medida2==8)://mc->ml
			$res=$valor*1000000;
			echo $res . " mililitros";
			break;
		case ($medida==10 and $medida2==9)://mc->lts
			$res=$valor*1000;
			echo $res . " litros";
			break;

		default:
			echo "No se pueden convertir las unidades seleccionadas";
			break;
	}
?>