<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="style.css">

<title>PHPの演習</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHPの演習</h1>    
</header>

<main>
<h2>Cookieに値を保存する</h2>
<pre>
変数の値： <?php print(isset($value)); ?>

Cookieの値： <?php print($_COOKIE['save_message']); ?>
</pre>
</main>
</body>
</html>