<script type="text/javascript">
 new Chart(document.getElementById("doughnut-chart"), {
  type: 'doughnut',
  data: {
    labels: [<?php while ($b = mysqli_fetch_array($nama1)) { echo '"' . $b['nama'] . '",';}?>],
    datasets: [
      {
        label: "Population (millions)",
        backgroundColor: [getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex()],
        data: [<?php while ($p = mysqli_fetch_array($count1)) { echo '"' . $p['jumlah'] . '",';}?>]
      }
    ]
  },
  options: {
    title: {
      display: true,
    }
  }
});
function getRandomColorHex() {
var hex = "0123456789ABCDEF",
    color = "#";
for (var i = 1; i <= 6; i++) {
  color += hex[Math.floor(Math.random() * 16)];
}
return color;
}
 </script>

 <script type="text/javascript">
 new Chart(document.getElementById("doughnut-chart2"), {
  type: 'doughnut',
  data: {
    labels: [<?php while ($b = mysqli_fetch_array($nama2)) { echo '"' . $b['nama'] . '",';}?>],
    datasets: [
      {
        label: "Population (millions)",
        backgroundColor: [getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
        getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex(),
          getRandomColorHex()],
        data: [<?php while ($p = mysqli_fetch_array($count2)) { echo '"' . $p['jumlah'] . '",';}?>]
      }
    ]
  },
  options: {
    title: {
      display: true,
    }
  }
});
function getRandomColorHex() {
var hex = "0123456789ABCDEF",
    color = "#";
for (var i = 1; i <= 6; i++) {
  color += hex[Math.floor(Math.random() * 16)];
}
return color;
}
 </script>
