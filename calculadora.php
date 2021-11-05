<?php
#POST
$num1=$_POST["operando1"];
$num2=$_POST["operando2"];
$selector=$_POST["operador"];


function suma($num1,$num2){

    $res= $num1 + $num2;

    print "El resultado es ".$res."<br>";
}


function resta($num1,$num2){

    $res= $num1 - $num2;

    print "El resultado es ".$res."<br>";
}

function multiplicacion($num1,$num2){

     $res= $num1 * $num2;

  print "El resultado es ".$res."<br>";
}

function division($num1,$num2){

    $res= $num1 / $num2;

    print "El resultado es ".$res."<br>";
}


function raizcuadrada($num1){
   
 $res= sqrt($num1);

 print "El resultado es ".$res."<br>";

}
function elevaralcuadrado($num1){
   
    $res=pow($num1,2);
   
    print "El resultado es ".$res."<br>";
   
   }
   function elevaralcubo($num1){
   
    $res=pow($num1,3);
   
    print "El resultado es ".$res."<br>";
   
   }
   function elevar($num1,$num2){
   
    $res=pow($num1,$num2);
   
    print "El resultado es ".$res."<br>";
   
   }

    switch ($selector) {
        case 'suma':
            suma($num1,$num2);
           break;
                case 'resta':
                resta($num1,$num2);   
            break;
                    case 'multiplicacion':
                multiplicacion($num1,$num2);
            break;
                    case 'division':
                division($num1,$num2);
                        break;                
                    case 'raiz cuadrada':
                        raizcuadrada($num1);
                    break;        
                    case elevaralcuadrado($num1);
                    break;
                        case 'elevar':
                            elevar($num1,$num2);
                            break;
   
                            default:
                            echo "no hay resultado bro";
                            break;
                }









   function fivo($fin){
    $var1=0;
    $var2=1;
    $var3=0;    
    $ini=0;


     while ($ini <= $fin) {

        
#paso1
$var3=$var1+$var2;
#paso2
$var1=$var2;
$var2=$var3;
#paso 3
        $ini++;
        echo $var3."<br>";
         
     }
      
   }





?>



</body>
</html>