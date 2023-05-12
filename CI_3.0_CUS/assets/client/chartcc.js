/*{
            label: "Hey, baby!",
            fill: false,
            backgroundColor: ['#ff0000', '#ff4000', '#ff8000', '#ffbf00', '#ffbf00', '#ffff00', '#bfff00', '#80ff00', '#40ff00', '#00ff00'],
            borderColor: 'black',
            data: [85, 60, 70, 50, 18, 20, 45, 30, 20],
        }
        */

        // data define for bar chart
        var myData = {
            //labels: ["Javascript", "Java", "Python", "PHP", "C++", "TypeScript"],
            labels: [<?php echo $montharr; ?>],
            datasets: [{
                label: "Fancy",
                fill: false,
                backgroundColor: ['#ff0000', '#ff4000', '#ff8000', '#ffbf00', '#ffbf00', '#ffff00'],
                borderColor: 'red',
                data: [<?php echo $arr_colf; ?>],
                //data: [85, 60, 70, 50, 18, 20],
            }, {
                label: "Round",
                fill: false,
                backgroundColor: ['#ff0000', '#ff4000', '#ff8000', '#ffbf00', '#ffbf00', '#ffff00'],
                borderColor: 'red',
                data: [<?php echo $arr_colr; ?>],
                //data: [43, 105, 76, 50, 33, 97],
            }]
        };
        // Options define for display value on top of bars
        var myoption = {
            tooltips: {
                enabled: true
            },
            hover: {
                animationDuration: 1
            },
            animation: {
            duration: 10,
            onComplete: function () {
                var chartInstance = this.chart,
                    ctx = chartInstance.ctx;
                    ctx.textAlign = 'center';
                    ctx.fillStyle = "rgba(0, 0, 0, 1)";
                    ctx.textBaseline = 'bottom';
                    // Loop through each data in the datasets
                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });
                    });
                }
            },
            resize: true
        };
        // Code to draw Chart
        var ctx = document.getElementById('my_Chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',        // Define chart type
            data: myData,       // Chart data
            options: myoption   // Chart Options [This is optional paramenter use to add some extra things in the chart].
        });

        var ctx = document.getElementById('my_Chart1').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',        // Define chart type
            data: myData,       // Chart data
            options: myoption   // Chart Options [This is optional paramenter use to add some extra things in the chart].
        });

        var ctx = document.getElementById('my_Chart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',        // Define chart type
            data: myData,       // Chart data
            options: myoption   // Chart Options [This is optional paramenter use to add some extra things in the chart].
        });

        var ctx = document.getElementById('my_Chart3').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',        // Define chart type
            data: myData,       // Chart data
            options: myoption   // Chart Options [This is optional paramenter use to add some extra things in the chart].
        });

        var ctx = document.getElementById('my_Chart4').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',        // Define chart type
            data: myData,       // Chart data
            options: myoption   // Chart Options [This is optional paramenter use to add some extra things in the chart].
        });

        var ctx = document.getElementById('my_Chart5').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',        // Define chart type
            data: myData,       // Chart data
            options: myoption   // Chart Options [This is optional paramenter use to add some extra things in the chart].
        });

        var ctx = document.getElementById('my_Chart6').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',        // Define chart type
            data: myData,       // Chart data
            options: myoption   // Chart Options [This is optional paramenter use to add some extra things in the chart].
        });