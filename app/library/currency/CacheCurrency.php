<?php

class CacheCurrency implements Currency
{
	public function getRate(String $currency) : String
	{
		if (!empty(rand(0, 2)))
			return 'rate from cache';
		else
			return false;
	}
}