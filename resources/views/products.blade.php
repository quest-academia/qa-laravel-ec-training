{{-- headerを定義 --}}
@section('products')

<div class="row mt-4">
    <div class="col-lg-12 text-center">
        <h1>商品検索画面</h1>
    </div>
</div>

{{-- 商品検索フォーム --}}
<form>
    <div class="row">
        <div class="input-group mt-4 col-md-7 offset-2">
            <h2 class="mr-4">商品名</h2>
            <input type="text" name="keyword" required class="form-control ">
            <span class="input-group-btn">
                <input type="submit" class="btn btn-primary ml-4" value="検索">
            </span>
        </div>
    </div>

    <div class="row">
        <div class="input-group mt-4 col-md-7 offset-2">
            <h2>商品カテゴリ</h2>
            <select class="ml-2" style=" width:50%; text-align-last:center;">
                <option>全て</option>
                <option>ブレンド</option>
                <option>ストレート</option>
                <option>デカフェ</option>
            </select>
        </div>
    </div>
</form>

{{-- 検索結果の表示(※未実装) --}}

<div class="container mt-4">
    <div class="panel panel-default">
        <div class="panel-heading">全○○件</div>
        <div class="panel-body">
        </div>
        <table border="1" class="table" style="border-collapse: collapse">
            <thead class="bg-warning">
                <tr>
                    <th>商品名</th>
                    <th>商品化カテゴリ</th>
                    <th>価格</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>商品名1</td>
                    <td>食料品</td>
                    <td>100円</td>
                    <td type="submit" name="name" value="商品詳細" class="btn btn-primary">
                        商品詳細
                    </td>
                </tr>
                <tr>
                    <td>商品名2</td>
                    <td>食料品</td>
                    <td>200円</td>
                    <td type="submit" name="name" value="商品詳細" class="btn btn-primary">
                        商品詳細
                    </td>
                </tr>
                <tr>
                    <td>商品名3</td>
                    <td>食料品</td>
                    <td>400円</td>
                    <td type="submit" name="name" value="商品詳細" class="btn btn-primary">
                        商品詳細
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

{{-- ページネーション --}}
<nav aria-label="...">
    <ul class="pagination pagination" style="justify-content: center;">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">1</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
</nav>

@endsection