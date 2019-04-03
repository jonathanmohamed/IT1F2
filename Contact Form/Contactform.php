<!DOCTYTPE HTML>
<html>
    <head>
        <title>Contact Form</title>
        <meta charset=""UTF-8">
    </head>
    <body>
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
    </body>
</html>