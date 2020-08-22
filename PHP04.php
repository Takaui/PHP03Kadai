<?php

//問１
function nibai($t){
    
    $kekka = $t * 2;
    return $kekka;
    
}
echo nibai(10);
echo "\n";

//問２
function tasu($a, $b){
    $total = $a + $b;
    return $total;
}
echo tasu(20, 50);
echo "\n";



//問３
/*$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと、
その要素をすべてかけた結果を返す関数を作成してください。*/
$array = [1, 3, 5, 7, 9];
function kakeru($arr){
    $goukei= 1;
    for($i = 0; $i < count($arr); $i++){
        $goukei = $goukei * $arr[$i];
    }
    return $goukei;
}
echo kakeru($array);
echo "\n";


//問４
$array04 = [1, 4, 9, 7];
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
 }
echo max_array($array04);
echo "\n";
 
//問題５
//strip_tags
$text = '<P>こんにちは</p>';
echo strip_tags($text);
echo "\n";

//array_push
$yasai = ["きゅうり","レタス"];
array_push($yasai, "キャベツ","玉ねぎ");
print_r($yasai);
echo "\n";

//array_merge
$array1 =["a","b","c"];
$array2 = ["e","f","g"];
$array3 = array_merge($array1,$array2);
print_r($array3);
echo "\n";

//time, mktime
echo time();
echo "\n";
echo mktime(0,0,0,9,1,2020);
echo "\n";

//date
echo date('Y/m/d',time());
echo "\n";

?>