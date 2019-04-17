<!DOCTYPE html>
<html>
    <head>
        <title>Arcadia University of Arts and Technology</title>
        <meta charset="UTF-8">
        <link href="CSS/style.css" type="text/css" rel="stylesheet"/>
        <link href="CSS/privacy.css" type="text/css" rel="stylesheet"/>
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
            <div id="jobs">
                <h1>Privacy statement</h1>
                <div id="privacy">
                    <p><br>Arcadia University of Arts and Sciences is committed to protecting your privacy, and we handle all sensitive information (including personal data) in accordance with the European General Data Protection Regulation (GDPR). This means, among other things, that:</p>
                    <ul><li>We will clearly state the purposes for which we process personal data in this Privacy Statement;</li>
                        <li>We will first ask for your express permission to process your personal data, in those cases where your permission is required;</li>
                        <li>We will take appropriate security measures to protect your personal data, and we demand the same from any third parties that process personal data on our behalf;</li>
                        <li>We will respect your right to inspect and correct your personal data and have it deleted if required.</li>
                    </ul><p>This Privacy Statement explains for what purposes we use your personal data and how you can submit any questions you may have. We therefore recommend that you carefully review this Privacy Statement.</p>
                    <p>We regularly update this Privacy Statement, which means it is subject to change. The Privacy Statement was most recently updated on 18 May 2018.<br><br></p>
                </div>
                <h3>What categories of personal data do we process?</h3>
                <div id="data">
                    <p><br>Arcadia processes your personal data because you are using our services and/or because you have shared this data with our institution. Below is a list of the types of personal data we process.</p>
                    <ul><li>First name and surname</li>
                        <li>Sex</li>
                        <li>Address</li>
                        <li>Telephone number</li>
                        <li>Email address</li>
                        <li>Approval of parents of minors (under 16 years old)</li>
                    </ul><p>Any other personal details you actively share in various correspondence or by telephone, for example:</p>
                    <ul><li>Location details</li>
                        <li>Country</li>
                        <li>Prior education</li>
                        <li>Nationality</li>
                        <li>Study programme preferences</li>
                        <li>Details about your activities on our website</li>
                        <li>Your IP address</li>
                        <li>Type of internet browser and type of device used</li></ul>
                </div>
                <h3><br><br>Personal data of children below the age of 16</h3>
                <p><br>In some cases, Arcadia processes personal data relating to minors (i.e. individuals under the age of 16). While it is not our intention to specifically collect or process personal data relating to minors, we are aware that some visitors to our website have not yet reached the age of 16.</p>
                <p>If you are a minor and under 16 years old, you must ensure that your parents give us permission to process your data. Since we are not always able to check the age of our website visitors, we recommend that parents monitor the online activities of their children, in order to prevent data being collected about children without parental permission. If you are certain that we have collected personal data about a minor without this permission, please contact us at <a href="mailto:arcadiauniversityat@gmail.com?subject=Pivacy" title="Email to">questions@arcadia.edu</a>. We will review your complaint and, if we find it to be valid, we will delete the corresponding.<br><br></p>
                <h3>How long do we store data?</h3>
                <p><br>Arcadia will retain the data for a period of four years. We will not keep your personal data any longer than is strictly necessary in order to achieve the purposes for which your data is being collected. <br><br></p>
                <h3>Sharing data with third parties</h3>
                <p><br>Arcadia will share your personal data with various third parties if this is necessary for the performance of the agreement and in order to satisfy any statutory obligation. We enter into third-party data processing agreements with companies that process your data on our behalf in order to ensure a consistent level of security and confidentiality for your data. Arcadia will remain responsible for these data processing operations. In addition, Arcadia will also share your personal data with third parties, but only with your express permission.<br><br></p>
                <h3>Tracking website visits</h3>
                <p><br>Arcadia uses functional, analytical and tracking cookies to monitor the use of its website. A cookie is a small text file that is stored in the browser of your computer, tablet or smartphone during your first visit to this website. The first type of cookies we use is called ‘permanent cookies’, which we use for strictly technical purposes: we use these to improve the website’s functionality and ensure it operates properly. These cookies allow our website to remember your preferred settings, for example, and help us to improve the quality of the website.<br></p>
                <p>The second type of cookies allows us to track your browsing activity across the website, thereby allowing us to offer you personalised content and advertisements. During your first visit to our website, we already informed you of these cookies and asked for your permission to use them. You can disable cookies by changing your browser settings; this will prevent cookies from being stored on your computer. In addition, you can also delete any previously stored information in your browser settings. For further information, see<a href="http://www.whatarecookies.com/" title="Cookie Settings"> this page </a>explaining cookies.</p>
                <p>Third parties – including advertisers and/or social media companies – also store cookies on this website.<br><br></p>
                <h3>Custom Audiences</h3>
                <p><br>If you are 16 years or older,and you have given us permission to do so, Arcadia will also use your email address for Custom Audience targeting on Facebook. For this purpose, we code your email address by hashing it. Hashing is a technique with which your email address is converted into a unique code; a technique which is also used to be able to securely check passwords. We only share the hash value with Facebook and not your unencrypted email address. Additional information about Facebook's policy is available regarding the collection, processing, use, purpose, and scope of data. This also includes privacy settings.</p>
                <p>If, at any time, you wish to withdraw your permission regarding Custom Audience targeting, please let us know by sending an email to <a href="mailto:arcadiauniversityat@gmail.com?subject=Privacy" title="Email to">questions@arcadia.edu</a>.</p>
                <p>If you would like to block not only Facebook adverts by Arcadia but also content by third parties, you can get <a href="https://www.cnet.com/how-to/disable-third-party-cookies-in-ie-firefox-and-google-chrome/" title="Ad Blocking">more information about how to block third-party advertising</a>.</p>
                <p><strong>Please note: </strong>If you have used one of the options above to block targeted Facebook advertising, you may still see Arcadia advertising on Facebook. This is the case, for example, if Facebook links your profile to a general advertising campaign launched by Arcadia. Unfortunately, we have no control over this is process. If you have doubt as to whether we have processed your blocking request, please feel free to contact us at <a href="mailto:arcadiauniversityat@gmail.com?subject=Privacy" title="Email to">questions@arcadia.edu</a>.<br><br></p>
                <h3>Viewing, modifying or deleting data</h3>
                <p><br>You are entitled to view, correct or delete your personal data as required and in accordance with the European General Data Protection egulation (GDPR). Please send your requests to review, correct or delete data to <a href="mailto:arcadiauniversityat@gmail.com?subject=Privacy" title="Email to">questions@arcadia.edu</a>.<br><br></p>
                <h3>Complaints</h3>
                <p><br>We will be pleased to assist you if you have any complaints about the processing of your personal data – in this case, please contact us at<a href="mailto:arcadiauniversityat@gmail.com?subject=Privacy" title="Email to">questions@arcadia.edu</a>. Should this not suffice, you may contact Arcadia's Data Protection officer (DPO), Arcadia Jones (<a href="mailto:arcadiauniversityat@gmail.com?subject=Privacy" title="Email to">arcadia.jones@arcadia.edu</a>) directly. <br><br></p>
                <h3>Security</h3>
                <p><br>Arcadia is committed to protecting your data and has taken appropriate measures to prevent misuse, loss, unauthorised access, unwanted disclosure and unauthorised modification. If you believe that your data is not securely protected or there are indications of misuse, please send an email to <a href="mailto:arcadiauniversityat@gmail.com?subject=Privacy" title="Email to">questions@arcadia.edu</a> or to Arcadia's Data Protection Office, <a href="mailto:arcadiauniversityat@gmail.com?subject=Privacy" title="Email to">Arcadia Jones</a>.<br><br></p>
            </div>
            <!-- your code here -->			
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
                    <p><a href="jobs.php">&nbsp;&nbsp;Jobs&nbsp;&nbsp;</a>
                        <a href="legal.php">&nbsp;Legal Notices&nbsp;&nbsp;</a>
                        <a href="privacy.php">&nbsp;&nbsp;Privacy Notices</a></p>
                </div>
            </div>			
        </div>
    </body>
</html>

