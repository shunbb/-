<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Confirm - FashionablyLate</title>
    <style>
        body { background-color: #fdfaf7; color: #8b7969; font-family: "serif"; }
        .container { width: 600px; margin: 0 auto; padding: 50px; }
        h2 { text-align: center; margin-bottom: 40px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        th, td { padding: 15px; border-bottom: 1px solid #e2d3c5; text-align: left; }
        .btn-group { text-align: center; }
        .btn-submit { background-color: #8b7969; color: white; border: none; padding: 10px 40px; cursor: pointer; }
        .btn-back { color: #8b7969; text-decoration: underline; background: none; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirm</h2>
        <form action="/contact/thanks" method="POST">
            @csrf @foreach($contact as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endforeach

            <table>
                <tr><th>お名前</th><td>{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td></tr>
                <tr><th>性別</th><td>{{ $contact['gender'] == 1 ? '男性' : ($contact['gender'] == 2 ? '女性' : 'その他') }}</td></tr>
                <tr><th>メールアドレス</th><td>{{ $contact['email'] }}</td></tr>
                <tr><th>電話番号</th><td>{{ $contact['tel_1'] }}{{ $contact['tel_2'] }}{{ $contact['tel_3'] }}</td></tr>
                <tr><th>住所</th><td>{{ $contact['address'] }}</td></tr>
                <tr><th>建物名</th><td>{{ $contact['building'] }}</td></tr>
                <tr><th>お問い合わせの種類</th><td>{{ $contact['category_id'] }}</td></tr>
                <tr><th>お問い合わせ内容</th><td>{{ $contact['detail'] }}</td></tr>
            </table>

            <div class="btn-group">
                <button type="submit" class="btn-submit">送信</button><br><br>
                <button type="button" class="btn-back" onclick="history.back()">修正</button>
            </div>
        </form>
    </div>
</body>
</html>
