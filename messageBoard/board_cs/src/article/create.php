<?php
include("../Config/header.php");
?>
<title>新增留言</title>
<?php if (isset($_SESSION['userName'])) { ?>
    <div class="container">
        <div class="box">
            <h2 style="text-align:center;">新增留言</h2>
            <form action="../api/article/create.php" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">標題 : </label>
                    <input type="text" class="form-control" id="title" name="title" value="" placeholder="輸入標題" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">內容 : </label>
                    <textarea class="form-control" id="content" name="content" rows="3" placeholder="輸入內容" required></textarea>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <button class="btn btn-outline-success" type="submit">新增</button>
            </form>
        </div>
    </div>
<?php } else { ?>
    <meta http-equiv="refresh" content="0;url=../user/login.php">
<?php } ?>
</body>

</html>