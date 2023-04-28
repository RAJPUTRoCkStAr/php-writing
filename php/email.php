<?php 
$emname = $_POST['ename'];
$emanager = $_POST['manager'];
$emend = $_POST['eend'];
$emstart = $_POST['estart'];
$emreason = $_POST['ereason'];
$emcollegue = $_POST['collegue'];
$emsubject = $_POST['subject'];
$emduration = $_POST['duration'];

// now the main ontent of this page starts
$message = "
<style>
body{
    background:linear-gradient(60deg,orangered,blue,yellow);
}
    h4 {
        font-family: Arial, sans-serif;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }
    .container {
        font-family: Arial, sans-serif;
        color: #333;
        margin: 0 auto;
        max-width: 600px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
    }
    .container p {
        margin-bottom: 20px;
        line-height: 1.5;
        text-align: justify;
    }
    .container strong {
        font-weight: bold;
    }
</style>
<div class='container'>
    <h4>Subject: $emsubject</h4>
    <p>
        Dear $emanager,<br><br>
        I am writing to formally request a leave of absence from work for $emduration starting from $emstart to $emend. The reason for my leave is $emreason.<br><br>
        I have completed all my pending tasks and have delegated my responsibilities to $emcollegue. I will also be available over email or phone during my leave to address any urgent matters that require my attention.<br><br>
        Please let me know if there are any additional steps I need to take before my leave or if you need any further information.<br><br>
        Thank you for considering my request.<br><br>
        Sincerely,<br>
        $emname
    </p>
</div>
";

echo $message;
?>