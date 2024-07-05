<?php
//constante para referenciar la ruta general de nuestro sistema
//Las constantes deben ser en mayusculas para diferenciarlas...
if (!defined('RUTAGENERAL')) {
    define('RUTAGENERAL', 'http://localhost/bolsa');
}

//constante para conectarnos a la base de datos.

if (!defined('USUARIO')) {
    define('USUARIO', 'admin');
}

if (!defined('PASSWORD')) {
    define('PASSWORD', 'jose1234');
}

if (!defined('HOST')) {
    define('HOST', 'basedejose.cq6eze3mgpb9.us-east-1.rds.amazonaws.com');
}

if (!defined('NOMBREBD')) {
    define('NOMBREBD', 'trabajo');
}

if (!defined('PORT')) {
    define('PORT', '3306');
}

//Aqui declararemos otras constantes.

?>
