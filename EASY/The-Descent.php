<?php
/**
 * CODINGAME
 * The Descent
 * By : Robodesign
 **/

while (TRUE)
{
    $hMax=0;
    $iMax=0;
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $mH
        );
        
        if($hMax<=$mH){
            $iMax = $i;
            $hMax = $mH;
        }
    }
    echo($iMax."\n");
}
?>
