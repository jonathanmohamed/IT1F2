<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UFS-8"/>
        <link rel="stylesheet" href="meins.css"/>
        <title>upcoming Events</title>
    </head>
    <body>
        <?php
        if(!file_exists("eventEn.txt") || !file_exists("eventNl.txt")){
            echo("<h1>Error: missing text file(s)</h1>");
        }else{
            $eventEn = file( "eventEn.txt" );
            $i = 0;
            $contentEn = "";
            $eventCount = count($eventEn);
            foreach($eventEn as $line){
                if($i==0){
                    $titleEn = $line;
                }elseif($i==$eventCount-1){
                    $dateEn = $line;
                }elseif($i==1||$i==$eventCount-2){
                }else{
                    $contentEn .= $line."<br/>";
                }
                $i++;
            }        
            $eventNl = file( "eventNl.txt" );
            $i = 0;
            $contentNl = "";
            $eventCount = count($eventEn);
            foreach($eventNl as $line){
                if($i==0){
                    $titleNl = $line;
                }elseif($i==$eventCount-1){
                    $dateNl = $line;
                }elseif($i==1||$i==$eventCount-2){
                }else{
                    $contentNl .= $line."<br/>";
                }
                $i++;
            }
        ?>
        <div id="container">
            <div style="clear:both"></div>  
            <div class="titel">
                <h1 class="en"><?php echo($titleEn);?></h1>
                <h1 class="nl"><?php echo($titleNl);?></h1>
            </div>
            <hr/>
            <div class="bilde">
                <img class="kleine" src="images/event.jpg" alt="Picture upcoming event"/>
            </div>
            <div class="detailee en">
                <?php 
                echo("<p>".$contentEn."</p>");
                echo("<p>Date: ".$dateEn."</p>");
                ?>
            </div>
            <div class="detailee nl">
                <?php 
                echo("<p>".$contentNl."</p>");
                echo("<p>Date: ".$dateNl."</p>");
                ?>
            </div>
            <div style="clear:both"></div>
        </div>
        <?php
        }
        ?>   
    </body>
</html>