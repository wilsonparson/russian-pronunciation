<?php
    if( !empty($_POST["textToColorize"]) ) {
        $softConsonants = preg_replace("/([БбВвГгДдЗзКкЛлМмНнПпРрСсТтФфХх])(?=[ЯяЕеИиЁёЮюЬь])/u", "<span class= 'soft'>$1</span>", $_POST["textToColorize"]);
        $exceptionsAlwaysHard = preg_replace("/(?<=[ШшЦцЖж])([ЯяЕеИиЁёЮю])/u", "<span class= 'always-hard'>$1</span>", $softConsonants);
        $exceptionsAlwaysSoft = preg_replace("/(?<=[ЩщЧч])([АаЭэЫыОоУу])/u", "<span class= 'always-soft'>$1</span>", $exceptionsAlwaysHard);
        echo $exceptionsAlwaysSoft;
    }
?>
