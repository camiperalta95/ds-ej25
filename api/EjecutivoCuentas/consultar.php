<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';


$resp= new ConsultarRespuesta();

$ej = new EjecutivodeCuentas();


$ej->Descripcion= 'Ejecutivo 1';
$ej->Usuario= 'comercial';


echo json_encode ($resp);