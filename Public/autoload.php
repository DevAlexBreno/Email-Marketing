<?php
function autoload($classe)
{
    $diretorioBase = __DIR__ . DIRECTORY_SEPARATOR;
    $arquivo = $diretorioBase .'App' . DIRECTORY_SEPARATOR . str_replace('\\' , DIRECTORY_SEPARATOR, $classe) . '.php';
    if(file_exists($arquivo)){
        include $arquivo;
    }
}
spl_autoload_register('autoload');
