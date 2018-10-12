<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>演習</title>
</head>
<body>
<?php
if (isset($_POST["btn1"])) {
    $btn = htmlspecialchars($_POST["btn1"], ENT_QUOTES, "UTF-8");
    switch ($btn) {
        case "登録":
 echo "登録処理を実行";
 break;
        case "変更":
 echo "変更処理を実行";
 break;
        case "削除":
 echo "削除処理を実行";
 break;
        default:
  echo "エラー";
 exit;
    }
}
?>
<form method="POST" action="">
<input type="submit" value="登録" name="btn1">　
<input type="submit" value="変更" name="btn1">　
<input type="submit" value="削除" name="btn1">　
</form>
</body>
</html>
