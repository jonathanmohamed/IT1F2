<!DOCTYPE html>
<html>
    <head>
        <title> Students Stories </title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <link href="css/stylestory.css" type="text/css" rel="stylesheet"/>
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
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
    </head>
    <body>
        <div id="container">
            <div class="header">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.jpg" alt="Logo" class="logo-img"/></a>
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
            <div class="stories">
                <div class="story">
                    <h1 class="en"> Student Stories</h1>
                    <h1 class="nl"> Belevingen studenten</h1>
                    <br>
                    <div class="studentpic">
                        <img src="images/boy.jpg" alt="Manu Williams">
                        <br>
                        <br>
                        <h2>Manu Williams</h2>
                        <h5 class="en">Student Mechanical Engineering</h5>
                        <h5 class="nl">Student Machinebouw</h5>
                    </div>
                    <div class="studentstory">
                        <br>
                        <br>
                        <p class="en">It is very interesting studying with different students from all over the world. This gives each one of us the challenge to study hard and also learn a lot from the context of different countries and their cultures. The courses are pretty easy to jump in without any experience. The teachers help the students really well and we can always go to them for help. Overall I have a good experience until now!</p>
                        <p class="nl">Het is erg interessant om met zoveel verschillende studenten van overal over de wereld te studeren!. Dit geeft elk van ons de uitdaging om hard te studeren en veel te leren over de context van verschillende landen en hun culturen. De programma's zijn makkelijk in te stappen zonder ervaring. De leraren helpen de studenten erg good en we kunnen altijd bij hun komen voor hulp. Ik heb in het algemeen een goede ervaring gehad tot nu toe!</p>
                    </div>
                </div>
                <hr>
                <div class="story">
                    <div class="studentpic">
                        <img src="images/girl.jpg" alt="Ella Johnson">
                        <br>
                        <br>
                        <h2>Ella Johnson</h2>
                        <h5 class="en">Student Electronic Music</h5>
                        <h5 class="nl">Student Elektronische Muziek</h5>
                    </div>
                    <div class="studentstory">
                        <p class="en">Arcadia University of Art & Technology is a University where one needs to take charge of your future and build it how you want to. All the resources are available, but one needs to have the drive to achieve their goal. The wide range of majors, available work shops, and being in Emmen are just a few of the resources Arcadia University has to offer. Working with students from all over the world is truly amazing, you’ll get to know a lot about the different countries and cultures. Overall I had a really good experience and I really recommend this program!</p>
                        <p class="nl">Arcadia Hogeschool van Kunst & Technologie is een universiteit waar het initiatief voor je toekomst bij jou ligt en om het te bouwen hoe jij wil. Alle hulpmiddelen zijn beschikbaar, maar je moet de aandrijving hebben om je doel te bereiken. Het wijde bereik van beschikbare workshops en zich bevinden in Emmen zijn maar een paar van de vele hulpmiddelen die Arcadia Hogeschool aanbied. Om te werken met student van overal rond de wereld is geweldig, je leert veel over verschillende landen en culturen. In algemeen heb ik hele goede ervaring gehad en raad ik dit programma erg aan!</p>
                    </div>
                </div>	
            </div>
            <div class="footer">
                <div class="footerleft1"> 
                    <div class="footerimg1">
                        <a class="footerimg" href="https://twitter.com/Arcadia70151932"><img src="images/tweet.png" alt="twitter"/></a>
                    </div>
                    <div class="footerimg1">
                        <a class="footerimg" href="https://www.facebook.com/ArcadiaUniversityAT/"><img src="images/facebook.png" alt="facebook"/></a>
                    </div>
                    <div class="footerimg1">
                        <a class="footerimg" href="https://youtube.com"><img src="images/youtube.png" alt="youtube"/></a>
                    </div>
                    <div class="footerimg4">
                        <a class="footerimg" href="https://instagram.com"><img src="images/instagram.png" alt="instagram"/></a>
                    </div>												      
                </div>		
                <div class="footerright"> 
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.acbsp.org/"><img src="images/acbsp.png" alt="acbsp"/></a>
                    </div>
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.accaglobal.com"><img src="images/acca.png" alt="acca"/></a>
                    </div>
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.nvao.net"><img src="images/nvao.png" alt="nvao"/></a>
                    </div>
                </div>
                <div class="footerleft2 en"> 
                    <p><a href="jobs.php">&nbsp;&nbsp;Jobs&nbsp;&nbsp;</a>
                        <a href="legal.php">&nbsp;Legal Notices&nbsp;&nbsp;</a>
                        <a href="privacy.php">&nbsp;&nbsp;Privacy Notices</a></p>
                </div>
                <div class="footerleft2 nl"> 
                    <p><a href="jobs.php">&nbsp;&nbsp;Banen&nbsp;&nbsp;</a>
                        <a href="legal.php">&nbsp;Wettelijke mededelingen&nbsp;&nbsp;</a>
                        <a href="privacy.php">&nbsp;&nbsp;Privacykennisgevingen</a></p>
                </div>
            </div>
        </div>
    </body>
</html>