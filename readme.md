## 使用したフレームワーク

laravel 5.8.35

## ディレクトリ構成
#コントローラ 
InsertDBapisController.php
RegistapisController.php
ShowapisController.php

#モデル
Apitest.php

├── artisan
├── bootstrap
│   ├── app.php
│   └── cache
├── composer.json
├── composer.lock
├── config # 設定に関するファイル
│   ├── app.php # timezoneの設定、言語設定含む設定
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── session.php
│   └── view.php
├── database  # データベースに関するファイル
│   ├── factories
│   ├── migrations #データベースのversion管理のファイルが作られる
│   │   ├── 2014_10_12_000000_create_users_table.php # デフォルトで作られる。削除可能
│   │   └── 2014_10_12_100000_create_password_resets_table.php # デフォルトで作られる。削除可能
│   └── seeds
├── package.json
├── phpunit.xml
├── public # ブラウザからアクセスされたら使われるフォルダ
│   ├── css
│   ├── favicon.ico
│   ├── index.php
│   ├── js
│   ├── robots.txt
│   └── web.config
├── readme.md
├── resources
│   ├── assets
│   ├── lang
│   └── views #  画面のテンプレート
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php # ルーティング。webアプリケーションを利用する場合はこちらをいじる。
├── server.php
├── storage
├── tests
├── vendor
└── webpack.mix.js
