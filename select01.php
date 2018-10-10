<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
<body>
<?php
$kantou = [
'blank'      => '選択下さい。',
'ibaraki'    => '茨城県',
'tochigi'    => '栃木県',
'gunma'      => '群馬県',
'saitama'    => '埼玉県',
'chiba'      => '千葉県',
'tokyo'      => '東京都',
'kanagawa'   => '神奈川県',
];
?>

<form method="post" action="receive01.php">
関東の都県を選択<br/>
<p>
<select name="kantou">
<?php foreach($kantou as $key => $value){ ?>
	<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
<?php } ?>
</select>
</p>
<p><input type="submit" value="送信"></p>
</form>
</body>
</html>
