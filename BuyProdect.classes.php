<?php

class BuyProdect extends Visa{
	public function getPayment(){
		return $this-> visaPayment();
	}

}