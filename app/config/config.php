<?php
define("TITLE_BUSINESS", "ASISTENCIA");

// Leemos el archivo .env que esta en el archivo.
$envFile = dirname(__DIR__,2). '/.env';
if(file_exists($envFile)){
    foreach(file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPATY_LINES)as $line){
        
    }
}


// # PHP NO SE PUEDE LEER archivo .ENV
define("DB_HOST", ?? 'local host');
define("DB_PORT", ?? '3306');
define("DB_NAME", ?? '');
define("DB_USER", ?? 'root');
define("DB_PASS", ?? '');