<?php

$clientes = array();

$dados1 = [
    'id' => 1, 'cpf'=>'123', 'endereco'=>'asdf', 'email'=>'asd@adf.com', 'telefone'=>1234, 'nome'=>'Gabriel',
    'sexo'=>'M', 'data_nascimento' => '11/06/1990'
];

$dados2 = [
    'id' => 2, 'cpf'=>'231', 'endereco'=>'zxcv', 'email'=>'zxcv@zxcv.com', 'telefone'=>4312, 'nome'=>'Luis', 'sexo'=>'M',
    'data_nascimento' => '18/06/1990'
];

$dados3 = [
    'id' => 3, 'cpf'=>'356', 'endereco'=>'fgh', 'email'=>'fgh@fgh.com', 'telefone'=>1234, 'nome'=>'Maria', 'sexo'=>'F',
    'data_nascimento' => '14/06/1990'
];

$dados4 = [
    'id' => 4, 'cpf'=>'789', 'endereco'=>'ert', 'email'=>'ert@ert.com', 'telefone'=>5673, 'nome'=>'Ricardo', 'sexo'=>'M',
    'data_nascimento' => '22/06/1990'
];

$dados5 = [
    'id' => 5, 'cpf'=>'098', 'endereco'=>'lkj', 'email'=>'lkj@lkj.com', 'telefone'=>7654, 'nome'=>'Joana', 'sexo'=>'F',
    'data_nascimento' => '30/06/1990'
];

$dados6 = [
    'id' => 6, 'cpf'=>'4556', 'endereco'=>'xcvb', 'email'=>'asdv@asdv.com', 'telefone'=>5432, 'nome'=>'Thais', 'sexo'=>'F',
    'data_nascimento' => '01/06/1990'
];

$dados7 = [
    'id' => 7, 'cpf'=>'875', 'endereco'=>'gfhw', 'email'=>'gfw@gwe.com', 'telefone'=>54423, 'nome'=>'Daniel', 'sexo'=>'M',
    'data_nascimento' => '16/06/1990'
];

$dados8 = [
    'id' => 8, 'cpf'=>'7869', 'endereco'=>'asdfq', 'email'=>'sdzxcv@dfq.com', 'telefone'=>6543, 'nome'=>'Rafael', 'sexo'=>'M',
    'data_nascimento' => '15/06/1990'
];

$dados9 = [
    'id' => 9, 'cpf'=>'987', 'endereco'=>'vcre', 'email'=>'qwer@qwer.com', 'telefone'=>8796, 'nome'=>'Caio', 'sexo'=>'M',
    'data_nascimento' => '19/06/1990'
];

$dados10 = [
    'id' => 10, 'cpf'=>'980798', 'endereco'=>'xcvb', 'email'=>'lkju@lkuu.com', 'telefone'=>87631, 'nome'=>'Betania', 'sexo'=>'F',
    'data_nascimento' => '23/06/1990'
];

$cliente1 = new Cliente($dados1);
array_push($clientes, $cliente1);

$cliente2 = new Cliente($dados2);
array_push($clientes, $cliente2);

$cliente3 = new Cliente($dados3);
array_push($clientes, $cliente3);

$cliente4 = new Cliente($dados4);
array_push($clientes, $cliente4);

$cliente5 = new Cliente($dados5);
array_push($clientes, $cliente5);

$cliente6 = new Cliente($dados6);
array_push($clientes, $cliente6);

$cliente7 = new Cliente($dados7);
array_push($clientes, $cliente7);

$cliente8 = new Cliente($dados8);
array_push($clientes, $cliente8);

$cliente9 = new Cliente($dados9);
array_push($clientes, $cliente9);

$cliente10 = new Cliente($dados10);
array_push($clientes, $cliente10);
