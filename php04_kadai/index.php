<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブックマーク登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>


<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">ブックマーク一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ブックマーク</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>URL：<input type="text" name="url"></label><br>
                <label>メモ：<br><textArea name="text" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="登録">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>

</html>
