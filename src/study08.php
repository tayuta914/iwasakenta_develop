<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  </style>
  <title>GET・POST</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>GET・POST</h1>
      <h3>データのやりとり</h3>
      <a href="../index.php">戻る</a>
    <div>
<<<<<<< HEAD
    <b>要件</b>
=======
    <b>要件</b></br>
>>>>>>> 1ebf5b400d42d687bc6d44443a0ba8966506a913
    ・HTMLでメール送信フォームを作成しなさい</br>
      ・以下のformを作成しなさい
      ・名前　textbox </br>
      ・都道府県 pulldown </br>
      ・お問い合わせ内容　textbox </br>
      ・送信  submit button </br>
    画面描写時にGET関数で都道府県データをSQLから取得し、for文で都道府県プルダウンを作成しなさい。
    送信ボタンを押下したら、POST関数でstudy08-result.phpへ画面遷移し、入力内容を表示しなさい。
    ※SQLはjapn.sqlを使用しなさい。
    <div>
    <?php
<<<<<<< HEAD
    // db接続
    $mysqli = new mysqli( 'localhost', 'root', 'root', 'japan');
    if ($mysqli->connect_error) {
      $mysqli->close();
=======
    // DB接続
    $mysqli = new mysqli( 'localhost', 'root', 'root', 'japan');
    
    if ($mysqli->connect_error) {
      $mysqli->close();
      echo "データベースとの接続ができませんでした。";
>>>>>>> 1ebf5b400d42d687bc6d44443a0ba8966506a913
    }
    else {
      $mysqli->set_charset("utf8");
    }
<<<<<<< HEAD
    // sql文-実行
    $sql = 'SELECT name FROM prefecture';
    $res = $mysqli->query($sql);
　  ?>
    <form action="study08-result.php" method="post">
    名前:</br>
    <input type="text" name="named" style="width:220px"; required placeholder="名前を入力してください。"/></br>
    都道府県:</br>
    <select name="prefectureData" size="1">
    <?php
    // sqlから取得したprefecture.nameを全出力
    foreach ($res as $preData) {
      echo "<option>" . $preData["name"] . "</option>";
    }
    ?>
    </select></br>
    お問い合わせ内容:</br>
    <p><textarea name="quiry" style="resize:none; width:400px; height:200px"; maxlength="500" required placeholder="お問い合わせ内容を入力してください。">
    </textarea></p>
=======
    $sql = 'SELECT name FROM prefecture';
    $res = $mysqli->query($sql);
    while ($_GET = $res->fetch_assoc()) {
      //echo $_GET["name"] . "<br>";
    }
　  ?>

    <form action="study08-result.php" method="post">
    名前:</br>
    <input type="text" name="named" /></br>
    都道府県:</br>
    <select name="prefectureData" size="1">
    <option value="">北海道</option>
    </select></br>
    お問い合わせ内容:</br>
    <p><input type="text" name="quiry" style="width:400px;height:200px"; /></p>
>>>>>>> 1ebf5b400d42d687bc6d44443a0ba8966506a913
    <button type="submit" name="send">送信</button>
    </form>
    </div>
    </div>
  </body>
</html>