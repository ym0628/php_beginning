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







<br>

### ***<font color="Green">✅ 次は動画02時間22分22秒〜</font>***

<br>










<br><br><br><br><br><br><br>
<hr>

## Qiita投稿でよく使うタグ

`## <font color="Salmon">サーモンピンク</font>`

`### <font color="MediumSeaGreen">シーグリーン</font>`

`<img src="" alt="" width=50% height=50%>`
