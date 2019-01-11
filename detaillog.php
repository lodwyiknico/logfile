<?php
include 'databasetable.php';
?>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Data Detail Table log</div>
  <div class="card-body">

    <?php include 'formlog.php'; ?>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='1'>
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal Masalah</th>
            <th>Jam Masalah</th>
            <th>Tanggal Done</th>
            <th>Jam Done</th>
            <th>Downtime</th>
            <th>Nama Projek</th>
            <th>Nama Stasiun</th>
            <th>Nama Perangkat</th>
            <th>Type</th>
            <th>Part</th>
            <th>Problem</th>
            <th>Penyebab</th>
            <th>Solusi</th>
            <th>Status</th>
            <th>Petugas</th>
          </tr>
        </thead>

        <tbody>
            <?php while($rowtable = mysqli_fetch_array($datatable)) { ?>
                  <tr>
                    <td><?php echo $rowtable[0];  ?></td>
                    <td><?php echo $rowtable[1];  ?></td>
                    <td><?php echo $rowtable[2];  ?></td>
                    <td><?php echo $rowtable[3];  ?></td>
                    <td><?php echo $rowtable[4];  ?></td>
                    <td><?php echo $rowtable[5];  ?></td>
                    <td><?php echo $rowtable[6];  ?></td>
                    <td><?php echo $rowtable[7];  ?></td>
                    <td><?php echo $rowtable[8];  ?></td>
                    <td><?php echo $rowtable[9];  ?></td>
                    <td><?php echo $rowtable[10];  ?></td>
                    <td><?php echo $rowtable[11];  ?></td>
                    <td><?php echo $rowtable[12];  ?></td>
                    <td><?php echo $rowtable[13];  ?></td>
                    <td><?php echo $rowtable[14];  ?></td>
                    <td><?php echo $rowtable[15];  ?></td>
                  </tr>
           <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
