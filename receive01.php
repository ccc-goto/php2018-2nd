<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>formデータ出力</title>
  </head>
<body>
<?php
$pref = [
'blank'      => '選択下さい。',
'ibaraki'    => '茨城県',
'tochigi'    => '栃木県',
'gunma'      => '群馬県',
'saitama'    => '埼玉県',
'chiba'      => '千葉県',
'tokyo'      => '東京都',
'kanagawa'   => '神奈川県',
];
echo "選択された住所は";
$pSelect=$_POST['kantou'];
echo $pref[$pSelect];
echo "です。";
?>
</body>
</html>
