<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題11</title>
</head>

<body>
    <p>
      <?php
      //連想配列に値を代入
      $vegetables = ['name' => '玉ねぎ', 'price' => 200, 'area' => '北海道'];
      $key_translation = ['name' => '名前', 'price' => '値段', 'area' => '産地'];

      //連想配列$vegetablesのキーと値を順番に出力
      foreach ($vegetables as $key => $value) {
        $japanese_key = $key_translation[$key];
        echo "{$japanese_key}：{$value}<br>";
      }
      ?>
    </p>
</body>

</html>