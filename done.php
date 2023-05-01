<?php
session_start();
require_once('unit.php');
if (empty($_SESSION['token']) || empty($_POST['token']) || $_SESSION['token'] !== $_POST['token']) {
    header('Location: contact_1.php');
    exit();
}
unset($_SESSION['token']);
mb_language("Japanese");
mb_internal_encoding("UTF-8");
$to = h($_POST['Email']);
$subject = 'お問い合わせを受け付けました';
$message = '※このメールはシステムからの自動返信です※' . "\r\n" . "\r\n" .
    'お世話になっております。' . "\r\n" .
    'この度はお問い合わせありがとうございました。' . "\r\n" .
    '以下の内容でお問い合わせを受け付けいたしました。' . "\r\n" .
    '５営業日以内に、担当者よりご連絡いたしますので' . "\r\n" .
    '今しばらくお待ちくださいませ。' . "\r\n" . "\r\n" .
    '━━━━━━□■□　お問い合わせ内容　□■□━━━━━━' . "\r\n" .
    'ご用件：' . h($_POST['requirements']) . "\r\n" . "\r\n" .
    'お名前:' . h($_POST['name']) . "\r\n" . "\r\n" .
    '電話番号:' . h($_POST['phoneNumber']) . "\r\n" . "\r\n" .
    'Mail:' . h($_POST['Email']) . "\r\n" . "\r\n" .
    'お問い合わせ内容:' . h($_POST['inquiry']) . "\r\n" . "\r\n" .
    '━━━━━━━━━━━━━━━━━━━━━━━━━━━━' . "\r\n";
$headers = "From:info@infomation.com";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/done.css">
    <title>送信完了</title>
</head>
<body>
<?php if (mb_send_mail($to, $subject, $message, $headers)):?>
    <div class="wrap">
        <div class="mailsend">
            <h1 class="mailsend_title">お問い合わせを受け付けました。</h1>
            <div class="mailsend_message">
                <p class="message_head">━━━━━━□■□お問い合わせいただき<span class="space">ありがとうございました</span>□■□━━━━━━<br><span class="small_message">お問い合わせを受け付けました。<br>折り返し、担当者よりご連絡いたしますので、<br>
                    恐れ入りますが、しばらくお待ちください。</span><br></p>
                <p class="message_body">
                    お問い合わせ受付完了メールを配信しております。<br>
                    完了メールが届かない場合、処理が正常に行われていない可能性があります。<br>
                    大変お手数ですが、再度お問い合わせの手続きをお願い致します。
                </p>
            </div>
            <p class="mailsend_back"><a href="contact_1.php">お問い合わせフォームに戻る</a></p>
        </div>
    </div>
<?php else : ?>
    <p>メールが正しく送信されませんでした。<br>お手数ですがs_igari@ebacorp.jpまでご連絡ください。</p>
<?php endif; ?>
</body>
</html>
