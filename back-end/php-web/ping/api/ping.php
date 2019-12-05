<?php
  $qtd = $_GET['qtd'] ?? '';
  $ip = $_GET['ip'] ?? '';
  $result = [];
  $result['response'] = shell_exec("ping -c $qtd $ip");
  header("Content-type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  echo json_encode($result);
?>