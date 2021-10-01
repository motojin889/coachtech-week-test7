<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/create" method="POST">
    @csrf
    <label>氏名
      <input type="text" name="name">
    </label><br>
    <label>メールアドレス
      <input type="email" name="email">
    </label>
    <input type="submit" value="送信する">
  </form>
</body>
</html>