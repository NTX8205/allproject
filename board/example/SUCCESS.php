//test

<?php
session_start();
echo "<br>";
echo "hello,welcome to here ";
echo "(".$_SESSION['username'].")";
echo "<br>";


?>

<!DOCTYPE html>
<body>
    <button type="button" ><a href="login.php">go home</a></button>
    
    <form action="../status/account.php?id=delete" method="POST">
    <input type="submit" value="delete">
    </form>
</body>

