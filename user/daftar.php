<?php if(empty($j_user)) : ?>
      <section class="content">
        
        <div class="card">
            <div class="card-header bg-primary">
              <i class="fa fa-user-plus"></i>  Formulir Pendaftaran
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input autocomplete="off" type="text" class="form-control" name="nama_lengkap">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Sekolah Asal</label>
                                <input autocomplete="off" type="text" class="form-control" name="sekolah_asal">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">NISN</label>
                            <input autocomplete="off" type="text"  class="form-control" name="nisn">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nilai Akhir</label>
                            <input autocomplete="off" type="number" class="form-control" name="nilai_akhir">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Jurusan 1</label>
                            <select id="" class="form-control" name="jurusan_1">
                                <?php foreach($jurusan as $jrs) : ?>
                                    <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Jurusan 2</label>
                            <select id="" class="form-control" name="jurusan_2">
                                <?php foreach($jurusan as $jrs) : ?>
                                        <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3" name="daftar"><i class="fa fa-edit"></i> Daftar</button>
                </form>
            </div>
        </div>

    </section>

    <?php elseif(!empty($j_usr_tolak)) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">  
                <h4>Kamu Ditolak</h4>
              <?php foreach($user as $usr) : ?>
                <p>
                  Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Kamu Ditolak Karena Nilai Terlalu Rendah, Silahkan Logout <br/>
                  <a href="../../logout.php">Logout ?</a>
                </p>
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div> 

    <?php elseif(!empty($j_user)) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-info">  
                <h4>Kamu Sudah Mendaftar</h4>
              <?php foreach($user as $usr) : ?>
                <p>
                  Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Mendaftar Pada Jurusan <?php echo $usr['jurusan_1'] ?> Dan <?php echo $usr['jurusan_2'] ?> <br/>
                  Dan Direkomendasikan Masuk Jurusan <?php echo $usr['jurusan_rekomendasi'] ?> 
                </p>
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
<?php endif ?>
    

