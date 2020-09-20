const projectURL = 'http://127.0.0.1:8000/';

$('#stats-btn').on('click', function () {
    $.ajax({
        url: projectURL + 'statistics/get',
        method: 'GET'
    }).done(response => {
        let visits = JSON.parse(response);

        let labels = [];
        let data = [];
        visits.forEach(item => {
            labels.push(item.path);
            data.push(item.num_visits);
        });

        colorSet = random_rgba_pair(0.2);

        $('#myChart').remove();
        var chart = $('<canvas>').addClass('d-none').attr('id', 'myChart').css({
            'width': '600px',
            'height': '300px'
        });
        $('.chart-container').append(chart);

        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# of Visits',
                    data: data,
                    backgroundColor: colorSet[0],
                    borderColor: colorSet[1],
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
        });

        $('#fallback-text').addClass('d-none');
        $('#myChart').removeClass('d-none');
    });
});

// Helper functions
function random_rgba_pair(alpha) {
    var round = Math.round,
        random = Math.random,
        colors = 255;

    var r = round(random() * colors);
    var g = round(random() * colors);
    var b = round(random() * colors);

    var color1 = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha + ')';
    var color2 = 'rgba(' + r + ',' + g + ',' + b + ',' + '1)';

    return [color1, color2];
}
