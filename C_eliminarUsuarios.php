<?php
use Model\M_Usuario;
use Model\Usuario;
require_once 'Model/Usuario.php';
require_once 'Model/M_Usuario.php';

$usuario = $_GET['username'];

$con = new M_Usuario();

$con->eliminarUsuario($usuario);
$con->close();