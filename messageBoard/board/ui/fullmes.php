<?php
include("C:/xampp/htdocs/allproject/messageBoard/board/status/function.php");
$id = $_GET["id"];
$sql = "SELECT * FROM `mesboard` WHERE id = '$id'";
$result = mysqli_query($link, $sql) or die('MySQL query error');
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en" style="background-color: gray;">

<head>

    <title><?php echo $row["title"] ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap_4/bootstrap.min.css">
    <link rel="stylesheet" href="../css/board.css">
    <script src="../Bootstrap_4/jquery-3.5.1.min.js"></script>
    <script src="../Bootstrap_4/popper.min.js"></script>
    <script src="../Bootstrap_4/bootstrap.min.js"></script>


</head>

<body style="background-color: gray;">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../ui/index.php">
                    <h1>留言板</h1>
                </a>
            </div>

            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<a href="../status/account.php?id=delete" class="btn btn-outline-danger">登出</a>';
                } else {
                    echo '<a href="login.php" class="btn btn-outline-success">登入</a>';
                }
                ?>
                <li><a href="../ui/board.php" class="btn btn-outline-success">新增留言</a></li>
            </ul>
        </div>
    </nav>

    <div class="m-4">
        <div class="container">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4 class="center"><?php echo $row["title"] ?></h4>
                </div>
                <div class="card-body bg-light text-dark">
                    <div class="row">
                        <div class="col-2">
                            <img class="card-img-left" src="../img/0640572.png" alt="Card image" style="width: 100px;">
                            <div class="m-2">
                                <h4><?php echo $row["mesUser"] ?></h4>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="m-2">
                                <p><?php echo $row["messages"] ?></p>
                            </div>
                        </div>

                    </div>
                    <div class="right">

                        <?php if (isset($_SESSION['username'])) {
                            if ($_SESSION['username'] == $row['mesUser']) {
                                echo '<a href="../ui/edit.php?id=' . $row["id"] . '"class=\' btn btn-outline-warning value=edit\'>編輯</a>
                                    <a href="../status/function.php?id=' . $row["id"] . '&op=delete" class=\' btn btn-outline-danger\' value=delete onclick="return confirm(\'確定要刪除?\')">刪除</a>';
                                echo '<a href="../ui/respond.php?id=' . $row["id"] . '"class=\' btn btn-outline-info value=res\'>回覆</a>';
                            } else {
                                echo '<a href="../ui/respond.php?id=' . $row["id"] . '"class=\' btn btn-outline-info value=res\'>回覆</a>';
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="card-footer card bg-secondary text-white">
                    <div class="container">
                    <?php
                    $sql1 = "SELECT * FROM `resmesboard` ORDER BY `id` ASC";
                    $result1 = mysqli_query($link, $sql1) or die('MySQL query error');
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            if($row1["resid"]==$id){
                                echo '  
                                                <div class="row">
                                                    <div class="col-md-2"><h4>' . $row1["resname"] . '</h4></div>
                                                    <div class="col-md-10">' . $row1["resmes"] . '';
                                                    echo  '<div class="right">';
                                                        if (isset($_SESSION['username'])) {
                                                            if ($_SESSION['username'] == $row1['resname']) {
                                                                echo '<a href="../ui/editres.php?id=' . $row1["id"] . '&op='.$row["id"].'"class=\' btn btn-outline-warning value=edit\'>編輯</a>
                                                                    <a href="../status/function.php?id=' . $row1["id"] . '&op=del&mesid='.$row["id"].'" class=\' btn btn-outline-danger\' value=delete onclick="return confirm(\'確定要刪除?\')">刪除</a>';
                                                            }   
                                                        }
                                       echo         '</div>
                                        </div>
                                    </div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>