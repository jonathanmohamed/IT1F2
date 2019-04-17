<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UFS-8"/>
        <link href="../css/style.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="../css/meins.css"/>
        <style>
            <?php
            if (isset($_POST['submit'])) {
                $language = $_POST['language'];
            } else {
                $language = "en";
            }
            ?>
            .nl
            {
                <?php
                if ($language == "en") {
                    echo'display:none;'
                    . 'visibility: hidden;';
                }
                ?>
            }   
            .en
            {
                <?php
                if ($language == "nl") {
                    echo'display:none;'
                    . 'visibility: hidden;';
                }
                ?>
            }  
        </style>
        <title>Upcoming Events</title>
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
            
            <div class="header">
                <div class="logo">
                    <a href="index.php"><img src="../images/logo.jpg" alt="Logo" class="logo-img"/></a>
                </div>
                <div class="buttonlist1 en">
                    <a href="news.html" class="button"><h3 class="en">News</h3></a>
                    <a href="studStory.php" class="button"><h3 class="en">Student Stories</h3></a>
                    <a href="contact.php" class="button"><h3 class="en">Contact</h3></a>
                    <div class="button">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                            <select name="language">
                                <option value="en" selected="selected">EN</option>
                                <option value="nl">NL</option>
                            </select>
                            <input type="submit" name="submit" value="submit"/>
                        </form>
                    </div>
                </div>
                <div class="buttonlist1 nl">
                    <a href="news.php" class="button"><h3>Nieuws</h3></a>
                    <a href="studStory.php" class="button"><h3>Belevingen Studenten</h3></a>
                    <a href="contact.php" class="button"><h3>Contact</h3></a>
                    <div class="button">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                            <select name="language">
                                <option value="en">EN</option>
                                <option value="nl" selected="selected">NL</option>
                            </select>
                            <input type="submit" name="submit" value="submit"/>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div style="clear:both"></div>
            <div class="titel">
                <h1 class="en"><?php echo($titleEn);?></h1>
                <h1 class="nl"><?php echo($titleNl);?></h1>
            </div>

                <div class="bilde">
                    <img class="kleine" src="../images/openday.jpg" alt="Picture upcoming event"/>
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
            
            <div class="footer">
                <div class="footerleft1"> 
                    <div class="footerimg1">
                        <a class="footerimg" href="https://twitter.com"><img src="../images/tweet.png" alt="twitter"/></a>
                    </div>
                    <div class="footerimg1">
                        <a class="footerimg" href="https://facebook.com"><img src="../images/facebook.png" alt="facebook"/></a>
                    </div>
                    <div class="footerimg1">
                        <a class="footerimg" href="https://youtube.com"><img src="../images/youtube.png" alt="youtube"/></a>
                    </div>
                    <div class="footerimg4">
                        <a class="footerimg" href="https://instagram.com"><img src="../images/instagram.png" alt="instagram"/></a>
                    </div>												      
                </div>		
                <div class="footerright"> 
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.acbsp.org/"><img src="../images/acbsp.png" alt="acbsp"/></a>
                    </div>
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.accaglobal.com"><img src="../images/acca.png" alt="acca"/></a>
                    </div>
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.nvao.net"><img src="../images/nvao.png" alt="nvao"/></a>
                    </div>
                </div>
                <div class="footerleft2 en"> 
                    <p><a href="../jobs.php">&nbsp;&nbsp;Jobs&nbsp;&nbsp;</a>
                        <a href="../legal.php">&nbsp;Legal Notices&nbsp;&nbsp;</a>
                        <a href="../privacy.php">&nbsp;&nbsp;Privacy Notices</a></p>
                </div>
                <div class="footerleft2 nl"> 
                    <p><a href="../jobs.php">&nbsp;&nbsp;Banen&nbsp;&nbsp;</a>
                        <a href="../legal.php">&nbsp;Wettelijke mededelingen&nbsp;&nbsp;</a>
                        <a href="../privacy.php">&nbsp;&nbsp;Privacykennisgevingen</a></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>   
    </body>
</html>