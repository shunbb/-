<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - FashionablyLate</title>
    <style>i
        body { background-color: #ffffff; color: #8b7969; font-family: "serif"; margin: 0; padding: 0; }
        .container { width: 90%; max-width: 900px; margin: 0 auto; padding: 60px 0; }
        header h1 { text-align: center; font-size: 36px; font-weight: normal; margin-bottom: 50px; letter-spacing: 2px; }
        .page-title { text-align: center; font-size: 28px; margin-bottom: 60px; }
        
        .contact-form { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
        .contact-form th { text-align: left; width: 30%; padding: 25px 0; font-size: 18px; font-weight: normal; vertical-align: top; }
        .contact-form td { padding: 15px 0; width: 70%; }
        
        .required { color: #ffb6b6; margin-left: 5px; }
        
        input[type="text"], input[type="email"], select, textarea {
            background-color: #f4f4f4; border: none; padding: 15px; width: 100%; box-sizing: border-box; font-size: 16px; color: #666;
        }
        
        .flex-group { display: flex; gap: 20px; }
        .tel-group { display: flex; align-items: center; gap: 10px; }
        .tel-group input { text-align: center; }
        .gender-group { display: flex; gap: 30px; padding: 10px 0; }
        
        .form-actions { text-align: center; margin-top: 60px; }
        .submit-btn { background-color: #8b7969; color: white; border: none; padding: 15px 80px; font-size: 18px; cursor: pointer; }
    </style>
</head>
<body>
<div class="container">
    <header><h1>FashionablyLate</h1></header>
    <main>
        <div class="page-title">Contact</div>
        <form action="/contact/confirm" method="POST">
            @csrf
            <table class="contact-form">
                <tr>
                    <th>お名前<span class="required">※</span></th>
                    <td>
                        <div class="flex-group">
                            <input type="text" name="first_name" placeholder="例: 山田" required>
                            <input type="text" name="last_name" placeholder="例: 太郎" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>性別<span class="required">※</span></th>
                    <td>
                        <div class="gender-group">
                            <label><input type="radio" name="gender" value="1" checked> 男性</label>
                            <label><input type="radio" name="gender" value="2"> 女性</label>
                            <label><input type="radio" name="gender" value="3"> その他</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス<span class="required">※</span></th>
                    <td><input type="email" name="email" placeholder="例: test@example.com" required></td>
                </tr>
                <tr>
                    <th>電話番号<span class="required">※</span></th>
                    <td>
                        <div class="tel-group">
                            <input type="text" name="tel_1" placeholder="080" required> - 
                            <input type="text" name="tel_2" placeholder="1234" required> - 
                            <input type="text" name="tel_3" placeholder="5678" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>住所<span class="required">※</span></th>
                    <td><input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required></td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td><input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101"></td>
                </tr>
                <tr>
                    <th>お問い合わせの種類<span class="required">※</span></th>
                    <td>
                        <select name="category_id" required>
                            <option value="" disabled selected>選択してください</option>
                            <option value="1">商品のお届けについて</option>
                            <option value="2">商品の交換について</option>
                            <option value="3">商品トラブル</option>
                            <option value="4">ショップへのお問い合わせ</option>
                            <option value="5">その他</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容<span class="required">※</span></th>
                    <td><textarea name="detail" rows="5" placeholder="お問い合わせ内容をご記載ください" required></textarea></td>
                </tr>
            </table>
            
            <div class="form-actions">
                <button type="submit" class="submit-btn">確認画面</button>
            </div>
        </form>
    </main>
</div>
</body>
</html>
