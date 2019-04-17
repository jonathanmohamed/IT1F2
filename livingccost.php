<!DOCTYPE html>
<html>
    <head>
        <title>Living Costs</title>
        <meta charset="UTF-8">
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
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
                <div class="buttonlist1">
                    <a href="news.php" class="button"><h3 class="en">News</h3></a>
                    <a href="studStory.php" class="button"><h3 class="en">Student Stories</h3></a>
                    <a href="contact.php" class="button"><h3 class="en">Contact</h3></a>
                    <a href="news.php" class="button"><h3 class="nl">News</h3></a>
                    <a href="studStory.php" class="button"><h3 class="nl">Student Stories</h3></a>
                    <a href="contact.php" class="button"><h3 class="nl">Contact</h3></a>
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
            </div>
            <div style="clear:both"></div>
            <hr/>
            <div class="titel">
                <h1>Living Cost</h1>
            </div>

            <div class="bilde">
                <img class="kleine" src="images/euro.jpg" alt="euro.gif"/>
            </div>

            <div class="detailee en">
                <p>
                    If you’re heading to the Netherlands for school soon, or considering attending university in this small corner of Europe,<br/>
                    you’ve probably asked yourself, How much is it going to cost to live there?. This is a huge question on your mind while <br/>
                    applying to schools, and even after reading about it from many sources online, You still wasn’t sure how much it would be.<br/>
                    <b>Rent: approximately &euro; 515 per month, utilities included</b>
                    <br/>
                    This will obviously be your biggest expense and it can vary a lot depending on where you live in the country and how lucky<br/>
                    you get during your apartment search. One can spend up to 515 a month for a room in Amsterdam, but other people would pay less than<br/>
                    400 and some would pay up to &euro; 700. Most people seem to pay between &euro; 425-500<br/>
                    <b>Groceries: Approximately &euro; 100-125 a month</b>
                    <br/>
                    This amount of course can vary by person and where you choose to shop. I do shop at the cheapest option in my neighborhood,<br/>
                    and because I’m pretty bad at cooking and don’t like to spend 45 minutes preparing food, I tend to make simple things.<br/>
                    For instance, I buy the 1 kilo bag of spaghetti for 64 cents, instead of the nice name brand for double the price.<br/>
                    Compared to some countries, these prices may seem normal, high or low. Compared to the US it’s a great deal cheaper.<br/>
                    <b>Phone Bill: &euro; 22.48 a month</b>
                    <br/>
                    <b>Transportation: &euro; 25-50 a month</b>
                    <br/>
                    Get a bike and use it and this number can and will go down a lot. With a bike! It’s super easy and cheaper.<br/>
                    <b>Health Insurance: 39.33 a month</b>
                    <br/>
                    <b>Total: About &euro; 750-800 euro a month</b>
                    <br/>
                    Keep in mind this is just for basic survival. You won’t live like a king on the above budget. You still need to buy clothes<br/>
                    sometimes, or something for the apartment that might bring these amounts up a bit. I also go out with friends for food<br/>
                    or drinks, which compared to grocery shopping is quite expensive. If you’re trying to be frugal<br/>
                    it would be hard to do it much cheaper than the above cost.
                </p>
            </div>
            <div class="detailee nl">
                <p>
                    Als je binnenkort naar Nederland gaat voor school, of overweegt om in de kleine hoek van 
                    Europa te studeren, heb je waarschijnlijk afgevraagd hoeveel het gaat kosten om hier te 
                    leven. Waarschijnlijk is dit vaak een belangrijke vraag als je voor scholen gaat inschrijven,
                    en zelfs nadat je vele bronnen online gelezen hebt, heb je waarschijnlijk hoeveel het nou 
                    eigenlijk gaat kosten.
                    <b>Rente: ongeveer &euro;515,- per maand, kosten voor nutsvoorzieningen inbegrepen</b>
                    <br/>
                    Dit wordt natuurlijk je grootste uitgaven en het kan op veel variëren afhankelijk waar in 
                    het land je gaat wonen en hoeveel geluk je hebt tijdens het zoeken naar een appartement. 
                    Het kan tot 515 per maand kosten om een kamer in Amsterdam te huren, maar dit kan verschillen 
                    tussen minder dan &euro;400,- tot meer dan &euro;700,-. De meeste mensen betalen tussen de 
                    &euro;425,- en &euro;500,- per maand.
                    <b>Boodschappen: Ongeveer &euro;100,- tot &euro;125,- per maand</b>
                    <br/>
                    Deze hoeveelheid kan natuurlijk van persoon tot persoon verschillen afhankelijk van waar je boodschappen doet. Ik doe mijn boodschappen
                    bij de goedkoopste optie in de buurt en omdat ik aardig slecht ben ik koken en er niet van houdt om 45 minuten eten klaar te maken,
                    kook ik vaak simpele dingen. Bijvoorbeeld, koop ik 1 kilo spaghetti for 64 cent in plaats van het a-merk voor dubbel de prijs.
                    Vergeleken met andere landen kunnen deze prijzen normaal, hoog of laag lijken. Vergeleken met de Verenigde Staten is het veel goedkoper.
                    <b>Telefoonrekening: &euro; 22.48 per maand</b>
                    <br/>
                    <b>Vervoer: &euro; 25-50 per maand</b>
                    <br/>
                    Als je een fiets krijgt en gebruikt kan dit getal een stuk lager worden. Met een fiets! Het is super handig en goedkoop.<br/>
                    <b>Zorgverzekering: 39.33 per maand</b>
                    <br/>
                    <b>Totaal: ongeveer &euro; 750-800 euro per maand</b>
                    <br/>
                    Hoe in gedachten dat dit alleen voor basisch overleving is. Je zult niet als een koning 
                    leven op dit budget. Je zult af en toe nog steeds kleding moeten kopen, of iets voor
                    het appartement dat nog kan gaan kosten. Ik ga ook uit met vrienden voor eten of drinken, 
                    wat vergeleken met boodschappen aardig duur is. Als je zuinig probeert te zijn is het 
                    mogelijk om goedkoper te zijn dan de bovenstaande kosten.
                </p>
            </div>
            <hr>
            <div> style="clear:both"></div>

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