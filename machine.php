<?php


$list_money_expensable = array();
$list_money_expensable = [100,50,20,10];



function validateIsMoney($cantidad){
    if($cantidad != (integer)$cantidad || $cantidad < 0){
      return false;
    }
    else{
      return true;
    }

}

function validateRequestMoney($cantidad) {
  global $list_money_expensable;
  if(validateIsMoney($cantidad)){
     if($cantidad==NULL || trim($cantidad)==''){
       echo "Resultado: [Empty Set]";
     }

    $min_value_place = count($list_money_expensable)-1;
    $quant_minum = $list_money_expensable[$min_value_place];



    if($cantidad % $quant_minum){
      echo "Resultado: throw NoteUnavailableException";
    }else{
      return(requestBilletes($cantidad));
    }



  }else {
    echo "Resultado: throw InvalidArgumentException";
  }


}

function nextMonto($nPos, $cantidad){
  global $list_money_expensable;

  $sizeListExpensableMoney = count($list_money_expensable);

  if($nPos < $sizeListExpensableMoney){

    if($list_money_expensable[$nPos] <= $cantidad) {
      return($list_money_expensable[$nPos]);
    }else {
      return(0);
    }

  }

}


function requestBilletes($montoRequerido){
  global $list_money_expensable;
  $list_give_money = array();

  $tmpMontoRequerido = $montoRequerido;


  $positionListMoney = 0;

   do{
     $monto = nextMonto($positionListMoney, $montoRequerido);

     if($monto!= 0){
       $list_give_money[] = $monto . ".00";
     }else{
       $positionListMoney++;
     }
     $montoRequerido = $montoRequerido - $monto;

   }while($montoRequerido > 0);


 return($list_give_money);



}





function retiroCajero($input){
  echo "<br>Entrada: $input<br>";
  $arrayRetiro = validateRequestMoney($input);

  if(count($arrayRetiro)>0){
    echo "Resultado: ";
    $separado_commas = implode(", ",$arrayRetiro);
    //print_r($arrayRetiro);
    echo "[". $separado_commas . "]";
  }
  echo "<br>";

}


//1. input:30
retiroCajero(30);

//2. input:80
retiroCajero(80);

//3. input:125
retiroCajero(125);


//4. input:-130
retiroCajero(-130);

//5. input:NULL
retiroCajero(NULL);

?>
