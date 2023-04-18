<div class="chart-container">
    <canvas id="bar-chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    //months map
    let monthsMap = {
        1: 'January',
        2: 'February',
        3: 'March',
        4: 'April',
        5: 'May',
        6: 'June',
        7: 'July',
        8: 'August',
        9: 'September',
        10: 'October',
        11: 'November',
        12: 'December',
};

    // converting data from php to a readable json array
    const earnings =  @php echo json_encode($earnings) @endphp;
    // months
    let earningsLabels = []
    // counts
    let earningsData = []
    // extracting months and revenues
    earnings.forEach(earning => {
        earningsLabels = [...earningsLabels, monthsMap[earning.month]]
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