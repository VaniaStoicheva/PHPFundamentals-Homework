<?php
//$array=explode(" ",fgets(STDIN));
//$lines=fgets(STDIN);
1 2 4 5 6 7
add 1 8
contains 1
contains -3
print



while($lines=="print"){

    $command[1]=explode(" ",trim(fgets(STDIN)));
    if($command[0]=="add"){
        array_splice($array,$command[1],count($command[2]),$command[2]);
    }elseif ($com[0]=="contains"){
        if(isset($array[$com[1]])){
            echo $array[$com[1]];
        }else{
            echo "-1";
        }
    }
    elseif ($com[0]=="print"){
        echo json_encode($array);
    }

}

/*$commands=array($com1,$com2,$com3,$com4);

foreach ($commands as $command){
    foreach ($command as $com){
        if($com[0][0]=="add"){
            array_splice($array,$com[0][1],count($com[0][2]),$com[0][2]);
        }
        elseif ($com[0]=="contains"){
            if(isset($array[$com[1]])){
                echo $array[$com[1]];
            }else{
                echo "-1";
            }
        }
        elseif ($com[0]=="print"){
echo json_encode($array);
        }
    }
}*/