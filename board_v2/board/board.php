<?php

include("connect.php");
$sql = "SELECT * FROM `mes` ORDER BY id ASC";
if ($result = mysqli_query($connect, $sql)) {
    $rowcount = mysqli_num_rows($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/allproject/board_v2/mes.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/allproject/board_v2/mes.js"></script>
    <title>留言板</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h2>留言板</h2>
            </a>
        </div>
    </nav>

    <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#newmes">新增留言</button>
    </div>

    <div class="mesboard container">
        
        <?php if ($rowcount > 0) { ?>
        <div class="row row-cols-3">
        <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="card col">
                <div class="card-body">
                    <form action="/allproject/board_v2/board/function.php" method="post">
                        <h5 class="card-title"id="user"><?php echo $row["name"] ?></h5>
                        <p class="card-text" id="mes"><?php echo $row["messagers"] ?></p>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
                            <a href="edit.php?id=<?php echo $row["id"] ?>"class=" btn btn-outline-warning value=edit">編輯</a>
                            <button type="submit" class="btn btn-outline-danger" id="del" name="method" value="del">刪除</button>
                            <input type="hidden" id="delid" name="id" value="<?php echo $row["id"] ?>">
                        </div>
                    </form>
                </div>
            </div>

        <?php    } ?>
            </div>
        <?php } else { ?>
            <h4 style='text-align: center;'>目前沒有留言</h4>
        <?php } ?>
        
    </div>

    <div class="modal fade" id="newmes" tabindex="-1" aria-labelledby="message" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="message">新增留言</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/allproject/board_v2/board/function.php" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="username" name="user" placeholder="名稱">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="content" name="messages" rows="3" placeholder="輸入內容"></textarea>
                        </div>

                        <div class="mb-3">
                            <input type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" value="關閉" id="close"></input>
                            <button type="submit" class="btn btn-outline-success" name="method" value="add">新增</input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editmes" tabindex="-1" aria-labelledby="message" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="message">編輯留言</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/allproject/board_v2/board/function.php" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="edtusername" name="user" value="">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="edtcontent" name="messages" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <input type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" value="關閉" id="close">
                            <button type="submit" class="btn btn-outline-success" name="method" value="edit">編輯</button>
                            <input type="hidden" id="edtidm" name="id" value="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>