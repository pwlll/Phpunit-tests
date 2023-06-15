<?php
class LibCss {
    public function loadLib($name, $type, $version) {
        $file=$name.'.'.$type;
        if($version!='0'){$file.='?v='.$version;}

        if($type=="js") return "<script src='".$file."'></script>";

        return "<link rel='stylesheet' href='".$file."'/>";
    }
}
?>