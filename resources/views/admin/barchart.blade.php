<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript"src= "https:/www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" >
        google.charts.lode('current',{'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            var data = google.visualization.arrayToDataTable({(Js::from($answer))});

            var options= {
                chart:{
                    tital 'Retail sales monthly',
                    
                },
        
            };
            var =chart = new google.charts.Bar(document.getElementById('chart'));

            chart.draw(data.charts.Bar.convertOption(options));
        }
    </script>
    <title>chart</title>

</head>
<body>
    <h1>
        Bar char retail sale
    </h1>
    <div=id= " chart " style="white: 1000px;height 600px; "></div>
    
</body>
</html>