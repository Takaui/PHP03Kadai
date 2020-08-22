<?php

//問題１
$name = "Takada";
if ($name == "Takada"){
    echo "私は" . $name ."です";
}else{
    echo $name. "ではありません。";
}
echo "\n";

//問題２
$total = 0;
for ($i=1; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

//問題３
$fruits = ["リンゴ","ブドウ","ナシ","バナナ","スイカ"];
foreach ($fruits as $fruit){
echo $fruit;
echo "\n";
}

//問４
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>