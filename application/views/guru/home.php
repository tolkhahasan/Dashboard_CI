        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              <h1 class="page-header"><?php echo $judul; ?></h1>

          

<?php $this->session->flashdata('alert_msg'); ?>
        
  <div class="table-responsive">
    <table class="table table-hover">
    <a href="<?= base_url('guru/add_guru/') ?>" class="btn btn-success">Tambah guru</a>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama guru</th>
         
          <th colspan="2"><center>Aksi</center></th>
        </tr>
      </thead>
      <tbody>
    <?php foreach ($data_guru as $key => $value){ ?>
        <tr>
          <td><?= $value->id_guru ?></td>
          <td><?= $value->nama_guru ?></td>
          <td style="text-align: right;"><a class="btn btn-info" href="<?= base_url('/guru/editguru/') . $value->id_guru?>">Edit</a></td>
          <td style="text-align: left;">
          <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini');" class="btn btn-danger" href="<?= base_url('/guru/hapusguru/') . $value->id_guru?>">Hapus</a></td>
        </tr>
       <?php } ?>
      </tbody>
    </table>
  </div>