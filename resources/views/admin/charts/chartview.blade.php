<!DOCTYPE html>
<html>

<head>
    <title>Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="chart-container">
        <canvas id="clickChart"></canvas>
    </div>
    <script>
        // Mengambil data click dari server
        axios.get('/click-data')
            .then(function(response) {
                var clickData = response.data;

                // Mengatur konfigurasi chart
                var config = {
                    type: 'line',
                    data: {
                        labels: clickData.labels,
                        datasets: [{
                            label: 'Clicks',
                            data: clickData.clicks,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                };

                // Menginisialisasi chart
                var ctx = document.getElementById('clickChart').getContext('2d');
                var chart = new Chart(ctx, config);
            })
            .catch(function(error) {
                console.log(error);
            });
    </script>
</body>

</html>
