<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    
    // Check if the attachment is provided
    if(isset($_FILES['attachmentFile'])){
        $file_name = $_FILES['attachmentFile']['name'];
        $temp_name = $_FILES['attachmentFile']['tmp_name'];
        $file_type = $_FILES['attachmentFile']['type'];
        $file_size = $_FILES['attachmentFile']['size'];
        
        // Check if file is uploaded successfully
        if($file_name != ""){
            // Read the file
            $file = fopen($temp_name, "rb");
            $content = fread($file, $file_size);
            fclose($file);
            $encoded_content = chunk_split(base64_encode($content));
            
            // Add attachment headers
            $boundary = md5(time());
            $headers = "From: your_email@example.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";
            $headers .= "This is a multi-part message in MIME format.\r\n";
            $headers .= "--" . $boundary . "\r\n";
            
            // Add email body
            $headers .= "Content-type:text/plain; charset=iso-8859-1\r\n";
            $headers .= "Content-Transfer-Encoding: 7bit\r\n";
            $headers .= $body."\r\n";
            $headers .= "--" . $boundary . "\r\n";
            
            // Add attachment
            $headers .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
            $headers .= "Content-Transfer-Encoding: base64\r\n";
            $headers .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $headers .= $encoded_content."\r\n";
            $headers .= "--" . $boundary . "--\r\n";
        }
    } else {
        // Send email without attachment
        $headers = "From: saron9291@gmail.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "Reply-To: $to\r\n";
    }

    // Send the email
    if (mail($to, $subject, "", $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
