<?php
namespace App\Library;
require_once(dirname(__FILE__) .  '/amphtml/vendor/autoload.php');
use magyarandras\AMPConverter\Converter;

class AmpHtml {
    public function generateHtml($str) {
        $converter = new Converter();
        $converter->loadDefaultConverters();
        $amphtml = $converter->convert($str);
        $amp_scripts = $converter->getScripts();
        $res = [
            "scripts"   => $amp_scripts,
            "html"      => $amphtml
        ];
        return $res;
    }
}