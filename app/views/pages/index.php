
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
      height: 2000px
    }
    .sidebar{
      background-color: #413B3B;
      height: 100vh;
      position: sticky;
      top: 0;
    }
    .counter-box{
      background-color: white;
      margin: 15px;
      margin-top: 9px;
      font-size: 20px;
      padding: 1rem;
    }
    .donut_grid{
    }
    .canvasjs-chart-credit{
      color: #69696900 !important;
    }
    .canvasjs-chart-toolbar{
      color: #69696900 !important;
    }
    .message_box{
      background-color: #EBABA4;
      padding: 0.5rem;
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
      display: none !important;
    }
    .progressbar-text{
      width: 100%;
      text-align: center;
    }

    #volume_circle {
      width: 200px;
      height: 200px;
      margin-bottom: 35px;
    }
    #remained_circle {
      width: 200px;
      height: 200px;
      margin-bottom: 35px;
    }
    .counter-box-title--container{
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .counter-body{
      font-size: 32px;
      font-weight: bold;
      text-align: right;
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

          <!-- メッセージ -->
          <div class="message_box mt-3">
              <div class="">メッセージ</div>
              <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repre</div>
          </div>



          <!-- カウンター -->
          <div class="row" style="    margin-top: 8px;">
            <div class="col counter-box price">
              <div class="counter-box-title--container">
                <div>今月料金</div>
              </div>
              <div class="counter-body">12,332 円</div>
            </div>
            <div class="col counter-box version">
              <div class="counter-box-title--container">
                <div>システムバージョン</div>
                <i class="far fa-check-circle" style="color: green;"></i>
              </div>
              <div class="counter-body">2.56.2</div>
            </div>
            <div class="col counter-box temperature">
              <div class="counter-box-title--container">
                <div>温度</div>
                <i class="far fa-check-circle" style="color: green;"></i>
              </div>
              <div class="counter-body">21 &#8451;</div>
            </div>
            <div class="col counter-box humid">
              <div class="counter-box-title--container">
                <div>湿度</div>
                <i class="fas fa-exclamation-triangle" style="color: orange;"></i>
              </div>
              <div class="counter-body" style="color: orange;">13 %</div>
            </div>
          </div>


          <!-- 用紙内訳＆本体容量＆残存ラベル -->
          <div class="row donut_grid">

            <div class="col-4">
              <div id="chart_container">
                <div id="donutContainer" style="height: 300px; width: 100%;"></div>
                <div id="cover_chart_top">&nbsp;</div>
              </div>
            </div>

            <div class="col-4">
              <div style="background-color: white; height: 100%; display: flex; justify-content: space-between; align-items: center; flex-direction: column">
                <div style="width: 100%; text-align: end; padding-right: 10px; font-size: 20px">本体容量</div>
                <div id="volume_circle"></div>
              </div>
            </div>

            <div class="col-4">
              <div style="background-color: white; height: 100%; display: flex; justify-content: space-between; align-items: center; flex-direction: column">
                <div style="width: 100%; text-align: end; padding-right: 10px; font-size: 20px">ラベル残量</div>
                <div id="remained_circle" />
              </div>
            </div>

          </div>


          <!-- ラベル使用枚数 -->
          <div id="chart_container" style="margin-top: 15px;">
          	<div id="barContainer" style="height: 300px; width: 100%;"></div>
          	<div id="cover_chart_top">&nbsp;</div>
          </div>


          <!-- ログ出力 -->
          <div class="mt-3">

            <div id="chart_container">
              <div id="stackedBarsContainer" style="height: 300px; width: 100%;"></div>
              <div id="cover_chart_top" class="cover_stackedBars_top">&nbsp;</div>
            </div>

            <!-- ログ集計表 -->
            <table class="table table-bordered table-hover" id="log_table" style="margin-top: 15px; background-color: white;">
              <thead>
                <tr>
                  <th colspan="2" scope="col"></th>
                  <th scope="col">ログカテゴリ</th>
                  <th scope="col">回数</th>
                  <th scope="col">比率</th>
                </tr>
              </thead>
              <tbody>
                <tr onclick="document.location.href='<?php echo URLROOT; ?>/pages/about?logCategory=1'">
                  <td style="width:5%; background-color: #FA6560;"></td>
                  <td style="width:5%">1</td>
                  <td>エラー</td>
                  <td>4</td>
                  <td>2%</td>
                </tr>
                <tr onclick="document.location.href='<?php echo URLROOT; ?>/pages/about?logCategory=2'">
                  <td style="width:5%; background-color: #FA9A6B;"></td>
                  <td style="width:5%">2</td>
                  <td>警告</td>
                  <td>6</td>
                  <td>3%</td>
                </tr>
                <tr onclick="document.location.href='<?php echo URLROOT; ?>/pages/about?logCategory=3'">
                  <td style="width:5%; background-color: #9BFA78;"></td>
                  <td style="width:5%">3</td>
                  <td>注意</td>
                  <td>15</td>
                  <td>7%</td>
                </tr>
                <tr onclick="document.location.href='<?php echo URLROOT; ?>/pages/about?logCategory=4'">
                  <td style="width:5%; background-color: #1693DB;"></td>
                  <td style="width:5%">4</td>
                  <td>正常</td>
                  <td>191</td>
                  <td>89%</td>
                </tr>
              </tbody>
            </table>
            <div style="width: 100%; display: flex; flex-direction: row-reverse;" id="to_chronological_logs">
              <a href="<?php echo URLROOT; ?>/pages/about?logCategory=all" class="btn btn-primary" role="button" aria-pressed="true">ログ詳細</a>
            </div>

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

    var today = new Date();
    var today_6 = today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 6)
    var today_5 = today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 5)
    var today_4 = today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 4)
    var today_3 = today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 3)
    var today_2 = today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 2)
    var today_1 = today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 1)
    var today_0 = today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 0)

  	CanvasJS.addColorSet("barColor", [
  		"#1693DB",
  	]);

    // Bar Chart
  	var bar = new CanvasJS.Chart("barContainer", {
  		colorSet: "barColor",
  		title:{
  			text: "ラベル使用枚数",
        fontSize: 20,
  			horizontalAlign: "right",
  		},
      animationEnabled: true,
      axisY:{
         lineThickness: 0,
         gridColor: "#bbbbbb",
         tickColor: "#bbbbbb",
      },
  		axisX:{
  			margin: 10,
  		},
  		data: [
  		{
  			// Change type to "doughnut", "line", "splineArea", etc.
  			type: "column",
  			dataPoints: [
  				{ label: today_6,  y: 42  },
  				{ label: today_5,  y: 51  },
  				{ label: today_4,  y: 192  },
  				{ label: today_3,  y: 221  },
  				{ label: today_2,  y: 32  },
  				{ label: today_1,  y: 189  },
  				{ label: today_0,  y: 99  },
  			]
  		}
  		]
  	});

    // Donut Chart
    var donut = new CanvasJS.Chart("donutContainer",
    {
      title:{
        text: "用紙内訳",
        fontSize: 20,
  			horizontalAlign: "right",
      },
      animationEnabled: true,

      data: [
      {
       type: "doughnut",
       dataPoints: [
       {  y: 53.37, indexLabel: "42×42 mm" },
       {  y: 35.0, indexLabel: "42×37 mm" },
       {  y: 7, indexLabel: "42×28 mm" },
       {  y: 2, indexLabel: "52×42 mm" },
       {  y: 5, indexLabel: "52×52 mm" }
       ]
     }
     ]
   });

   // StackedBar Chart
   var stackedBars = new CanvasJS.Chart("stackedBarsContainer", {
   	title: {
   		text: "システムログ内訳",
      horizontalAlign: "right",
      fontSize: 20,
      	fontWeight: "normal"
   	},
    axisY:{
       lineThickness: 0,
       gridColor: "#bbbbbb",
       tickColor: "#bbbbbb",
    },
   	theme: "light2",
   	animationEnabled: true,
   	toolTip:{
   		shared: true,
   		reversed: true
   	},
   	legend: {
   		cursor: "pointer",
   	},
   	data: [
   		{
   			type: "stackedColumn",
   			name: "正常",
        color: "#1693DB",
   			dataPoints: [
          {  y: 22, label: today_6},
          {  y: 18, label: today_5 },
          {  y: 21, label: today_4 },
          {  y: 39, label: today_3 },
          {  y: 36, label: today_2},
          {  y: 24, label: today_1},
          {  y: 31, label: today_0}
        ]
   		},{
   			type: "stackedColumn",
        name: "注意",
        color: "#9BFA78",
        dataPoints: [
          {  y: 3, label: today_6},
          {  y: 2, label: today_5 },
          {  y: 2, label: today_4 },
          {  y: 3, label: today_3 },
          {  y: 2, label: today_2},
          {  y: 1, label: today_1},
          {  y: 2, label: today_0}
        ]
   		},{
   			type: "stackedColumn",
   			name: "警告",
        color: "#FA9A6B",
        dataPoints: [
          {  y: 2, label: today_6},
          {  y: 0, label: today_5 },
          {  y: 1, label: today_4 },
          {  y: 0, label: today_3 },
          {  y: 3, label: today_2},
          {  y: 0, label: today_1},
          {  y: 0, label: today_0}
        ]
   		},{
   			type: "stackedColumn",
   			name: "エラー",
        color: "#FA6560",
        dataPoints: [
          {  y: 0, label: today_6},
          {  y: 0, label: today_5 },
          {  y: 0, label: today_4 },
          {  y: 3, label: today_3 },
          {  y: 1, label: today_2},
          {  y: 0, label: today_1},
          {  y: 0, label: today_0}
        ]
   		}
   	]
   });
   bar.render();
   donut.render();
   stackedBars.render();

   //
   var volume_circle = new ProgressBar.Circle('#volume_circle', {
       color: '#555',
       trailColor: '#eee',
       strokeWidth: 12,
       duration: 1000,
       easing: 'easeInOut',
       from: {color: '#1693DB'},
       to: {color: '#ED6A5A'},
       text: {
          value: '',
          // alignToBottom: false
        },
       step: (state, volume_circle) => {
        volume_circle.path.setAttribute('stroke', state.color);
        var value = Math.round(volume_circle.value() * 100);
        if (value === 0) {
          volume_circle.setText('');
        } else {
          volume_circle.setText(value+' MB / 100 MB');
        }

        volume_circle.text.style.color = state.color;
      }
   });
    volume_circle.text.style.fontSize = '16px';
    volume_circle.animate(0.67);

    var remained_circle = new ProgressBar.Circle('#remained_circle', {
        color: '#555',
        trailColor: '#eee',
        strokeWidth: 12,
        duration: 1000,
        easing: 'easeInOut',
        from: {color: '#ED6A5A'},
        to: {color: '#1693DB'},
        text: {
           value: '',
         },
        step: (state, remained_circle) => {
         remained_circle.path.setAttribute('stroke', state.color);
         var value = Math.round(remained_circle.value() * 100);
         if (value === 0) {
           remained_circle.setText('');
         } else {
           remained_circle.setText(value+' %');
         }

         remained_circle.text.style.color = state.color;
       }
    });
     remained_circle.text.style.fontSize = '20px';
     remained_circle.animate(0.82);

    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
