<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../css/practice.css">
</head>

<body>
    <header>
        <div class="container">
            <div>
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="../article/list.php">
                        <span>留言板</span>
                    </a>
                    <ul class="drop-down">
                        <li>
                            <?php if (isset($_SESSION['userName'])) { ?>
                                <a href="../api/user/login.php">登出</a>
                            <?php } else { ?>
                                <a href="../user/login.php">登入</a>
                            <?php } ?>
                        </li>
                        <li>
                            <?php if (isset($_SESSION['userName'])) { ?>
                                <h5><?php echo $_SESSION['userName'] ?></h5>
                            <?php } else { ?>
                                <a href="../user/register.php">註冊</a>
                            <?php } ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="d-grid gap col-10 mx-auto container">
        <a href="create.php" class="btn btn-outline-primary" type="button">創建文章</a>
    </div>