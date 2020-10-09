
<?php
$position = isset($_POST["position"])? $_POST["position"] : "";
$class = isset($_POST["class"])? $_POST["class"] : "";
$name = isset($_POST["name"])? $_POST["name"] : "";
$furigana = isset($_POST["furigana"])? $_POST["furigana"] : "";
$email1 = isset($_POST["email1"])? $_POST["email1"] : "";
$email2 = isset($_POST["email2"])? $_POST["email2"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$fUlResume = isset($_POST["fUlResume"])? $_POST["fUlResume"] : "";
$fUlExperience = isset($_POST["fUlExperience"])? $_POST["fUlExperience"] : "";
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<link href="css/reset.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--TOPに戻るボタン-->
<script>
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});
</script>

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
            <h1>エントリー（確認画面）</h1>
<form action="complete.php" method="post" id="entrypage">

<input type="hidden" name="position" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="class" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="furigana" value="<?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="email1" value="<?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="email2" value="<?php echo htmlspecialchars($email2,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?>">
<?php /*?><input type="hidden" name="fUlResume" value="<?php echo htmlspecialchars($showroom,ENT_QUOTES,"UTF-8"); ?>">
<input type="hidden" name="fUlExperience" value="<?php echo htmlspecialchars($catalog1,ENT_QUOTES,"UTF-8"); ?>"><?php */?>

<dl>
<dt>応募職種</dt>
<dd>
<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>
</dd>
<dt>応募種別</dt>
<dd>
<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>
</dd>
<dt>お名前（漢字）</dt>
<dd>
<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>
</dd>
<dt>お名前（ふりがな）</dt>
<dd>
<?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?>
</dd>
<dt>E-mail</dt>
<dd><?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>E-mail（確認）</dt>
<dd><?php echo htmlspecialchars($email2,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>電話番号</dt>
<dd><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?></dd>
<?php /*?><dt>履歴書</dt>
<dd><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?></dd>
<dt>職務経歴書</dt>
<dd><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?></dd><?php */?>
<input type="button" value="戻る" onClick="history.back()">
<input type="submit" value="送信">
</form>
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
	    <p class="pagetop"><a href="#top"><img src="images/arrows.svg" alt="トップに戻るボタン"/></a></p>
</div>
</body>
</html>
