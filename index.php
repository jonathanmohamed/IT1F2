<!DOCTYPE html>
<html>
    <head>
        <title>Arcadia University of Arts and Technology</title>
        <meta charset="UTF-8">
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
        <link href="css/hpbody.css" type="text/css" rel="stylesheet"/>
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
                    <a href="news.php" class="button"><h3 class="en">News</h3></a>
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

            <div id="slide">
                <div id="apply">
                    <a id="box" href="https://student.sl-cloud.nl/"> <img src="images/apply.png" alt="Apply Now" /></a>
                </div>
            </div>
             <div id="menu" class="en">
                <button class="menu2"><a href="AboutUs.php">About Us</a></button>
                <div class="dropdown">
                    <button class="menu2">Programmes</button>
                    <div class="dropdown-content">
                        <a href="music.php">Music</a>
                        <a href="technology.php">Machenical Engineering</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="menu2">International Students</button>
                    <div class="dropdown-content">
                        <a href="practicalinformation.php">Practical Informations</a>
                        <a href="livingcost.php">Living Cost</a>
                        <a href="whyholland.php">Why Holland?</a>
                    </div>
                </div>
                <button class="menu2"><a href="events/upcomingevents.php">Upcoming Events</a></button>
            </div>

            <div id="menu" class="nl">
                <button class="menu2"><a href="AboutUs.php">Over ons</a></button>
                <div class="dropdown">
                    <button class="menu2">Opleidingen</button>
                    <div class="dropdown-content">
                        <a href="music.php">Muziek</a>
                        <a href="technology.php">Werktuigbouwkunde</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="menu2">Internationale Studenten</button>
                    <div class="dropdown-content">
                        <a href="practicalinformation.php">Handige informatie</a>
                        <a href="livingcost.php">Woonkosten</a>
                        <a href="whyholland.php">Waarom Nederland?</a>
                    </div>
                </div>
                <button class="menu2"><a href="events/upcomingevents.php">Opkomende evenementen</a></button>
            </div>

            <div id ="wrapper" class="en">	
                <div id="middle">
                    <div class="rectangles">
                        <div id="img1">
                            <a href="music.php"><img src ="images/jazz0.jpg" alt ="Students performing with musical instruments"></a>
                        </div>
                        <div id="txt1">
                            <a href="music.php"><h3 class="h3Body">Explore</h3></a>
                            <div class="moveRight">
                                <a href="music.php"> <h2 class="h2Body"> Our music programme </h2> </a>
                            </div>
                        </div>
                        <div id="arrow1">
                            <a href="music.php"><img src="images/arrowSmall.png" alt="two right directional arrows"></a>
                        </div>
                    </div>
                    <hr>
                    <div class="rectangles">
                        <div id="txt2">
                            <a href="technology.php"><h2 class="h2Body">Explore</h2></a>
                            <div class="moveRight">
                                <a href="technology.php"><h3 class="h3Body">Our mechnical engineering</h3></a>
                            </div>

                            <div id="arrow2">
                                <a href="technology.php"><img src="images/arrowSmall.png" alt="two right directional arrows"></a>
                            </div>
                            <div id="txt2i">
                                <a href="technology.php"><h2 class="removeTopSpace h2Body">programme</h2></a>
                            </div>
                        </div>
                        <div id="img2">
                            <a href="technology.php"><img src="images/Lab0.jpg" alt="Students in a Lab"></a>
                        </div>
                    </div>
                    <hr>
                    <div class="rectangles">
                        <div id="img3">
                            <a href="studstory.php"><img src ="images/student0.jpg" alt="Picture of two students"></a>
                        </div>
                        <div id="txt3">
                            <a href="studstory.php"><h2 class="h2Body">Our student's stories</h2></a>
                        </div>

                        <div id="arrow3">
                            <a href="studstory.php"><img src="images/arrowSmall.png" alt="two right directional arrows"></a>
                        </div>
                        <div id="txt3i">
                            <a href="studstory.php"><h3 class="h3Body">Read more</h3></a>
                        </div>

                    </div>
                </div>
            </div>
            <div id="wrapper" class="nl">  
                <div id="middle">
                    <div class="rectangles">
                        <div id="img1">
                            <a href="music.php"><img src ="images/jazz0.jpg" alt ="Students performing with musical instruments"></a>
                        </div>
                        <div id="txt1">
                            <a href="music.php"><h3 class="h3Body">Ontdek</h3></a>
                            <div class="moveRight">
                                <a href="music.php"> <h2 class="h2Body"> Onze muziek opleiding </h2> </a>
                            </div>
                        </div>
                        <div id="arrow1">
                            <a href="music.php"><img src="images/arrowSmall.png" alt="two right directional arrows"></a>
                        </div>
                    </div>
                    <hr>
                    <div class="rectangles">
                        <div id="txt2">
                            <a href="technology.php"><h2 class="h2Body">Ontdek</h2></a>
                            <div class="moveRight">
                                <a href="technology.php"><h3 class="h3Body">Onze werktuigbouwkunde</h3></a>
                            </div>

                            <div id="arrow2">
                                <a href="technology.php"><img src="images/arrowSmall.png" alt="two right directional arrows"></a>
                            </div>
                            <div id="txt2i">
                                <a href="technology.php"><h2 class="removeTopSpace h2Body">opleiding</h2></a>
                            </div>
                        </div>
                        <div id="img2">
                            <a href="technology.php"><img src="images/Lab0.jpg" alt="Students in a Lab"></a>
                        </div>
                    </div>
                    <hr>
                    <div class="rectangles">
                        <div id="img3">
                            <a href="studstory.php"><img src ="images/student0.jpg" alt="Picture of two students"></a>
                        </div>
                        <div id="txt3">
                            <a href="studstory.php"><h2 class="h2Body">Belevingen van studenten </h2></a>
                        </div>

                        <div id="arrow3">
                            <a href="studstory.php"><img src="images/arrowSmall.png" alt="two right directional arrows"></a>
                        </div>
                        <div id="txt3i">
                            <a href="studstory.php"><h3 class="h3Body">Lees meer</h3></a>
                        </div>

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