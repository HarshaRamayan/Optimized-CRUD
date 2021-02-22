
<html>
    <head>
       <center> <h1>Inserting Values to Database</h1></center>
    </head>
    <body>
    <?php include "link.html"; ?>
<center>
    <form method="post" action="">
<h4>Enter the name you want to insert:</h4> <input type="text" name="name" required><br><br>
<h4>Enter the job of the person you want to insert:</h4> <input type="text" name="job" required><br><br>
<h4>Enter the salary of the person you want to insert:</h4> <input type="text" name="salary" required><br><br>  
<input type="submit">
</form>
</center>

<?php 
echo "<center>";
if(isset($_REQUEST["name"]))
{

    include "db.php";
    $createObject = new databasefunctions(); 
    $createObject->create();
}
echo "</center>";
?>
</body>
</html>
