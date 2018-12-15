<?php
require 'template.php';

$array = array(
	"titulo" => "Titulo da página", "nome" => "John", "idade" => 18
);

$tpl = new Template('template.phtml');
$tpl->render($array);
?>