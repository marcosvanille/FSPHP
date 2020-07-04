<pre>
<?php

$familia = new stdClass();
$familia->familia = "'{\"parente1\":{\"nome\":\"José\", \"parentesco\": \"Pai\"}, \"parente2\": {\"nome\": \"Maria\", \"parentesco\": \"Mãe\"}}' ";
$items = new stdClass();
$items->id = "1";
$items->nome = "joao";
$items->nascimento = "2016-10-02";
$items->cpf = "123.456.789-10";
$obj = new stdClass();

$obj->items = [$items,$familia];

//$nome = "joao";
$nomeParente ="Jose";
$parentesco = "Pai";
$r = [$nome,$nomeParente,$parentesco];
var_dump($obj);
echo "meu nome e {$items->nome} e {$nomeParente} e meu {$parentesco}";
?>
</pre>


