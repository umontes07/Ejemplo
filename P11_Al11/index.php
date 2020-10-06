<?php
include("Controllers/CalculadoraController.php");
$calculadora = new CalculadoraController();
$calculadora->cacharParametros();
$calculadora->ejecutaOperacion();

//obtener la entrada y la accion
//Ejecutar la operación
//Imprimir los resultados

?>
<form>
<label><?php echo $calculadora->pantalla ?></label>
<input type="hidden" name="pantalla" value="<?php echo $calculadora->pantalla ?>">=
<label> <?php echo $calculadora->resultado ?></label>
<input type="hidden" name="resultado" value="<?php echo $calculadora->resultado ?>"><br><br>

<input type="number" name="entrada">
<button name="accion" value="suma">+<button>
<button name="accion" value="resta">-<button>
<button name="accion" value="multiplica">*<button>
<button name="accion" value="divide">/<button>
</form>