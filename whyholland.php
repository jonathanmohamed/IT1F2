<!DOCTYPE html>
<html>
    <head>
        <title>Studying in Holland</title>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <link href="css/meins.css" type="text/css" rel="stylesheet"/>
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
            <div style="clear:both"></div>
            <div class="bilde">
                <img class="kleine" src="images/holland.jpg" alt="holland.gif">
            </div>

            <div class="detaile en">
                <p><b>We’ll give you 5 good reasons!</b></p><br>
                <p>1. Wide range of English programmes<br>
                    Dutch universities offer the largest number of English-taught programmes in continental Europe.<br>
                    More than 2,100 programmes are taught entirely in English. Also, 95% of the Dutch speak English,<br>
                    so it’s easy to communicate in daily life.</p>
                <p>2. Good value for your money<br>
                    The quality of Dutch institutions is well-recognized. The tuition fees and cost of living are<br>
                    considerably lower than in English-speaking countries. The Dutch teaching style is interactive and<br>
                    student-centered. You will develop valuable skills such as analyzing, solving practical problems and creative thinking.</p>
                <p>3. Big international community<br>
                    Holland’s many international students come from more than 160 different countries. Dutch society is diverse<br>
                    and inclusive. It is strongly connected to other cultures, the business community and the world.<br>
                    The Dutch are open-minded and direct, so it is easy to meet them and exchange ideas.</p>
                <p>4. Great place to live<br>
                    Holland is one of the safest countries in the world, according to the 2018 Global Peace index and belongs <br>
                    to the top 10 happiest countries in the world. Read more about the good Dutch standard of living in the OECD’s Better Life Index.<br>
                    Holland has a rich history with historic cities and the highest museum density in the world.<br>
                    Also, Holland is the gateway to Europe! In just three hours you can be in Paris. London and Berlin are just a five or six hour train ride away.</p>
                <p>5. Excellent career opportunities<br>
                    Holland is the 18th largest economy in the world. Some of the world’s biggest multinationals, including Philips, Heineken, KLM,<br>
                    Shell, ING and Unilever, are Dutch. Holland is a world leader in many areas of expertise, including agriculture, water management, art<br> 
                    & design, logistics and sustainable energy.</p>
                <p>The Dutch government wants to attract knowledge and retain talent. International graduates can therefore apply for an orientation year. <br>
                    This is a residence permit of one year to find a job, or start a business within three years of graduation.</p>
            </div>
            <div class="detaile nl">
                <p><b>Wij geven je 5 goede redenen!</b></p><br>
                <p>1. Een brede keuze van Engelse programma's<br>
                    Nederlandse universiteiten hebben de grootste hoeveelheid in Engels gegeven programma's in continentaal Europa.
                    Meer dan 2,100 programma's zijn volledig gegeven in Engels. Ook spreekt 95% van de Nederlanders Engels, dus is 
                    het makkelijk te communiceren in het dagelijks leven.</p>
                <p>2. Goed waard voor je geld<br>
                    De kwaliteit van Nederlands onderwijs is goed herkend. De studiekosten en levenskosten zijn vergeleken met 
                    Engels sprekende landen een stuk lager. De Nederlandse manier van les geven is interactief en student 
                    georiënteerd. Je zult belangrijke vaardigheden leren zoals analyseren, praktische problemen oplossen en creatief denken..</p>
                <p>3. Een grote internationale gemeenschap<br>
                    Nederland zijn vele internationale studenten komen van meer dan 160 verschillende landen. De Nederlandse samenleving is divers
                    inclusief. Het is sterk gekoppeld aan andere culturen, het bedrijfsleven en de wereld. Nederlanders zijn open van geest en direct,
                    dus het is makkelijk ze te ontmoeten en ideeën uit te wisselen.
                </p>
                <p>4. Een goede plek om te wonen<br>
                    Nederland is één van de veiligste landen ter wereld, volgens het 2018 Global Peace Index en behoord tot de top 10 
                    gelukkigste landen ter wereld. Lees meer over de goede Nederlandse norm van leven in de OECD's Better Life Index.
                    Nederland heeft een rijke geschiedenis met historische steden en het hoogste museum dichtheid ter wereld. Ook is 
                    Nederland de poort naar Europa! In maar drie uur kun je in Parijs. Londen en Berlijn zijn maar vijf of zes uur met de trein van je vandaan.
                </p>
                <p>5. Geweldige carrière mogelijkheden<br>
                    Nederland is de 18de grootste economie in de wereld. Sommige van de wereld's grootste multinationals, zoals Philips, Heineken, KLM, 
                    Shell, ING en Unilever zijn Nederlands. Nederland is een wereld leider in veel vakvelden, zoals landbouw, water management, kunst, ontwerpen, 
                    logistiek en duurzame energie.
                </p>
                <p>
                    De Nederlandse overheid wil kennis aantrekken en talent behouden. Internationale afgestudeerden kunnen daarom aanmelden voor een orientatie jaar.
                    Dit is een verblijfsvergunning van één jaar om een baan te vinden, een bedrijf te starten binnen drie jaar vanaf afstuderen. 
                </p>
            </div>
            <div style="clear:both"></div>
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