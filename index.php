<?php
$content = file("comercio.csv");
// var_dump($content);


foreach ($content as $key => $row) {
    

    $arr  = explode(';', $row);

    echo "<ul>";
        foreach($arr as $item) {
            echo  "<li>". $item."</li>";
        }    
    echo "</ul>";

    if($key == 1) {
        exit();
    }


}
