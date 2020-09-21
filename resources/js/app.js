// Import Bootstrap
require('./bootstrap');

// Import other JS files
require('./navbar');
require('../../node_modules/chart.js/dist/Chart');
require('./myChart');

// Additional custom JS code
$('.alert')
    .delay(2000)
    .fadeOut(2000);
