<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>


    <style>
    
        body {
            width: 550px;
            margin: 3rem auto;
        }

        #chart-container {
            width: 100%;
            height: auto;
        }

    </style>


</head>
<body>

    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        $(document).ready(function() {
            showGraph();
        });

        function showGraph(){
            {
                $.post("data.php", function(data) {
                    console.log(data);
                    let typebenefit = [];
                    let cmoney = [];

                    for (let i in data) {
                        typebenefit.push(data[i].typebenefit);
                        cmoney.push(data[i].cmoney);
                    }

                    let benefit = {
                        labels: typebenefit,
                        datasets: [{
                                label: 'รายการสวัสดิการ',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: cmoney
                        }]
                    };

                    let graphTarget = $('#graphCanvas');
                    let barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: benefit
                    })
                })
            }
        }
    </script>

</body>
</html>