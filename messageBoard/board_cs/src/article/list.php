<?php
include("../Config/header.php");
require "../model/article.php";
require '../../vendor/autoload.php';
$ArticleList = new App\Model\Article();
$statement = $ArticleList->getAllArticle();
?>
<html lang="zh-TW">
<link rel="stylesheet" type="text/css" href="../../css/article/list.css">

<body>
    <div class="d-grid gap col-10 mx-auto container">
        <a href="create.php" class="btn btn-outline-primary" type="button">創建文章</a>
    </div>
    <div>
        <div class="article">
            <?php foreach ($statement as $row) { ?>
                <div class="card mx-5">
                    <div>
                        <a href="../api/article/view.php?id=<?php echo $row['id'] ?>">
                            <h5 class="article-title"><?php echo $row['id'] . " " . $row['title']; ?></h5>
                        </a>
                    </div>
                    <?php echo mb_strimwidth($row['content'], 0, 10, "...", "utf-8"); ?>

                    <span class="time"><?php echo $row['created_at']; ?> </span>
                    <span class="time"><?php echo $row['updated_at']; ?> </span>
                </div>
            <?php } ?>
        </div>
    </div>
</body>