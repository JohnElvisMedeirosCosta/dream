<?php 
$json = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/");
$json = json_decode($json);

$obj = new StdClass();

$obj->codigo = 111;
$obj->cidade = "São Paulo";
$obj->uf = "SP";
$obj->baixa = 30;
$obj->alta = 45;
$obj->ico = 2;
$obj->frase="Calor dos infernos";
$obj->data = "16/12/2018";
$obj->dia_mes = "Dezembro";
$obj->dia_semana = "Domingo";
$obj->selecionada = 1;

$json->previsao[] = $obj;


echo "Cidades retornadas: ".count($json->previsao)."<br><br>";
foreach($json->previsao as $item) {
	echo "Cidade: ".$item->cidade." - Baixa: ".$item->baixa." - Alta: ".$item->alta." - (".$item->frase.")"."<br>";
}

echo json_encode($json);
	
?>
	