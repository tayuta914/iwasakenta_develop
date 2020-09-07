<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  </style>
  <title>繰り返し</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>繰り返し</h1>
      <h3>繰り返し文を使って以下の問題を解きなさい</h3>
      <a href="../index.php">戻る</a>
    <div>
    $firstNumber = 2; </br>
    </div>
    1.for文を使って変数を10回加算し全て出力しなさい</br>
    例:3,4… // 数字の間にはカンマをつけなさい
    <div>
    <?php
      $firstNumber = 2;
      for($i = 1; $i <=  10; $i++){
        echo ($i * $firstNumber) . "," ;
        }

    ?>
    </div>
    2.while文を使って変数を10回加算し全て出力しなさい</br>
    例:3,4… // 数字の間にはカンマをつけなさい
    <div>
    <?php
      $i = 0;
      while($i < 10) {
        echo ($i += 1) * $firstNumber . "," ;
      }
    ?>
    </div>
    3.for文とif文を使って20以下の奇数を出力しなさい</br>
    <div>
    <?php
     for($i = 1; $i <= 20; $i++){
       if ( $i % 2 == 1)
      echo $i. ",";
     }
    ?>
    </div>
    4.for文とif文を使って20以下の偶数を出力しなさい</br>
    <div>
    <?php
    for($i = 1; $i <= 20; $i++){
      if ( $i % 2 == 0)
     echo $i. ",";
    }
    ?>
    </div>
  </body>
</html>