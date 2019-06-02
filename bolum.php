

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Karar Destek Sistemleri</title>
    <link rel="stylesheet" href="admin2.css">


  </head>
  <body>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["", "", { role: "style" } ],
        ["Acil Servis",70, "blue"],
        ["Dahiliye",15, "red"],
        ["Kardiyoloji",35, "gold"],
        ["Nöroloji",65, "green"],
        ["Psikiyatri",15, "black"],
        ["Dermatoloji",10, "pink"],
        ["Ortopedi",14, "grey"],
        ["Göz Hastalıkları",23, "orange"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "2018 Yılı Yüzdelik Olarak Toplam Hasta Sayısının Talebe Oranı",
        width: 1000,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "absolute"},
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
      <div id='cssmenu'>
    <ul>
       <li><a href='admin2.php'><span>TALEPLER</span></a></li>
       <li><a href='sikayet.php'><span>ŞİKAYETLER</span></a></li>
       <li class="active"><a href='bolum.php'><span>HASTA/TALEP ORANLARI</span></a></li>
       <li><a href='personel.php'><span>ŞİKAYET TÜRÜ ANALİZLERİ</span></a></li>
       <li class='last'><a href='index.php'><span>ÇIKIŞ YAP</span></a></li>
    </ul>
    </div>
  </body>
</html>

