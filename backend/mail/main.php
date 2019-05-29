

<?php
   
   if(isset($_POST['submit'])){
        $name = $_POST['sender']; 
        $subj = $_POST['subject']; 
        $message = $_POST['message']; 

        $mailTo = "ashruum33@gmail.com";
        $headers = "From: ". $name;
     
        mail($mailTo, $subj, $message, $headers);
        header("Location: ../../index.php?mailsend");
   }
   
?>