<div class="card" id="chartCard">
    <div class="card-header">
        Evaluation Radar / Spider chart
    </div>
    <div class="card-body">
        <div style="width:100%">
            <canvas id="canvas"></canvas>
        </div>
    </div>
</div>

<script>
    var randomCriteriaValue = function () {
        var items = [-2, -1, 0, 1, 2];
        var value = items[Math.floor(Math.random() * items.length)];
        // console.log(value);
        return value;
    };

    var color = Chart.helpers.color;
    var config = {
        type: 'radar',

        data: {
            labels: [
                'Criteria 1',
                'Criteria 2',
                'Criteria 3',
                'Criteria 4',
                'Criteria 5',
                'Criteria 6',
                'Criteria 7',
                'Criteria 8',
                'Criteria 9',
                'Criteria 10',
                'Criteria 11'
            ],
            datasets: [
                {
                    label: "Zero",
                    backgroundColor: color('#748890').alpha(0.0).rgbString(),
                    borderColor: color('#A2A2A2').alpha(0.5).rgbString(),
                    pointBackgroundColor: color('#A2A2A2').alpha(0.5).rgbString(),
                    pointRadius: 0,
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
                {
                    label: "Dataset 1",
                    backgroundColor: color('#929192').alpha(0).rgbString(),
                    borderColor: '#7DBAD5',
                    pointBackgroundColor: '#7DBAD5',
                    pointRadius: 0,
                    data: [
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue()
                    ]
                },
                {
                    label: "Dataset 2",
                    backgroundColor: color('#748890').alpha(0.2).rgbString(),
                    borderColor: color('#748890').alpha(0.1).rgbString(),
                    pointBackgroundColor: color('#748890').alpha(0.1).rgbString(),
                    pointRadius: 0,
                    data: [
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue(),
                        randomCriteriaValue()
                    ]
                }

            ]
        },
        options: {
            legend: {
                display: false
            },
            
            title: {
                display: false,
                text: 'Chart.js Radar Chart'
            },

            scale: {
                ticks: {
                    display: false
                },
            }
        }
    };

    window.onload = function () {
        window.myRadar = new Chart(document.getElementById("canvas"), config);
    };
</script>