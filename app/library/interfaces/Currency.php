<?php

interface Currency
{
	public function getRate(String $currency) : String;
}