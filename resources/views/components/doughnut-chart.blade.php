
<div class="chart-container">
    
    <canvas id="doughnut-chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // converting data from php to a readable json array
    const orders =  @php echo json_encode($orders) @endphp;
    // months
    let ordersLabels = []
    // counts
    let ordersData = []
    // extracting months and counts
    orders.forEach(order => {
        ordersLabels = [...ordersLabels, order.month]
        ordersData = [...ordersData, order.count]
    });

    // Chart.js configuration
    const myChart = document.getElementById('doughnut-chart')

    const config = {
        type: "doughnut", 
        data: {
            labels: ordersLabels,
            datasets: [
                {
                    label: "Orders",
                    data: ordersData
                }
            ]
        }
    }

    const doughnutChart = new Chart(myChart, config)
</script>