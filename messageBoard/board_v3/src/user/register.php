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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>註冊</title>
</head>

<body>
    <?php if (isset($_SESSION['userName'])) { ?>
        <div class="box">
            <h2 class="mb-3" style="text-align: center;">已登入，無法註冊</h2>
            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <a href="../api/user/login.php" class="btn btn-outline-danger register" type="button">登出</a>
            </div>
        </div>
    <?php } else { ?>
        <div class="box">
            <h2 class="mb-3">註冊</h2>
            <form action="../api/user/register.php" method="post">
                <div class="mb-3">
                    <label for="userName" class="form-label">使用者名稱 : </label>
                    <input type="text" class="form-control" id="userName" name="userName" value="" placeholder="輸入名稱" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">信箱 : </label>
                    <input type="email" class="form-control" id="email" name="emailAddress" value="" placeholder="輸入信箱" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">密碼 : </label>
                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="輸入密碼" required>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <button class="btn btn-outline-primary" type="submit">註冊</button>
                    <a href="./login.php" class="btn btn-outline-secondary register" type="button">登入</a>
                </div>
            </form>
        </div>
    <?php } ?>
</body>

</html>