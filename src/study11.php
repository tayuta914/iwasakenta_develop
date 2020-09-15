<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1, h2{border-bottom: solid;}
  table, th, td {
  border-collapse: collapse;
  border: 1px solid #ccc;
  line-height: 1.5;
}
td {
  padding: 5px;
}
  </style>
  <title>多重配列</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>多重配列</h1>
      <h3>JOSN</h3>
      <a href="../index.php">戻る</a>
      1. JSONファイルとは何か調査し、プルリクエストに書きなさい。</br>
      2. stab/stab01.jsonのJSONファイルを取得し、以下の条件に則って表示しなさい</br>
      2-1. res.blogData[].mailオブジェクトをuilities/app.phpのバリデーションを通しなさい。</br>
      falseの場合は、メールアドレスが正しくありませんと表示しなさい。</br>
      2-2. idで降順表示をしなさい。</br>
      2-3. 日付を表示する関数をutil/util.phpに追加しなさい(チャレンジ目標)</br>
      2-4. 改行コードを&lt;/br&gt;にリプレイスする関数をutil/util.phpに追加しなさい(チャレンジ目標)　ヒント: nl2br()
      ※改行コードも表示する際、改行して表示出来る様に改行タグ&lt;/br&gt;に置き換えが必要 → \n</br>
      <div>
      <h2>最初の投稿</h2> 
      <!-- タイトル = tile -->
      日付 2020-09-10</br>
      <!-- 日付は-繋ぎで表示 year-month-day -->
      ダグ: ブログ 日記</br>
      <!-- ダグはカンマを半角スペースに変更して表示 tag -->
      メールアドレス</br>
      <!-- メールアドレスにmailを表示、バリデーション通らない場合はメールアドレスが正しくありませんと表示 -->
      <h4>内容</h4>
      ブログを開設しましたー
      <!-- 内容 = report -->
      </div>
      <?php
      // ココにコーディング
      ?>
    </div>
  </body>
</html>