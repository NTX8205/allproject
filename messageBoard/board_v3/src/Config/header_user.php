<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/user.css">
    <link rel="stylesheet" href="../../css/practice.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
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