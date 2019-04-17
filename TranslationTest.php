<!DOCTYPE html>
<html>
    <head>
        <title>Translation</title>
        <meta charset="UTF-8">
        <link href="css/LanguageStyle.php" type="text/css" rel="stylesheet"/>
        <style>
            <?php
                if(isset($_POST['submit'])){
                    $language = $_POST['Language'];
                }else{
                    $language = "en";
                }
                
            ?>
            .nl
            {
                <?php
                if($language == "en"){
                    echo'display:none;'
                    . 'visibility: hidden;';
                }
                ?>
            }   
            .en
            {
                <?php
                if($language == "nl"){
                    echo'display:none;'
                    . 'visibility: hidden;';
                }
                ?>
            }  
        </style>
    </head>
    <body>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <select name="Language">
                <option value="en" selected="selected">EN</option>
                <option value="nl">NL</option>
            </select>
            <input type="submit" name="submit" value="submit"/>
        </form>
        <div class="en">English section</div>
        <div class="nl">Dutch section</div>
    </body>
</html>
