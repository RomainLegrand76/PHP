<?php
function callPage(){
    if(isset($_GET["page"]) && $_GET["page"] != ""){
        $page = $_GET["page"];
    }
    else{
        $page= "home";
    }
     $page = "./include/" . $page . ".inc.php";
    
    $incFiles  = glob('./include/*.inc.php');
    
    if(in_array($page,$incFiles)){
        include $page;
    }
    else{
        include "./include/home.inc.php";
    
    }
}
?>