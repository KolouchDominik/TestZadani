<?php
        $json = file_get_contents("https://www.digilabs.cz/hiring/data.json");
        $data = json_decode($json, true);
        function Names($arr)
        {
            
            for($i = 0; $i < count($arr); $i++)
            {
                $matchpoints = 1;
                $name = $arr[$i]['name'];
                $names = explode(" ",$name);
                for($j = 1; $j < count($names);$j++)
                {
                    if(substr($names[($j-1)],0,1)==substr($names[$j],0,1))$matchpoints++;
                }
                if($matchpoints == count($names))
                {
                    echo $name."<br>\n";
                }
                
            }
        }
        Names($data);
    ?>
    