<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../../css/practice.css">
    <link rel="stylesheet" type="text/css" href="../../../css/practice.css">
    <link rel="stylesheet" type="text/css" href="../../../css/article/view.css">
    <title><?php echo $statement['title']; ?></title>
</head>

<body style="background-color: #F0F0F0;">
    <header>
        <div class="container">
            <div>
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="../../article/list.php">
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
        <div class="container card mt-5 ">
            <div>
                <h1 class="p-4 text-center test"><?php echo $statement['title']; ?></h1>
            </div>
            <div>
                <?php echo $statement['content']; ?>
            </div>
            <?php if (isset($_SESSION['userName'])) { ?>
                <?php if ($statement['user_id'] == $user['id']) { ?>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="edit.php?id=<?php echo $statement['id'] ?>">
                            <input type="submit" value="修改" class="btn btn-outline-success" style="float:right">
                        </a>
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $statement['id'] ?>">
                            <input type="submit" value="刪除" class="btn btn-outline-danger" style="float:right">
                        </form>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>]
    </body>

</html>