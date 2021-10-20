$(document).ready(function() {
	$.ajax({				
		type : 'POST',
		url  : 'chart_data.php',	
		dataType:'json',
		success : function(response){
			var chartData = JSON.parse(response);
			var chartOptions = {
			  'height': 400,
			  'title': 'Overall Completion(%)',
			  'width': 1000,
			  'fixPadding': 20,
			  'barFont': [0, 12, "bold"],
			  'labelFont': [0, 13, 0]
			};
			graphite(chartData, chartOptions, barChart);			
		}
	});
});




