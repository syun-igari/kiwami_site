<?php
session_start();
require_once('unit.php');
require_once('Validation.php');
if (empty($_SESSION['token']) || empty($_POST['token']) || $_SESSION['token'] !== $_POST['token']) {
    header('Location: contact_1.php');
    exit();
}
if (!empty($_POST['confirm'])) {
    $validate = new Validation();
    $error = $validate->validate($_POST);
}
if (!empty($error)) {
    require_once('contact_1.php');
    exit;
}


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/confirm.css">
    <title>確認画面</title>
</head>

<body>
    <div class="main-title contact">
        <h3>お問い合わせ内容</h3>
    </div>
    <form class="form" action="" method="post">
        <div class="confirm_table">
            <table class="formTable">
                <tr>
                    <th>ご用件</th>
                    <td><?= h($_POST['requirements']) ?></td>
                </tr>
                <tr>
                    <th>お名前</th>
                    <td><?= h($_POST['name']) ?></td>
                </tr>
                <tr>
                    <th>電話番号（半角）</th>
                    <td><?= h($_POST['phoneNumber']) ?></td>
                </tr>
                <tr>
                    <th>Mail（半角）</th>
                    <td><?= h($_POST['Email']) ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><?= nl2br(h($_POST['inquiry'])) ?></td>
                </tr>
            </table>
            <p class="btn">
                <span><input type="submit" name="confirm" value="修正" formaction="contact_1.php"></span>
                <span><input type="submit" value="送信" name="done" formaction="done.php"></span>
            </p>
            <input id="name" type="hidden" name="requirements" value="<?= h($_POST['requirements']) ?>" />
            <input id="name" type="hidden" name="name" value="<?= h($_POST['name']) ?>" />
            <input id="name" type="hidden" name="phoneNumber" value="<?= h($_POST['phoneNumber']) ?>" />
            <input id="name" type="hidden" name="Email" value="<?= h($_POST['Email']) ?>" />
            <input type="hidden" name="inquiry" value="<?= h($_POST['inquiry']) ?>">
            <input type="hidden" name="token" value="<?= $_POST['token'] ?>">
    </form>
</body>

</html>
