<?php
    require("connect.php");

    $_POST["method"]=isset($_POST["method"]) ? $_POST["method"] : null;
    $_POST["id"]=isset($_POST["id"]) ? $_POST["id"] : null;
    $fun = $_POST["method"];
    $id = $_POST["id"];

    $method = new messageMethod($connect);

    switch($fun){
        case "add":
            $method->add();
            break;
        case "edit":
            $method->edit($id);
            break;
        case "del":
            $method->delete($id);
            break;
        default:
            echo "no";
        break;
    }

    class messageMethod{

        function __construct($connect)
        {
            $this->connect=$connect;
        }

        function add(){
            $sql = "INSERT INTO `mes` (`name`, `messagers`) VALUES ('$_POST[user]', '$_POST[messages]')";
            header("location:board.php");

            if (mysqli_query($this->connect, $sql)) {
                return true;
            } else {
                return false;
            }
            mysqli_close($this->connect);
        }

        function edit($id){
            $sql = "UPDATE `mes` SET `name` = '$_POST[user]', `messagers` = '$_POST[messages]' WHERE `mesboard`.`id` = '$id'";
            header("location:board.php");
            if (mysqli_query($this->connect, $sql)) {
                return true;
            } else {
                return false;
            }
            mysqli_close($this->connect);
        }
        
        function delete($id){
            $sql = "DELETE FROM mes WHERE id=" . "$id";
            header("location:board.php");
            if (mysqli_query($this->connect, $sql)) {
                return true;
            } else {
                return false;
            }

            mysqli_close($this->connect);
        }

    }
?>