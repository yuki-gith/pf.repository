<?php
$dsn = 'mysql:host=localhost;dbname=skil;charset=utf8';
$user = 'xxx';
$pass = 'xxx';

try{
      $dbh = new PDO($dsn,$user,$pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]);
      $sql = 'SELECT id, lan, year, memo, flg FROM skil WHERE flg >= 1';
      $stmt = $dbh->query($sql);
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);

      $dbh = null;
    }catch(PDOException $e) {
    echo "接続失敗".$e->getMessage();
      exit();
    };
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <style>


    </style>

    <link rel="stylesheet" href="css/0_all_style.css" />
    <link rel="stylesheet" href="css/1_home_style.css" />

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
    <div id ="enquiryimg">
      <a href="info.php"><img src="mail.png" alt="mail" title="mail"></a>
      <li>問い合わせ</li>
    </div>

    <a href="#" id="page_top" class="page_top_btn"><h1>トップへ戻る</h1><h2>※jQuery使用</h2></a>

    <main>
      <div><img src="9-2.JPG" alt="mailimage" title="test" id="Topimage"></div>
      <div id="mainmsse">
        <h1>君が欲しい！！<br>そんな方は是非ご連絡を！</h1>
      </div>
      <section>
        <h1>スキルリスト</h1>
        <h2>※本項はmysqlを使用</h2>
      </section>
        <article>

          <table>
          <tr>
            <th>言語</th>
            <th>年数</th>
            <th>その他・補足</th>
          </tr>
  
          <?php foreach($result as $column): ?>
            <h2>
              <tr>
                <td><?php echo $column["lan"] ?><div class="line1"></div></td>
                <td><?php echo $column["year"] ?><div class="line1"></div></td>
                <td><?php echo $column["memo"] ?><div class="line1"></div></td>
              </tr>
            </h2>
          <?php endforeach; ?>
        </table> 
        </article>

      <div class="question">
よくある質問
        <div class="container">
          ※javascript使用
            <dl class="accordion">
                <dt>質問</dt>
                <dd>答え</dd>
            </dl>
        </div>
    </div>

    </main>

        <script src="js/0_all_script.js"></script>
        <script src="js/1_home_script.js"></script>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/0_all_JQ.js"></script>


  </body>
</html>