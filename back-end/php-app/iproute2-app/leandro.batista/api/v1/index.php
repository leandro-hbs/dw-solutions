<?php

require 'util.php';

$opcao = $_GET['a'] ?? 'links';

if ($opcao == 'links'){
    $result = shell_exec("ip a");
    $dados = interfaces_encode($result);
}elseif ($opcao == 'link'){
    $interface = $_GET['link'] ?? '';
    $result = shell_exec("ip -s link show $interface");
    $dados = dados_encode($result,$interface);
} else {
    $dados = ["message" => "invalid params"];
}

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
echo json_encode($dados);