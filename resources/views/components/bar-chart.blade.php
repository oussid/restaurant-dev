<div class="chart-container">
    <canvas id="bar-chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        //current month
        const localDateForBar = new Date();
    const currentMonthForBar = localDateForBar.getMonth() + 1 
    // converting data from php to a readable json array
    const earnings =  @php echo json_encode($earnings) @endphp;

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

// array of 12 objects with month numbers and order count initilized with 0
    const barResult = Array.from({ length: currentMonthForBar }, (_, i) => ({
        month: i + 1,
        revenue: 0
        }));    

    // updating objects of 'months' based of 'result'
    earnings.forEach(item => {
        const index = item.month - 1;
        barResult[index].revenue = item.revenue;
        });
    
    //making sure objects are sorted by month
    barResult.sort((a, b) => a.month - b.month);


    // months
    let earningsLabels = []
    // counts
    let earningsData = []
    // extracting months and revenues
    barResult.forEach(earning => {
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