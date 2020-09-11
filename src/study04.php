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
    4.以下の配列をarray()で作成し値(value)の()カッコを削除しなさい。</br>
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
    // 正規表現を用いないで1つの処理もできました
    $dessert = str_replace(str_split('()'), '', $dessert);
    print_r($dessert);
    echo "<br>";
    // preg_replace正規表現
    $dessert = preg_replace('/[()]/', '', $dessert);
    print_r($dessert);
    ?>
    </div>
    5.以下の文字列の"?()%"を削除し1単語ずつ配列にしなさい。</br>
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

    // hitachi, sony, mitubishi, sharpを正規表現を用いて取得
    $manufacturerStrting = preg_replace('/[?()%]/', '', $manufacturerStrting);

    // preg_matchで戻り値がtrueであった際に$manufacturerStrtingArray[$i]に各文字列を格納
    for ($i = 0; $i < 4; $i++) {
      if (preg_match('/hitachi/',$manufacturerStrting)) {
        $manufacturerStrtingArray[$i] = substr('hitachi', 0, 7);
        $manufacturerStrting = ltrim($manufacturerStrting, 'hitachi');
      }
      else if (preg_match('/sony/',$manufacturerStrting)) {
        $manufacturerStrtingArray[$i] = substr('sony', 0, 4);
        $manufacturerStrting = ltrim($manufacturerStrting, 'sony');
      }
      else if (preg_match('/mitubishi/',$manufacturerStrting)) {
        $manufacturerStrtingArray[$i] = substr('mitubishi', 0, 9);
        $manufacturerStrting = ltrim($manufacturerStrting, 'mitubishi');
      }
      else if (preg_match('/sharp/',$manufacturerStrting)) {
        $manufacturerStrtingArray[$i] = substr('sharp', 0, 5);
        $manufacturerStrting = ltrim($manufacturerStrting, 'sharp');
      }
    }
    print_r($manufacturerStrtingArray);
    echo '<br>';

    $manufacturerStrting = "hitachi?so%ny%(mitubishi sharp)";
    // 結果は出るが…
    $manufacturerStrting = preg_replace('/[?()%]/', '', $manufacturerStrting);
    
    for ($i = 0; $i < 4; $i++) {
      if (preg_match('/hitachi/',$manufacturerStrting)) {
        $manufacturerStrtingArray[$i] = 'hitachi';
        $manufacturerStrting = str_replace('hitachi', '', $manufacturerStrting);
      }
      else if (preg_match('/sony/',$manufacturerStrting)) {
        $manufacturerStrtingArray[$i] = 'sony';
        $manufacturerStrting = str_replace('sony', '', $manufacturerStrting);
      }
      else if (preg_match('/mitubishi/',$manufacturerStrting)) {
        $manufacturerStrtingArray[$i] = 'mitubishi';
        $manufacturerStrting = str_replace('mitubishi', '', $manufacturerStrting);
      }
      else if (preg_match('/sharp/',$manufacturerStrting)) {
        $manufacturerStrtingArray[$i] = 'sharp';
        $manufacturerStrting = str_replace('sharp', '', $manufacturerStrting);
      }
    }
    print_r($manufacturerStrtingArray);
    ?>
    </div>
  </body>
</html>