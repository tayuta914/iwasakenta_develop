<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    div {
      margin: 10px;
    }

    h1 {
      border-bottom: solid;
    }
  </style>
  <title>ファイル操作</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <h1>ファイル操作</h1>
  <h3>CSVファイルや画像ファイルの書き換えや読み込み</h3>
  <a href="../index.php">戻る</a>
  <div>
    文字コードは UTF-8を使用
  </div>
  1."src/img/study06.png"画像ファイルをbase64にエンコードし出力しなさい。</br>
  <div>
    <?php
    // ココにコーディング

      ?>
  </div>
  2."1."のエンコードした変数をbase64オブジェクトをデコードしてファイル名を「半角英数字の大文字」に変更した上で出力しなさい。</br>
  ※画像自体の表示と処理が完了した変数の出力</br>
  study06.png → STUDY06.png</br>
  <div>
    <?php
    // ココにコーディング
      ?>
  </div>
  3-1.ボタンを押下したら、src/files/にstudy06.csvファイルが保存される実装。</br>
  3-2.htmlでボタンを作成し押下したら実行される関数を作りなさい</br>
  3-3.fopen(),fclose(),fputcsv(),if文,foreach,arrayをすべて使って以下の様に出力しなさい。</br>
  3-4.ifではcsvファルを正常に開けているかの確認をしなさい。</br>
  <div>
    <?php
    // ココにコーディング
      ?>
  </div>
</body>

</html>