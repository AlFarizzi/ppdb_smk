<div class="box">
  <div class="box-header  with-border">

  </div>
  <div class="body">
    <table class="table table-bordered text-center ">
      <tr>
        <th>Nama Lengkap</th>
        <th>Nilai</th>
        <th>Jurusan 1</th>
        <th>Jurusan 2</th>
        <th>Jurusan Rekomendasi</th>
        <th>Aksi</th>
      </tr>
 
      <?php foreach($pendaftar as $pdtr) : ?>
        <tr>
          <td><?php echo $pdtr['nama_lengkap'] ?></td>
          <td><?php echo $pdtr['nilai_akhir'] ?></td>
          <td><?php echo $pdtr['jurusan_1'] ?></td>
          <td><?php echo $pdtr['jurusan_2'] ?></td>
          <td><?php echo $pdtr['jurusan_rekomendasi'] ?></td>
         
        <td>
          <form action="" method="post">
            <input type="hidden" name="id_pdtr[]" value="<?php echo $pdtr['id_user'] ?>">
            <div class="form-group">
            <select name="terima_msk[]" id="" class="form-control">
              <?php foreach($jurusan as $jrs) : ?>
                <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
              <?php endforeach ?>
            </select>
            </div>
          
        <?php endforeach ?> 
              <button type="submit" name="terima" class="btn btn-primary pull-right" ><i class="fa fa-edit"></i>  Terima</button>
            </form>
          </td>
        </tr>
    </table>
  </div>
</div>