<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 /**
 * Adiciona headers para requests ajax
 *
 * @param string $data
 * @return void
 */
function response($data) {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Content-Type: application/json');

    echo json_encode($data);
}	

/**
 * Fast debug
 *
 * @param string $var
 * @param boolean $exit
 * @return void
 */
function pre($var, $exit = false) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';

    if($exit) {
        exit;
    }
}

/**
 * Undocumented function
 *
 * @param string $path
 * @param boolean $time
 * @return string
 */
function asset($path, $time = true) {
    $file      = base_url("assets/{$path}");
    $fileOnDir = dirname(__DIR__, 2) . "/assets/{$path}";

    if ($time && file_exists($fileOnDir)) {
        $file .= "?v=" . filemtime($fileOnDir);
    }

    return $file;
}