<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - FashionablyLate</title>
    <style>
        body { background-color: #ffffff; color: #8b7969; font-family: "serif"; margin: 0; padding: 0; }
        .container { width: 95%; max-width: 1200px; margin: 0 auto; padding: 20px 0; }
        header { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #f0e6e0; padding: 20px 0; }
        header h1 { margin: 0; font-weight: normal; font-size: 28px; flex-grow: 1; text-align: center; }
        .logout-btn { border: 1px solid #f0e6e0; background: none; color: #d9cccc; padding: 5px 15px; cursor: pointer; }
        .admin-title { text-align: center; font-size: 24px; margin: 40px 0; }
        .search-form { display: flex; gap: 10px; margin-bottom: 30px; justify-content: center; align-items: center; }
        .search-form input, .search-form select { background-color: #f4f4f4; border: none; padding: 10px; color: #666; height: 40px; }
        .search-input { width: 250px; }
        .btn-search { background-color: #8b7969; color: white; border: none; padding: 0 30px; cursor: pointer; height: 40px; }
        .btn-reset { background-color: #e2d3c5; color: white; border: none; padding: 0 30px; cursor: pointer; height: 40px; text-decoration: none; line-height: 40px; font-size: 14px; }
        .actions { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 10px; }
        .btn-export { background-color: #ede4dc; color: #8b7969; border: none; padding: 8px 20px; cursor: pointer; }
        .pagination { display: flex; list-style: none; padding: 0; margin: 0; gap: 5px; }
        .pagination li { border: 1px solid #f0e6e0; padding: 5px 12px; color: #8b7969; cursor: pointer; }
        .pagination li.active { background-color: #8b7969; color: white; }
        .admin-table { width: 100%; border-collapse: collapse; }
        .admin-table th { background-color: #8b7969; color: white; text-align: left; padding: 15px; font-weight: normal; }
        .admin-table td { border-bottom: 1px solid #f0e6e0; padding: 15px; color: #666; }
        .btn-detail { border: 1px solid #f0e6e0; background: none; color: #d9cccc; padding: 5px 15px; cursor: pointer; }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>FashionablyLate</h1>
        <button class="logout-btn">logout</button>
    </header>
    <main>
        <div class="admin-title">Admin</div>
        
        <form class="search-form" action="/admin/search" method="GET">
            <input type="text" name="keyword" class="search-input" placeholder="名前やメールアドレスを入力してください" value="{{ request('keyword') }}">
            
            <select name="gender">
                <option value="">性別</option>
                <option value="1" {{ request('gender') == '1' ? 'selected' : '' }}>男性</option>
                <option value="2" {{ request('gender') == '2' ? 'selected' : '' }}>女性</option>
                <option value="3" {{ request('gender') == '3' ? 'selected' : '' }}>その他</option>
            </select>

            <select name="category_id">
                <option value="">お問い合わせの種類</option>
                <option value="1" {{ request('category_id') == '1' ? 'selected' : '' }}>商品のお届けについて</option>
                <option value="2" {{ request('category_id') == '2' ? 'selected' : '' }}>商品の交換について</option>
                <option value="3" {{ request('category_id') == '3' ? 'selected' : '' }}>商品トラブル</option>
                <option value="4" {{ request('category_id') == '4' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                <option value="5" {{ request('category_id') == '5' ? 'selected' : '' }}>その他</option>
            </select>

            <input type="date" name="date" value="{{ request('date') }}">
            
            <button type="submit" class="btn-search">検索</button>
            <a href="/admin" class="btn-reset">リセット</a>
        </form>

        <div class="actions">
            <button class="btn-export">エクスポート</button>
            <ul class="pagination">
                <li>&lt;</li><li class="active">1</li><li>&gt;</li>
            </ul>
        </div>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->last_name }}　{{ $contact->first_name }}</td>
                    <td>
                        @if($contact->gender == 1) 男性
                        @elseif($contact->gender == 2) 女性
                        @else その他 @endif
                    </td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->category_id }}</td> <td><button class="btn-detail">詳細</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</div>
</body>
</html>
