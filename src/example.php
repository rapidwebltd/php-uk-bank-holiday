<?
require_once '../vendor/autoload.php';

use RapidWeb\UkBankHolidays\Factories\UkBankHolidayFactory;

$data = UkBankHolidayFactory::getByDate("2017","01","2","france");


var_dump($data);



?>