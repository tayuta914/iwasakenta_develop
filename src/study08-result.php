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
  <title>GET・POST</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <h1>GET・POST</h1>
  <h3>データのやりとり</h3>
  <a href="./study08.php">戻る</a>
  <div>
    <div>
      お名前 : <?php print(htmlspecialchars($_GET['my_name'], ENT_QUOTES)); ?><br></br>
      都道府県 : <?php print(htmlspecialchars($_GET['prefecture'], ENT_QUOTES)); ?><br></br>
      お問い合わせ内容 : <?php print(htmlspecialchars($_GET['date'], ENT_QUOTES)); ?><br></br>
    </div>
  </div>
</body>

</html>