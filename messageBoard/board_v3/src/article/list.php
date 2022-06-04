<?php
include("../Config/header.php");
require "../model/articles.php";
require '../../vendor/autoload.php';
$ArticleList = new App\Model\Article();
$statement = $ArticleList->getAllArticle();
?>
<html lang="zh-TW">
<link rel="stylesheet" type="text/css" href="../../css/article/list.css">
<title>留言板</title>

<body>

    <div class="d-grid gap col-10 mx-auto container">
        <a href="create.php" class="btn btn-outline-primary" type="button">創建文章</a>
    </div>
    <div>
        <div class="article">
            <?php foreach ($statement as $row) { ?>
                <div class="card mx-5">
                    <h5 class="article-title">
                        <a href="fullmes.php?id=<?php echo $row['id'] ?>">
                            <?php echo $row['title']; ?>
                        </a>
                    </h5>
                    <p><?php echo $row['content']; ?></p>
                    <span class="time"><?php echo $row['created_at']; ?> </span>
                    <span class="time"><?php echo $row['updated_at']; ?> </span>
                </div>
            <?php } ?>
        </div>
    </div>
</body>