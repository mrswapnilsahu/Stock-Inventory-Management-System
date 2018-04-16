<?php

$today = date("Y-m-d");
$yes = date('Y-m-d',strtotime("-3 days"));
require 'config.php';

$conn = connection();

$sql = "SELECT * FROM bill_records WHERE bill_entrydt BETWEEN '$today' AND '$yes'";
$data = $conn->query($sql);

$x = "";

?>

<div class="col-md-12">
	<div class="col-md-6">
		<div class="widget widget-fullwidth">
			<div class="widget-head">
				<span class="title"><strong>PER DAY SALE</strong></span>
			</div>
			<div class="widget-chart-container">
				<canvas id="myChart"></canvas>
			</div>
		</div>
	</div>
</div>



<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
        			"Red", "Blue", "Yellow", "Green", "Purple", "Orange"
        		],
        datasets: [{
            label: '# of Income',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

