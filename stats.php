<!DOCTYPE html>

<html>
    <head>
	<link href="dotaOMG.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
			function drawChart() {
  					var data = google.visualization.arrayToDataTable([
  					['KDA', 'Data'],
  					['Kill', 5],
  					['Death', 1],
  					['Assist', 3],
					]);
  					var options = {backgroundColor: 'transparent','title':'KDA Stats', 'width':600, 'height':600};
  					var chart = new google.visualization.PieChart(document.getElementById('chart'));
  					chart.draw(data, options);
					}
			function analysis(){
					// I manually input those values
					// The data should be directly pull from steam api. I will improve this in the future
					var k = 5;
					var d = 1;
					var a = 3;
					var kda = (k+a)/d;
					document.getElementById("kda").innerHTML = kda;
					
					if(kda > 3){
						document.getElementById("performance").innerHTML = "Good Job!";
					}
					else if(kda == 3){
						document.getElementById("performance").innerHTML = "It's..ok";
					}
					else{
						document.getElementById("performance").innerHTML = "Bad";
					}
					
					if(d > k){
						document.getElementById("suggestion").innerHTML = "Hi, you need be careful in the fight";
					}
					else if(a < k){
						document.getElementById("suggestion").innerHTML = "Your teammate need a little bit more help";
					}
					else{
						document.getElementById("suggestion").innerHTML = "Nahh, I think you are good!";
					}
			}
	</script>
	<title>DOTAOMG</title>
    </head>

    <body>
    	<nav class = "navBar">
    		<h1>User Stats</h1>
    	</nav>
		<div class = "userBox">
		
    		<div class = "analysis">
				<button class = "button button_analysis" onclick="analysis()"><span>Analysis</span></button><br />
				<fieldset>
					<h3>KDA:       </h3><p id="kda"></p><br />
					<h3>Perfomance:</h3><p id="performance"></p><br />
					<h3>Suggestion:</h3><p id="suggestion"></p><br />
				</fieldset>
    		</div>
    		
    		<div id = "chart" class = "userInfo">
				<script type="text/javascript">
				//Using google charts Api
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
			</script>
			
			</div>
		</div>
    </body>
</html>