<?php

class ExternalCurrency implements Currency
{
	public function getRate(String $currency) : String
	{
		if (!empty(rand(0, 2)))
			return 'rate from external';
		else
			return false;
	}
}