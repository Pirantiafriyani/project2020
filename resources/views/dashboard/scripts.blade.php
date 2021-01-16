
@push('scripts')
<script>
    var htmlLegendsChart = document.getElementById('htmlLegendsChart').getContext('2d');

    // Chart with HTML Legends

    var gradientStroke = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, '#177dff');
    gradientStroke.addColorStop(1, '#80b6f4');

    var gradientFill = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill.addColorStop(0, "rgba(23, 125, 255, 0.7)");
    gradientFill.addColorStop(1, "rgba(128, 182, 244, 0.3)");

    var gradientStroke2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke2.addColorStop(0, '#f3545d');
    gradientStroke2.addColorStop(1, '#ff8990');

    var gradientFill2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill2.addColorStop(0, "rgba(243, 84, 93, 0.7)");
    gradientFill2.addColorStop(1, "rgba(255, 137, 144, 0.3)");

    var gradientStroke3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientStroke3.addColorStop(0, '#fdaf4b');
    gradientStroke3.addColorStop(1, '#ffc478');

    var gradientFill3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
    gradientFill3.addColorStop(0, "rgba(253, 175, 75, 0.7)");
    gradientFill3.addColorStop(1, "rgba(255, 196, 120, 0.3)");

    var myHtmlLegendsChart = new Chart(htmlLegendsChart, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [ 
            {
                label: "Subscribers",
                borderColor: gradientStroke2,
                pointBackgroundColor: gradientStroke2,
                pointRadius: 0,
                backgroundColor: gradientFill2,
                legendColor: '#f3545d',
                fill: true,
                borderWidth: 1,
                data: [154, 184, 175, 203, 210, 231, 240, 278, 252, 312, 320, 374]
            }, 
            {
                label: "New Visitors",
                borderColor: gradientStroke3,
                pointBackgroundColor: gradientStroke3,
                pointRadius: 0,
                backgroundColor: gradientFill3,
                legendColor: '#fdaf4b',
                fill: true,
                borderWidth: 1,
                data: [256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521]
            }, 
            {
                label: "Active Users",
                borderColor: gradientStroke,
                pointBackgroundColor: gradientStroke,
                pointRadius: 0,
                backgroundColor: gradientFill,
                legendColor: '#177dff',
                fill: true,
                borderWidth: 1,
                data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
            }]
        },
        options : {
            responsive: true, 
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                bodySpacing: 4,
                mode:"nearest",
                intersect: 0,
                position:"nearest",
                xPadding:10,
                yPadding:10,
                caretPadding:10
            },
            layout:{
                padding:{left:15,right:15,top:15,bottom:15}
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "500",
                        beginAtZero: false,
                        maxTicksLimit: 5,
                        padding: 20
                    },
                    gridLines: {
                        drawTicks: false,
                        display: false
                    }
                }],
                xAxes: [{
                    gridLines: {
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "500"
                    }
                }]
            }, 
            legendCallback: function(chart) { 
                var text = []; 
                text.push('<ul class="' + chart.id + '-legend html-legend">'); 
                for (var i = 0; i < chart.data.datasets.length; i++) { 
                    text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>'); 
                    if (chart.data.datasets[i].label) { 
                        text.push(chart.data.datasets[i].label); 
                    } 
                    text.push('</li>'); 
                } 
                text.push('</ul>'); 
                return text.join(''); 
            }  
        }
    });

    var myLegendContainer = document.getElementById("myChartLegend");

    // generate HTML legend
    myLegendContainer.innerHTML = myHtmlLegendsChart.generateLegend();

</script>
@endpush