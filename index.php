<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "fr":
        //echo "PAGE FR";
        header('location:home/fr/index.html');
        break;
    case "en":
        //echo "PAGE EN";
        header('location:home/en/index.html');
        break;        
    default:
        //echo "PAGE EN - Setting Default";
        header('location:home/en/index.html');
        break;
}
?>
