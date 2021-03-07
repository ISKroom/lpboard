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

    .sidebar{
      background-color: blue;
      height: 100vh;
      position: sticky;
      top: 0;
    }

    .canvasjs-chart-credit{
      color: #69696900 !important;
    }
    .canvasjs-chart-toolbar{
      color: #69696900 !important;
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
    .machine_container{
      position: relative;
      margin-top: 20px;
    }
    .hide_copyright{
      position: absolute;
      top: 0;
      width: 100px;
      height: 20px;
      background-color: white;
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


          <!-- 日付範囲 セレクト -->
          <div style="font-size: 18px; font-weight: bold; margin-top: 10px">日付範囲</div>
          <div style="display: flex;">
            <div class="form-inline">
              From: <input type="date" class="form-control mb-2 mr-sm-2" style="display: inline-block; width: 180px; margin-right: 10px;">
              To: <input type="date" class="form-control mb-2 mr-sm-2" style="display: inline-block; width: 180px; margin-right: 10px;">

              <button type="submit" class="btn btn-primary mb-2">検索</button>
            </div>

          </div>



          <div class="machine_container">
            <div id="machineA" style="height: 100px; width: 100%;"></div>
            <div class="hide_copyright"></div>
          </div>
          <div class="machine_container">
            <div id="machineB" style="height: 100px; width: 100%;"></div>
            <div class="hide_copyright"></div>
          </div>
          <div class="machine_container">
            <div id="machineC" style="height: 100px; width: 100%;"></div>
            <div class="hide_copyright"></div>
          </div>
          <div class="machine_container">
            <div id="machineTotal" style="height: 100px; width: 100%;"></div>
            <div class="hide_copyright"></div>
          </div>


        </div>
        <!-- メインコンテンツここまで -->

      </div>
    </div>

    <script>

      CanvasJS.addColorSet("colorSet1", ["#5CB4E6"]);

      // maximum は マシンの数 + 0.5
      var machine_A = new CanvasJS.Chart("machineA", {
      	theme: "light2",
        colorSet: "colorSet1",
        title:{
          text: "ラベル機A",
          fontSize: 16,
          horizontalAlign: "right",
        },
      	axisY: {
          gridColor: "white",
          tickThickness: 0,
          maximum: 3.5,
          labelFontColor: "white"
      	},
        toolTip:{
          enabled: false
        },
        axisX: {
          minimum: new Date(2021, 3, 7, 12, 0),
          maximum: new Date(2021, 3, 7, 12, 59),
          valueFormatString: "M/D H:m"
        },
      	data: [{
      		type: "stepArea",
          xValueType: "dateTime",
          markerSize: 0,
          markerType: "none",
          dataPoints: [
            { x: new Date(2021, 3, 7, 12, 0), y: 0 },
            { x: new Date(2021, 3, 7, 12, 5), y: 1 },
            { x: new Date(2021, 3, 7, 12, 17), y: 0 },
            { x: new Date(2021, 3, 7, 12, 32), y: 1 },
            { x: new Date(2021, 3, 7, 12, 35), y: 0 },
            { x: new Date(2021, 3, 7, 12, 59), y: 0 },
          ]
      	}]
      });
      machine_A.render();

      var machine_B = new CanvasJS.Chart("machineB", {
      	theme: "light2",
        title:{
          text: "ラベル機B",
          fontSize: 16,
          horizontalAlign: "right",
        },
        colorSet: "colorSet1",
      	axisY: {
          gridColor: "white",
          tickThickness: 0,
          maximum: 3.5,
          labelFontColor: "white"
      	},
        toolTip:{
          enabled: false
        },
        axisX: {
          minimum: new Date(2021, 3, 7, 12, 0),
          maximum: new Date(2021, 3, 7, 12, 59),
          valueFormatString: "M/D H:m"
        },
      	data: [{
      		type: "stepArea",
          xValueType: "dateTime",
          markerSize: 0,
          markerType: "none",
          dataPoints: [
            { x: new Date(2021, 3, 7, 12, 0), y: 0 },
            { x: new Date(2021, 3, 7, 12, 7), y: 1 },
            { x: new Date(2021, 3, 7, 12, 20), y: 0 },
            { x: new Date(2021, 3, 7, 12, 40), y: 1 },
            { x: new Date(2021, 3, 7, 12, 50), y: 0 },
            { x: new Date(2021, 3, 7, 12, 59), y: 0 },
          ]
      	}]
      });
      machine_B.render();

      var machine_C = new CanvasJS.Chart("machineC", {
      	theme: "light2",
        title:{
          text: "ラベル機C",
          fontSize: 16,
          horizontalAlign: "right",
        },
        colorSet: "colorSet1",
        toolTip:{
          enabled: false
        },
      	axisY: {
          gridColor: "white",
          tickThickness: 0,
          maximum: 3.5,
          labelFontColor: "white"
      	},
        axisX: {
          minimum: new Date(2021, 3, 7, 12, 0),
          maximum: new Date(2021, 3, 7, 12, 59),
          valueFormatString: "M/D H:m"
        },
      	data: [{
      		type: "stepArea",
          xValueType: "dateTime",
          markerSize: 0,
          markerType: "none",
          dataPoints: [
            { x: new Date(2021, 3, 7, 12, 0), y: 0 },
            { x: new Date(2021, 3, 7, 12, 10), y: 1 },
            { x: new Date(2021, 3, 7, 12, 15), y: 0 },
            { x: new Date(2021, 3, 7, 12, 37), y: 1 },
            { x: new Date(2021, 3, 7, 12, 45), y: 0 },
            { x: new Date(2021, 3, 7, 12, 59), y: 0 },
          ]
      	}]
      });
      machine_C.render();

      var machine_Total = new CanvasJS.Chart("machineTotal", {
      	theme: "light2",
        title:{
          text: "全体",
          fontSize: 16,
          horizontalAlign: "right",
        },
      	axisY: {
          gridColor: "white",
          tickThickness: 0,
          maximum: 3.5
      	},
        toolTip:{
          enabled: false
        },
        axisX: {
          minimum: new Date(2021, 3, 7, 12, 0),
          maximum: new Date(2021, 3, 7, 12, 59),
          valueFormatString: "M/D H:m"
        },
      	data: [{
      		type: "stepArea",
          xValueType: "dateTime",
          markerSize: 0,
          markerType: "none",
          dataPoints: [
            { x: new Date(2021, 3, 7, 12, 0), y: 0 },
            { x: new Date(2021, 3, 7, 12, 5), y: 1 },
            { x: new Date(2021, 3, 7, 12, 7), y: 2 },
            { x: new Date(2021, 3, 7, 12, 10), y: 3 },
            { x: new Date(2021, 3, 7, 12, 15), y: 2 },
            { x: new Date(2021, 3, 7, 12, 17), y: 1 },
            { x: new Date(2021, 3, 7, 12, 20), y: 0 },
            { x: new Date(2021, 3, 7, 12, 32), y: 1 },
            { x: new Date(2021, 3, 7, 12, 35), y: 0 },
            { x: new Date(2021, 3, 7, 12, 37), y: 1 },
            { x: new Date(2021, 3, 7, 12, 40), y: 2 },
            { x: new Date(2021, 3, 7, 12, 45), y: 1 },
            { x: new Date(2021, 3, 7, 12, 50), y: 0 },
          ]
      	}]
      });
      machine_Total.render();

    </script>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </body>
</html>
