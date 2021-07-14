<?php
        include 'JsonLoader.php';
        function Names($arr)
        {
            
            foreach($arr as $key=>$value) 
            {
                $matchpoints = 1;
                $name = $value['name'];
                $names = explode(" ",$name);
                //tenhle for tady musí být
                for($j = 1; $j < count($names);$j++)
                {
                    if(substr($names[($j-1)],0,1)===substr($names[$j],0,1))
                    {
                        $matchpoints++;
                    }
                }
                if($matchpoints === count($names))
                {
                    echo $name.'<br>';
                }
                
            }
        }
        Names($data);
    