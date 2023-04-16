<div class="chart-container">
    <canvas id="bar-chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const barChartCanvas = document.getElementById('bar-chart')

    const barChartData = {
        labels: ["wahd", "joj", "tlata", "rbaa", "khamsa"],
        data: [30, 17, 10, 7, 36],
    }

    const barChartConfig = {
        type: "bar", 
        data: {
            labels: barChartData.labels,
            datasets: [
                {
                    label: "Revenue",
                    data: barChartData.data
                }
            ]
        }
    }


    const barChart = new Chart(barChartCanvas, barChartConfig)
</script>