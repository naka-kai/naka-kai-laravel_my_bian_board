<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>メッセージを受信しました</title>
</head>
<body>
    -------------------------------------------------------------
    <p>{{ $inputs['name'] }}さんからメッセージが届きました</p>
    <p>{{ $inputs['name'] }}さんのメールアドレス:{{ $inputs['email'] }}</p>
    <p>メッセージ内容:{{ $inputs['message'] }}</p>
    -------------------------------------------------------------

    <p>気になった方には上記メールアドレスにお返事ください。</p>
</body>
</html>
