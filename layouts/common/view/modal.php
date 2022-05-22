<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>タイトル</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
 
  <!-- 1.モーダル表示のためのボタン -->
  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-example">
      モーダルダイアログ表示
  </button>
 
  <!-- 2.モーダルの配置 -->
  <div class="modal" id="modal-example" tabindex="-1">
    <div class="modal-dialog">
 
      <!-- 3.モーダルのコンテンツ -->
      <div class="modal-content">
 
        <!-- 4.モーダルのヘッダ -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="modal-label">ダイアログ</h4>
        </div>
 
        <!-- 5.モーダルのボディ -->
        <div class="modal-body">
          <p>ここに内容を書く<br>
            <textarea></textarea>
          </p>
        </div>
 
        <!-- 6.モーダルのフッタ -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
          <button type="button" class="btn btn-primary">保存</button>
        </div>
      </div>
    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>