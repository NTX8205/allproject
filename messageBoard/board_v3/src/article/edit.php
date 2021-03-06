<?php
include("../../Config/header.php");
?>
<body style="background-color: #F0F0F0;">
    <title>編輯留言</title>
    <link rel="stylesheet" href="../../../css/article/list.css">
    <style>
        .card {
            width: 500px;
            margin: 0 auto;
        }

        .form {
            width: 300px;
            margin: 0 auto;
        }
    </style>
    <div class="card mt-5">
        <h1 class="mt-4 text-center">Edit Comment</h1>
        <div class="form p-3">
            <form method="POST" action="update.php">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-light bg-dark">文章標題: </span>
                    </div>
                    <input class="form-control" type="text" name="title" required="required" value="<?php echo $statement[0]['title'] ?>" placeholder="輸入暱稱">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-light bg-dark">評論: </span>
                    </div>
                    <textarea class="form-control" name="content" required="required" cols="40" rows="5" placeholder="輸入評論"><?php echo $statement[0]['content'] ?></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $statement[0]['id'] ?>">
                <input type="submit" name="submit" class="btn btn-dark" value="修改資料">
            </form>
        </div>
    </div>
</body>

</html>