<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['Cname'] === '') {
        $error['Cname'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
    if ($post['inputsf'] === '') {
        $error['inputsf'] = 'blank';
    }

    if (count($error) === 0) {
        $_SESSION['form'] = $post;
        header('Location: confirm.php');
        exit();
    }
} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせ</title>
    <style>
    </style>

    <link rel="stylesheet" href="css/0_all_style.css" />
    <link rel="stylesheet" href="css/3_info_style.css" />

  </head>
  <body>
    <header>
    <div id="navArea">
      <nav>
        <div class="inner">
          <ul>
          <li><a href="home.php">Home</a></li>
              <li><a href="work.php">Work&Skill</a></li>
              <li><a href="info.php">連絡・問い合わせ</a></li>
              <li><a href="code.html">ソースコード</a></li>
          </ul>
        </div>
      </nav>
      <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      </div>
    </header>

<a href="#" id="page_top" class="page_top_btn"><h1>トップへ戻る</h1><h2>※jQuery使用</h2></a>

    <main>
        <div id="formunion">
            <div class="contact-form">
                <p class="title2">全て必須項目です<br>※PHP使用</p>
                <form action="" method="POST" novalidate>

                <?php if ($error['name'] === 'blank'): ?>
                    <p class="error_msg">※お名前をご記入下さい</p>
                <?php endif; ?>

                <div class="item">
                    <label class="label">お名前</label>
                    <input type="text" class="inputs" name="name" value="<?php echo htmlspecialchars($post['name']); ?>"  required autofocus>
                </div>

                <?php if ($error['Cname'] === 'blank'): ?>
                    <p class="error_msg">※会社名をご記入下さい</p>
                <?php endif; ?>

                <div class="item">
                    <label class="label">会社名</label>
                    <input type="text" class="inputs" name="Cname" value="<?php echo htmlspecialchars($post['Cname']); ?>"  required autofocus>
                </div>

                <?php if ($error['email'] === 'blank'): ?>
                                <p class="error_msg">※メールアドレスをご記入下さい</p>
                            <?php endif; ?>
                            <?php if ($error['email'] === 'email'): ?>
                                <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                            <?php endif; ?>

                <div class="item">
                    <label class="label">メールアドレス</label>

                    <input type="email" class="inputs" name="email" value="<?php echo htmlspecialchars($post['email']); ?>" required />
                </div>

                <?php if ($error['inputsf'] === 'blank'): ?>
                                <p class="error_msg">※お問い合わせ内容をご記入下さい</p>
                            <?php endif; ?>

                    <div class="item">
                    <label class="label">内容</label>
                    <textarea class="inputsf" placeholder="内容" name="inputsf" ><?php echo htmlspecialchars($post['inputsf']); ?></textarea>
                    </div>

                    <div class="button-area">
                    <input type="submit" value="確認" />

                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="js/0_all_script.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/0_all_JQ.js"></script>

  </body>
</html>