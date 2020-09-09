<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  </style>
  <title>文字列操作</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>文字列操作</h1>
      <h3>文字列の置き換えや操作</h3>
      <a href="../index.php">戻る</a>
    <div>
    </div>
    1.substr()を使ってappleを取り出し出力しなさい。</br>
    $typoString = "qapplee"</by>
    <div>
    <?php
    // ココにコーディング
    $typoString = "qapplee";
    
    echo substr($typoString, 1, -1);
    ?>
    </div>
    2.mb_substr()を使ってこんにちはを取り出し出力しなさい。</br>
    $typoString = "ハロー こんには ニーハオ"</by>
    <div>
    <?php
    // ココにコーディング
    $typoString = "ハロー こんにちは ニーハオ";
    
    $helloWord = mb_substr($typoString, 4, 5);
    echo $helloWord;
    ?>
    </div>
    3.substr_replace()使って以下のように置き換えしに出力しなさい。</br>
    $rahmen = "私はラーメンが好きです。"; </br>
    例: 私はつけ麺が好きです。
    <div>
    <?php
    $rahmen = "私はラーメンが好きです。";
    // ココにコーディング
    echo "置換前：" . $rahmen . "<br>";
    echo "置換後：" . substr_replace($rahmen, '私はつけ麺が好きです。', 0);
    ?>
    </div>
    4.以下の配列をarray()で作成し値(value)の"()"を削除しなさい。</br>
    $dessert { </br>
      [0]=> "(cake)"</br>
      [1]=> "(chocolate)"</br>
      [2]=> "(candy)"</br>
    }</br>
    <div>
    <?php
    // ココにコーディング
    $dessert = [
      '"(cake)"',
      '"(chocolate)"',
      '"(candy)"'
    ];
    
    $dessert = str_replace('"(', '', $dessert);
    $dessert = str_replace(')"', '', $dessert);
    print_r($dessert);
    ?>
    </div>
    5.以下の文字列の"?()%"を削除し1単語ずつ配列になさい。</br>
    $manufacturerStrting = "hitachi?so%ny%(mitubishi sharp)";</by>
    $manufacturerStrtingArray {
      [0]=> "(hitachi)"</br>
      [1]=> "(sony)"</br>
      [2]=> "(mitubishi)"</br>
      [3]=> "(sharp)"</br>
    }</br>
    <div>
    <?php
    $manufacturerStrting = "hitachi?so%ny%(mitubishi sharp)";
    // ココにコーディング
    // "?()%"を削除orスペースに置換
    $manufacturerStrting = str_replace('?', ' ', $manufacturerStrting);
    $manufacturerStrting = str_replace('(', ' ', $manufacturerStrting);
    $manufacturerStrting = str_replace(')', '', $manufacturerStrting);
    $manufacturerStrting = str_replace('%', '', $manufacturerStrting);

    // explode関数を用いてスペースを区切りに"hitachi", "sony", "mitubishi", "sharp"の文字列を1単語ずつ配列に格納
    $manufacturerStrtingArray = explode(" ", $manufacturerStrting);
    print_r($manufacturerStrtingArray);
    ?>
    </div>
  </body>
</html>