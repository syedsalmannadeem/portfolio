<?php

if (isset($_POST["name"]) && !empty($_POST["name"])) { ?>
   
    <?php 
     
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $number = $_REQUEST["number"];
    $message = $_REQUEST["message"];

     
     $to = "support@chicgen.com";
     $subject = "LEAD RECEIVED - " . $name;
     $txt = "NAME : ". $name . "\nEMAIL : " . $email ."\nPHONE : " . $number . "\nMESSAGE : " . $message;

     
     $headers = "From: ". $email . "\r\n";
     
     
     mail($to,$subject,$txt,$headers);
     

    ?>
    <script type="text/javascript">
        window.location.replace("https://chicgen.com/syed-salman-nadeem/");
    </script>
<?php } else {
    ///redirect to index file
?>
    <script type="text/javascript">
        window.location.replace("https://chicgen.com/syed-salman-nadeem/");
    </script>

<?php } ?>