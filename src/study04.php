<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  </style>
  <title>文字列操作</title>
</head>
  <body>
    <h1>文字列操作</h1>
      <h3>文字列の置き換えや操作</h3>
      <a href="../index.php">戻る</a>
    <div>
    </div>
    1.substr()を使ってappleを取り出し出力しなさい。</by>
    $typoString = "qaplee"</by>
    <div>
    <?php
    $typoString = "qaplee"
    // ココにコーディング
    ?>
    </div>
    2.mb_substr()を使ってこんにちはを取り出し出力しなさい。</br>
    $typoString = "ハロー こんには ニーハオ"</by>
    <div>
    <?php
    $typoString = "ハロー こんにちは ニーハオ"
    // ココにコーディング
    ?>
    </div>
    3.substr_replace()使って以下のように置き換えしに出力しなさい。</br>
    $rahmen = "私はラーメンが好きです。"; </br>
    例: 私はつけ麺が好きです。
    <div>
    <?php
    $rahmen = "私はラーメンが好きです。";
    // ココにコーディング
    ?>
    </div>
    4.以下の配列をarray()で作成し値(vaule)の"()"を削除しなさい。</br>
    $dessert { </br>
      [0]=> "(cake)"</br>
      [1]=> "(chocolate)"</br>
      [2]=> "(candy)"</br>
    }</br>
    <div>
    <?php
    // ココにコーディング
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
    ?>
    </div>
  </body>
</html>