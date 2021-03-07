<?php declare(strict_types=1);

/**
 * UUID version 4
 */
class UuidV4Factory
{
    const PATTERN = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx';

    /**
     * UUID 生成
     * @return string
     * @throws \Exception
     */
    public static function generate(): string
    {
        $chars = str_split(self::PATTERN);

        foreach ($chars as $i => $char) {
            if ($char === 'x') {
                $chars[$i] = dechex(random_int(0, 15));
            } elseif ($char === 'y') {
                $chars[$i] = dechex(random_int(8, 11));
            }
        }

        return implode('', $chars);
    }
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CanvasJS -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- Progress.js -->
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

    <title>Hello, world!</title>


    <style>
    body{
      background: #ECF0F5;
    }
    tbody tr{
      cursor: pointer !important;
    }
    .contents{
      /* height: 2000px */
    }
    .sidebar{
      background-color: blue;
      height: 100vh;
      position: sticky;
      top: 0;
    }
    .counter-box{
      background-color: white;
      margin: 15px;
      margin-top: 9px;
    }
    .donut_grid{
      margin-top: 15px;
    }
    .canvasjs-chart-credit{
      color: #69696900 !important;
    }
    .canvasjs-chart-toolbar{
      color: #69696900 !important;
    }
    .message_box{
      background-color: #EBABA4;
    }
    #chart_container{
    	position: relative;
    }
    #cover_chart_top{
    	background-color: white;
    	position: absolute;
      top: 0;
      width: 100px;
    }
    #cover_chart_bottom{
    	background-color: white;
    	position: absolute;
      bottom: 0;
    	right: 0;
      width: 100px;
    	height: 10px;
    }
    .label_check_container{
      background-color: white;
      height: 300px;
    }
    .hide{
      display: none;
    }
    .my-custom-scrollbar {
    position: relative;
    height: 300px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
      display: block;
    }
    .log_detail{
      /* height: 500px; */
      background-color: white;
      margin-top: 8px;
      padding: 10px;
    }
    a {
      color: #dcdcdc;
      text-decoration: none;
    }
    a:hover {
      color: #FFFFFF;
      text-decoration:none;
      cursor:pointer;
    }
    .sidebar{
      background-color: #413B3B;
      height: 100vh;
      position: sticky;
      top: 0;
    }
    #to-dashboard{
      color: #615c5c;
      font-weight: bold;
    }
    #to-dashboard:hover{
      color: black;
    }
    #log-detail{
      word-break:break-all;
    }
    #log-title{
      font-size: 24px;
      margin-bottom: 10px;
    }
    #log-date{
      margin-bottom: 10px;
    }
    </style>
  </head>
  <body>
    <div class="container-fluid">


      <div class="row contents">

        <!-- サイドバー -->
        <div class="col-2 sidebar pt-4">

          <div class="panel panel-group" id="accordion">
            <div class="panel panel-default">

              <div class="brown panel-heading">
                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#col_1">ユーザーA</a></h4>
              </div>

              <div id="col_1" class="panel-collapse collapse in">
                <div class="panel-body" id="accordion-sub">
                      <h4 class="panel-title" style="font-size: 14px;"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-sub" href="#sub_1"><a href="<?php echo URLROOT; ?>">ラベル機A</a></a></h4>
                      <h4 class="panel-title" style="font-size: 14px;"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-sub" href="#sub_2"><a href="<?php echo URLROOT; ?>">ラベル機B</a></a></h4>
                </div>
              </div>
            </div>
          </div>

          <div class="panel panel-group" id="accordion">
            <div class="panel panel-default">

              <div class="brown panel-heading">
                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#col_2">ユーザーB</a></h4>
              </div>

              <div id="col_2" class="panel-collapse collapse in">
                <div class="panel-body" id="accordion-sub">
                      <h4 class="panel-title" style="font-size: 14px;"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-sub" href="#sub_1"><a href="<?php echo URLROOT; ?>">ラベル機C</a></a></h4>
                      <h4 class="panel-title" style="font-size: 14px;"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-sub" href="#sub_2"><a href="<?php echo URLROOT; ?>">ラベル機D</a></a></h4>
                </div>
              </div>
            </div>
          </div>

          <a href="<?php echo URLROOT; ?>/pages/access"><h4>アクセスログ</h4></a>

        </div>


        <!-- メインコンテンツ -->
        <div class="col-10 pt-4" style="max-width: 1200px; margin: 0 auto;">



          <!-- ユーザー/マシン セレクト -->
          <div style="display: flex;">
            <select class="form-select" aria-label="Default select example" style="display: inline-block; width: 180px; margin-right: 10px;">
              <option selected>ユーザーA</option>
              <option value="1">ユーザーB</option>
            </select>
            <select class="form-select" aria-label="Default select example" style="display: inline-block; width: 180px; margin-right: 10px;">
              <option selected>ラベル機 A</option>
              <option value="1">ラベル機 B</option>
            </select>
          </div>

          <!-- ダッシュボードに戻る -->
          <div style="margin-top: 20px;">
            <a href="<?php echo URLROOT; ?>" id="to-dashboard">< ダッシュボードに戻る</a>
          </div>


          <!-- ログカテゴリ セレクト -->
          <form class="mt-3">
            <div style="font-size: 18px; font-weight: bold;">ログカテゴリ</div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">4</label>
            </div>


            <!-- 日付範囲 セレクト -->
            <div style="font-size: 18px; font-weight: bold; margin-top: 10px">日付範囲</div>
            <div style="display: flex;">
              <div class="form-inline">
                From: <input type="date" class="form-control mb-2 mr-sm-2" style="display: inline-block; width: 180px; margin-right: 10px;">
                To: <input type="date" class="form-control mb-2 mr-sm-2" style="display: inline-block; width: 180px; margin-right: 10px;">

                <button type="submit" class="btn btn-primary mb-2">検索</button>
              </div>

            </div>





          </form>

          <!-- ログ集計表 -->
          <div class="table-wrapper-scroll-y my-custom-scrollbar mt-4">
            <table class="table table-hover table_sticky" style="background-color: white;">
              <tbody>
                <?php
                  $sampleLogs = array();
                  for($i = 0; $i < 100; $i++){
                    $uuid = UuidV4Factory::generate();
                    array_push(
                      $sampleLogs,
                      array(
                        "date" => date("Y-m-d H:i:s", strtotime("-". $i . " day")),
                        "title" => $uuid,
                        "contents" => "Log Detail of " . $uuid . " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                      )
                    );
                  }
                  foreach ($sampleLogs as $index => $log) :
                    switch (rand (1, 10)) {
                      case 1:
                        $category = "エラー";
                        $color = "#FA6560";
                        break;
                      case 2:
                        $category = "警告";
                        $color = "#FA9A6B";
                        break;
                      case 3:
                        $category = "注意";
                        $color = "#9BFA78";
                        break;
                      default:
                        $category = "正常";
                        $color = "#1693DB";
                        break;
                      }
                ?>
                  <tr onclick="showLogDetail(<?php echo $index; ?>);">
                    <td style="width:5%; background-color: <?php echo $color; ?>;"></td>
                    <td><?php echo $category;?></td>
                    <td id="log-date-<?php echo $index; ?>"><?php echo $log["date"]; ?></td>
                    <td>ログタイトル：<span id="log-title-<?php echo $index; ?>"><?php echo $log["title"]; ?></span></td>
                  </tr>
                <?php endforeach; ?>


              </tbody>
            </table>
          </div>
          <div class="log_detail">
            <div id="log-title"></div>
            <div id="log-date"></div>
            <div id="log-detail"></div>
          </div>


        </div>
        <!-- メインコンテンツここまで -->

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">
      function showLogDetail(index){

        document.getElementById('log-title').innerHTML = "";
        document.getElementById('log-date').innerHTML = "";
        document.getElementById('log-detail').innerHTML = "";

        document.getElementById('log-title').insertAdjacentHTML('afterbegin', "ログタイトル：" + document.getElementById('log-title-'+index).innerHTML)
        document.getElementById('log-date').insertAdjacentHTML('afterbegin', "ログ発生日時：" + document.getElementById('log-date-'+index).innerHTML)
        document.getElementById('log-detail').insertAdjacentHTML('afterbegin',Array.from(Array(500)).map(()=>"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"[Math.floor(Math.random()*"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789".length)]).join(''))
      }
    </script>

  </body>
</html>
