登録者2万人超えの YouTubeチャンネル「プログラミングアカデミー」様の動画を見て学習しながら、PHPを使ったWebアプリケーションの実装を進めていきます。

<hr>

***2023/11/25***

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

https://www.php.net/manual/ja/funcref.php


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

***2023/11/26***
***動画37分25秒〜***


- `PHPinfo`を開くと、PHPのバージョン情報や設定が確認できる。
- 日付が`ドイツ・ベルリン`の時刻になってしまっているのでAsia/Tokyoに変更する
- `/Applications/XAMPP/etc/php.ini`ファイルを開く。
- VScodeで編集する

```ini
[Date]
; Defines the default timezone used by the date functions
; http://php.net/date.timezone
date.timezone=Europe/Berlin
```

```diff_ini
[Date]
; Defines the default timezone used by the date functions
; http://php.net/date.timezone
+ date.timezone=Asia/Tokyo
```
- これでApacheをストップさせて
- 再起動すると、Asisa/Tokyoに更新される。


***続いてMySQLを起動していく***

- `MySQL Database`を`start`で起動させる
-  `phpMyAdmin`ページを開く
- まずはパスワードを設定する
- ここはMySQL（MariaDB）を扱うページだ。
- ページ上部タブ`ユーザーアカウント`メニューをクリック
- `	root	localhost`という項目の`権限を編集をクリック`
- `change password`（パスワードを変更する）という項目をクリック
- 任意のパスワードを入力します。
- `*******`
- これで実行ボタンをクリックするとパスワードが更新される。
- この状態で`phpMyAdmiin`をリロードすると、エラーが表示される。
- パスワードを変更したことによるエラーである。
- 続いてこれを解消する。
- まずは、パス`/Applications/XAMPP/xamppfiles/phpmyadmin/config.inc.php`というファイルを開く。
- 以下の行に、先ほどのパスワードを追記してあげる。
- 権限者であることの警告がVScodeで出た場合は、承認して進める。

```diff_php:XAMPP/xamppfiles/phpmyadmin/config.inc.php
省略
...
+ $cfg['Servers'][$i]['password'] = '*********';
...
省略
```
- これで`phpMyAdmin`をリロードをすれば、元通り管理画面が出てくるようになる。
- これでOK。


<hr>

***初めてのPHPプログラミング(動画46分45秒〜)***

- これは、別動画でやったのと同様。

```php:test02.php
<?php
  echo "おはようございます！";
  echo 'Hello World!';
?>
```
- `http://localhost/test02.php`にブラウザでアクセス。
- これでテキストが表示される。
- これで、初めてのPHPプログラミング完了。

<hr>

***この動画で作っていく見本のアプリケーション***
- シンプルなPostのアプリを作る。
- `Ruby on Rails`で使った`scaffold`ライブラリで簡単に作れるあのやつ！
- 基本的なCRUDアプリケーションを作っていく。




## <font color="Salmon">PHPの書き方</font>

***phpの特徴***
- phpの書き方
- echo文の書き方
- シングルクォート、ダブルクォート
- phpはWebアプリケーションの開発のために作られたWebアプリ開発特化型のスクリプト言語である。
- 特徴として`<?php ?>`をhtmlに入れることで、html上でphpのプログラムを実行させることができる。
- 実際にhtmlにphpを書き込むのは非推奨じゃないかなぁ、、、？
- 半角スペースと改行は、単語の区切りという同じ意味を持つ。
- `;`セミコロンは、文章の終わりを示す。
- `''`シングルクォートや、`""`ダブルクォート→どちらも同じ`String`として扱われる。
- この辺はhtmlやrubyのerbファイルと同じかな。


***ポイント・注意点***

:::note info
半角スペースと改行は、単語の区切りという同じ意味を持つ。
:::

:::note warn
・改行の数はいくつ入れても、1つとして扱われる。
・全角スペースはエラーになるので注意
:::

:::note info
`.php`ファイルの中に、<DOCTYPE!>を宣言し、htmlを記述することができる。
これはおそらくRubyでいうところの`index.html.erb`みたいなものかなぁと思われる。
:::

- 総括すると、phpは最終的にhtmlとして表示する。
- phpはWebアプリケーション開発に特化して作られたスクリプト言語である。


***2023/11/27***

## <font color="Salmon">PHPの変数について</font>

- `chapter2`ディレクトリ作成
- そこに`1-2.php`ファイル作成
- 簡単なhtmlを作成していく
- `!`でtubキー、
- もしくは`html:5`でエンター
- bodyタグに`<?php?>`を実装
- 適当に`echo`する。
- VScodeにはオートセーブ機能を付けられる。（任意）
- 保存したらローカルホストサーバーを確認。
- ブラウザで`localhost/chapter2/1-2.php`にアクセス。
- echoが反映されている事を確認。
- さらにh1タグも入れてみる。
- `<?php echo '<h1>テキスト</h1>' ?>`
- こんな感じにできる！
- 確認できたら、このコードはもう使わないので、消すかコメントアウトしてOK。
- 続いて、適当に変数を定義し、適当にstringを入力する。

```php
<?php
  $name = '<h1>Hello World!</h1>';
  echo $name;
?>
```


:::note info
なぜ`localhost/...`というパスなのか？
これは`Apache`の設定によるものである！
知らなかった、、、💦
なお、Apacheは`Mac OS X`だとプリインストールされている模様。
つまり、Macの場合、`XAMPP`をわざわざ導入しなくても良い。
:::

:::note info
- なお、echoとprintは意味はほぼ同じ。
- だが、微妙に挙動が違う。
- 初心者の段階では気にしなくて良いらしい。
- `echo '<br/>';`または`echo '<br>';`で改行を挿入できる。
- シングルorダブルクォートで囲ってあげないとダメなので注意。
:::

:::note info
- プログラムは上から順番に実行される。
- これは基本だけど、重要。
:::

ここまでのコード
```php:htdocs/chapter2/1-2.php
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>php_beginning</title>
    </head>
    <body>
      <?php
        $name = '<h1>Hello World!</h1>';
        echo $name;
        echo '<br>';
        echo $name;
        echo "<br/>";
        echo $name;
        // コメント
      ?>
    </body>
  </html>
```

ローカルホストで確認すると、このように画面に反映された。

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/21726b91-36b5-acd6-0d95-6ef38e8fc5be.jpeg" alt="Chapter2の実装後の画面" width=50% height=50%>

Chapter2はここまで。

<hr>

***2023/11/28***

## <font color="Salmon">PHPのデータ型（整数型）について</font>

- `chapter3`ディレクトリを作成
- `1-3.php`ファイルを作成
- 例に倣って`html`ファイルを生成
- （`html:5`または`!`でhtml基本のコードを自動生成）
- `<body>`タグ内に`<?php?>`タグを入れる
- 適当に変数を定義し、`string`を代入する。
- 変数を`echo`する
- 一旦、localhostでブラウザを確認。
- `http://localhost/chapter3/1-3.php`
- ここから新しい内容
- `echo 10;`とすると、データ型の`10`が出力される。
- `echo '10';`はString型なので注意。
- データ型の種類、integerなのかstringなのかを理解する。

```php
<body>
  <?php
    $name = 'Hello!';
    echo $name;
    echo '<br>';

    $number = 10 + 10;
    echo $number;
    echo '<br>';

    $string = '10 + 10';
    echo $string;
    echo '<br>';
  ?>
</body>
```

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/d745bbd2-dbdc-878d-e5dd-ed0400ba6262.jpeg" alt="integer型とstring型の違いの結果" width=50% height=50%>

chpater3はここまで。

<hr>

***2023/12/02***

## <font color="Salmon">PHPの基本データ型について</font>

- まずはChapter4ディレクトリを作成
- その配下に1-4.phpファイルを作る
- いつも通り htmlを基本コードを実装
- bodyタグにphpを宣言する。

:::note info
演算とは= ある値から別の値を作り出すこと。
例えば 3+5=8 は、2つの値から1つ値を出力するよは演算の中でも`二項演算`と呼ぶ。
他には、単項演算や三項演算などがある。
:::

- 文字列の結合演算とは、二項演算では、「あああ」+「いいい」
- `echo "あああ" . "いいい";`
- これで出力は`あああいいい`となる。
- Rubyでは+だった気がするけど、
- PHPでは、結合演算は「ドット」なんだね。

:::note info
結合演算は`左結合`と呼ばれ、左から順番に結合される。
なお、2つだけでなく3以上の結合も可能。
:::

- 整数、少数の結合演算もできる。

```php
$x = 0.1 + 0.2 -0.5;
echo $x
// => -0.2
```
:::note alert
要暗記❗️
整数型 = `int型`
少数型 = `float型`
論理型 = `bool型`
:::

- 論理型で重要な演算を紹介！
- `論理和`と`論理積`

:::note warn
論理和 = `または` `OR` という意味。
`a || b` もしくは`a or b`で表せる。
:::

:::note warn
論理積 = `かつ` `AND` という意味。
`a && b` もしくは`a and b`で表せる。
:::

- 上記は論理型における二項演算である。
- 論理型における単項演算がある。
- それは`!`をつける逆転だ

```php
$x = ! TRUE;
echo $x;
// => FALSE（意味が逆転する。破壊的なのかな？）
```

:::note info
$結婚相手の希望 = ! ブサイク;
=> 結婚相手はブサイクじゃない人
:::

以上、4つは基本であり超重要‼️
覚えておこう‼️

```php:おさらい
文字列型 `string型`
整数型 `int型`
少数型 `float型`
論理型 `bool型`
```


***2023/12/03***

## <font color="Salmon">PHPのNULL型とキャスト演算</font>

- 前回は基本データ型4つを覚えた。
- 今回はNULL型を学ぶ
- さらにキャスト演算も学ぶ


    // データ型：NULL型とキャスト演算について学ぶ
    // $x = NULL;
    // booleanなどの真偽値やNULLなどは大文字で書くのが慣例となっている。
    // NULLとは「無」を表すためのデータ型である。
    // 変数名には日本語も使えるものの、実用上、ほぼ英語しか使用しないので注意。
    // $Saturday_job = TRUE;
    // $Saturday_job_yes_or_no = TRUE or FALSE;
    // $Saturday_job_yes_or_no = "そもそも仕事してない"; = NULL;
    // このような真偽値ではない第三の選択肢を表すことなどに使う。
    // LINE ID教えて = いいよ=TRUE, いやだ=FALSE, ID持ってない=NULL;
    // PHPのデータ型は全部で10個ある。そのうちここまで5個覚えたましたね。
    // キャスト演算は単項演算
    // キャストとは型変換のことを指す。
    // ドル => 円, グラム => キロ, など

    // 重要な構文 var_dump;（正確には関数）
    var_dump(1);
    echo '<br>';
    // => int(1)
    // この構文はecho同様、出力するメソッドである。
    // 値と値のデータ型をセットで出力するというメソッドである。
    // htmlで表現する時には使わないが、上記の通り詳細な情報を教えてくれるので、デバッグの時によく使うらしい。

```php
    var_dump(1);
    echo '<br>';
    var_dump('1');
```

- 出力結果はこうなる。
- デバッグの際、数値とStringの違いがあることが、このメソッドを使うと分かる。

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/7c42943e-f9be-81e2-763e-13a903aa50e1.jpeg" alt="var_dumpの出力例画像" width=50% height=50%>

- また、`var_dump`は変数に対しても使うことができる。

```php
    $x = TRUE;
    var_dump($x);
    // 出力結果 => bool(true)
```

:::note info
- 用途としては、コードが肥大化した時、`変数`が何に対して付けられているか分からなくなることがあるので、そんな時に`var_dump`をよく使用する。
:::


***続いてはキャスト演算について***

```php
    $to_s = (string) 10;
    var_dump($to_s);
    echo '<br>';

    $to_i = (int) '10';
    var_dump($to_i);
    echo '<br>';
```

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/a2e5f365-a6bc-6160-5748-a58d411032c9.jpeg" alt="var_dumpを応用した変換事例" width=50% height=50%>

- `string(2)`の`2`というのは、文字列の文字数を表している。

:::note info
- このように、`( )`の中のデータ型に変換するという`var_dump`の使い方の応用。
- すべての変換規則を覚える必要はない。複雑すぎるので。
:::


***PHPの暗黙の型変換***

```php
    // phpの暗黙の型変換
    $xx =  '10' + '10';
    echo $xx;
    echo '<br>';
    var_dump($xx);
    echo '<br>';
```

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/4be5b377-ac2e-c19d-5480-9888af5c6eb8.jpeg" alt="php暗黙の型変換の事例" width=50% height=50%>

- 無理やりcastキャストしてくれる。
- こういうのを`弱い型付けの言語`と呼ぶ。
- 逆に勝手に型変換してくれない言語を`強い型付けの言語`と呼ぶ
- `JavaScript`も暗黙の型変換してくれる弱い型付けと呼ばれるらしい。
- 確か、`Ruby`は勝手に型変換してくれなかった気がする、、、
- 本来は、'' で囲っているので、Stringであるため、'1010'となるはずだが、phpは暗黙的に数値として判断してくれ、よしなに取り計らってくれるようだ。

:::note alert
- 優しい反面、バグの温床にもなっているので注意。
- 何よりも正しいデータ型でプログラミングすることが重要である。
:::

<br>
<hr>

## <font color="Salmon">PHPの if文 について</font>

- if文
- else文
- まずはこの2つをマスターしていこう。


```php
// TRUEの場合

if (TRUE) {
      echo '真偽値はTRUEです
      echo '<br>';
    }
    echo 'if関数の外側の出力だよ';
    echo '<br>';

// 出力 => 真偽値はTRUEです
//        if関数の外側の出力だよ
```

```php
// FALSEの場合

    if (FALSE) {
      echo '真偽値はTRUEです';
      echo '<br>';
    }
    echo 'if関数の外側の出力だよ';
    echo '<br>';

// 出力 => if関数の外側の出力だよ
// if関数内の処理は実行されず、関数の外側のechoだけ出力される。
```

***()の中身には変数を入れることもできる。***

```php
<?php
    $bool = TRUE;
    if ($bool) {
      $x = 5 + 3;
      echo $x;
      echo '<br>';
    }
    echo 'if関数の外側の出力だよ';
    echo '<br>';
?>
```

```terminal:出力結果
=> 8
=> if関数の外側の出力だよ
```

- 前回のおさらい論理和 OR　と、論理積 ANDだ。
- (TRUE || FALSE) = TRUEとなる。 
- (TRUE $$ FALSE) = FALSEとなる。 
- これに加えて、今回は ***比較演算*** を覚えよう。


```php
    var_dump(1 < 2); // => bool(true)
    echo '<br>';
    var_dump(1 > 2); // => bool(false)
    echo '<br>';
```

- ()の中身を比較演算にすることで、TRUEかFALSEを導き出す。
- さらに`var_dump`でデータ型とその処理結果を出力してくれる。
- 比較演算子については、ほぼRubyと同じなので大体理解しているのでOK。


```php
    var_dump(1 != 2); // bool(true) 逆の真偽値を返すので、等しくない場合にTRUEを返す
    echo '<br>';
    var_dump(1 != 1); // bool(false) 逆の真偽値を返すので、等しい場合にFALSEを返す
    echo '<br>';
```

:::note info
`!`（エクスクラメーションマーク）がつくと、逆の意味になる点には注意しておこう！
`!`は、たしかメソッドにつけると、破壊的になるはず？？Rubyではそうだったけど、PHPではまだ分からない。
:::


- 比較演算に対して変数をつけることもできる。
- なお、比較演算においても暗黙の型変換が行われてしまうので要注意。
- 親切機能と思いきや、これが開発におけるバグの温床になっているらしい。  


```php
<?php
    var_dump(1 < 'a');
    // => bool(false)と表示されてしまう。
    // => これ、Rubyだと例外になるんじゃなかったっけ？
?>
```

```php
    var_dump( 1 == '1'); // bool(true)
    var_dump( 1 == '2'); // bool(false)
```

:::note alert
phpだとこのような演算式が成立してしまう💦
そんな時は、暗黙の型変換を行わない事を指定する比較演算子を使用する
それが、`===`である!
これの場合、`値の比較に加え、データ型の一致も条件となって真偽値を返してくれるのだ！`
:::

```php
    var_dump( 1 === '1'); // => bool(false)
    var_dump( 1 === '2'); // => bool(false)
```

- `===`を使えば、きちんと、両方とも`FALSE`を返してくれるので、エラーだと気付きやすくなる。

<br><hr>


## <font color="Salmon">PHPの if文 をより深く学び、 else文 も学ぶ</font>

- chapter7ディレクトリを作成
- 1-7.phpファイルを作成し、htmlを生成
- ここまではいつも通り。

<br>

- 型変換のルールは複雑で多いので覚えなくて良い。
- 覚えるべきことはphpで`if文`を使用するときの型変換`cast`を行う際は、必ず`bool型`を指定してあげるという事だ。
- そうすれば、複雑なcastルールを覚える必要がなくなる。

```php
  <?php
    var_dump((bool) '文字列'); // => bool(true)
  ?>
```

- 続いて、`if-else構文`について学んでいく。

```php

    // 続いてelse構文について
    $x = -5;
    if ($x < 0) {
      echo 'プラスだよ';
    } else {
      echo 'マイナスだよ';
    }
    echo '<br>';
    // elseが2つ付いて、合計3つの条件式になったとしても、それが余事象の関係性ならば使える。
    $x = 0;
    if ($x > 0) {
        echo 'プラスだよ';
    } else if ($x < 0) {
        echo 'マイナスだよ';
    } else {
        echo 'ゼロだよ';
    }
    echo '<br>';
```

```terminal
出力 => マイナスだよ
出力 => ゼロだよ
```


- `互いに排他的、かつ網羅的である時`に、else構文が使える。
- 排他的とは例えば、数は0以上か0未満のどちらかであり、どちらが同時に成立することはない、という事を指している。
- それを互いに排他的であると呼ぶ。
- かつ、網羅的とは、どちらか一方に必ず該当するということ。
- この2つの条件が揃った場合、これを`余事象の関係`であると呼べる。

<br>


:::note info
また、if文は二重に書くこともできる。
:::

```php
    $z = -4;
    if ($z > 0) {
      if ($z % 2 === 0) {
        echo '正の偶数だよ';
      } else {
        echo '正の奇数だよ';
      }
    } elseif ($z < 0) {
      if ($z % 2 === 0) {
        echo '負の偶数だよ';
      } else {
        echo '負の奇数だよ';
      }
    } else {
      echo 'ゼロだよ';
    }
```

```terminal:出力結果
負の偶数だよ
```

else文については、ここまで


***2023/12/04***

## <font color="Salmon">PHPの連想配列について（その1）</font>

- コンピュータは2進数でしか理解できない。
- それを理解できるようにするために`型`が存在する。
- phpではデータ型は`基本型`、`スカラ型`、`複合型`の3種類で呼ばれる。
- `基本型`はそれ以上、分割できない型を指す。


```php
    $array = [
        'fruits' => 'apple'
    ];
    echo $array; // => Array
    echo '<br>'; // 改行
    var_dump($array) // => array(1) { ["fruits"]=> string(5) "apple" }
```

<img src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/3486945/368dff3d-7111-7bf6-2348-b7552ec4b643.jpeg" alt="" width=50% height=50%>



- 複数の値も代入できる。
- その際は、`,`カンマで区切って改行する。

```php
    $array = [
        'fruits' => 'apple',
        'fruits' => 'orange',
        'drink' => 'coffee',
        'fruits' => 'banana',
        'drink' => 'green tea',
    ];
    echo $array;
    echo '<br>';
    var_dump($array)
```

- これを出力してみると、、、

```terminal
>>> var_dump($array)

array(2) { ["fruits"]=> string(6) "banana" ["drink"]=> string(9) "green tea" }

```

- array(2)の`2`は、キーの数を指している。
- 出力されるのは対応するキーの最後尾のレコードの`value`
- この連想配列では、`fruits`キーのレコードの最終である`banana`というvalueが出力された。
- また、`drink`キーでは、最終である`green tea`というvalueが出力された。

```php
    $array['food'] = 'yakitori';
    echo $array['food'];
    echo '<br>';
    var_dump($array);
    echo '<br>';
```

- 以下のように出力される。

```terminal
yakitori
array(3) { ["fruit"]=> string(6) "banana" ["drink"]=> string(9) "green tea" ["food"]=> string(8) "yakitori" }
```

- 上記のように、keyとvalueは追加することもできる。
- また、変数に対してキーを指定してあげると、その中身のvalueのレコードを取得できる。


<br>
<hr>


***2023/12/06〜12/08***


## <font color="Salmon">PHPの連想配列について（その2）</font>

- 連想配列は`キーバリュー型`のデータ構造である。
- 今回も、連想配列について深掘りしていく。
- 何度も言うが、暗黙の型変換は行われてないように実装する。
- またキーにするデータ型は統一させることも意識する。
- 一つの連想配列のデータに、複数のデータ型が混在しないようにする。
- 例としては`integer型`と`string型`が混在すると良くない。

***phpには厳密な`配列`というデータ型は無い***

- phpには先に説明した連想配列というものがあるが、配列という名称のデータ型は無い
- 他のスクリプト言語には`配列`と`連想配列`と分けられてデータ型が存在する。
- phpの場合、連想配列において、キーを0から始める連番で作ったものに関しては、人によって`配列`と呼ぶ事がある。

:::note info
phpで連想配列を配列と呼ぶ条件は、`キーが0から始まる連番であること`
他の言語では連想配列と配列は別々に用意されているものたが、phpの場合は、そのような区分けはされていないという規則になっている。
:::

```php
    <?php
        $player = [ "仁志", "清水", "高橋", "松井", "清原",];
        var_dump($player);
    ?>
```

```terminal
array(5) { [0]=> string(6) "仁志" [1]=> string(6) "清水" [2]=> string(6) "高橋" [3]=> string(6) "松井" [4]=> string(6) "清原" }
```
- 上記のように、keyを省略すると、自動的に0番から順番にキーが割り振られる。
- このように、phpでは連想配列から配列っぽいものを作り出すことができる。

:::note alert
`$player = [ "仁志", "清水", "高橋", "ゴジラ" => "松井"];`
このように、キーをinteger型であるのに、String型を混合しないようにしよう。
:::

- また、連想配列（配列）の最後尾にvalueを付け足すこともできる。
- その際は、`array_push`メソッドを使用する。
- `( )`の中には、`$変数名, '値'`とすることで追加できる。

```php
<?php
    $player = [ "仁志", "清水", "高橋", "松井", "清原",];
    array_push($player, "江藤", "二岡", "阿部", "上原");
    var_dump($player);
?>
```

```console
array(9) { [0]=> string(6) "仁志" [1]=> string(6) "清水" [2]=> string(6) "高橋" [3]=> string(6) "松井" [4]=> string(6) "清原" [5]=> string(6) "江藤" [6]=> string(6) "二岡" [7]=> string(6) "阿部" [8]=> string(6) "上原" }
```

:::note info
なお、追加する`value`が一つだけの場合は、以下のように省略が可能。
`$player[] = "江藤";`
:::


<hr><br>

***コメント***
```html
<!-- この頃のジャイアンツ打線、やべぇなwww -->
```
<br><hr>


***`array_merge`で配列同士を結合させる***
- `array_merge`で配列同士を結合させることができる。


```php
<?php
    $giants = [ "仁志", "清水", "高橋", "松井", "清原",];
    $japan = [ "ヌートバー", "近藤", "大谷", "村上" ];
    echo '<br>';
    $all_star = array_merge($giants, $japan);
    var_dump($all_star);
    echo '<br>';
    echo '<hr>';
?>
```

```console
array(9) { [0]=> string(6) "仁志" [1]=> string(6) "清水" [2]=> string(6) "高橋" [3]=> string(6) "松井" [4]=> string(6) "清原" [5]=> string(15) "ヌートバー" [6]=> string(6) "近藤" [7]=> string(6) "大谷" [8]=> string(6) "村上" }
```

:::note warn
なお、この`array_merge`メソッドは、結合後であっても、オリジナルの配列は変わらない。
phpのメソッドには、`破壊的であるメソッド`、`破壊的ではないメソッド`が存在する。
プログラムを実装する際は、使おうとするメソッドが`破壊的であるか否かを調べて理解した上で使う`ように努めよう。

***`破壊的`か？`非破壊的`か？***

:::

***その他配列関連のメソッド***

`array_unshift` = 配列の先頭に要素を追加する。
`array_shift` = 配列の`先頭`の要素を切り取る（抜き出す）。`var_dump`すると切り取った要素を返してくれる。
`array_pop` = 配列の`最後尾`から要素を切り取る（抜き出す）。`var_dump`すると切り取った要素を返してくれる。


:::note alert

`0 => 'ゼロ'`
`100 => 'ヒャク'`
このように、歯抜けの`key`を作らない方が良い！
仕方なく歯抜けのキーを作る際は、`'0' => 'ゼロ'`のように、`string型`でキーを定義する。これもあまりやりたくはないが、、、。
:::

<br><hr><br>

***2023/12/09***

## <font color="Salmon">PHPの for文 について</font>

- PHPの for文 について学ぶ
- for文なので、同じ処理をn回繰り返すとか、そんな感じだろうと思う。
- とりあえず書いてみたfor文はコレ。


```php
    <?php
        for ($i = 0; $i < 10; $i++) {
            echo 'こんにちは';
            echo '<br>';
        }
    ?>
        // for (初期化処理：主に変数を定義, 継続条件：どこまで継続するか, 更新処理：初期化処理の値に加える処理) {
            // 具体的に行う処理
        // }
```

```console:出力
こんにちは
こんにちは
こんにちは
こんにちは
こんにちは
こんにちは
こんにちは
こんにちは
こんにちは
こんにちは
```

- `$i++`は加算子もしくはインクリメントと呼ばれる。

:::note info
以下は全て同じ。変数に対して1ずつ足していくという意味。
- `$i++;`
- `$i = $i + 1;`
- `$i += 1;`
:::

- for文を抜けた後に変数`$i`をechoしてみると、、、、
- `10`と出力される。
- これは0〜9までの10回分である。 
- `$i < 10;`なので、10はfalseになる。

```php
echo $i;
// => 10
```

- 上記を確かめるためにこんなコードを実装してみる。

```php
    for ($x = 0; $x < 10; $x++) {
        $count = (string) $x;
        echo $count . '回目の繰り返しです。';
        echo '<br>';
    }
```

```console:出力結果
0回目の繰り返しです。
1回目の繰り返しです。
2回目の繰り返しです。
3回目の繰り返しです。
4回目の繰り返しです。
5回目の繰り返しです。
6回目の繰り返しです。
7回目の繰り返しです。
8回目の繰り返しです。
9回目の繰り返しです。
```

- `$count = (string) $x;　`　⇨  新たに変数`$count`にstring型を指定し、`for文`の値`$x`を代入する。
- それに、テキスト`回目の処理です`を加える。
- $countの値（string型）を手前に呼び出して、 `.`をつけて`Join`結合させた文章を作った。
- これを10回繰り返しehcoで呼び出している。
- echoで呼び出してみた結果を見て分かる通り、値は0から始まっているのが分かる。
- さらに10は条件式でfalseになっているので、`10回目の繰り返しです。`とは出力されていないのが理解できる。

:::note alert
`$count = (string) $x;`
これは暗黙の型変換を行わず自らのコードで`integer型`から`string型`に`cast（変換）`している。
:::



:::note info
`echo $count . 'テキスト';`は文字列の結合演算式である。
これに変わってこんな書き方もある。
`echo "{$count}テキスト";`という埋め込み型も使える。
※ただし、Stringを囲むクォーテーションは必ず`" "`ダブルクォーテーションでなければならないというルールがある。
※このへんは`Ruby`と同じだったかなぁ？？
:::

- 最後に、九九の掛け算を出力するfor文を作ってみる。

```php
    for ($i = 1; $i < 10; $i++) {
        for ($j = 1; $j < 10; $j++) {
          $x = $i * $j;
          echo "{$i}x{$j}={$x}";
          echo '<br>';
       }
    }
```

- 結果は以下の通り。

```terminal:出力
1x1=1
1x2=2
1x3=3
1x4=4
1x5=5
1x6=6
1x7=7
1x8=8
（中略）
9x6=54
9x7=63
9x8=72
9x9=81
```

<hr>
<br>

## <font color="Salmon">PHPの繰り返し処理総ざらい</font>

- for文をはじめとした、繰り返し処理のメソッドをまとめて学習していく。
- 今回は`lesson`ディレクトリを作り、その中に`1-11.php`ファイルを作って、実装していく。

<br>

***break文***
- ループ処理を中断するメソッド。
- 【使用例】ECサイトのカートの中に、セール商品が含まれているかどうか？を判定したい時、その条件に合致した場合にbreakで、中断する事ができる。

```php
<body>
  <?php
    $arr = [12, 45, 22, 67, 36, 5, 56, 13];
    
    //配列の要素数を取得
    $num = count($arr);
    $message = '含まれていません';
    for ($i = 0; $i < $num; $i++) {
      $value = $arr[$i];
      if ($value < 0) {
        $message = '含まれています';
        break;
      }
    }
    echo $message;
  ?>
</body>
```
- マイナスの数が無い場合→→`含まれていません`と出力される。
- マイナスの数がある場合→→`含まれています`と出力される。

<br>

***continue文***
- for文などの繰り返し処理を行う中で、ある条件の時は、その繰り返し処理をスキップして次の処理に進むというメソッド。
- 数字が入っている配列から偶数だけを足していって、その合計を求めるアルゴリズムを作ってみる。
- 以下の通り。

```php
<body>
  <?php
    $arr = [12, 45, 22, 67, 36, 5, 56, 13];
    
    //配列の要素数を取得
    $num = count($arr);
    $num = 0;
    for ($i = 0; $i < $num; $i++) {
      $value = $arr[$i];
      if ($value % 2 === 1) {
        continue;
      }
      $sum += $value;
    }
    echo $sum;
  ?>
</body>
```

:::note warn
上記のコードの場合、`if ($value % 2 === 0)`として、2で割り切れた場合に数を足すという書き方もできる。
だが、処理が100行を超えるような長いコードになった時、`どんな処理をするかを早めに宣言する`事で、コードの可読性が上がる。
そのため、`continue`メソッドは、単純なメソッドの機能以外にも、可読性を高めるなど、複数人での開発時に親切なコードを意識する上でも、重要なメソッドである。
:::

<br>

***while文***

- for文と似ている。
- for文では以下のように定義した事をまずは振り返る。

```php:for文の文法
<?php
  for (初期化式, 継続条件式, 更新式) {
    具体的に行う処理
  }
?>
```

- while文では以下のような文法になる。

```php:for文の文法
<?php
  初期化式
  while (継続条件式) {
    - 具体的に行う処理
    - 更新式
  }
?>
```

- for文とwhile文は似ているし、用途も似ている。
- シチュエーションによって、どちらが良いかを判断して使っていこう。
- while文を使って、先のプログラム「配列からマイナス数値を見つけた時にbreak」を作ってみる。

```php
    <?php
        $arr = [12, 45, 22, 67, 36, 5, 56, 13];
    
        // 配列の要素数を取得
        $num = count($arr);
        $message = '含まれていません';
        // 初期化式
        $i = 0;
        while ( $i < $num) {
            $value = $arr[$i];
            if ($value < 0) {
                $message = '含まれています';
                break;
            }
            // 更新式
            $i++;
        }
        echo $message;
    ?>
```

- 条件定義の初期化式が、while構文の外（前）に飛び出る。
- また条件の更新式がwihle構文の外（後）に飛び出る。
- forとwhileは、どっちがシンプルに書けるか？で選ぶのが良いだろう。
- コードが肥大化すると、whileの方が用途としては優先度が高くなると思われる。

<br>

***foreach文***

```php
    <?php
        foreach($連想配列名 as $変数名) {
            // 実行したい処理
        }
    ?>
```

- とても重要な構文
- 連想配列の値をひとつひとつ取り出したい時に使う構文・メソッドである。
- 上記の例で言うと、、、
- `$連想配列`の中の`value`の値が、`$変数`に一つ一つ代入される。
- という事である。以下がサンプルコード.


```php
<body>
    <?php
        // foreach文
        $array = [1, 2, 3, 4, 5];

        foreach($array as $value) {
            echo $value;
            echo '<br>';
        }
        echo '<br>';
        echo '<hr>';
    ?>
</body>
```

```terminal:出力結果
1
2
3
4
5
```

- 先に説明した3つの構文だが、`foreach`を使うとさらにシンプルに書けるのでオススメ。
- 先ほどの`マイナスの数字がある時に「含まれています」と表示させる`プログラムを、`foreach`で再度作ってみる。


```php
<?php
    // foreachで「マイナスの数があるか判定する」プログラム
    $num_array = [12, 45, 22, 67, 36, 5, 56, 13];
    $message = 'マイナスの数は含まれていません';
        foreach($num_array as $number) {
            if($number < 0) {
                $message = 'マイナスの数が含まれています';
                break;
            }
        }
    echo $message;
?>
```

```terminal:出力結果
マイナスがない場合 : マイナスの数は含まれていません
マイナスがある場合 : マイナスの数が含まれています
```

:::note info
このように、`foreach`を使うと、ループ処理の記述をシンプルにできる。
積極的に`foreach`を使っていこう！
:::

- また、foreachではkeyの値も取り出すことができる。
- 続いて、配列からフルーツの個数をひとつずつ出力するforeach文を作ってみる。

```php
<?php
    // foreachで「マイナスの数があるか判定する」プログラム
    $fruits = [
        'apple' => 3,
        'orange' => 5,
        'grape' => 2
    ];
    
    foreach($fruits as $key => $value) {
        echo "{$key}の数は{$value}個です。";
        echo '<br>';
    }
?>
```

```terminal:出力結果
appleの数は3個です。
orangeの数は5個です。
grapeの数は2個です。
```

<br><br>

## <font color="Salmon">PHPの関数について</font>

- 関数とは、inputしてfuncitionで処理を実行し、その結果をoutputするという一連の流れをプログラムしたもの。
- 出力結果は変数に代入され、他の場所から呼び出せたりする。
- 数学の関数に由来する。
- `Y = 2X + 1`という1次関数は、Xの値によって結果Yが異なる。
- これと同様に、PHPにおける関数も考えることができる。


:::note info
PHPの関数は主に2種類ある。
・`ビルトイン関数` ：元々phpに定義づけられている関数
・`ユーザー定義関数` ：ユーザーが自由に定義づけることができる関数
である。
:::

***ビルトイン関数の例***

```php
<?php
    // ビルトイン関数の例1
    $array = [1, 2, 3];
    $x = count($array);
    echo $x;
    // => 3 (配列の要素の数をカウントしてくれる関数count)
    
    // ビルトイン関数の例2
    $z = -10;
    $absolute_number = abs($z);
    echo $absolute_number;
    // => 10 (値の絶対値を返してくれる関数abs -10の絶対値は10である => absolute numberの略称)
?>
```

- 他にもいろんなビルトイン関数がある。
- 詳しくは公式ドキュメントを確認する。
- https://www.php.net/manual/ja/funcref.php

<hr>


***ユーザー定義関数の例***

- phpに限った話では無いが、
- ユーザー自身で関数を自作することができる。
- これをユーザー定義関数と呼ぶ


```php
function 関数名($仮引数1, $仮引数2){
  //処理
  return 返り値;
}
関数名($実引数);
```

- 引数には3〜4くらいで収める。
- それ以上の引数を渡すのはコードとしてよくない。
- 引数が多くなりそうな場合は、関数を複数に分けるなど、可読性を高めたプログラミングを意識する。
- 以下が関数の例


```php
<?php
  function add($x, $y) {
    $z = $x + $y;
    return $z;
    }
    
    $sum = add(15, 6);
    echo $sum;
    // => 21と表示される。
?>
```








<br>

### ***<font color="Green">✅ 次は動画03時間17分28秒〜</font>***

<br>








<br><br><br><br><br><br><br>
<hr>

## Qiita投稿でよく使うタグ

`## <font color="Salmon">サーモンピンク</font>`

`### <font color="MediumSeaGreen">シーグリーン</font>`

`<img src="" alt="" width=50% height=50%>`
