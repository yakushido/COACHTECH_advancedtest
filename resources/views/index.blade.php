<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>トップページ</h1>

  <form method="POST" action="{{route('add')}}" >
  @csrf
    <div>
      <label>氏名<br>
        <input type="text" name="name">
      </label>
    </div>
    <div>
      <label>メールアドレス<br>
        <input type="text" name="email">
      </label>
    </div>
    <button>送信する</button>
  </form>
</body>
</html>