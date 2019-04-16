<?php
    $event1 = file( "event1.txt" );
    $i = 0;
    $content = "";
    $eventCount = count($event1);
    foreach($event1 as $line){
        if($i==0){
            $title = $line;
        }elseif($i==$eventCount-1){
            $date = $line;
        }elseif($i==1||$i==$eventCount-2){
        }else{
            $content .= $line."<br/>";
        }
        $i++;
    }
 
    echo('title is '.$title);
    echo('<br/>content is '.$content);
    echo('<br/>date is '.$date);
?>

