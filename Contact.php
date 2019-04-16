<!DOCTYTPE HTML>
<html lang="en">
    <head>
        <title>Contact Form</title>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <link href="CSS/styleContact.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div id="container">
            <div class="header">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.jpg" alt="Logo" class="logo-img"/></a>
                </div>
                <div class="buttonlist1">
                    <a href="news.php" class="button"><h3>News</h3></a>
                    <a href="studStory.html" class="button"><h3>Student Stories</h3></a>
                    <a href="contact.php" class="button"><h3>Contact</h3></a>
                </div>
            </div>
            <div class="contact-form">
                <h1>Contact us</h1>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <ul>
                        <li>What is your name?*</li>
                        <li><input type="text" name="name" placeholder="Enter your name" class="inputStyle"></li>
                        <li>Your telephone number:</li>
                        <li><input type="text" name="phonenum" placeholder="Enter your telephone number" class="inputStyle"></li>
                        <li>Your email address:*</li>
                        <li><input type="text" name="email" placeholder="Enter your email address" class="inputStyle"></li>
                        <li>You are an:
                            <input type="radio" name="student" value="EU" checked="checked"> EU student 
                            <input type="radio" name="student" value="Non-EU"> Non EU student 
                        </li>
                        <li>What are your questions?*</li>
                        <li><textarea class="inputStyle questionBox" name="question" placeholder="Tell us what you want to know about"></textarea></li>
                        <li>
                            <input type="submit" name="submit" value="Send">
                            <input type="reset" name="reset" value="Reset">
                        </li>
                        <li>* is required</li>
                    </ul>
                    <!--Makes the response invisble-->
                    <div class="error">
                        <ul>
                            <?php
                            if (isset($_POST['submit'])) {
                                if (empty($_POST['name'])) {
                                    echo "<li>*Please give us your name.</li>";
                                } else {
                                    $name = $_POST['name'];
                                }
                            }
                            if (isset($_POST['submit'])) {
                                if (empty($_POST['phonenum'])) {
                                    $phoneNum = "Undefined";
                                } else {
                                    if (!is_numeric($_POST['phonenum']) || strlen($_POST['phonenum']) < 10 || strlen($_POST['phonenum']) > 14) {
                                        echo "<li>Please enter a valid phone number.</li>";
                                        $phoneNum = "Error";
                                    } else {
                                        $phoneNum = $_POST['phonenum'];
                                    }
                                }
                            }
                            if (isset($_POST['submit'])) {
                                if (empty($_POST['email'])) {
                                    echo "<li>*Please enter your email address.</li>";
                                } else {
                                    if (strpos($_POST['email'], '@') && strpos($_POST['email'], '.com')) {
                                        $formEmail = $_POST['email'];
                                    } else {
                                        echo "<li>*Please enter a valid email address.</li>";
                                    }
                                }
                            }
                            if (isset($_POST['submit'])) {
                                $EU_check = $_POST['student'];
                            }
                            if (isset($_POST['submit'])) {
                                if (empty($_POST['question'])) {
                                    echo "<li>*Please enter your question.</li>";
                                } else {
                                    $question = $_POST['question'];
                                }
                            }
                            $sendmail = TRUE;
                            ?>
                        </ul>
                    </div>
                    <div class="invis">
                        <?php
                        if (isset($_POST['submit']) AND ! empty($_POST['name']) AND ! empty($_POST['email']) AND ! empty($_POST['question']) AND $sendmail AND $phoneNum != "Error") {
                            require_once "lib/TurboApiClient.php";
                            $email = new Email();
                            $email->setFrom("Arcadiauniversityat@gmail.com");
                            $email->setToList("thomas_koops@hotmail.com");
                            //$email->setCcList("");
                            //$email->setBccList("");	
                            $email->setSubject("Question from " . $name);
                            //$email->setContent($question);
                            $email->setHtmlContent("Question from " . htmlspecialchars($name) . "<br/><br/> " . htmlspecialchars($question) . "<br/><br/> Phonenumber: " . htmlspecialchars($phoneNum) . ". Mail: " . htmlspecialchars($formEmail) . ". EU or Non-EU: " . htmlspecialchars($EU_check)) . ".";
                            //$email->addCustomHeader('X-FirstHeader', "value");
                            //$email->addCustomHeader('X-SecondHeader', "value");
                            //$email->addCustomHeader('X-Header-da-rimuovere', 'value');
                            //$email->removeCustomHeader('X-Header-da-rimuovere');
                            $turboApiClient = new TurboApiClient("Arcadiauniversityat@gmail.com ", "VM2uOVXl");
                            $response = $turboApiClient->sendEmail($email);
                            var_dump($response);
                        }
                        ?>
                    </div>
                </form>
            </div>
            <div class="image-box">
                <img src="images/location.jpg" alt="Location" class="location-img">
            </div>
            <div class="location">
                <div class="location-info">
                    <h1>Location</h1>
                    <ul>
                        <li>Arcadia University of Arts and Technology</li>
                        <li>Van Schaikweg 94</li>
                        <li>7811 KL Emmen</li>
                    </ul>
                </div>
                <div class="googlemaps">
                    <iframe width="400" height="400" 
                            src="https://maps.google.com/maps?q=Van%20Schaikweg%2094&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0"/>
                    </iframe>
                </div>
            </div>
            <div class="footer">
                <div class="footerleft1"> 
                    <div class="footerimg1">
                        <a id="footerimg" href="https://twitter.com"><img src="images/tweet.png" alt="twitter"/></a>
                    </div>
                    <div class="footerimg1">
                        <a id="footerimg" href="https://facebook.com"><img src="images/facebook.png" alt="facebook"/></a>
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
                    <p><a href="jobs.html">&nbsp;&nbsp;Jobs&nbsp;&nbsp;</a>
                        <a href="legal.html">&nbsp;Legal Notices&nbsp;&nbsp;</a>
                        <a href="privacy.html">&nbsp;&nbsp;Privacy Notices</a></p>
                </div>
            </div>			
        </div>
    </body>
</html>