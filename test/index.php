<?php

$file = fopen("count.txt","r") or die("failed");
if(is_readable("count.txt")){
    $update ="count.txt";
    $plus=(int)file_get_contents($update)+1;
    $count = file_put_contents("count.txt",$plus);

}
echo "瀏覽人數:";
echo fread($file,filesize("count.txt"));


fclose($file);
?>