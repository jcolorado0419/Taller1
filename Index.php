<?php
   
   echo("Ejercicio Elaborado por Julián Andrés Colorado Castañeda <br>");
   echo"<br> Ejercicio 1 <br>";

   //Ejercicio 1
   $numero1=10; 
   $numero2=50;

   $suma=$numero1+$numero2;
   $resta=$numero1-$numero2;
   $multiplicacion=$numero1*$numero2;
   $division=$numero1/$numero2;

   echo("<br>La suma de:".$numero1."+".$numero2."=".$suma);
   echo("<br>La resta de:".$numero1."-".$numero2."=".$resta);
   echo("<br>La multiplicacion de:".$numero1."*".$numero2."=".$multiplicacion);
   echo("<br>La division de:".$numero1."/".$numero2."=".$division);

   //Ejercicio 2

   echo "<br> Ejercicio 2 <br>";

   $peso=60;
   $estatura=1.68;
   $imc=$peso/($estatura*$estatura);
   echo "<br>Señor usuario su estatura es de: ".$estatura." y su peso es de: ".$peso."Kg";
   echo"<br>Su indice de masa corporal es de: ".$imc." por lo tanto usted tiene ";

if ($imc<=18.4 && $imc>0)
{
    echo " Insuficiencia de peso "; 
}
   elseif ($imc>=18.5 && $imc<=24.9)
{
    echo "peso normal ";
}
   elseif ($imc>=25 && $imc<=29.9)
{
    echo "sobrepeso ";
}
   elseif ($imc>=30 && $imc<=34.9)
{
    echo "Obesidad 1 ";
}
   elseif ($imc>=35 && $imc<=39.9)
{
    echo "Obesidad 2 ";
}
   else
{
    echo " <br> Obesidad 3 ";
}


/*punto tres, descuento por cantidadde pares comprados*/
echo "<br><br>Ejercicio 3 <br>";

$cantidadZapatosVendidos=5;
$valorporPar=150000;
$totalVenta=$cantidadZapatosVendidos*$valorporPar;
$descuento1=0.20;
/*$descuento2=0.20;
$descuento3=0.40;*/

echo "Cantidad vendida: ".$cantidadZapatosVendidos;
echo "<br>Costo Neto: ".$totalVenta;


if($cantidadZapatosVendidos<=3){
    $totalVenta*0.10==$descuento1;
    echo "<br>Descuento: 10%";
}elseif($cantidadZapatosVendidos>3||$cantidadZapatosVendidos<=5){
    $totalVenta*0.20==$descuento1;
    echo "<br>Descuento: 20%";
}elseif($cantidadZapatosVendidos>5){
    $totalVenta*0.40==$descuento1;
    echo "<br>Descuento: 40%";
}

$valorDescuento=$totalVenta*$descuento1;
$valorTotalPagar=$totalVenta-$valorDescuento;

echo "<br>Valor del descuento: ".$valorDescuento;
echo "<br>Valor total a pagar: ".$valorTotalPagar;

?>