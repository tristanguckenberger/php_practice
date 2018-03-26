<?php

    // Message Vars are global
    $msg = '';
    $msgClass = '';

    // Check for Submit
    /*
     * filter_has_var() checks to see if there is an object in our form with
     * the name 'submit'
     */
    if(filter_has_var(INPUT_POST, 'submit')){
        //GET FORM DATA
        /*
         * Taking the entered data from the form and assigning the values to variables
         */
        $name    = htmlspecialchars($_POST['name']);
        $email   = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        /*
         * We need validation for email, so
         * make sure the email, name, and message fields aren't
         * empty
         */
        if(!empty($email) && !empty($name) && !empty($message)){
            // Passed
            // Validate Email
            /*
             * Basically if all fields have been filled,
             * We are going to take $email and pass it through
             * filter_var and check to make sure we actually have a real
             * email address
             *
             * if it is not an email or, alert the user to
             * enter a valid email with a red alert
             *
             */
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            }else{
                // Passed
                // Set up recipient email
                $toEmail = 'tristan@gcans.com';
                // Subject
                $subject = 'Contact Request From '.$name;
                // Body of email
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$Message.'</p>
                ';
                // Email Headers
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "
                    \r\n";
                // Additional Headers
                $headers .= "From: " .$name. "<".$email.">"."\r\n";

                // Mail function
                if(mail($toEmail, $subject, $body, $headers)){
                    // Email sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                }else{
                    // Failed
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        }else{
            // Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Contact Us
    </title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-nav">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
            <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>
            <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                       value="<?php echo isset($_POST['name']) ? $name : ''?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control"
                       value="<?php echo isset($_POST['email']) ? $email : ''?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</body>
</html>