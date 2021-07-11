<?php
        $json = file_get_contents("https://www.digilabs.cz/hiring/data.json");
        $data = json_decode($json, true);
        function Memisek($arr)
        {
            $len = count($arr);
            $memIndex = rand(0,$len+1);
            $mem = $arr[$memIndex]["joke"];
            $memAr = explode(" ",$mem);
            $frstHalf="";
            $sncdHalf="";
            for($i = 0; $i < (count($memAr)/2)+1;$i++)
            {
                $frstHalf.=$memAr[$i] . " ";
            }
            for($i = (count($memAr)/2)+1;$i<count($memAr);$i++)
            {
                $sncdHalf.=$memAr[$i] . " ";
            }
            
            echo $frstHalf . "<br>";
            echo "<img src=\"https://www.digilabs.cz/hiring/chuck.jpg\">" . " <br>";
            echo $sncdHalf;
        }
        Memisek($data);
    ?>
    