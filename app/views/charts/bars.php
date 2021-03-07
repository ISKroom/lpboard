<script type="text/javascript">

window.onload = function () {
	var today = new Date();
	
	CanvasJS.addColorSet("barColor", [
		"#1693DB",
	]);


	var chart = new CanvasJS.Chart("barContainer", {
		colorSet: "barColor",
		title:{
			text: "ラベル使用枚数",
			horizontalAlign: "right",
		},
		axisX:{
			margin: 10
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 6),  y: 2  },
				{ label: today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 5),  y: 4  },
				{ label: today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 4),  y: 12  },
				{ label: today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 3),  y: 9  },
				{ label: today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 2),  y: 12  },
				{ label: today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+( today.getDate() - 1),  y: 8  },
				{ label: today.getFullYear() + "/" +  (today.getMonth() + 1) + "/"+ today.getDate(),  y: 1  },
			]
		}
		]
	});
	chart.render();
}
</script>
<style>
#bar_container{
	position: relative;
}
#cover_bars_top{
	background-color: white;
	position: absolute;
  top: 0;
  width: 100px;
}
#cover_bars_bottom{
	background-color: white;
	position: absolute;
  bottom: 0;
	right: 0;
  width: 100px;
	height: 10px;
}
</style>


<div id="bar_container">
	<div id="barContainer" style="height: 300px; width: 100%;"></div>
	<div id="cover_bars_top">&nbsp;</div>
	<div id="cover_bars_bottom">&nbsp;</div>
</div>
