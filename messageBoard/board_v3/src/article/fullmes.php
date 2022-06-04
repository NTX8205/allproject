<?php
require "../model/articles.php";
require '../model/users.php';
require '../../vendor/autoload.php';
include("../Config/header.php");
$SingalArticle = new App\Model\Article();
$users = new App\Model\User();
$id = $_GET['id'];
$statement = $SingalArticle->getSingalArticle($id);
if (isset($_SESSION['userName'])) {
    $user = $users->findUser($_SESSION['userName']);
}

?>
<title><?php echo $statement['title'] ?></title>
    <div class="article container">
        <div class="card mx-5">
            <p><?php echo $statement['content']; ?></p>
            <?php if (isset($_SESSION['userName'])) { ?>
                <?php if ($statement['user_id'] == $user['id']) { ?>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="../api/article/edit.php?id=<?php echo $statement['id'] ?>">
                            <input type="submit" value="修改" class="btn btn-outline-success" style="float:right">
                        </a>
                        <form action="../api/article/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $statement['id'] ?>">
                            <input type="submit" value="刪除" class="btn btn-outline-danger" style="float:right">
                        </form>
                    </div>
                <?php } ?>
            <?php } ?>
            <div class="row">
                <div class="col-6">
                    <label class="form-label">創建時間 :</label>
                    <span class="createTime"><?php echo $statement['created_at']; ?> </span>
                </div>
                <div class="col-6">
                    <label class="form-label">最後更新時間 :</label>
                    <span class="updateTime"><?php echo $statement['updated_at']; ?> </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>