<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  </style>
  <title>四則演算</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>四則演算</h1>
    <h3>四則演算を使って以下の問題を解きなさい</h3>
      <a href="../index.php">戻る</a>
    <div>
    $firstNumber = 9; </br>
    $secondNumber = 3; </br>
    </div>
    1.変数を加算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    $firstNumber = 9;
    $secondNumber = 3;
    $kasan = $firstNumber + $secondNumber;
    //$kasan = 9 + 3;

    echo "加算：". $kasan;
    ?>
    </div>
    2.変数を減算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    //$firstNumber = 9;
    //$secondNumber = 3;
    $gensan = $firstNumber - $secondNumber;

    echo "減算：". $gensan;
    ?>
    </div>
    3.変数を乗算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    //$firstNumber = 9;
    //$secondNumber = 3;
    $jyousan = $firstNumber * $secondNumber;

    echo "乗算：". $jyousan;
    ?>
    </div>
    4.変数を除算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    //$firstNumber = 9;
    //$secondNumber = 3;
    $jyosan = $firstNumber / $secondNumber;

    echo "除算：". $jyosan;
    ?>
    </div>
    5.四則演算子を使ってBMI値の計算結果を出力しなさい</br>
    身長 = 175cm</br>
    体重 = 70kg</br>
    <a href="https://keisan.casio.jp/exec/system/1161228732" target="_blank">BMIとは</a>
    <div>
    <?php
    // ココにコーディング
    $height = 175 * 0.01;
    $weight = 70;
    $bmi = $weight / ($height * $height);
    
    //echo "BMI：".floor($bmi);
    echo "BMI：". round($bmi, 2);
    ?>
    </div>
    6.四則演算子を使ってBMI値の計算結果とif文でBMI判定を出力しなさい</br>
    身長 = 175cm</br>
    体重 = 70kg</br>
    例: 
    あなたのBMIは〇〇で、"痩せすぎor通常体重or肥満(１度)or肥満(2度)肥満(3度)or肥満(4度)"です。</br>

    <div>
    <?php
    // ココにコーディング
    $BMIResult = round($bmi, 2);
    $figure = "BMI判定";
    
    //18.5未満：痩せ過ぎ, 18.5〜25未満：通常体重, 25〜30未満：肥満(1度), 30〜35未満：肥満(2度), 35〜40未満：肥満(3度), 40以上：肥満(4度)
    if($BMIResult <= 18.5) {
      $figure = "痩せ過ぎ";
    }
    else if($BMIResult >= 18.5 && $BMIResult <= 25) {
      $figure = "通常体重";      
    }
    else if($BMIResult >= 25 && $BMIResult <= 30) {
      $figure = "肥満(1度)";
    }
    else if($BMIResult >= 30 && $BMIResult <= 35) {
      $figure = "肥満(2度)";
    }
    else if($BMIResult >= 35 && $BMIResult <= 40) {
      $figure = "肥満(3度)";
    }
    else {
      $figure = "肥満(4度)";
    }

    echo "BMI判定結果：" . "あなたのBMI値は". $BMIResult . "で、" . $figure . "です。";
    ?>
    </div>
  </body>
</html>