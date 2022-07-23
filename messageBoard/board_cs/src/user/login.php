<?php
include("../Config/header_user.php")
?>
    <title>登入</title>
    <?php if (isset($_SESSION['userName'])) { ?>
        <div class="box">
            <h2 class="mb-3" style="text-align: center;">登入成功</h2>
            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <a href="../api/user/login.php" class="btn btn-outline-danger register" type="button">登出</a>
            </div>
        </div>
    <?php } else { ?>
        <div class="box">
            <h2>登入</h2>
            <form action="../api/user/login.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">信箱 : </label>
                    <input type="email" class="form-control" id="email" name="emailAddress" value="" placeholder="輸入信箱" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">密碼 : </label>
                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="輸入密碼" required>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <button class="btn btn-outline-primary" type="submit">登入</button>
                    <a href="./register.php" class="btn btn-outline-secondary register" type="button">註冊</a>
                </div>
            </form>
        </div>
    <?php } ?>
</body>

</html>