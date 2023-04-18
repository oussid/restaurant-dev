
<div class="chart-container">
    
    <canvas id="doughnut-chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // months map
    const months = {
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
    const orders =  @php echo json_encode($orders) @endphp;
    // months
    let ordersLabels = []
    // counts
    let ordersData = []
    // extracting months and counts
    orders.forEach(order => {
        ordersLabels = [...ordersLabels, months[order.month] ]
        ordersData = [...ordersData, order.orders_count]
    });

    console.log(orders)

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