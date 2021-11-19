<?php

$file = fopen("./ex/count.txt","r") or die("failed");
if(is_readable("./ex/count.txt")){
    $update = "./ex/count.txt";
    $plus=(int)file_get_contents($update)+1;
    $count = file_put_contents("./ex/count.txt",$plus);

}
echo "瀏覽人數:";
echo fread($file,filesize("./ex/count.txt"));


fclose($file);
?>