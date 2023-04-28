<?php 
$lname = $_POST['name'];
$ldate = $_POST['date'];
$lschool =$_POST['school'];
$lresp = $_POST['resp'];
$lleaves = $_POST['leaves'];
$lstart = $_POST['start'];
$lend = $_POST['end'];
$lclass = $_POST['class'];
$lroll = $_POST['roll'];
$lphone = $_POST['phone'];
$lread = $_POST['reason'];
// now the main content of this page starts
$message = "
<style>
body{
    background:linear-gradient(60deg,orangered,blue,yellow);
}
    h3 {
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
    <h3>Leave Application for $lleaves Days</h3>
    <p>
        Respected <strong>$lresp</strong>,<br><br>
        I am writing to request a leave of absence from <strong>$lschool</strong> for <strong>$lleaves</strong> days starting from <strong>$lstart</strong> to <strong>$lend</strong>. The reason for my leave is <strong>$lread</strong>.<br><br>
        I would like to assure you that I have completed all the necessary coursework and assignments before applying for this leave. I will also make sure to catch up on any missed classes and complete any pending work upon my return.<br><br>
        I understand the importance of regular attendance and academic commitment, and I assure you that I will make every effort to catch up on missed coursework and maintain my academic progress.<br><br>
        I kindly request you to grant me the leave and provide me with any guidance or support required to ensure a smooth transition during my absence.<br><br>
        Thank you for your understanding and support.<br><br>
        Yours faithfully,<br>
        <strong>$lname</strong><br>
        <strong>$lclass</strong><br>
        <strong>$lroll</strong><br>
        <strong>$lphone</strong><br>
    </p>
</div>
";

echo $message;
?>

?>