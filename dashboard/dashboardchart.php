<?php
$dashname=mysqli_query($koneksi,"SELECT  projek.Nama_Projek as projek, COUNT(*) as jumlah from trouble_et inner join projek on (trouble_et.No_Projek=projek.No_Projek) where Tanggal_Done=CURRENT_DATE GROUP BY projek.Nama_Projek ORDER BY jumlah desc");
$dashopentotal=mysqli_query($koneksi,"SELECT  projek.Nama_Projek as projek, COUNT(*) as jumlah, status from trouble_et inner join projek on (trouble_et.No_Projek=projek.No_Projek) where Tanggal_Done=CURRENT_DATE and status ='Open' GROUP BY projek.Nama_Projek ORDER BY jumlah desc");
$dashdonetotal=mysqli_query($koneksi,"SELECT  projek.Nama_Projek as projek, COUNT(*) as jumlah, status from trouble_et inner join projek on (trouble_et.No_Projek=projek.No_Projek) where Tanggal_Done=CURRENT_DATE and status ='Done' GROUP BY projek.Nama_Projek ORDER BY jumlah desc");
?>
<script type="text/javascript">
new Chart(document.getElementById("bar-chart-grouped"), {
  type: 'bar',
  data: {
    labels: [<?php while ($p = mysqli_fetch_array($dashname)) { echo '"' . $p['projek'] . '",';}?>],
    datasets: [
      {
        label: "Done",
        backgroundColor: "blue",
        data: [<?php while ($p = mysqli_fetch_array($dashdonetotal)) { echo '"' . $p['jumlah'] . '",';}?>]
      }, {
        label: "Open",
        backgroundColor: "red",
        data: [<?php while ($p = mysqli_fetch_array($dashopentotal)) { echo '"' . $p['jumlah'] . '",';}?>]
      }
    ]
  },
  options: {
    title: {
      display: true,

    }
  }
});
</script>
