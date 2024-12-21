<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$firebase = (new Factory)
    ->withServiceAccount(__DIR__ . '/ruta/credenciales-firebase.json') // Asegúrate de colocar aquí el archivo JSON descargado
    ->createAuth();

$auth = $firebase;

