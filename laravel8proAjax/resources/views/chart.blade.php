<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HightCharts</title>
</head>
<body>
	
	<div id="chart-container"></div>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script>
		var datas = <?php echo json_encode($datas) ?>
		Highcharts.chart('chart-container',{
			title: {
				text : 'New User Growth 2020'
			},
			subtitle: {
				text : 'Source: Emmanuel'
			},
			xAxis:{
				categories : ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
			},
			yAxis:{
				title: {
					text : 'Number of the year'
				}
			},
			legend:{
				layout : 'vertical',
				align : 'right',
				verticalAlign : 'middle'
			},
			plotOptions:{
				series:{
					allowPointSelect : true
				}
			},
			series:[{
				name : 'new user',
				data : datas
			}],
			responsive:{
				rules:[
				{
					condition : {
						maxWidth : 500
					},
					chartOptions:{
						legend: {
							layout : 'horizontal',
							align : 'center',
							verticalAlign : 'bottom'
						}
					}
				}
				]
			}
		});
	</script>
</body>
</html>