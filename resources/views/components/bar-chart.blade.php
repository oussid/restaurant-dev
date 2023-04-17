<div class="chart-container">
    <canvas id="bar-chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // converting data from php to a readable json array
    const earnings =  @php echo json_encode($earnings) @endphp;
    // months
    let earningsLabels = []
    // counts
    let earningsData = []
    // extracting months and revenues
    earnings.forEach(earning => {
        earningsLabels = [...earningsLabels, earning.month]
        earningsData = [...earningsData, earning.revenue]
    });

    // Chart.js configuration
    const barChartCanvas = document.getElementById('bar-chart')

    const barChartConfig = {
        type: "bar", 
        data: {
            labels: earningsLabels,
            datasets: [
                {
                    label: "Revenue",
                    data: earningsData
                }
            ]
        }
    }

    const barChart = new Chart(barChartCanvas, barChartConfig)
</script>