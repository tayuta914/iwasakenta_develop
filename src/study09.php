<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    div {
      margin: 10px;
    }

    h1,
    h4 {
      border-bottom: solid;
    }

    table,
    th,
    td {
      border-collapse: collapse;
      border: 1px solid #ccc;
      line-height: 1.5;
    }

    td {
      padding: 5px;
    }
  </style>
  <title>GET・POST2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <h1>GET・POST2</h1>
  <h3>お問い合わせリスト</h3>
  <a href="../index.php">戻る</a>
  <div>
    <h4>はじめに</h4>
    コマンドラインのcurlコマンドを使ってGETリクエスト、調査をしなさい</br>
    コマンド例:$ curl -X GET "http://os3-362-14447.vs.sakura.ne.jp/cakephp/contact"</br>
    レスポンスは、JSONエンコードされているのでweb上のデコードツール等で確認しなさい</br>
    <h4>実装内容</h4>
    <a href="https://www.php.net/manual/ja/ref.curl.php">cURL</a></br>
    cURL又はfile_get_contents()を使って実際のサーバーからデータを取得してURL先のと同じ構成で<b>お問い合わせリスト(sutdy09.php)</b>と<b>お問い合わせフォーム(sutdy09-form.php)</b>を作成しなさい。</br>
    <a href="http://os3-362-14447.vs.sakura.ne.jp/work_php/contact_list.php">完成</a></br>
    一覧取得API: http://os3-362-14447.vs.sakura.ne.jp/cakephp/contact</br>
    リクエストパラメータ: なし</br>
    更新API: http://os3-362-14447.vs.sakura.ne.jp/cakephp/contact/register </br>
    リクエストパラメータ:　テーブル参照</br>
    お問い合わせフォームは、HTMLのformを使い、制約条件に則ってバリデーションをしなさい。</br>
    必須項目が満たされない場合は、「〇〇は必須項目です」と赤字で表示、</br>
    文字数制限を超えた場合は「〇〇は〇文字以内です」と赤文字で表示しなさい</br>
    <table>
      <tbody>
        <tr>
          <th>パラメータ名</th>
          <th>項目</th>
          <th>制約条件</th>
        </tr>
        <tr>
          <td>name</td>
          <td>名前(必須)</td>
          <td>20文字以内</td>
        </tr>
        <tr>
          <td>title</td>
          <td>タイトル(任意)</td>
          <td>10文字以内</td>
        </tr>
        <td>body</td>
        <td>本文(必須)</td>
        <td>100文字以内</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div>
    <?php
    // ココにコーディング
    ?>
  </div>
</body>

</html>