<form action="" method="post" center>
      <div class="row">

      <p>
        <div class="col-sm-12 col-md-3">
        Dari Tanggal : <input type="date" id="tgl1" <?php if ($_POST['tgl1']) echo 'value="'.$_POST['tgl1'].'"' ;  ?> name="tgl1" class="form-control form-control-sm"><font size="2" color="red"><?php echo $namaErr; ?></font>
      </div>
      <div class="col-sm-12 col-md-3">
      Sampai Tanggal : <input type="date" id="tgl2" <?php if ($_POST['tgl2']) echo 'value="'.$_POST['tgl2'].'"' ;  ?> name="tgl2"class="form-control form-control-sm"><font size="2" color="red"><?php echo $namaErr2; ?></font>
    </div>
    <div class="col-sm-12 col-md-3">

    Projek :
    <select id="namapro" name="namapro" class="custom-select custom-select-sm form-control form-control-sm">
        <option value="">Please Select</option>
        <?php
        $query = mysqli_query($koneksi,"SELECT * FROM projek");
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <option value="<?php echo $row["Nama_Projek"]; ?>" <?php if ($_POST['namapro'] == $row['Nama_Projek']) echo 'selected="selected"' ;  ?>>
                <?php echo $row["Nama_Projek"]; ?>
            </option>
        <?php
        }
        ?>
    </select><font size="2" color="red"><?php echo $namaErr3; ?></font>
      </div>
      <div class="col-sm-12 col-md-2">

        Part :
        <select id="namapra" name="namapra" class="custom-select custom-select-sm form-control form-control-sm">
            <option value="">Please Select</option>
            <?php
            $query = mysqli_query($koneksi,"SELECT `projek`.`Nama_Projek`,`perangkat_vm`.`Nama_Perangkat` FROM `trouble_et`
                    INNER JOIN `projek` ON (projek.`No_Projek`=`trouble_et`.`No_Projek`)
                    JOIN `perangkat_vm` ON (perangkat_vm.`No_PVM`=`trouble_et`.`No_PVM`)
                    GROUP BY `perangkat_vm`.`Nama_Perangkat`");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <option id="namapra" class="<?php echo $row["Nama_Projek"]; ?>" value="<?php echo $row['Nama_Perangkat']; ?>" <?php if ($_POST['namapra'] == $row['Nama_Perangkat']) echo 'selected="selected"' ;  ?>>
                    <?php echo $row['Nama_Perangkat']; ?>
                </option>
            <?php
            }
            ?>
        </select><font size="2" color="red"><?php echo $namaErr4; ?></font>
        </div>
        <div class="col-sm-12 col-md-2"><br>
        <input type="submit" value="search" name="cari" class="btn btn-primary"></p>
      </div>
    </div>

    </form>
