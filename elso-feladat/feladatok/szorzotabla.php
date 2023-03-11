<?php

    //  echo phpinfo();

    //  10X10-es szorzótábla

    function szorzotabla($a, $b){
        $szorzotable = '<table><tr>
        <th>a</th>
        <th>b</th>
        <th>a x b</th>
        </tr>';

        for ($i=0; $i <= $a; $i++) { 
            for($j = 0 ; $j <=$b; $j++){
                $szorzotable .= '<tr><td>'.$i.'</td><td>'.$j.'</td><td>'. $i * $j .'</td>';
            }
        }

        $szorzotable .= '</table>';
        echo $szorzotable;
    }

   
?>
