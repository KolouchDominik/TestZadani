<?php
        $json = file_get_contents("https://www.digilabs.cz/hiring/data.json");
        $data = json_decode($json, true);
        function Datum($arr)
        {
            $sep = ['T','+'];
            for($i = 0; $i < count($arr); $i++)
            {
                $date = $arr[$i]['createdAt'];
                $created = explode(" ",str_replace($sep," ",$date));
                $createdDate = $created[0]." ".$created[1];
                
                $maxDate = date('Y-m-d h:i:s', strtotime('+1 months'));
                $minDate = date('Y-m-d h:i:s', strtotime('-1 months'));

                
                if($createdDate>$minDate&&$createdDate<$maxDate) echo $createdDate."<br>\n";
            }
        }
        Datum($data);
    ?>
    