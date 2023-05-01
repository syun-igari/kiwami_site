<?php
function h(?string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/load.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>お問い合わせフォーム</title>
</head>

<body>
    <div id="loader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <div class="header-wrapper">
        <header>
            <div class="header-nav">
                <h1 class="header-log"><a href="index.html"></a></h1>
                <div class="mobile-cover">
                    <div class="mobile-menu">
                        <span></span>
                        <span>menu</span>
                        <span></span>
                    </div>
                </div>
                <nav class="nav__wrapper">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <section>
        <div class="top-section__wrapper">
            <div class="phrase">
                <p class="phrase__first"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><span class="blue">KIWAMICORPORATE</span></span></span></p>
                <p class="phrase__second"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><span class="blue">Contact</span></span></span></p>
            </div>
            <div class="img_wrap">
                <div class="background-area"></div>
            </div>
        </div>
    </section>
    <div class="box_con02">
        <form method="post" action="">
            <table class="formTable">
            <p class="error"><?=!empty($error['name']) ? $error['name'] : ''?></p>
                <tr>
                    <th>確認</th>
                    <td>
                        <div class="box_br">
                            <label>
                                <input type="radio" checked name="gender" value="テキスト1">
                                テキスト1
                            </label>
                        </div>
                        <div class="box_br">
                            <label>
                                <input type="radio" name="gender" value="テキスト2">
                                テキスト2
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>ご用件</th>
                    <td><select name="requirements">
                            <option value="">選択してください</option>
                            <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                            <option value="リンクについて">リンクについて</option>
                        </select></td>
                </tr>
                <tr>
                    <th>お名前<span>必須</span></th>
                    <td><input size="20" type="text" class="wide" name="name" value="<?=!empty($_POST['name']) ? h($_POST['name']) : ''?>"/></td>
                </tr>
                <tr>
                    <th>電話番号（半角）<span>必須</span></th>
                    <td><input size="30" type="text" class="wide" name="phoneNumber" value="<?=!empty($_POST['phoneNumber']) ? h($_POST['phoneNumber']) : ''?>"/></td>
                </tr>
                <tr>
                    <th>Mail（半角）<span>必須</span></th>
                    <td><input size="30" type="text" class="wide" name="Email" value="<?=!empty($_POST['Email']) ? h($_POST['Email']) : ''?>"/></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容<span>必須</span></th>
                    <td><textarea name="inquiry" cols="50" rows="5" value="<?=!empty($_POST['inquiry']) ? h($_POST['inquiry']) : ''?>"></textarea></td>
                </tr>
            </table>
            <p class="btn">
                <span><input type="submit" value="　 確認 　" formaction="confirm_1.php"></span>
            </p>
        </form>
    </div>
    <footer class="footer04">
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Company</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p class="copyright">Copyright WEBSITE,Inc. All rights reserved.</p>
    </footer>

    <script src="js/other.js"></script>
    <script src="js/load.js"></script>
</body>

</html>
