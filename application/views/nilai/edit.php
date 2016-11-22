<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

  <h1 class="page-header"><?php echo $judul; ?></h1>
  <?= $this->session->flashdata('alert_msg'); ?>
    <form class="form-horizontal" method="POST" action="<?=base_url('nilai/act_edit/') ?>">
      <div class="form-group">
        <label class="col-sm-2 control-label">Mata Pelajaran</label>
          <div class="col-sm-10">
            <select class="form-control" name="id_mapel">
              <option value="">--Pilih Mata Pelajaran--</option>
              <?php foreach ($data_mapel as $key => $value) { ?>
                <?php if ($value->id_mapel == $data_nilai->id_mapel) {
                  $selected = 'selected';
                    }else{
                  $selected="";
                  } 
                ?>
              <option value="<?= $value->id_mapel?>" <?= $selected ?>> <?= $value->nama_mapel ?></option>
              <?php } ?>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">Nama Siswa</label>
          <div class="col-sm-10">
            <select class="form-control"  name="id_siswa">
              <option value="">--- Pilih Siswa ---</option>

              <?php foreach ($data_siswa as $key => $value) {?>
                 <?php if ($value->id_siswa == $data_nilai->id_siswa) {
                  $selected = 'selected';
                    }else{
                  $selected="";
                  } 
                ?>
              <option value="<?= $value->id_siswa ?>" <?=$selected ?>> <?=$value->nama ?> </option>
              <?php } ?>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label  class="col-sm-2 control-label">Total Nilai</label>
          <div class="col-sm-10">
            <input class="form-control" placeholder="Total Nilai" type="text" name="total_nilai" value="<?=$data_nilai->total_nilai ?>">
          </div>
      </div>
      <input type="hidden" name="id_nilai" value="<?=$data_nilai->id_nilai ?>" readonly>
      <div class="form-group" style="padding-top: 25px;">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="<?= base_url('nilai') ?>" class="btn btn-default" >Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>
      </div>
    </form>
</div>