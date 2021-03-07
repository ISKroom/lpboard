<script type="text/javascript">

window.onload = function () {
  var today = new Date();

  var donut = new CanvasJS.Chart("donutContainer",
  {
    title:{
      text: "Top U.S Smartphone Operating Systems By Market Share, Q3 2012"
    },
    data: [
    {
     type: "doughnut",
     dataPoints: [
     {  y: 53.37, indexLabel: "Android" },
     {  y: 35.0, indexLabel: "Apple iOS" },
     {  y: 7, indexLabel: "Blackberry" },
     {  y: 2, indexLabel: "Windows Phone" },
     {  y: 5, indexLabel: "Others" }
     ]
   }
   ]
 });

  donut.render();
}
</script>

<div id="donutContainer" style="height: 300px; width: 100%;"></div>

  <!-- <div id="donut_container">
  	<div id="cover_bars_top">&nbsp;</div>
  	<div id="cover_bars_bottom">&nbsp;</div>
  </div> -->
