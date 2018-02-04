<?php
class Tartilas_Fee_Model_Fee extends Varien_Object{
	const FEE_AMOUNT = 10;

	public static function getFee(){
		return self::FEE_AMOUNT;
	}
	public static function canApply($address){
		//put your business logic here to check if fee should be applied or not
		//if($address->getAddressType() == 'billing'){
		return true;
		//}
	}
}