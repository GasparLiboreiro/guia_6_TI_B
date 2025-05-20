<?php
/**
 * DEBUG MODE
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Content-Type");

if(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)!="/guias/guia6/backend/server.php"){
    http_response_code(404);
    exit("path invalido");
}
require_once("./routes/studentsRoutes.php");
?>