<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CashMachineController extends Controller
{

protected $list_money_expensable = array();



    public function __construct()
    {
        $this->list_money_expensable = [100,50,20,10];

    }









    function validateIsMoney($amount){
        if($amount != (integer)$amount || $amount < 0){
            return false;
        }
        else{
            return true;
        }

    }

    function validateRequestMoney($amount) {

        if($this->validateIsMoney($amount)){
            if($amount==NULL || trim($amount)==''){
                echo "Resultado: [Empty Set]";
            }

            $min_value_place = count($this->list_money_expensable)-1;
            $quant_minum = $this->list_money_expensable[$min_value_place];



            if($amount % $quant_minum){
                echo "Resultado: throw NoteUnavailableException";
            }else{
                return($this->requestBills($amount));
            }



        }else {
            echo "Resultado: throw InvalidArgumentException";
        }


    }

    function nextAmount($nPos, $amount){

        $sizeListExpensableMoney = count($this->list_money_expensable);

        if($nPos < $sizeListExpensableMoney){

            if($this->list_money_expensable[$nPos] <= $amount) {
                return($this->list_money_expensable[$nPos]);
            }else {
                return(0);
            }

        }

    }


    function requestBills($amountRequerido){

        $list_give_money = array();


        $positionListMoney = 0;

        do{
            $amount = $this->nextAmount($positionListMoney, $amountRequerido);

            if($amount!= 0){
                $list_give_money[] = $amount . ".00";
            }else{
                $positionListMoney++;
            }
            $amountRequerido = $amountRequerido - $amount;

        }while($amountRequerido > 0);


        return($list_give_money);



    }





    /**
     * @Route("/withdraw/{amount}")
     */
    function withdrawAction($amount){
        $display =  "<br>Entrada: $amount<br>";
        $arrayWithdraw = $this->validateRequestMoney($amount);

        if(count($arrayWithdraw)>0){
            $display.= "Resultado: ";
            $split_commas = implode(", ",$arrayWithdraw);
            //print_r($arrayRetiro);
            $display.= "[". $split_commas . "]";
        }
        $display.= "<br>";

        return new Response($display);

    }









}