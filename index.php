<?php

// while

$papitas = (int) 1;
while($papitas<=10){
         $cadena = (string) <<<FIN
         Papitas en total $papitas <br>
 FIN;
         $papitas++;
         print_r($cadena);
}


// do while     

$vefirificar = (bool) false;

do{
    print_r("Entre do while <br>");
}while($vefirificar);


//array con for y count 

$lista = (array) [];

$lista[0] = (string) "Miguel";
$lista[1] = (string) "Thomas";
$lista[2] = (string) "Marcelo";
$lista[3] = (string) "William";

for ($i=0; $i < count($lista); $i++) { 
    $cadena = (string) <<<IMPRIMIR_LISTA
    Esta en la pocicion $i <br>
IMPRIMIR_LISTA;
print_r($lista[$i]);
    print_r($cadena);
}


//array con foreach

$lista = (array) [];

$lista[0] = (string) "Miguel";
$lista[1] = (string) "Thomas";
$lista[2] = (string) "Marcelo";
$lista[3] = (string) "William";

foreach ($lista as $key => $value) {
    $cadena = (string) <<<IMPRIMIR_LISTA
    En la pocicion $key: esta el valor '$value' <br>
IMPRIMIR_LISTA;
    print_r($cadena);
}

//////////////////////////Revisar////////////////////////

     $lista = (array) [];

 $lista[0] = (string) "Juan";
 $lista[1] = (string) "Thomas";
 $lista["Profesor"] = (string) "Miguel";
 $lista[2] = (int) 20;
 $lista[3] = (string) "William";
 $lista["Estudiante"] = (string) "Claudia";
 $keys_lista = (array) array_keys($lista);
    
     for ($i=0; $i <count($keys_lista); $i++) { 
         if(gettype($keys_lista[$i]) == "integer"){
             $cadena = (string) <<<IMPRIMIR_LISTA
         En la pocicion $keys_lista[$i]: esta el valor '{$lista[$keys_lista[$i]]}' <br>
IMPRIMIR_LISTA;
             print_r($cadena);
         }else{
             $cadena = (string) <<<FIN
         En la pocicion $keys_lista[$i]: esta el valor {$lista[$keys_lista[$i]]} <br>
FIN;
             print_r($cadena);
         }
        
     }

////////////////////////// Revisar /////////////////////
$array = (array) [];
$objetos = new stdClass();
$objetos->baso = (string) "Vidrio";

$array[0] = (string) "Miguel";
$array[1] = (int) 23;
$array[2] = (bool) true;
$array[3] = (double) 1.83;
$array[4] = (array) [(string) "Programar", (int) 24];
$array[5] = function($p1){ return "Hola $p1";};
$array[6] = (object) $objetos;

var_dump($array[5]("Miguel"));    


//array_combine
$keys = (array) ["profesor", "estudiantes"];
$values = (array) ["miguel", "Thomas"];

$lista =  array_combine($keys,$values);
print_r($lista);


?>