<html>
<head>
    <meta charset="UTF-8">
    <title>修改文章</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body  style="background-color: #F0F0F0;">
<div class="card mt-5">
    <h1 class="mt-4 text-center">Edit Comment</h1>
    <div class="form p-3">
        <form method="POST" action="./update.php">
            <div class="mb-3">
                <span class="label-col-table input-group-text text-light bg-dark">文章標題: </span>
                <input class="form-control" type="text" name="title" required="required" value="<?php echo $statement[0]['title'] ?>" placeholder="輸入暱稱">
            </div>
            <div class="mb-3">
                <span class="label-col-table input-group-text text-light bg-dark">評論: </span>
                <textarea class="form-control" name="content" required="required" cols="40" rows="5" placeholder="輸入評論"><?php echo $statement[0]['content'] ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $statement[0]['id'] ?>">
            <input type="submit" name="submit" class="btn btn-dark" value="修改資料">
        </form>
    </div>
</div>
</body>

</html>

