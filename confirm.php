<?php
session_start();

if (!isset($_SESSION['form'])) {
    header('Location: info.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'xxx@xxx.jp';
    $from = $post['email'];
    $subject = '【法人のお客様】お問い合わせが届きました';
    $body = <<<EOT
名前： {$post['name']}
会社名： {$post['Cname']}
メールアドレス： {$post['email']}
内容：
{$post['inputsf']}
EOT;

    mail($to, $subject, $body, "From: {$from}");
    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>

</head>
<body>

<header>
			
		<p>お問い合わせ</p>

    <div class="container">
        <form action="" method="POST">

            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="inputName">お名前</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['name']); ?></p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="inputCName">会社名</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['Cname']); ?></p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="inputEmail">メールアドレス</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['email']); ?></p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="inputContent">お問い合わせ内容</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo nl2br(htmlspecialchars($post['inputsf'])); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9 offset-3">
                    <a href="info.php">戻る</a>
                    <button type="submit">送信する</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>