<?php

if (move_uploaded_file($_FILES['filename']["tmp_name"], "temp/" . $_FILES['filename']["name"])){
    $log = file_get_contents("temp/" . $_FILES['filename']["name"]);
    $arr = explode("\n", $log);
            unset($arr[count($arr)-1]);
    foreach($arr as $key => $value){
        $arr2 = explode("]", $value);
        foreach($arr2 as $key1 => $value1){
            $var1 = $arr2[0] . "<br>";
        }
        foreach($arr2 as $key1 => $value1){
            $var2 = $arr2[1] . "<br>";
        }
        foreach($arr2 as $key1 => $value1){
            $var3 = $arr2[2] . "<br>";
        }
        echo "a. " . "Time " . substr($var1, 1);
        echo "b. " . substr($var2, 2);
        echo "c. " . "Write " . $var3;
    }
}

?>