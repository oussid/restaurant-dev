
<div class="chart-container">
    <canvas id="doughnut-chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    //current month
    const localDateForDoughnut = new Date();
    const currentMonthForDoughnut = localDateForDoughnut.getMonth() + 1 

    // converting data from php to a readable json array
    const orders =  @php echo json_encode($orders) @endphp;

    // months map (to convert months from numbers to alphabetics)
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

    // array  objects with month numbers and order count initilized with 0
    const result = Array.from({ length: currentMonthForDoughnut }, (_, i) => ({
    month: i + 1,
    count: 0
    }));    

    // updating objects of 'months' based of 'result'
    orders.forEach(item => {
    const index = item.month - 1;
    result[index].count = item.orders_count;
    });
    
    //making sure objects are sorted by month
    result.sort((a, b) => a.month - b.month);


    
    // months
    let ordersLabels = []
    // counts
    let ordersData = []
    // extracting months and counts
    result.forEach(order => {
        ordersLabels = [...ordersLabels, months[order.month] ]
        ordersData = [...ordersData, order.count]
    });
    console.log('month: ',ordersLabels)


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