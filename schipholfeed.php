<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arcadia University of Arts and Technology</title>
        <meta charset="UTF-8">
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
        <link href="css/timetable.css" type="text/css" rel="stylesheet"/> 
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
            <div class="timetableBox">
                <h1>Public flight API</h1>
                <?php
                $app_id = '3a1d60d1';
                $app_key = '386019f1971ba60c7c77cf28758edaac';
                $hour = date('H');
                $hourTo = date('H',time()+3600);
                $minute = date('i');
                $year = date('Y');
                $month = date('m');
                $day = date('d');
                $fromDateTime = $year."-".$month."-".$day."T".$hour."%3A".$minute."%3A00";
                $toDateTime = $year."-".$month."-".$day."T".$hourTo."%3A".$minute."%3A00";
                $curl = curl_init("https://api.schiphol.nl/public-flights/flights?fromDateTime=".$fromDateTime."&toDateTime=".$toDateTime."&searchDateTimeField=expectedTimeBoarding");
                curl_setopt_array($curl, array(
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'resourceversion: v4',
                        'app_id: ' . $app_id,
                        'app_key: ' . $app_key,
                        'Accept: application/json'
                    )
                ));
                $response = curl_exec($curl);
                $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                curl_close($curl);

                if ($http_code != 200) {
                    echo $http_code . ' Error when calling the public flight api: ' . $response;
                } else {
                    $array = json_decode($response, true);
                    echo '<table>';
                    echo '<tr>';
                    echo '<th>Flight number</th>';
                    echo '<th>Flight date</th>';
                    echo '<th>Depature time</th>';
                    echo '<th>Destination</th>';
                    echo '</tr>';
                    foreach ($array['flights'] as $flight) {
                        echo '<tr>';
                        echo '<td>' . $flight['flightName'] . '</td>';
                        echo '<td>' . (string) $flight['scheduleDate'] . '</td>';
                        echo '<td>' . (string) $flight['scheduleTime'] . '</td>';
                        foreach ($flight['route'] as $destination) {
//                            echo '<td>' . $destination[0] . '</td>';
                            $code = $destination[0];
                            $curl = curl_init('https://api.schiphol.nl/public-flights/destinations/' . $code);
                            curl_setopt_array($curl, array(
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => '',
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 30,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => 'GET',
                                CURLOPT_HTTPHEADER => array(
                                    'resourceversion: v4',
                                    'app_id: ' . $app_id,
                                    'app_key: ' . $app_key,
                                    'Accept: application/json'
                                )
                            ));
                            $responseCity = curl_exec($curl);
                            curl_close($curl);
                            $city = json_decode($responseCity, true);
                            echo '<td>' . (string) $city['city'] . '</td>';
                        }
                        echo '</tr>';
                    }
                }
                echo '</table>';
                ?>
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
