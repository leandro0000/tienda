<?php 
session_start();

$arreglo= $_SESSION['carrito'];

for ($i=0; $i<count($arreglo); $i++) { 
    if ($arreglo[$i]['id']!= $_POST['id']){

        $arreglo2 []=array (
            'id' =>$arreglo[$i]['id'],
            'nombre' =>$arreglo[$i]['nombre'],
            'precio' =>$arreglo[$i]['precio'],
            'imagen' =>$arreglo[$i]['imagen'],
            'cantidad' =>$arreglo[$i]['cantidad'],
        );

    }
    
}
if(isset($arreglo2)){
    $_SESSION['carrito']=$arreglo2;
}else{
    unset($_SESSION['carrito']);
   
}
echo "listo";



?>