<!DOCTYPE html>
<html>
    <head>
        <title>Musical Programmes</title>
        <meta charset="UTF-8">
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
        <link href="css/meins.css" type="text/css" rel="stylesheet">
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
            <hr>
			
            <div class="titel">
                <h1 class="en">ELECTRONIC MUSIC</h1>
                <h1 class="nl">ELEKTRONISCHE MUZIEK</h1>
            </div>
            <div class="bild">
                <img class="klein" src="images/electro.jpg" alt="electro.gif">
                <p class="en"><a href=https://student.sl-cloud.nl/><i>Apply Now</i></a></p>
                <p class="nl"><a href=https://student.sl-cloud.nl/><i>Meld je nu aan!</i></a></p>
            </div>

            <div class="detail">
                <p class="en">The Electronic Music Program is a 4 years full spectrum program specializing in creating, recording,
                    producing, live performance, and career development.
                    The main platform used is Ableton Live 9, but students also work in Pro Tools and have the opportunity to
                    become certified in Pro Tools 101 and 110. From concept through to barcode, students are fully immersed in
                    the process of creating and releasing their own music, including, concept development, writing and composition,
                    recording, mixing, mastering, branding, social media marketing, publicity, sales, traditional marketing,
                    distribution and Live DJ/visual performance.</p>
                <p class="nl">De elektronische muziek opleiding is een 4 jarige programma gespecialiseerd in het maken, opnemen, produceren, live performen en carriere opbouw.
                    Het belangrijkst gebruikte platform is Ableton Live 9, maar studenten werken ook met Proffesionele Programma's en hebben de mogelijkheid om hiervoor certificaten te krjgen. Van concept tot barcode worden studenten volledig ondergedompeld in
                    het proces van het creëren en vrijgeven van hun eigen muziek, inclusief conceptontwikkeling, schrijven en compositie,
                    opnemen, mixen, masteren, branding, sociale media marketing, publiciteit, verkoop, traditionele marketing,
                    distributie en live DJ / visuele prestaties.</p>
                <p class="en"><i>Credit - 240 Ects</i></p>
                <p class="en"><i>Duration - 4 Years</i></p>
                <p class="en"><i>Requirements</i>
                <p class="nl"><i>Credits - 240 Ects</i></p>
                <p class="nl"><i>Duur van studie - 4 Jaar</i></p>
                <p class="nl"><i>Toelatingseisen</i> -
                <ul>
                    <li class="en">International Baccalaureate (IB) Diploma or European Baccalaureate Diploma.</li>
                    <li class="nl">International Baccalaureate (IB) Diploma of European Baccalaureate Diploma.</li>
                    <li class="en">Four GCSE/GCE O level passes (final grade A, B or C) and two AS level passes. These six passes combined must all be in different subjects.</li>
                    <li class="nl">Vier GCSE / GCE O-niveaus halen (eindcijfer A, B of C) en twee AS levels. Deze zes gecombineerde behaalden moeten allemaal in verschillende vakken zijn.</li>
                    <li class="en">Associate, bachelors or masters degree.</li>
                    <li class="nl">Associate, bachelors of masters degree.</li>
                    <li class="en">Academic IELTS 6.0 (with a minimum of 5.0 for each skill) or TOEFL 550 (paper based), 213 (computer-based) and 80 (internet based).</li>
                    <li class="nl">Academische IELTS 6.0 (met een minimum van 5.0 voor elke vaardigheid) of TOEFL 550 (op papier), 213 (op computer) en 80 (op internet).</li>
                </ul>
                </p>
                <p class="en"><i>Tuition Fees</i>
                <p class="nl"><i>Kosten</i> -
                <ul>
                    <li class="en">EU/EEA -&euro; 2000- </li>
                    <li class="en">NON EU/EEA -&euro; 8000- </li>
                    <li class="nl">EU/EEA -&euro; 2000- </li>
                    <li class="nl">GEEN EU/EEA -&euro; 8000- </li>
                </ul>
                </p>
            </div>
			
            <div style="clear:both"></div>
            <hr>


            <div class="titel">
                <h1 class="en">TRADITIONAL MUSIC INSTRUMENT BUILDING</h1>
                <h1 class="nl">TRADITIONELE MUZIEKINSTRUMENTENBOUW</h1>
            </div>
            <div class="bild">
                <img class="klein" src="images/trad.jpg" alt="trad.gif">
                <p class="en"><a href=https://student.sl-cloud.nl/><i>Apply Now</i></a></p>
                <p class="nl"><a href=https://student.sl-cloud.nl/><i>Meld je nu aan!</i></a></p>
            </div>
            <div class="detail">
                <p class="en">The musical instrument making major studies the morphology of musical instruments in view of the
                    construction, reconstruction and preservation of these fascinating artefacts. The programme wishes
                    to counter the tendency towards uniformity and explore the limitless sound potential of acoustic
                    instruments.</p>
                <p class="nl">het muziekinstrument maakt van grote studies de morfologie van muziekinstrumenten met het oog op de
                    constructie, reconstructie en behoud van deze fascinerende artefacten. Het programma wenst
                    om de neiging naar uniformiteit tegen te gaan en het onbegrensde geluidspotentieel van akoestieke instrumenten te verkennen.</p>
                <p class="en">Through this work, the discipline makes valuable contributions to the performance practice of both
                    old and new music. The bachelor programme introduces the students to different techniques through
                    the making of rather straightforward instruments from various disciplines (e.g. the dulcimer,
                    psalterium, Baroque guitar, viol, cornetto …). Students can then gradually move towards a specialization
                    in stringed, plucked, wind or keyboard instruments. Students learn to play instruments, and the instruments
                    they make are also tested and assessed by students of music during the academic year, and by renowned
                    musicians and professional instrument makers for the final exams.</p>
                <p class="nl">Door dit werk levert de discipline waardevolle bijdragen aan de uitvoeringspraktijk van beide
                    oude en nieuwe muziek. De bacheloropleiding introduceert de studenten tot verschillende technieken door het maken van vrij eenvoudige instrumenten uit verschillende disciplines (bijvoorbeeld het hakkebord,
                    psalterium, barokgitaar, viool, cornetto ...). Studenten kunnen dan geleidelijk evolueren naar een specialisatie
                    in snaarinstrumenten, tokkelinstrumenten, blaasinstrumenten of klavierinstrumenten. Studenten leren instrumenten bespelen en de instrumenten die ze maken worden tijdens het academische jaar ook getest en beoordeeld door muziekstudenten, en door gerenommeerde musici en professionele instrumentmakers voor de eindexamens.</p>

                <p class="en"><i>Credit</i> - 240 Ects</p>
                <p class="en"><i>Duration</i> - 4 Years</p>
                <p class="en"><i>Requirements</i></p>
                <p class="nl"><i>Credits - 240 Ects</i></p>
                <p class="nl"><i>Duur van studie - 4 Jaar</i></p>
                <p class="nl"><i>Toelatingseisen</i></p> -
                <ul>
                    <li class="en">International Baccalaureate (IB) Diploma or European Baccalaureate Diploma.</li>
                    <li class="en">Four GCSE/GCE O level passes (final grade A, B or C) and two AS level passes. These six passes combined must all be in different subjects.</li>
                    <li class="en">Associate, bachelors or masters degree.</li>
                    <li class="en">Academic IELTS 6.0 (with a minimum of 5.0 for each skill) or TOEFL 550 (paper based), 213 (computer-based) and 80 (internet based).</li>
                    <li class="nl">International Baccalaureate (IB) Diploma of European Baccalaureate Diploma.</li>
                    <li class="nl">Vier GCSE / GCE O-niveaus halen (eindcijfer A, B of C) en twee AS levels. Deze zes gecombineerde behaalden moeten allemaal in verschillende vakken zijn.</li>
                    <li class="nl">Associate, bachelors of masters degree.</li>
                    <li class="nl">Academische IELTS 6.0 (met een minimum van 5.0 voor elke vaardigheid) of TOEFL 550 (op papier), 213 (op computer) en 80 (op internet).</li>
                </ul>
                </p>
                <p class="en"><i>Tuition Fees</i>
                <p class="nl"><i>Kosten</i> -
                <ul>
                    <li class="en">EU/EEA - &euro; 2000- </li>
                    <li class="en">NON EU/EEA - &euro; 8000- </li>
                    <li class="nl">EU/EEA -&euro; 2000- </li>
                    <li class="nl">GEEN EU/EEA -&euro; 8000- </li>
                </ul>
                </p>
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
                        <a class="footerimg" href="https://www.youtube.com/?gl=NL"><img src="images/youtube.png" alt="youtube"/></a>
                    </div>
                    <div class="footerimg4">
                        <a class="footerimg" href="https://www.instagram.com/arcadiauniversityat/"><img src="images/instagram.png" alt="instagram"/></a>
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
                        
                </div>
                <div class="footerleft2 nl"> 
                    <p><a href="jobs.php">&nbsp;&nbsp;Banen&nbsp;&nbsp;</a>
                        <a href="legal.php">&nbsp;Wettelijke mededelingen&nbsp;&nbsp;</a>
                        
                </div>
            </div>
        </div>
    </body>
</html>
