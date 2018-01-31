

<?php 

 $numero1 = $_GET['valor1']; 
 $numero2 = $_GET['valor2'];
 $operacion = $_GET['operacion'];


  switch ($operacion) {
    case 'sumar':
      echo "La Suma es: " . sumar($numero1,$numero2,$operacion);

      break;

    case 'restar':
     echo "La Resta es: " .  restar($numero1,$numero2,$operacion);
      break;

    case 'multiplicar':
      echo "La Multiplicacion es: " . producto($numero1,$numero2,$operacion);
      break;

    case 'dividir':
      echo "La Division es: " .  cociente($numero1,$numero2,$operacion);
      break;
    default:
      echo "no se ah podido realizar ninguna operacion....";
      break;
  }




 function sumar ($numero1,$numero2,$operacion){

      $suma = $numero1 + $numero2;

      return $suma;

 }


 function restar ($numero1,$numero2,$operacion){

      $resta = $numero1 - $numero2;

      return $resta;

 }

 function producto ($numero1,$numero2,$operacion){

      $producto = $numero1 * $numero2;

      return $producto;

 }

 function cociente ($numero1,$numero2,$operacion){

      $cociente = $numero1 / $numero2;

      return $cociente;

 }
 
/*function Operacion ($num1,$num2,$oper){

 if($oper =='sumar'){

    $suma = $num1 + $num2;

    echo "La suma es: " . $suma;

 }else if ($oper=='restar'){

  $resta= $num1 -$num2;

  echo "La resta es: " . $resta;

 }else if($oper=='multiplicar'){

    $producto=$num1*$num2;
    echo "La Multiplicacion es:  " . $producto;

 } else if($oper=='dividir'){
    $cociente=$num1/$num2;
    echo "La Division es: " . $cociente;
 } else if($oper=='potencia'){

     for($i=1;$i<=$num2;$i++){

         $potencia=$num1*$num1;

     }

     echo "La potencia es: ". $potencia;


 }


}


Operacion($numero1,$numero2,$operacion);

*/





//https://www.youtube.com/watch?v=lzTZDjwH1Gs&list=PLF02659CF8418C229&index=17

 ?>

 