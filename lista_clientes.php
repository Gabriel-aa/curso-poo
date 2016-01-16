<?php

use CPOO\Cliente\Type\ClienteFisicoType;
use CPOO\Cliente\Type\ClienteJuridicoType;

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$clientes = array();


$cliente = new ClienteFisicoType();
$cliente->setCpf('123')
        ->setId(1)
        ->setEndereco('asdf')
        ->setEmail('asd@adf.com')
        ->setDataNascimento('11/06/1990')
        ->setSexo('M')
        ->setNome('Gabriel')
        ->setTelefone(341234)
        ->setImportancia(1)
        ->setEnderecoCobranca('qweipzl')
;

array_push($clientes, $cliente);

$cliente = new ClienteJuridicoType();
$cliente->setCnpj('231')
        ->setId('2')
        ->setEndereco('zxcv')
        ->setEmail('zxcv@zxcv.com')
        ->setDataNascimento('12/06/1990')
        ->setSexo('M')
        ->setNome('Daniel')
        ->setTelefone(58978575)
        ->setImportancia(2)
;

array_push($clientes, $cliente);

$cliente = new ClienteJuridicoType();
$cliente->setCnpj('321')
        ->setId('3')
        ->setEndereco('qwer')
        ->setEmail('qwer@qwer.com')
        ->setDataNascimento('13/06/1990')
        ->setSexo('M')
        ->setNome('Raphael')
        ->setTelefone(3412567)
        ->setImportancia(3)
;

array_push($clientes, $cliente);

$cliente = new ClienteFisicoType();
$cliente->setCpf('456')
        ->setId('4')
        ->setEndereco('dgh')
        ->setEmail('dfh@dfgh.com')
        ->setDataNascimento('14/06/1990')
        ->setSexo('F')
        ->setNome('Thais')
        ->setTelefone(324145189)
        ->setImportancia(4)
;

array_push($clientes, $cliente);


$cliente = new ClienteFisicoType();
$cliente->setCpf('654')
        ->setId('5')
        ->setEndereco('cvbn')
        ->setEmail('cv@cv.com')
        ->setDataNascimento('15/06/1990')
        ->setSexo('F')
        ->setNome('Maria')
        ->setTelefone(109201923)
        ->setImportancia(5)
        ->setEnderecoCobranca('zxcvqwqe')
;

array_push($clientes, $cliente);

$cliente = new ClienteJuridicoType();
$cliente->setCnpj('678')
        ->setId('6')
        ->setEndereco('hjlk')
        ->setEmail('hjlk@hjlk.com')
        ->setDataNascimento('16/06/1990')
        ->setSexo('F')
        ->setNome('Joana')
        ->setTelefone(120923012)
        ->setImportancia(4)
        ->setEnderecoCobranca('xvcqpwoe')
;

array_push($clientes, $cliente);

$cliente = new ClienteFisicoType();
$cliente->setCpf('876')
        ->setId('7')
        ->setEndereco('poui')
        ->setEmail('poui@poui.com')
        ->setDataNascimento('17/06/1990')
        ->setSexo('M')
        ->setNome('Caio')
        ->setTelefone(921938128)
        ->setImportancia(3)
;

array_push($clientes, $cliente);

$cliente = new ClienteJuridicoType();
$cliente->setCnpj('512')
        ->setId('8')
        ->setEndereco('rtu')
        ->setEmail('ryu@rtyu.com')
        ->setDataNascimento('18/06/1990')
        ->setSexo('F')
        ->setNome('Laura')
        ->setTelefone(12390809)
        ->setImportancia(2)
;

array_push($clientes, $cliente);

$cliente = new ClienteFisicoType();
$cliente->setCpf('821')
        ->setId('9')
        ->setEndereco('ghn')
        ->setEmail('ghn@ghn.com')
        ->setDataNascimento('19/06/1990')
        ->setSexo('M')
        ->setNome('Ricardo')
        ->setTelefone(75487331)
        ->setImportancia(1)
        ->setEnderecoCobranca('poiajsdf')
;

array_push($clientes, $cliente);

$cliente = new ClienteFisicoType();
$cliente->setCpf('1029323')
        ->setId('10')
        ->setEndereco('pqwdsz')
        ->setEmail('dfad@qwpoei.com')
        ->setDataNascimento('20/06/1990')
        ->setSexo('F')
        ->setNome('Betânia')
        ->setTelefone(902832716)
        ->setImportancia(4)
;

array_push($clientes, $cliente);
