<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';

//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();

$ej= new EjecutivodeCuentas();
$ej->Id=1;
$ej->Descripcion= 'string';
$ej->Usuario= 'Anonimo';

$resp->EjecutivodeCuentas=$ej;






echo json_encode ($resp);