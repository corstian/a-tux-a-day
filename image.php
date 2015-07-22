<?php

    $fname = 'check.txt';
    
    $fread = fopen($fname, 'r') or die("Can't open properties file!");
    $date = fgets($fread);
    $item = fgets($fread);
    fclose($fread);
    
    $imageType = ".png";
    
    if (($date) == idate('d'))
    {
        header("Content-type: image/jpg");
        readfile("Tux/(".$item.")".$imageType);
        exit();
        //echo("<img src=\"Tux/(".$item.")".$imageType."\" alt=\"ATuxADay ".$date."\" width=\"500\" />");
    }
    else
    {
        //All images
        $items = 946;
        //startnumber
        $start = 1;
        //Init random
        $random = mt_rand($start, $items);
        
        $fwrite = fopen($fname, 'w');
        fwrite($fwrite, date('d')."\n");
        fwrite($fwrite, $random);
        fclose($fwrite);
        
        header("Content-type: image/jpg");
        readfile("Tux/(".$random.")".$imageType);
        exit();
        
        //echo("<img src=\"Tux/(".$random.")".$imageType."\" alt=\"ATuxADay ".$date."\" width=\"500\" />");
    }
?>
