<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  table, th, td {
  border-collapse: collapse;
  border: 1px solid #ccc;
  line-height: 1.5;
}
td {
  padding: 5px;
}
  </style>
  <title>配列</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>配列</h1>
      <h3>配列の操作</h3>
      <a href="../index.php">戻る</a>
    <div>
    $apple = "リンゴ"; </br>
    $banana = "バナナ"; </br>
    $lemon = "レモン"; </br>
    </div>
    1.array()を使ってバナナ、リンゴ、レモンの配列を作り出力しなさい。</by>
    <div>
    <?php
    // ココにコーディング
    $fruit = [
      'バナナ',
      'リンゴ',
      'レモン'
    ];
    
    //print_r($fruit);
    // 配列の中身を出力
    foreach ($fruit as $result) {
      echo $result . "\n";
    }
    ?>
    </div>
    2."1."で作成した配列に、オレンジを追加しなさい。</br>
    <div>
    <?php
    // ココにコーディング
    // fruit配列にオレンジを追加
    $fruit[] = 'オレンジ';
    
    // オレンジ追加後の出力
    foreach ($fruit as $result) {
      echo $result . "\n";
    }
    ?>
    </div>
    3."2."で作成した配列の値(value)を好きな料理に全て上書きして出力しなさい。</br>
    <div>
    <?php
    // ココにコーディング
    // 好きな料理に置き換える配列
    $fruitReplace = array(0 => '寿司', 1 => '焼肉', 2 => '天ぷら', 3 => '串揚げ');
    
    // $fruit配列を$fruitReplace配列で上書き(置換)
    $fruitAfter = array_replace($fruit, $fruitReplace);
    foreach ($fruitAfter as $result) {
      echo $result . "\n";
    }
    ?>
    </div>
    4.array()と以下の表を使って連想配列を作成し出力しなさい。</br>
    <div>
    <table>
      <tbody>
      <tr>
        <th>key</th>
        <th>value</th>
      </tr>
      <tr>
        <td>"pen"</td>
        <td>"100円"</td>
      </tr>
      <tr>
        <td>"book"</td>
        <td>"400円"</td>
      </tr>
      <td>"note"</td>
      <td>"600円"</td>
      </tr>
      </tbody>
    </table>
    </div>
    <div>
    <?php
    // コーディング
    $keyValueList = array('pen' => '100円', 'book' => '400円', 'note' => '600円');
    print_r($keyValueList);
    ?>
    </div>
    5. "4."で作成した連想配列とforeachとif文を使って例文を出力しなさい。</br>
    例: </by>
    あたなが選んだのはnoteで600円です</by>
    <div>
    <?php
    // コーディング
    $item = "key";
    $value = "value";
    
    // keyValueListのkeyと値が'note'かつ'600円'であるとき例文を出力
    foreach ($keyValueList as $item => $value) {
      if ($item == 'note' && $value == '600円') {
        echo "あなたが選んだのは" . $item . "で" . $value . "です。";
      }
    }
    ?>
    </div>
  </body>
</html>