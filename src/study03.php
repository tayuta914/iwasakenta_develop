<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
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
    ?>
    </div>
    2."1."で作成した配列に、オレンジを追加しなさい。</br>
    <div>
    <?php
    // ココにコーディング
    ?>
    </div>
    3."2."で作成した配列の値(value)を好きな料理に全て上書きして出力しなさい。</br>
    <div>
    <?php
    // ココにコーディング
    ?>
    </div>
    4.array()と以下の表を使って連想配列を作成し出力しなさい。</br>
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
    <div>
    <?php
    // ココにコーディング
    ?>
    </div>
    5. "4."で作成した連想配列とforeachとif文を使って例文を出力しなさい。</br>
    例: </by>
    あたなが選んだのはnoteで600円です</by>
    <div>
    <?php
  // ココにコーディング
    $item = "key";
    $value = "value";
    echo "あなたが選んだのは". $item. "で". $value. "です。";
    ?>
    </div>
  </body>
</html>