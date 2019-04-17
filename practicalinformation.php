<!DOCTYPE html>
<html>
    <head>
        <title>Practical Informations</title>
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
            <div class="titel">
                <h1>Practical Information</h1>
            </div>
            <div class="detaile en">
                <h2>Living Costs</h2>
                <p>
                    <i>The Student's Cost of Living in the Netherlands</i>
                    <br/>
                    If you’re heading to the Netherlands for school soon, or considering attending university<br/>
                    in this small corner of Europe, you’ve probably asked yourself, How much is it going to cost<br/>
                    to live there?. This is a huge question on your mind while applying to schools, and even after<br/> 
                    reading about it from many sources online, You still wasn’t sure how much it would be.
                    <a href=livingcost.php>
                        <i>Read more</i>
                    </a>
                </p>
                <h2>Why Holland</h2>
                <p>
                    <i>Why Holland? We’ll give you 5 good reasons!</i>
                    <a href=whyholland.php>
                        <i>Read more</i>
                    </a>
                </p>
                <h2>Housing</h2>
                <p>
                    <i>You can find a comfortable student room of your choice with Student stay between &euros; 300 and &euros; 420 per month</i>
                    <br/>
                    <a href=http://studentstay.roomeo.com/#>
                        <i>Arrange Room</i>
                    </a>
                </p>
                <h2>Health Insurance</h2>
                <p>
                    <i>
                        In The Netherlands foreign students must have insurance covering medical expenses.<br/>
                        The Dutch authorities oblige some foreign students to have a public healthcare insurance<br/>
                        called Basic Healthcare Insurance ("basisverzekering"). Every permanent resident or temporary<br/>
                        resident working in the Netherlands has one.
                    </i>
                </p>
                <p>
                    How to apply for Basic Healthcare insurance; If you are required by Dutch law to obtain<br/>
                    the Basic Healthcare Insurance for your primary medical expenses, Aon offers a special Basic <br/>
                    Healthcare Insurance at a competitive rate for international students (group discount of 7,5%).<br/>
                    You can arrange your student insurance 
                    <a href=https://www.aonstudentinsurance.com/students/en/insurances/basichealthcare>
                        <i>here.</i>
                    </a>
                </p>
            </div>
            <div class="detaile nl">
                <h2>Levens kosten</h2>
                <p>
                    <i>Kost van studeren in Nederland</i>
                    <br/>
                    Als je binnenkort naar Nederland gaat voor school, of overweegt om in de kleine hoek van 
                    Europa te studeren, heb je waarschijnlijk afgevraagd hoeveel het gaat kosten om hier te 
                    leven. Waarschijnlijk is dit vaak een belangrijke vraag als je voor scholen gaat inschrijven,
                    en zelfs nadat je vele bronnen online gelezen hebt, heb je waarschijnlijk hoeveel het nou 
                    eigenlijk gaat kosten.
                    <a href=livingcost.php>
                        <i>Lees meer</i>
                    </a>
                </p>
                <h2>Waarom Nederland</h2>
                <p>
                    <i>Waarom Nederland? Wij geven je 5 goede reden!</i>
                    <a href=whyholland.php>
                        <i>Lees meer</i>
                    </a>
                </p>
                <h2>Behuizing</h2>
                <p>
                    <i>Je zal een comfortabele studenten kamer naar keus vinden tussen &euros;300,- and &euros;420,- per maand</i>
                    <br/>
                    <a href=http://studentstay.roomeo.com/#>
                        <i>Kamer regelen</i>
                    </a>
                </p>
                <h2>Ziektekostenverzekering</h2>
                <p>
                    <i>
                        In Nederland moeten buitenlandse studenten verzekering hebben die hun medische kosten bedekt. 
                        Nederlandse autoriteiten verplichten buitenlandse studenten om de ziektekostenverzekering genaamd basisverzekering te hebben.
                        Elk permanent of tijdig werkend inwoner in Nederland heeft één.
                    </i>
                </p>
                <p>
                    <i>
                        Hoe je een basisverzekering kan aanvragen:
                        Als je verplicht bent door de Nederlandse wet om een basisverzekering te hebben voor 
                        je primaire medische kosten, Aon bied een basisverzekering aan bij een concurrerend 
                        tarief voor internationale studenten (groepskorting van 7,5%). Je kunt je studentenverzekering 
                        <a href=https://www.aonstudentinsurance.com/students/en/insurances/basichealthcare>hier</a> aanvragen.
                    </i>
                </p>
            </div>
            <hr/>
            <div class="footer">
                <div class="footerleft1"> 
                    <div class="footerimg1">
                        <a class="footerimg" href="https://twitter.com/Arcadia70151932">
                            <img src="images/tweet.png" alt="twitter"/>
                        </a>
                    </div>
                    <div class="footerimg1">
                        <a class="footerimg" href="https://www.facebook.com/ArcadiaUniversityAT/">
                            <img src="images/facebook.png" alt="facebook"/>
                        </a>
                    </div>
                    <div class="footerimg1">
                        <a class="footerimg" href="https://www.youtube.com/?gl=NL">
                            <img src="images/youtube.png" alt="youtube"/>
                        </a>
                    </div>
                    <div class="footerimg4">
                        <a class="footerimg" href="https://www.instagram.com/arcadiauniversityat/">
                            <img src="images/instagram.png" alt="instagram"/>
                        </a>
                    </div>												      
                </div>		
                <div class="footerright"> 
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.acbsp.org/">
                            <img src="images/acbsp.png" alt="acbsp"/>
                        </a>
                    </div>
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.accaglobal.com">
                            <img src="images/acca.png" alt="acca"/>
                        </a>
                    </div>
                    <div class="footerimg2">
                        <a class="footerimg" href="https://www.nvao.net">
                            <img src="images/nvao.png" alt="nvao"/>
                        </a>
                    </div>
                </div>
                <div class="footerleft2 en"> 
                    <p><a href="jobs.php">&nbsp;&nbsp;Jobs&nbsp;&nbsp;</a>
                        <a href="legal.php">&nbsp;Legal Notices&nbsp;&nbsp;</a>
                        
                </div>
                <div class="footerleft2 nl"> 
                    <p><a href="jobs.php">&nbsp;&nbsp;Banen&nbsp;&nbsp;</a>
                        <a href="legal.php">&nbsp;Wettelijke mededelingen&nbsp;&nbsp;</a>
                        
                </div>
            </div>			
        </div>
    </body>
</html>
