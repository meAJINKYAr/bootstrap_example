<!DOCTYPE html>
<?php
/*
$servername="localhost";
$username="root";
$password="";
$db="";

$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("<html><script>window.alert('Cannot connect to the database.$db./n.$conn->connect_error')</script></html>");
}
else{
    //echo("<html><script>window.alert('Connected to database $db');</script></html>");
}
*/
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];

        echo "<hr>";
        echo "UNAME: ".$uname;
        echo "<br>";
        echo "PASS: ".$pass;
        echo "<hr>";
        ?>
        <a href="index.html"><button>CANCEL SIGN IN</button></a>
        <h5 >You have <span id="timer"></span> sec</h5>
        <script>
            var myVar = setInterval(myTimer,1000);
            var t= 6;
            function myTimer() {
            var d = new Date();
            document.getElementById("timer").innerHTML = t-1;
            t=t-1;
            if(t<=0){
                clearTimeout(myVar);
            }
            }
        </script>
    </body>
</html>
