#  飲食店予約アプリ  
飲食店を予約できるアプリ
<img width="1234" alt="スクリーンショット 2024-03-31 0 07 10" src="https://github.com/katsukishiori/advance-test/assets/145991391/43576829-469b-4877-ab5b-e7c89d13ad44">

##  作成した目的
会社で使いやすい飲食店予約サービスを持つため。  

##  アプリケーションURL  
開発環境:http://localhost/  
phpMyAdmin:http://localhost:8080/  
##  他のリポジトリ  

##  機能一覧
・会員登録機能  
・ログイン機能  
・ログアウト機能  
・飲食店お気に入り追加・削除機能  
・飲食店予約情報追加・削除機能  
・飲食店をエリア・ジャンル・店名で検索できる機能  
・予約変更機能  
・評価機能  
・ストレージに画像保存機能

##  使用技術  
・PHP 7.4.9  
・Laravel 8.83.27  
・MySQL 


##  テーブル設計  
<img width="554" alt="スクリーンショット 2024-03-30 22 05 30" src="https://github.com/katsukishiori/advance-test/assets/145991391/6ed88c32-d23e-408c-a26d-fe028ebfe53f">

##  環境構築  
Dockerビルド  
1.ディレクトリの作成  
2.docker-compose.ymlの作成  
3.Nginxの設定  
4.PHPの設定  
5.MySQLの設定  
6.phpMyAdminの設定  
7.docker-compose up -d --build  

※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください  

Laravel環境構築  
1.docker-compose exec php bash  
2.composer -vでcomposerがインストールできているか確認  
3.composer create-project "laravel/laravel=8.*" . --prefer-dist  
4.php artisan migrate  
5.php artisan db:seed  

##  アカウントの種類  
###  管理者  
メールアドレス：admin@email.com  
パスワード：11111111  

###  店舗代表者  
メールアドレス：shopleader@email.com  
パスワード：11111111  

### 利用者  
メールアドレス：tarou@email.com  
パスワード：11111111  

##  その他  
追加機能で、管理画面の機能は実装していますが、メニューページで管理者や店舗代表者だけが見ることができるページへ移動することができるボタンの表示はできていません。以下のURLで表示できるようになっています。  

###  管理者  
予約状況確認画面：http://localhost/confirm_reservation  
店舗作成画面：http://localhost/create_shops  
店舗代表者作成画面：http://localhost/create_shopleaders  

###  店舗代表者  
予約状況確認画面：http://localhost/confirm_reservation_2  
店舗作成画面：http://localhost/create_shops_2  
