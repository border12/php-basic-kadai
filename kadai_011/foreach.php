<!DOCTYPE>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
<p>
  <?php
  // 連想配列を宣言・代入
  $product_data = [ '名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道' ];
  

  foreach($product_data as $key => $value){
    echo "{$key} : {$value}<br>";
  };
  ?>
</p>
</body>
</html>