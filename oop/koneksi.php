<?php

try {
    $con = new PDO('mysql:host=localhost;dbname=asetfai','root','',array(PDO::ATTR_PERSISTENT=>true));
}

catch (PDOException $e){
    echo $e->getMessage();
}


?>