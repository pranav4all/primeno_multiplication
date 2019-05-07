<?php
function primeNo($no){
     if($no==1)
        return false;
    for($i=2;$i<= ($no/2);$i++){
        if (($no%$i)==0){  
            return false;
        }
    }
    return true;
}

function matrixmult($m1,$m2){
	$m3=array();
	for ($i=0;$i< count($m1);$i++){
        echo $m1[$i]."  |";
		for($j=0;$j<count($m2);$j++){
            echo $m1[$i]*$m2[$j]."  |";
        }
        echo "\n";
	}
}
$arr=array();
for($a=1;$a<=200;$a++){
    if(count($arr)==$argv[2])
        break;
    if(primeNo($a)){
        $arr[]=$a;
    }
}
 echo "  |";
 foreach ($arr as $ar){
     echo "    ".$ar;
 }
 echo "\n";
 for($a=0;$a<=60;$a++)
    echo "-";
    echo "\n";
 print_r(matrixmult($arr,$arr));
