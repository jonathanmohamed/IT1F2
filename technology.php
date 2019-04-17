<!DOCTYPE html>
<html>
    <head>
        <title>Technolgy Programmes</title>
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
                <h1 class="en">AEROSPACE ENGINEERING</h1>
                <h1 class="nl">LUCHT- EN RUIMTEVAARTTECHNIEK</h1>
            </div>
            <div class="bild">
                <img class="klein" src="images/aero.jpg" alt="aero.gif"/>
                <p id="blueLink">
                    <a href=https://student.sl-cloud.nl>
                        <i>Apply Now</i>
                    </a>
                </p>
            </div>
            <div class="detail en">
                <p>
                    The Bachelor of Science in Aerospace Engineering (BSAE) program at AUAT equips students with skills to solve
                    even the most complex challenges in design, propulsion, and systems for aircraft and/or spacecraft. For more
                    than 17 years, the Aerospace Engineering undergraduate program at Arcadia has held the top ranking in the
                    nation among schools whose highest degree is a bachelors, according to the Netherlands and World Reports
                    Netherlands Best Colleges Guide.
                </p>
                <p>
                    The prestige of this program doesn’t end there. Students benefit from the most modern, state of the art resources
                    available today, the same tools in use by aerospace engineering professionals around the globe.No other Aerospace
                    Engineering program in the Netherlands attracts more students.
                    Students gain hands-on experience from the start, with opportunities to participate in various projects and competitions.
                    The program offers the chance to learn real-world, on-the-job engineering principles practiced by global companies and
                    government agencies, enabling students to build a professional network within their first year.
                </p>
                <p>
                    <i>Credit</i> - 300 ECTs
                </p>
                <p>
                    <i>Duration</i> - 4 Years
                </p>
                <p>
                    <i>Requirements</i> - 
                </p>
                <ul>
                    <li>International Baccalaureate (IB) Diploma or European Baccalaureate Diploma.</li>
                    <li>Four GCSE/GCE O level passes (final grade A, B or C) and two AS level passes. These six passes combined must all be in different subjects.</li>
                    <li>Associate, bachelors or masters degree.</li>
                    <li>Academic IELTS 6.0 (with a minimum of 5.0 for each skill) or TOEFL 550 (paper based), 213 (computer-based) and 80 (internet based).</li>
                </ul>

                <p>
                    <i>Tuition Fees</i> - 
                </p>
                <ul>
                    <li>EU/EEA - &euro; 2000,- </li>
                    <li>NON EU/EEA - &euro; 8000,- </li>
                </ul>
                <p id="blueLink"> Curious about aerospace? Why not check out the depature times from Schiphol! <a href=schipholfeed.php><i>Click here.</i></a>

            </div>
            <div class="detail nl">
                <p>
                    De bachelor van wetenschap in lucht- en ruimtevaarttechniek programma in AUAT geeft studenten de vaardigheden om zelfs 
                    de meest complexe uitdagingen in ontwerp, voortstuwing en systemen voor vliegtuigen en/of ruimteschepen. Voor meer dan 17 
                    jaar heeft de lucht- en ruimtevaarttechniek programma bij Arcadia de top ranking in het land tussen andere scholen met bachelor 
                    opleidingen, volgens Nederland en het World Reports Netherlands Best Colleges Guide 
                </p>
                <p>
                    De status van dit programma eindigt daar niet. Studenten baten van de meest moderne en nieuwste van het nieuwste 
                    hulpmiddelen beschikbaar op huidige dag, dezelfde middelen die gebruikt worden door professionals in het vakgebied 
                    wereldwijd wordt gebruikt. Geen enkele andere lucht- en ruimtevaarttechniek programma in Nederland trekt meer studenten 
                    aan. Studenten krijgen praktische ervaring van de start, met mogelijkheden om mee te doen in diverse projecten en competities. 
                    Dit programma bied de kans aan om ervaring over technische principes gebruikt in de praktijk door wereldwijde bedrijven 
                    en overheidsinstellingen, waardoor studenten een professioneel netwerk bouwen in hun eerste jaar.
                </p>
                <p>
                    <i>Credits</i> - 300 ECTs</p>
                <p>
                    <i>Duur</i> - 4 Years</p>
                <p>
                    <i>Benodigdheden</i> -  
                </p>
                <ul>
                    <li>International Baccalaureate (IB) Diploma of European Baccalaureate Diploma.</li>
                    <li>Vier GCSE/GCE O level passes (final grade A, B or C) en twee AS level passes. Deze 6 These six passes samen moet van verschillende onderwerpen zijn.</li>
                    <li>Associate, bachelors of master degree.</li>
                    <li>Academische IELTS 6.0 (met een minimum van 5.0 voor elke vaardigheid) of TOEFL 550 (schriftelijk), 213 (computer based) en 80 (internet based).</li>
                </ul>

                <p>
                    <i>Studiekosten</i> - 
                </p>
                <ul>
                    <li>EU/EEA - &euro; 2000,- </li>
                    <li>NON EU/EEA - &euro; 8000,- </li>
                </ul>
                <p id="blueLink"> Benieuwd naar luchtvaart? Waarom niet een kijkje nemen naar de vertrektijden op Schiphol! <a href=schipholfeed.php><i>Klik hier.</i></a>

            </div>
            <div style="clear:both"></div>
                <hr>


            <div class="titel">
                <h1 class="en">MECHANICAL ENGINEERING</h1>
                <h1 class="nl">MACHINEBOUW</h1>
            </div>
            <div class="bild">
                <img class="klein" src="images/mech.jpg" alt="mech.gif"/>
                <p id="blueLink">
                    <a href=https://student.sl-cloud.nl>
                        <i>Apply Now</i>
                    </a>
                </p>
            </div>
            <div class="detail en">
                <p>
                    The bachelor's program mechanical engineering is a multi-faceted, future-proof university program,
                    during which you will learn to convert technical knowledge into practical solutions for today's problems.
                    If you enjoy searching for engineering solutions for all sorts of contemporary problems and want to lay
                    a broad foundation for this, Mechanical Engineering is probably right up your street. A mechanical engineer
                    designs, improves and maintains machines, buildings or processes. Although mechanical engineering is one of
                    the oldest disciplines, you will discover that today's modern technologies are all connected with, and depending
                    on, mechanical engineering. As a mechanical engineer you may eventually find yourself in any of a wide range of
                    sectors and positions, from civil and aeronautical engineering to biomedical sciences or nano-technology.
                </p>
                <p>
                    <i>Credit</i> - 300 ECTs</p>
                <p>
                    <i>Duration</i> - 4 Years</p>
                <p>
                    <i>Requirements</i> -
                </p>
                <ul>
                    <li>International Baccalaureate (IB) Diploma or European Baccalaureate Diploma.</li>
                    <li>Four GCSE/GCE O level passes (final grade A, B or C) and two AS level passes. These six passes combined must all be in different subjects.</li>
                    <li>Associate, bachelors or masters degree.</li>
                    <li>Academic IELTS 6.0 (with a minimum of 5.0 for each skill) or TOEFL 550 (paper based), 213 (computer-based) and 80 (internet based).</li>
                </ul>			
                
                <p>
                    <i>Tuition Fees</i> -
                </p>
                <ul>
                    <li>EU/EEA - &euro; 2000,- </li>
                    <li>NON EU/EEA - &euro; 8000,- </li>
                </ul>
                
            </div>
            <div class="detail nl">
                <p>
                    De bachelors programma van machinebouw is een veelzijdige, toekomstbestendige programma waarbij je zal leren 
                    om technische kennis om te zetten in oplossingen voor de problemen van vandaag. Als je houdt van het zoeken naar
                    oplossingen voor allerlei hedendaagse mechanische problemen en een brede basis leggen hiervoor, machinebouw is
                    waarschijnlijk iets voor jou. Een mechanische ingenieur ontwerpt, verbeterd en onderhoudt machines, gebouwen of
                    processen. Ook al is machinebouw een van de oudste doctrines, zal je ontdekken dat de moderne technologie van
                    vandaag verbonden is, en afhankelijk van, machinebouw. Als een mechanische ingenieur kun jezelf uiteindelijk in 
                    een veel sectoren en posities vinden, van civiele en aeronautisch engineering tot biomedische onderzoek of nanotechnologie.
                </p>
                <p>
                    <i>Credits</i> - 300 ECTs</p>
                <p>
                    <i>Duur</i> - 4 Years</p>
                <p>
                    <i>Benodigdheden</i> -
                </p>
                <ul>
                    <li>International Baccalaureate (IB) Diploma of European Baccalaureate Diploma.</li>
                    <li>Vier GCSE/GCE O level passes (final grade A, B or C) en twee AS level passes. Deze 6 These six passes samen moet van verschillende onderwerpen zijn.</li>
                    <li>Associate, bachelors of master degree.</li>
                    <li>Academische IELTS 6.0 (met een minimum van 5.0 voor elke vaardigheid) of TOEFL 550 (schriftelijk), 213 (computer based) en 80 (internet based).</li>
                </ul>			
                
                <p>
                    <i>Studiekosten</i> -
                </p>
                <ul>
                    <li>EU/EEA - &euro; 2000,- </li>
                    <li>NON EU/EEA - &euro; 8000,- </li>
                </ul>
                
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