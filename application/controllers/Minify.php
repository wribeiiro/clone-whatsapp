<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Minify extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }
    

    public function index() {
        require_once APPPATH . '../vendor/autoload.php';

        $folderDist    = dirname(__DIR__, 2) . "\\assets\\dist\\";
        $folderDistCSS = $folderDist . "css";
        $folderDistJS  = $folderDist . "js";

        if (!file_exists($folderDist))    mkdir($folderDist);
        if (!file_exists($folderDistCSS)) mkdir($folderDistCSS);
        if (!file_exists($folderDistJS))  mkdir($folderDistJS);
 
        $arrayCSS  = ["auth", "style"];
        $arrayJS   = ["scripts"];

        $minifyCSS = new \MatthiasMullie\Minify\CSS();
        foreach ($arrayCSS as $css) {
            $minifyCSS->add("{$folderDistCSS}\\{$css}.css");
            $minifyCSS->minify("{$folderDistCSS}\\{$css}.min.css");
        }

        $minifyJS = new \MatthiasMullie\Minify\JS();
        foreach ($arrayJS as $js) {
            $minifyJS->add("$folderDistJS}\\{$js}.js");
            $minifyJS->minify("{$folderDistJS}\\{$js}.min.js");
        }
    }
}