<?php

class IndexController extends ControllerBase
{
	public function indexAction()
	{
		$currency        = 'RUB';

		$currencyService = new CurrencyService();
		$rate            = $currencyService->getCurrencyRate($currency);

		if (empty($rate))
			return print_r('error: rate not found, try later');

		print_r($rate);
	}
}