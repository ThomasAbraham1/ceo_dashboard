<?php
session_name('ID');
ini_set('session.use_cookies', 1);
session_start();
include('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

?>
<?php


// Sign up and session creation
if ($_POST['Function']) {
    if ($_POST['Function'] == 'signUp') {
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        function signUp($userName, $email, $password)
        {
            global $conn;
            // Checking if user already exists 
            $sql = "SELECT * FROM user_details WHERE username = '$userName'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 1) return "Account already exists, try signing up";

            // Registering the new user into user_details table
            $sql = "INSERT INTO `user_details` (`role`, `username`, `password`, `email`,`firstname`, `lastname`, `phoneno`, `designation`, `img`) VALUES ('ceo', '$userName', '$password', '$email', '', '', '', '', '') ";
            $result = mysqli_query($conn, $sql);
            if (!$result) return "Error: " . $sql . "<br>" . $conn->error;
            $sql = "SELECT * FROM user_details WHERE username = '$userName'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $userId = $row["username"];
            }
            if (mysqli_num_rows($result) != 1) return "Error in acount info retrieval";
            $_SESSION["userId"] = $userId;
            // close database connection
            mysqli_close($conn);
            return "OK";
        }
        echo signUp($userName, $email, $password);
    }

    // Add user
    if ($_POST['Function'] == 'addUser') {
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNo = $_POST['phoneNo'];
        $designation = $_POST['designation'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        function addUser($userName, $email, $password, $phoneNo, $designation, $firstName, $lastName)
        {
            global $conn;

            // Image Processor
            // Attachment file save section
            if (!(empty($_FILES['profileImage']['name'][0]) == '' ? 0 : 1)) {

                // Code for retrieving the uploaded file and move it to physical location
                for ($i = 0; $i < count($_FILES['profileImage']['name']); $i++) {
                    if ($_FILES["profileImage"]["error"][$i] > 0) {
                        return "Error: " . $_FILES["profileImage"]["error"][$i];
                    } else {
                        if ($_FILES['profileImage']['error'][$i] === UPLOAD_ERR_OK) {

                            // $mime_type = mime_content_type($_FILES['profileImage']['tmp_name'][$i]);
                            // if ($mime_type === 'image/png' || $mime_type === 'image/jpeg' || $mime_type === 'image/jpg') {
                            $original_file_name = $_FILES["profileImage"]["name"][$i];

                            // Use pathinfo to get the file extension
                            $file_info = pathinfo($original_file_name);
                            $file_extension = $file_info['extension'];
                            $new_file_name = $userName . '.' . $file_extension;
                            //uploading file
                            move_uploaded_file($_FILES["profileImage"]["tmp_name"][$i], $_SERVER['DOCUMENT_ROOT'] . "/ceo_dashboard/images/userProfileImages/" . $new_file_name);
                        }
                    }
                }
            }
            $sql = "INSERT INTO `user_details` ( `role`, `username`, `password`, `email`,`firstname`, `lastname`, `phoneno`, `designation`, `img`) VALUES ( 'staff', '$userName', '$password', '$email', '$firstName', '$lastName', '$phoneNo', '$designation', '/ceo_dashboard/images/userProfileImages/ $new_file_name') ";
            $result = mysqli_query($conn, $sql);
            if (!$result) return "Error: " . $sql . "<br>" . $conn->error;
            // close database connection
            mysqli_close($conn);
            return "OK";
        }
        echo addUser($userName, $email, $password, $phoneNo, $designation, $firstName, $lastName);
        // print_r($_FILES['profileImage']['name']);
    }


    // Sign In
    if ($_POST['Function']) {
        if ($_POST['Function'] == 'signIn') {
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            function signUp($userName, $password)
            {
                global $conn;
                $sql = "SELECT * FROM user_details WHERE username = '$userName'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $userId = $row["username"];
                    $passwordFromDatabase = $row["password"];
                    $designation = $row['designation'];
                }
                
                if (mysqli_num_rows($result) == 0) return "Account doesn't exit, please sign up!";
                if ($password != $passwordFromDatabase) return "Password incorrect!";
                $_SESSION["userId"] = $userId;
                // close database connection
                mysqli_close($conn);
                return $designation;
            }
            echo signUp($userName, $password);
        }
    }
}


if (isset($_POST['Function'])) {
    if ($_POST['Function'] == 'sendEmail') {
        $toField = $_POST['toField'];
        $subject = $_POST['subject'];
        $emailBody = $_POST['emailBody'];
        function sendEmail($toField, $subject, $emailBody)
        {

            // Email code
            // Email sender 
            //Load Composer's autoloader
            require 'vendor/autoload.php';
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'saron9291@gmail.com';                     //SMTP username
                $mail->Password   = 'yfatdjignmlmihip';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('saron9291@gmail.com', 'CEO - FELIX.CO');
                $mail->addAddress($toField, 'Staff');     //Add a recipient
                // $mail->addReplyTo('info@example.com', 'Information');
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments

                // } else {
                //     // file has an invalid type
                //     return "Error: Invalid File Type.";
                // }

                if (!(empty($_FILES['studentProfileImage']['name'][0]) == '' ? 0 : 1)) {
                    // Code for retrieving the uploaded file and move it to physical location
                    for ($i = 0; $i < count($_FILES['attachmentFile']['name']); $i++) {
                        if ($_FILES["attachmentFile"]["error"][$i] > 0) {
                            return "Error: " . $_FILES["attachmentFile"]["error"][$i];
                        } else {
                            // $mime_type = mime_content_type($_FILES['attachmentFile']['tmp_name'][$i]);
                            // if ($mime_type === 'image/png' || $mime_type === 'image/jpeg' || $mime_type === 'image/jpg') {
                            $original_file_name = $_FILES["attachmentFile"]["name"][$i];

                            // Use pathinfo to get the file extension
                            $file_info = pathinfo($original_file_name);
                            $file_extension = $file_info['extension'];
                            // $new_file_name = $_FILES["attachmentFile"]["name"][$i];

                            //uploading file
                            // move_uploaded_file($_FILES["attachmentFile"]["tmp_name"][$i], "./emailAttachments/" . $new_file_name);
                            $mail->addAttachment($_FILES["attachmentFile"]["tmp_name"][$i], $original_file_name);    //Optional name

                        }
                    }
                }
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "$subject";
                $mail->Body    = "$emailBody";
                $mail->AltBody = "-";
                $mail->send();
                $emailResult = 'Mail has been successfully sent!';
            } catch (Exception $e) {
                $emailResult = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            $responseArray = array();
            $responseArray[] = 'OK';
            $responseArray[] = $emailResult;

            return json_encode($responseArray);
        }
        print_r(sendEmail($toField, $subject, $emailBody));
    }
}

?>