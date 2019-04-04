<!DOCTYTPE HTML>
<html>
    <head>
        <title>Contact Form</title>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet"/>
    </head>
	<body>
            <div class="header">
                <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="Logo" class="logo-img"/></a>
                </div>
                <div class="buttonlist1">
                    <a href="search.php" class="button"><h3>Search</h3></a>
                    <a href="news.php" class="button"><h3>News</h3></a>
                    <a href="studStory.php" class="button"><h3>Student Stories</h3></a>
                    <a href="contact.html" class="button"><h3>Contact</h3></a>
                </div>
            </div>
            <div class="directory_bar">
                    <a href="index.php" class="directory">Home</a><a href="contact.html" class="directory"> / contact</a>
            </div>
            <div class="locations">
                <img src="images/location-placeholder.jpg" alt="Location" class="location-img">
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
                            frameborder="0">
                    </iframe>
                </div>
            </div>
        <div class="contact-form">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                What is your name? <input type="text" name="name" placeholder="Enter your name">
                    <?php
                    if (isset($_POST['submit']))
                    {
                        if (empty($_POST['name']))
                        {
                            echo "*Please give us your name.";
                        }
                    }
                    ?>
                <br/>

                Your telephone number: <input type="text" name="phonenum" placeholder="Enter your telephone number">
                    <?php
                    if (isset($_POST['submit']))
                    {
                        if (empty($_POST['phonenum']))
                        {
                            echo "*Please enter your telephone number.";
                        }
                        else
                        {
                            if (!is_numeric($_POST['phonenum']) && strlen($_POST['phonenum'])<10) 
                            {
                                echo "Please enter a valid phone number.";  
                            }
                        }
                    }
                    ?>
                <br/>

                Your email address: <input type="text" name="email" placeholder="Enter your email address">
                    <?php
                    if (isset($_POST['submit']))
                    {
                        if (empty($_POST['email']))
                        {
                            echo "*Please enter your email address.";
                        }
                        else
                        {
                            if (strpos($_POST['email'],'@') && strpos($_POST['email'],'.com')) 
                            {
                                echo "*Please enter a valid email address.";  
                            }
                        }
                    }
                    ?>
                <br/>

                You are an:
                EU student <input type="radio" name="student" value="EU" checked="checked">
                Non EU student <input type="radio" name="student" value="Non-EU">
                <br/>

                What are your questions?
                <textarea class="inputStyle" name="question" placeholder="Tell us what you want to know about"></textarea>
                <br/>

                <input type="submit" name="submit" value="Send">
                <input type="reset" name="reset" value="Reset">
            </form>
        </div>
    </body>
</html>