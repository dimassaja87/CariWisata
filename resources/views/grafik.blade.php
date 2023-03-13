<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HighChart</title>
</head>
<body> 
    <div id="chart-container"></div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var datas = <?php echo json_encode($datas) ?>

        Highcharts.chart('chart-container',{
            title:{
                text:'Daftar Wisata'
            },
            subtitle:{
                text:'Source: Surfside Media'
            },
            xAxis:{
                categories:['Jan','Feb','Mar','Apr','Mei','Jun','July','Aug','Sep','Okt','Nov','Des']
            },
            yAxis:{
                title:{
                    text:'Jumlah Pertambahan Tempat Wisata'
                }
            },
            legend:{
                layout:'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions:{
                series:{
                    allowPointSelect:true
                }
            },
            series:[{
                name: 'New User',
                data:datas
            }],
            responsive:{
                rules:[
                    {
                        condition:{
                            maxWidth:500
                        },
                        chartOptions:{
                            legend:{
                                layout:'horizontal',
                                align:'center',
                                verticalAlign:'bottom'
                            }
                        }
                    }
                ]
            }
        })
    </script>
</body>
</html>