<!DOCTYPE html>
<html>
    <head>
        <title>Arcadia University of Arts and Technology</title>
        <meta charset="UTF-8">
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

            <div class="about">
                <fieldset>
                    <legend>
                        <h1 class="en">About Arcadia University</h1>
                        <h1 class="nl">Over Arcadia Hogeschool</h1>
                    </legend>
                    <br>
                    <h2 class="en">Arcadia University. Pushing Boundaries.</h2>
                    <h2 class="nl">Arcadia Hogeschool. Grensen Verleggen.</h2>

                    <p class="en"> <b> By pushing boundaries, there is no telling what you might accomplish. That is why we challenge students, staff and partners every day to discover and develop their talents, as part of a journey that transcends the limits of their own professional field and immediate environment.</b> </p>
                    <p class="nl"> <b> Door grenzen te verleggen, is geen lat te hoog. Daarom dagen wij onze studenten, personeel en partners elke dag uit om hun talenten uit verder te ontdekken en ontwikkelen, als deel van de tocht om de grenzen van hun eigen professionele vakgebied en omgeving te verleggen.</b> </p>

                    <p class="en"> Our multi-campus university of arts and science is firmly rooted in the northern part of the Netherlands where we are based, while at the same time maintaining a strong international focus. We are always looking for new ways to successfully integrate education, arts, research and the latest developments in the professional world. Our students, lecturers and researchers work together in small teams on real-life assignments and share their innovative ideas in practice. Our courses incorporate all the latest trends and developments in the relevant sectors and industries, both at a national as well as an international level.

                        The future calls for enterprising and resourceful professionals who know how to translate their knowledge into innovative solutions and who have the vision and courage needed to look beyond their own professional field. 

                        That is the strength of Arcadia University of arts and science: in a rapidly changing world, our people make the impossible possible. 
                    </p>
                    <p class="nl"> 
                        Onze multi-campus hogeschool van kunst en wetenschap is sterk ingeworteld in het noorderlijk deel van Nederland waar we gevestigd zijn, terwijl we gelijkertijd een sterke internationale focus vasthouden. We zijn altijd op zoek naar nieuwe manieren om educatie, kunst, onderzoek en de laattste ontwikkelingen in de professionele wereld te integren in onze programmas. Onze studenten, lectoraten en onderzoekers werken samen in kleine groepen op opdrachten en innovatieve ideeën toe te brengen in de praktijk. Onze opleidingen passen de laatste trends en ontwikkelingen in de hun sectoren en industrieën toe, niet alleen op een nationaal maar ook internationaal niveau.

                        De toekomst eist voor ondernemende en vindingrijke vakmannen wie weten hoe ze hun kennis moeten toepassen in innovatieve oplossing en wie visie en moed hebben om verder te kijken dan hun eigen professionele vakgebied.

                        Dat is de sterkte van Arcadia Hogeschool van kunst en wetenschap: in een snel veranderende wereld, ons personeel maakt het onmogelijke mogelijk.
                    </p>
                </fieldset>
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
                        <a id="footerimg" href="https://www.youtube.com/?gl=NL"><img src="images/youtube.png" alt="youtube"/></a>
                    </div>
                    <div class="footerimg4">
                        <a id="footerimg" href="https://www.instagram.com/arcadiauniversityat/"><img src="images/instagram.png" alt="instagram"/></a>
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

                    <p class="en"><a href="jobs.html">&nbsp;&nbsp;Jobs&nbsp;&nbsp;</a>
                        <a href="legal.html">&nbsp;Legal Notices&nbsp;&nbsp;</a>
                        
                    <p class="nl"><a href="jobs.html">&nbsp;&nbsp;Banen&nbsp;&nbsp;</a>
                        <a href="legal.html">&nbsp;Wettelijke mededelingen&nbsp;&nbsp;</a>
                        

                    
                </div>
            </div>			
        </div>
    </body>
</html>