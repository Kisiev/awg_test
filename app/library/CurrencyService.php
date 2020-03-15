<?php

class CurrencyService
{
	private function getRateFromCache($currency)
	{
		$cacheCurrency = new CacheCurrency();
		return $cacheCurrency->getRate($currency);
	}
	private function getRateFromDb($currency)
	{
		$dbCurrency = new DbCurrency();
		return $dbCurrency->getRate($currency);
	}
	private function getRateFromExternal($currency)
	{
		$externalCurrency = new ExternalCurrency();
		return $externalCurrency->getRate($currency);
	}
	public function getCurrencyRate($currency)
	{
		$rate = $this->getRateFromCache($currency);
		if (!empty($rate))
			return $rate;

		$rate = $this->getRateFromDb($currency);
		if (!empty($rate))
			return $rate;

		$rate = $this->getRateFromExternal($currency);
		if (!empty($rate))
			return $rate;

		return false;
	}
}