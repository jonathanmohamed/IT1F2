<!DOCTYPE html>
<html>
    <head>
        <title>News</title>
        <meta charset="UTF-8">
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
        <link href="css/stylestory.css" type="text/css" rel="stylesheet"/>
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
            <hr>
            <div id="news">
                <h1>News</h1>

                <div class="news">
                    <div class="article2">
                        <iframe width="100%" height="300" frameborder="0" class="rssdog" src="https://www.rssdog.com/index.php?url=https%3A%2F%2Ffetchrss.com%2Frss%2F5cb5bf138a93f8f8628b45685cb5c6178a93f8892e8b4569.xml&mode=html&showonly=&maxitems=1&showdescs=1&desctrim=0&descmax=0&tabwidth=100%25&utf8=1&linktarget=_blank&textsize=inherit&bordercol=%23d4d0c8&headbgcol=%23999999&headtxtcol=%23ffffff&titlebgcol=%23f1eded&titletxtcol=%23000000&itembgcol=%23ffffff&itemtxtcol=%23000000&ctl=0"></iframe>
                    </div>
                    <hr>
                    <div class="article">
                        <div class="newspic">
                            <img src="images/students.png" alt="students">
                        </div>
                        <div class="newstext">
                            <h3 class="en">Students on Stage “This innovation produces fuel savings of more than 10% for the shipping industry”</h3>
                            <h3 class="nl">Students op Stage “Deze innovatie levert de scheepvaart een brandstofbesparing van ruim 10% op”</h3>
                            <br>
                            <br>
                            <br>
                            <a href="#"><img src="images/info.png" alt="More Info"></a>
                        </div>
                    </div>
                    <hr>
                    <div class="article">
                        <div class="newspic">
                            <img src="images/openday.png" alt="Open Day">
                        </div>
                        <div class="newstext">
                            <h3 class="en">Arcadia University welcomes record number of visitors during Open Day!</h3>
                            <h3 class="nl">Arcadia Hogeschool verwelkomt een record aantal bezoekers tijdens de open dag!</h3>
                            <br>
                            <br>
                            <br>
                            <br>
                            <a href="#"><img src="images/info.png" alt="More Info"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footerleft1"> 
                    <div class="footerimg1">
                        <a id="footerimg" href="https://twitter.com/Arcadia70151932"><img src="images/tweet.png" alt="twitter"/></a>
                    </div>
                    <div class="footerimg1">
                        <a id="footerimg" href="https://www.facebook.com/ArcadiaUniversityAT/"><img src="images/facebook.png" alt="facebook"/></a>
                    </div>
                    <div class="footerimg1">
                        <a id="footerimg" href="https://youtube.com"><img src="images/youtube.png" alt="youtube"/></a>
                    </div>
                    <div class="footerimg4">
                        <a id="footerimg" href="https://instagram.com"><img src="images/instagram.png" alt="instagram"/></a>
                    </div>												      
                </div>		
                <div class="footerright"> 
                    <div class="footerimg2">
                        <a id="footerimg" href="https://www.acbsp.org/"><img src="images/acbsp.png" alt="acbsp"/></a>
                    </div>
                    <div class="footerimg2">
                        <a id="footerimg" href="https://www.accaglobal.com"><img src="images/acca.png" alt="acca"/></a>
                    </div>
                    <div class="footerimg2">
                        <a id="footerimg" href="https://www.nvao.net"><img src="images/nvao.png" alt="nvao"/></a>
                    </div>
                </div>
                <div class="footerleft2"> 
                    <p class="en"><a href="jobs.php">&nbsp;&nbsp;Jobs&nbsp;&nbsp;</a>
                        <a href="legal.php">&nbsp;Legal Notices&nbsp;&nbsp;</a>
                        <a href="privacy.php">&nbsp;&nbsp;Privacy Notices</a></p>
                    <p class="nl"><a href="jobs.php">&nbsp;&nbsp;Banen&nbsp;&nbsp;</a>
                        <a href="legal.php">&nbsp;Wettelijke mededelingen&nbsp;&nbsp;</a>
                        <a href="privacy.php">&nbsp;&nbsp;Privacy mededelingen&nbsp</a></p>
                </div>
            </div>			
        </div>
    </body>
</html>