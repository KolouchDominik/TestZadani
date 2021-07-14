<?php
        include 'JsonLoader.php';
        function Datum($arr)
        {
            $sep = ['T','+'];
            foreach($arr as $key=>$value) 
            {
                $date = $value['createdAt'];
                $created = explode(' ',str_replace($sep,' ',$date));
                $createdDate = $created[0].' '.$created[1];
                
                $maxDate = date('Y-m-d h:i:s', strtotime('+1 months'));
                $minDate = date('Y-m-d h:i:s', strtotime('-1 months'));

                
                if($createdDate>$minDate&&$createdDate<$maxDate)
                { 
                    echo $createdDate.'<br>';
                }
            }
        }
        Datum($data);
    