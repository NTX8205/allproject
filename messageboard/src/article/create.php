<?php
include("../Config/header.php");
?>
<html lang="zh-TW">

<body>

<div>
    <div id="message">
        <form class="form-control" action="../api/article/create.php" method="post">
            <div class="mb-3">
                <input type="text" name="title"  placeholder="標題"/>
            </div>
            <div>
                <label for="content">內文：</label>
                <div class="mb-3">
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="內文"></textarea>
                </div>
            </div>
            <input type="submit" value="Submit"/>
        </form>
    </div>
</div>

</body>
</html>





