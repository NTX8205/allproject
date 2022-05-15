<?php
    include("../Config/header.php");
    require "../model/articles.php";
    $statement = getAllArticle();
?>
<html lang="zh-TW">

<body>
    <a href="/message_board/article/create.php">創建文章</a>
    <div>
        <div class="">
            <?php foreach ($statement as $row) { ?>
                <div class="card mx-5">
                    <h5><?php  echo $row['id'] ;echo $row['title']; ?></h5>
                    <?php  echo $row['content']; ?>
                    <div>
                        <a href="../api/article/edit.php?id=<?php echo $row['id'] ?>">
                            <input type="submit" value="修改" class="btn btn-dark mx-3" style="float:right">
                        </a>
                        <form method="POST" action="comment/delete_comment.php" onsubmit="return myform()">
                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
                            <input type="submit" value="刪除" class="btn btn-danger mx-3" style="float:right">
                        </form>
                    </div>
                    <span><?php  echo $row['created_at'] ;?></span>
                    <span><?php echo $row['updated_at']; ?> </span>
                </div>
            <?php } ?>
        </div>
    </div>
</body>






