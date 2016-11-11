<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Index</title>
    <link rel="stylesheet" href="/assets/stylesheets/css/application.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/assets/javascripts/application.js"></script>
    <script src="/assets/javascripts/chosen.js"></script>
  </head>
  <body>
  <?php require 'partials/_header.php'; ?>
   <div id="page_wrapper">
    <?php require 'partials/_sidebar.php'; ?>

    <div id="page">
      <?php if (isset($_GET['flash'])): ?>
        <div id="flash_messages">
          <div class="flash_message">
            <?php echo $_GET['flash']; ?>
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
      <?php endif; ?>
      <div id="page_inner">
        <div id="page_head">
          <div id="page_info">
            <h1>Welcome, Micheal Boss</h1>
            <p>
              Stuff has gone on:
            </p>
            <ul>
              <li>4 Problems have had follow up added.</li>
              <li>2 Problems have been completed.</li>
              <li>7 Calls have been made about problems you created.</li>
            </ul>
          </div>
        </div>
        <div id="page_content">




          <div class="panel" id="new_calls_graph">

          </div>


 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
          google.charts.load('current', {'packages':['line']});
          // google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = new google.visualization.DataTable();
data.addColumn('string', 'Day');
data.addColumn('number', 'Completed Problems');
data.addColumn('number', 'Outstanding Problems');
data.addColumn('number', 'Total Problems');

data.addRows([
['1st',  37.8, 10, 10],
['2nd',  30.9, 69.5, 15],
['3rd',  25.4,   57, 22],
['4th',  11.7, 18.8, 26],
['5th',  11.9, 17.6, 31],
['6th',   8.8, 13.6, 36],
['7th',   7.6, 12.3, 40],
['8th',  12.3, 29.2, 47],
['9th',  16.9, 42.9, 53],
['10th', 12.8, 30.9, 60],
['11th',  5.3,  7.9, 68],
['12th',  6.6,  8.4, 76],
['13th',  4.8,  6.3, 80],
['14th',  4.2,  6.2, 81]
]);

var options = {
chart: {
  title: 'Problems through the month of Janurary',
  subtitle: 'Recorded at the end of each working day'
},
width: 900,
height: 500
};

var chart = new google.charts.Line(document.getElementById('new_calls_graph'));

chart.draw(data, options);
}
          </script>


        </div>
      </div>
    </div>
  </body>
</html>
