<?php

$connection=mysqli_connect('localhost','root','','hastane1');

$result=mysqli_query($connection,"Select * FROM bolumler");




 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Karar Destek Sistemleri</title>
    <link rel="stylesheet" href="admin2.css">


  </head>

  <body>
    <div id="btt">


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["", "", { role: "style" } ],
        ["Acil Servis",90, "blue"],
        ["Dahiliye",30, "red"],
        ["Kardiyoloji",25, "gold"],
        ["Nöroloji",20, "green"],
        ["Psikiyatri",45, "black"],
        ["Dermatoloji",20, "pink"],
        ["Ortopedi",35, "grey"],
        ["Göz Hastalıkları",75, "orange"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "2018 Yılı Bölümlere Göre Talep Analizi (Talep Sayısı/Bölümler)",
        width: 1000,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "absolute"},
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
    </div>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
    <div id='cssmenu'>
  <ul>
     <li class='active'><a href='#'><span>TALEPLER</span></a></li>
     <li><a href='sikayet.php'><span>ŞİKAYETLER</span></a></li>
     <li><a href='bolum.php'><span>HASTA/TALEP ORANLARI</span></a></li>
     <li><a href='personel.php'><span>ŞİKAYET TÜRÜ ANALİZLERİ</span></a></li>
     <li class='last'><a href='index.php'><span>ÇIKIŞ YAP</span></a></li>
  </ul>
  </div>


  </body>
</html>
