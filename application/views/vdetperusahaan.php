<?php $this->load->view('header'); ?>
<?php
if(empty($qperusahaan)){
  }else{
    $no=0;

    foreach($qperusahaan as $rowdata){
      $id=$rowdata->id_pegawai;
      $nama=$rowdata->nama;
      $no_telp=$rowdata->no_telp;
      $kota=$rowdata->kota;
      $kelamin=$rowdata->kelamin;
      $id_posisi=$rowdata->id_posisi;
      $status=$rowdata->status;
    }
  }
?>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>Detail Pegawai</b></div>
        <div class="panel-body">
          <p> <a href="<?=base_url()?>perusahaan" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-repeat"></i> Kembali</a></p>

          <table class="table table-striped">
            <?php if(empty($qperusahaan)){ ?>
            <tr>
                  <td colspan="6">Data tidak ditemukan</td>
                </tr>

                <?php }else{
                  $no=0;
                  foreach($qperusahaan as $rowperusahaan){ $no++;?>
                  <tr>
                    <td><?=$no?></td>
                    <td><?=$rowperusahaan->id_pegawai?></td>
                    <td><?=$rowperusahaan->nama?></td>
                    <td><?=$rowperusahaan->no_telp?></td>
                    <td><?=$rowperusahaan->kota?></td>
                    <td><?=$rowperusahaan->kelamin?></td>
                    <td><?=$rowperusahaan->id_posisi?></td>
                    <td><?=$rowperusahaan->status?></td>
                    </tr>
                    <?php }}?>
            <tr>
              <td>ID Pegawai</td>
              <td><?=$id?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td><?=$nama ?></td>
            </tr>
            <tr>
              <td>No Telp</td>
              <td><?=$no_telp ?></td>
              </tr>
            <tr>
              <td>Kota</td>
              <td><?=$kota?></td>
              </tr>
            <tr>
              <td>kelamin</td>
              <td><?=$kelamin?></td>
              </tr>
            <tr>
              <td>Posisi</td>
              <td><?=$id_posisi?></td>
              </tr>
            <tr>
              <td>Status</td>
              <td><?=$status?></td>
            </tr>
          </table>
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->
<?php $this->load->view('footer');?>