<?php



require_once "vendor/autoload.php";

use Luckas\BuscarCep\Search;

$buscar = new Search;

print_r($buscar->getAddressFromZipcode('25020140'));








