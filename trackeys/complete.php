<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
//データ格納
 $to = $_POST["email1"];//メール送信先の設定
 $subject = "TracKeys エントリー";//メールの件名
 $header = "From: recruite@trackeys.com";//送信元アドレス
 $header .= "\n";//改行
 $header .= "Bcc: tdp@sairafactory.com";//確認メール管理者受信用
 $message = "この度は、TracKeysへご応募頂きありがとうございます。" . "\n" .
 "貴殿のご応募を下記内容にて受け付けました" . "\n" . "\n" .
 "応募職種：" . $_POST["position"] . "\n" .
 "応募種別：" . $_POST["class"] . "\n" .
 "お名前（漢字）：" . $_POST["name"] . "\n" .
 "お名前（ふりがな）：" . $_POST["furigana"] . "\n" .
 "E-Mail：" . $_POST["email1"] . "\n" .
 "電話番号：" . $_POST["tel"] . "\n" .

 
//メール送信
  mb_send_mail($to, $subject, $message, $header);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<link href="css/reset.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--nav背景-->
<script>
$(document).ready(function() {
    $(window).scroll(function () {
       if ($(this).scrollTop() > 30) {
            $('header').addClass('backc');
       } else {
            $('header').removeClass('backc');
            }
       });
});
</script>

<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/messages_ja.js"></script>
<script>
    $(document).ready(function(){
    	$('#entrypage').validate();
    });
</script>

<script type="text/javascript" src="js/ajaxzip3.js"></script>
</head>

<body class="entrypage">
<div id="wrapper">
    <header>
        <h1><a href="index.html"><img src="images/logo.svg" alt="TracKeys（トラッキーズ）ロゴ"/></a></h1>
    </header>
    <main>
    <article>
        <section>
            <h1>エントリー（完了画面）</h1>
            <p>エントリー完了</p>
            <p>この度は、弊社にご応募頂きありがとうございました。</p>
            <p>ご入力内容の送信が完了しました。</p>
            <p>5日営業日以内に採用担当者よりご連絡致します。</p>
            <p>今しばらくお待ちくださいませ。</p>
        </section>
    </article>
    </main>
    <footer>
        <div id="localnav">
            <ul>
            <li><a href="#">会社概要</a></li>
            <li><a href="#">TracKeysサイト</a></li>
            </ul>
        </div>
        <div id="cr"><small>© TracKeys inc. All rights reserved.</small></div>
    </footer>
</div>
</body>
</html>
