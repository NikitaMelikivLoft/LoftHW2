<?php
include '../src/function.php';

for ($i = 0; $i < 50; $i++){
    $users[]=createU();
}

file_put_contents('users.json',json_encode($users));

$data=file_get_contents('users.json');
$decode=json_decode($data,true);

$names=[];
$sum=0;
foreach ($decode as $item){
    $sum+=$item['age'];
    if (isset( $names[$item['name']])){
       $names[$item['name']]++;
    }
    else {
        $names[$item['name']]=1;
    }
}
var_dump($names);
echo "</br>Средний возраст равен ".($sum/sizeof($decode));