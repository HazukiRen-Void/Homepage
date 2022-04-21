<?php
//直リンクされた場合contact.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: contact.php");
	exit();
}

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//送信先アドレス
$to = $_POST['customerEmail'];
//メール件名
$subject = "お問い合わせありがとうございます。";
//メッセージ本文を視覚的に見やすく格納（ヒアドキュメント）
$message = <<< EOM
お問い合わせありがとうございます。

以下の内容で承りました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 お名前 】
{$_POST["customerName"]}

【 電話番号 】
{$_POST["customerTell"]}

【 メールアドレス 】
{$_POST["customerEmail"]}

【 件名 】
{$_POST["subject"]}

【 お問い合わせ内容 】
{$_POST["message"]}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
//送信元
$headers = "From: yaksoccer@gmail.com";
//メール送信
mb_send_mail($to, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせありがとうございました</title>
</head>
<body>
    <h1>お問い合わせ完了</h1>
    <p>お問い合わせありがとうござました。</p>
    <p>今後とも当サイトをよろしくお願いいたします。</p>
    <a href="contact.php">お問い合わせトップへ</a>
</body>
