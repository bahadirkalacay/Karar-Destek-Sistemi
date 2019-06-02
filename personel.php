<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Karar Destek Sistemleri</title>
    <link rel="stylesheet" href="admin2.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['İlgisizlik',     77],
          ['Kaba Davranma',     54],
          ['Hizmet Alamama',  24],
          ['Randevu Sorunları', 32],
          ['Faturalama Sorunları',    10]
        ]);

        var options = {
          title: '2018 Yılı Şikayet Türlerinin Dağılım Grafiği',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

  </head>
  <body>
     <div id="donutchart" style="width: 1100px; height: 650px;"></div>
  <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
      <div id='cssmenu'>
    <ul>
       <li><a href='admin2.php'><span>TALEPLER</span></a></li>
       <li><a href='sikayet.php'><span>ŞİKAYETLER</span></a></li>
       <li><a href='bolum.php'><span>HASTA/TALEP ORANLARI</span></a></li>
       <li class="active"><a href='personel.php'><span>ŞİKAYET TÜRÜ ANALİZLERİ</span></a></li>
       <li class='last'><a href='index.php'><span>ÇIKIŞ YAP</span></a></li>
    </ul>
    </div>
  </body>
</html>

