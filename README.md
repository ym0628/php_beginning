登録者2万人超えの YouTubeチャンネル「プログラミングアカデミー」様の動画を見て学習しながら、PHPを使ったWebアプリケーションの実装を進めていきます。

<hr>

***<font color="blue">2023/11/25</font>***

## 自身の現状
- スクールにて1年間Ruby中心にWebアプリケーション開発を学んだ
- html　cssが極端に知識不足であったため、YouTubeなどで基礎を学習中
- WordPressなど、LP制作の仕事を獲れるようになりたいので、PHPを学ぶ必要性を感じている。
- 自分の仕事環境周辺でも開発言語としてもPHPを採用しているケースが多いため、なおさらPHPが扱えるようになることが急務であると考えた。
- ReactやTypeScriptなど、JS系の言語やワークフレームを先に勉強するか迷ったが、まずはPHPから始めるに至った。
- Ruby、Railsを学んできたので、ある程度、サーバーサイドスクリプト学習への参入障壁は低くできそうな予感はしているが、果たしてどうなることやら...
- 何はともあれ、YouTubeの無料動画でありながら、かなりクォリティの高い講座を配信してくださっているプログラミングアカデミー様に感謝。
- 本投稿記事は、著作権等に抵触する可能性もあるため、基本的には限定公開とする予定。



## 参考サイト一覧

https://www.youtube.com/watch?v=HNHjpmdPFNU

https://www.youtube.com/watch?v=yc81-25UknM

https://hnavi.co.jp/knowledge/blog/xampp/

https://info.winschool.jp/detail86/#Laravelとは



<hr>

## <font color="Salmon">PHPとは？なんですか？</font>

- htmlは見た目だけのマークアップ言語である。
- 例えば、現在時刻を表示させるといった場合、
- htmlでは単純にテキストで`2023/11/24 20:39`みたいに表示させるしかできない。
- これをWebサイトをリロードする度に、最新の現在時刻を表示させるようにするには、サーバーサイドスクリプト言語によるプログラミングが必要となる。
- PHPはそのサーバーサイド・バックエンドの開発するための言語である。
- という前提の話は、自身はある程度理解しているつもりなので、前置きはほどほどに、ローカルの環境構築を進めていきます。


## <font color="Salmon">ローカル開発環境とは？</font>

- サーバーとは？
- コンピュータのことである。
- コンピュータが果たす役割のことをサーバーと呼ぶ。
- WEB上にサイトを公開した場合、アクセスした時、いつ何時も訪問者に対応する準備をしておく。
- それがサーバーである。
- httpなどのリクエストに対して、レスポンスを返すサーバーをWEBサーバー
- 自宅に余っているコンピュータを持っている場合、自宅でサーバーを作ることもできる。
- だが、停電になったりすると大変なので、`レンタルサーバー`がある。
- `データセンター`と呼ばれるサーバーを設置している企業がある。
- WEBサーバーを担ってくれるレンタルサーバーを契約する。
- サーバーの中に妖精さんを入れてあげる。
- 妖精さん、`index.php`ください。とブラウザからリクエストした際に、妖精さんが働いてくれる箱を用意する。
- それがサーバーということになる。
- phpプログラムをローカルで開発した場合、WEBサーバーにアップしないと挙動をチェックできない。
- しかし、毎回、サーバーにアップロードするのは面倒。
- なので、自分のコンピュータをローカル環境でサーバーを用意して、開発環境で挙動をすぐにチェックできるようにする。
- それがローカル環境構築ということになる。
- WEBサーバーとPHPという2つの環境構築のボスを倒すチート機能、
- それが`XAMPP`（ザンプ）である。


## <font color="Salmon">XAMPPとは何か？</font>

- WEBサーバーとPHPという2つの環境構築ボスを倒すチート機能。
- それが`XAMPP`（ザンプ）である。
- XAMPPをインストールして、ローカルでPHPを動かせる環境を構築していく。
- オンライン上にあるサーバー、つまり本番環境のサーバーをリモートと呼び。
- その対比として、自身のPC上に構築したサーバーをローカルと呼ぶ。
- XAMPPの意味を詳しく知りたい方はこちらのサイトもチェック。
- https://hnavi.co.jp/knowledge/blog/xampp/
- XAMPPはいくつかのソフトウェアの集合体である。
- 全部入りキット、スターターキットみたいな感じ。
- Laravelは、PHPでアプリケーションを開発するためのフレームワーク。
- XAMPPは開発の環境を構築するためのライブラリ？みたいな感じかな？
- MariaDBはMySQLの暖簾分けしたサービス。
- MySQLは現在Oracle社が所有する。
- MariaDBはフリーなので、無償で使えるのが魅力。


> 選ぶときの注意点｜
上で紹介した「〇〇を選んだ方がいい人」のところで、WindowsOSなら「XAMPP」、macOSなら「MAMP」と言いましたけど、あくまで、「OSとの相性がイイ」というだけなので、WindowsOSでも「MAMP」を入れることはできますし、macOSでも「XAMPP」を入れることができます。
引用： https://enoxproduction.com/setting-xampp-mamp/

- また、下記サイトを参考にすると、、、、
- https://info.winschool.jp/detail86/#Laravelとは
- Laravelというフレームワークを使うためには、その前準備としてXAMPPを導入し、開発環境を構築する必要がる。
- つまり、XAMPP導入〜〜Laravel導入〜〜開発はじめ❗️
- こんな流れになる。




## <font color="Salmon">XAMPPのインストール方法</font>
***<font color="Green">動画31分50秒〜</font>***

- プログラミングアカデミー様の動画では、Windowsを使用しているため、
- Macを使用している自分は別動画を参考にしました。
- https://www.youtube.com/watch?v=yc81-25UknM
 

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/0376318e-87e4-d45f-3157-a64bcd2cb053.jpeg" alt="XAMPPのダウンロードは左上のメニューから進む" width=50% height=50%>


<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/a0296545-e8d2-03a0-33c9-8f77cf2c0b18.jpeg" alt="XAMPPは一番新しいverのサイズが小さい方を選ぶ" width=50% height=50%>


- `xampp-osx-8.2.4-0-installer.app”は、開発元を検証できないため開けません。`
- このエラーが出た場合の対処は、、、

```
- 環境設定
- プライバシーとセキュリティ
- 一般タブ
- AppStoreに変更
- このまま開くをクリック
```

- これでアプリを開けました。
- あとは画面に従って`next`をクリック。
- インストールは5分くらいで完了します。


## <font color="Salmon">XAMPPの基本的な使い方</font>
- 基本的な使い方としては
- PHPの開発環境では毎回これを起動させる。
- そうすることで、ApacheやMySQLをすぐに起動させることができる。
- 使用するのは`Manage Server`タブの`Apache`や`MySQL`を`start`し、`Running...`状態して使用する。
- まずはローカルサーバーにアクセスしてみる。
- ブラウザで`localhost`と入力してEnterを押すと、、、、
- `http://localhost/dashboard/`という自分のPCローカルサーバーにブラウザがアクセスし、XAMPPのダッシュボード画面が開く。
- これはRailsでいうところの`Rails server`みたいなもんかな。。。
- ApacheとMySQLをrunningさせた状態で、ダッシュボードの`phpadmin`にアクセスすると、
- 以下のような管理画面になる。
- エラーになるときはMySQLを起動し忘れているなどの原因が考えられる。

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/08fa6d86-72dd-9903-28a0-c67c1467ed7e.jpeg" alt="" width=50% height=50%>


## <font color="Salmon">XAMPPの場合htdocs = localhost</font>
- XAMPPの場合htdocs = localhostとなる。
- VScodeでFinderからapplication/XAMPP/htdocsを開く。
- この`htdocs`がローカルの開発環境となるわけだ。
- Finderでこの`htdocs`をデスクトップへ移動させると、エイリアス（ショートカット）を作成できる。
- なので、やりたいひとはデスクトップにショートカット作っておくのも良い。
- 試しに、htdocs内で、htmlファイルとphpファイルを作ってみる。
- `test01:html`を新規作成
- `http://localhost/test01.html`にブラウザからアクセス
- すると、ローカルホストで開くことができた。

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>localhost == htdocs なんです！</h1>
</body>
</html>
```


- またphpファイルも作ってみる。
- `test02.php`をhtdocsディレクトリ配下に作成


```php
<?php
  echo "おはようございます！";
?>
```

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/7455d00f-f0f4-d4f4-7eca-7ffcfd487958.jpeg" alt="" width=50% height=50%>


- 同様にphpファイルもローカルホスト上で表示させることができた。
- めっちゃ便利だな。XAMPP！
- でもLaravelとは何が違うんだろう、、、？
- MySQLとか、ターミナルとかでいじるのが普通だと思っていたから、こんな簡単に環境構築できてしまうとなんか拍子抜けだけど、、
- あれ、しかも、これGit管理できてないじゃん。
- GitHubに草生やせないじゃん_？？？？
- これ、XAMPPは、便利だけれど、企業の開発環境としてはほぼ使われないようだね。。。
- まぁ、この動画では、PHPのプログラミングにフォーカスした学習をするって感じになるね。
- 実際は、フレームワークの`Laravel`をインストールし、docker.composeで仮想環境を作って、その中でMySQLとかをいじる感じになるんじゃないかなぁと思う。
- ローカルのWebサーバーとしては、Macの場合、Apacheがプリインストールされているっぽい。
- なので、実質、LaravelとDocker、そしてMySQLの環境構築をやるのが、より実践的かもしんないね。
- `artisan serve`コマンドでlocalhost:8080ポートを指定したりすればいいのかなぁ？
- よく分からんけど、XAMPPは、まぁそんながっつり学ばなくても良さそうだぉ。


## <font color="Salmon">XAMPPの初期設定と初めてのPHPプログラミング</font>










<br>

### ***<font color="Green">✅ 次は動画00時間37分25秒〜</font>***

<br>










<br><br><br><br><br><br><br>
<hr>

## Qiita投稿でよく使うタグ

`## <font color="Salmon">サーモンピンク</font>`

`### <font color="MediumSeaGreen">シーグリーン</font>`

`<img src="" alt="" width=50% height=50%>`
