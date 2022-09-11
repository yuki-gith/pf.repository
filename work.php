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
    <title>WORK</title>
    <style>


    </style>

    <link rel="stylesheet" href="css/0_all_style.css" />
    <link rel="stylesheet" href="css/2_work_style.css" />


<script src="https://xxx/vue@2"></script>

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
      <div id="youtSelect">


      <div class="caption">現職からの持ち出しはできませんが、職場以外にも実績あり！！</div>
      <div class="Comment">※クリックで動画が切り替わります。</div>
      <div class="grid">
        <div class="grids">
          <div class="gridim">
            <a href="#youtube"><div @click="isSelect('2')"><img src="pict/web.png" alt="web" title="web" class="gridimg"></div>
            </a>
          </div>
              <div class="gridtxt">
              取引先企業様：WEB制作
              </div>
          </div>
          <div class="grids">


            <div class="gridim">
              <a href="#youtube">
              <div @click="isSelect('3')"><img src="pict/dis.png" alt="dis" title="dis" class="gridimg"></div>
            </a>
            </div>
            <div class="gridtxt">
                C言語：アルコールディスペンサー
            </div>
        </div>
          <div class="grids">
            <div class="gridim">
              <a href="#youtube">
              <div @click="isSelect('4')"><img src="pict/arm.jpg" alt="robo" title="robo" class="gridimg"></div>
            </a>
            </div>
                <div class="gridtxt">
                C言語：ロボット制作
                </div>
            </div>

          <div class="grids">
              <div class="gridim">
                <a href="#youtube">
                <div @click="isSelect('5')"><img src="pict/apr.jpg" alt="pytion" title="pytion" class="gridimg"></div>
              </a>
              </div>
              <div class="gridtxt">
                  python:自作アプリ
              </div>
          </div>
          <div class="grids">
              <div class="gridim">
                <a href="#youtube">
                <div @click="isSelect('6')"><img src="pict/pg.png" alt="code" title="code" class="gridimg"></div>
              </a>
              </div>
              <div class="gridtxt">
                  VBA
              </div>
          </div>
          <div class="grids">
              <div class="gridim">
                <a href="code.html"><img src="pict/pg.png" alt="code" title="code" class="gridimg"></a>
              </div>
              <div class="gridtxt">
                  当ページのソースコード
              </div>
          </div>
      </div>


      ※vue.jsで切替を行っております。
      <div class="youtube" id="youtube">
        <button v-on:click="isSelect('1')">全ての動画をつなげて再生</button>
        <div v-if="isActive === '1'"><iframe width="560" height="315" src="https://www.youtube.com/xxx/douga1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div v-else-if="isActive === '2'"><iframe width="560" height="315" src="https://www.youtube.com/xxx/douga2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>WEBサイトの制作事例（掲載許可有り）
        </div>
        <div v-else-if="isActive === '3'"><iframe width="560" height="315" src="https://www.youtube.com/xxx/douga3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>自作アルコールディスペンサー（C言語＋３DCAD）
        </div>
        <div v-else-if="isActive === '4'"><iframe width="560" height="315" src="https://www.youtube.com/xxx/douga4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
        <br>自作の義手の制作過程で出来たロボットアーム。（C言語＋３DCAD）
        </div>
        <div v-else-if="isActive === '5'"><iframe width="560" height="315" src="https://www.youtube.com/xxx/douga5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>自作アプリケーション（python）
        </div>
        <div v-else-if="isActive === '6'">
          <div class="vbaMs">
          VBAによる制作
        <br>現職で50件以上！その他でも5件以上制作しております。
      </div>
        </div>
      </div>
  </div>

<div class="skill">
  <h1>スキルリスト</h1>
  <h2>※本項はmysqlを使用</h2>
</div>
<div class="skillsql">
  


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
</div>

    </main>


    <script>
      new Vue({
        el: '#youtSelect',
        data: {
          isActive: '1'
        },
        methods: {
          isSelect: function (num) {
            this.isActive = num;
          }
        }
      })
  </script>

        <script src="js/0_all_script.js"></script>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/0_all_JQ.js"></script>
        <script src="js/2_work_JQ.js"></script>

  </body>
</html>