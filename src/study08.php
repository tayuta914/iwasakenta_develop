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
    <b>要件</b>
    ・HTMLでメール送信フォームを作成しなさい</br>
      ・以下のformを作成しなさい
      ・名前　textbox </br>
      ・都道府県 pulldown </br>
      ・お問い合わせ内容　textbox </br>
      ・送信  submit button </br>
    画面描写時に都道府県データをSQLから取得し、for文で都道府県プルダウンを作成しなさい。</br>
    送信ボタンを押下したら、HTMLのformタグでGET(POSTでも可)リクエストを行い、</br>
    study08-result.phpに画面遷移して$_GET($_POSTでも可)で入力内容を表示しなさい。</br>
    ※SQLはjapn.sqlを使用しなさい。</br>
    <div>
      <?php
            $mysqli = new mysqli('localhost', 'mamp' ,'root' , 'japan');
            if ( $mysqli->connect_error ) {
              $mysqli->close();
            }else {
              $mysqli->set_charset("utf8");
            }
            $sql = "SELECT * FROM prefecture";
            $stmt = $mysqli->query($sql);
      ?>
      <form action="study08-result.php" method="GET">
      <p>お名前</p>
        <input type="text" id="my_name" name="my_name" maxlength="50" value=""><br></br>
      <p>都道府県</p>
      <select name="prefecture">
        <?php
        foreach ($stmt as $preData) {
          echo "<option>" . $preData["name"] . "</option>";
        }
        ?>
    </select>
      <p>お問い合わせ内容</p>
       <input type = "textbox" id="date" name="date" maxlength="300" value=""><br></br> 
       <input type="submit" value ="送信する">
      </form>    
      <?php?>
    </div>
    </div>
  </body>
</html>