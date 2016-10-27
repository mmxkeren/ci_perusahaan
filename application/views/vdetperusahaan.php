<?php $this->load->view('header');?>
<?php
  foreach($qperusahaan as $rowdata){
   $nama=$rowdata->nama;
    $no_telp=$rowdata->no_telp;
    $kota=$rowdata->kota;
    $kelamin=$rowdata->kelamin;
    $id_posisi=$rowdata->id_posisi;
    $status=$rowdata->status;
  }
?>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
  <div class="panel-heading"><b>Detail Pegawai</b></div>
  <div class="panel-body">

     <p> <a href="<?=base_url()?>perusahaan" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-repeat"></i> Kembali</a>
     </p>

       <table class="table table-striped">
         <tr>
          <td>Nama</td>
          <td><?=$nama?></td>
         </tr>
         <tr>
          <td>No Telp</td>
          <td><?=$no_telp?></td>
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