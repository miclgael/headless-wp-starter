<?
header('Access-Control-Allow-Origin: http://localhost:8001');
header('Content-Type: application/json');
echo json_encode(
  ['greeting' => 'Hello, world!']
);
