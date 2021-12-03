<!DOCTYPE html>
<html>
<head>
    <title>Multi Dimensional Array Testing</title>
</head>
<body>

<?php
for ($i=1; $i <= 15; $i++){ 
    if(($i % 3) == 1){
        for($a=1; $a <= 5; $a++){
        $lantai = array(
        $i => array($a => $a));
        print_r($lantai);}
        echo "<br>";
    }elseif(($i % 3) == 2){
        for($a=6; $a <= 11; $a++){
        $lantai = array(
        $i => array($a => $a));
        print_r($lantai);}
        echo "<br>";
    }elseif(($i % 3) == 0){
        for($a=12; $a <= 18; $a++){
        $lantai = array(
        $i => array($a => $a));
        print_r($lantai);}
        echo "<br>";
    }else{
        echo "error";
    }
}

?>

</body>
</html>