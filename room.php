<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module6B_Ans</title>
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">  
</head>
<body>
<h1>Form Input</h1>
   <h2>GET Data</h2>

<?php
/* 
Name: David Ndoma
Filename: courses

*/

//This is a comment.

  if ($_SERVER["REQUEST_METHOD]=="POST){

   $name=$_POST["name"];
   echo "name:". $name."<br/>";
   $GWID=$_POST["GWID"];
   echo "GWID:". $GWID."<br/>";
   $Date=$_POST["date"];
   echo "Date:". $date."<br/>";
   $MeetingTime=$_POST["time"];
   echo "Meeting TIme:". $time."<br/>";
   $Active=$_POST["status"];
   echo "Active:". $Active."<br/>";
//Create a database connection for room.php
  }
?>

   </body>
</html>