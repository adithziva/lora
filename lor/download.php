<?php $hit_count = 
@file_get_contents('count.txt'); 
$hit_count++; 
@file_put_contents('count.txt', 
$hit_count); 

header('Location: lorav1.apk'); // redirect to the real file to be downloaded