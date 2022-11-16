<?php

spl_autoload_register(function(string $caminhoArquivo){
    $classePath = str_replace('Alura\\Banco\\', '', $caminhoArquivo);
    $classePath = str_replace('\\', DIRECTORY_SEPARATOR, $classePath);
    $classePath .= '.php';

    if(file_exists($classePath)){
        require_once "{$classePath}";
    }

});