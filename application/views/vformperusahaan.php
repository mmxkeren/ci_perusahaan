<?php $this->load->view('header');?>
<?php
if($aksi=='aksi_add'){
    $nama="";
    $no_telp="";
    $kota="";
    $kelamin="";
    $id_posisi="";
    $status="";
}else{
  foreach($qdata as $rowdata){
    $nama=$rowdata->nama;
    $no_telp=$rowdata->no_telp;
    $kota=$rowdata->kota;
    $kelamin=$rowdata->kelamin;
    $id_posisi=$rowdata->id_posisi;
    $status=$rowdata->status;
  }
}

if($aksi=='aksi_kota'){
    $nama="";
    $no_telp="";
    $kota="";
    $kelamin="";
    $id_posisi="";
    $status="";
}else{
  foreach($qdata as $rowdata){
    $nama=$rowdata->nama;
    $no_telp=$rowdata->no_telp;
    $kota=$rowdata->kota;
    $kelamin=$rowdata->kelamin;
    $id_posisi=$rowdata->id_posisi;
    $status=$rowdata->status;
  }
}

if($aksi=='aksi_kelamin'){
    $nama="";
    $no_telp="";
    $kota="";
    $kelamin="";
    $id_posisi="";
    $status="";
}else{
  foreach($qdata as $rowdata){
    $nama=$rowdata->nama;
    $no_telp=$rowdata->no_telp;
    $kota=$rowdata->kota;
    $kelamin=$rowdata->kelamin;
    $id_posisi=$rowdata->id_posisi;
    $status=$rowdata->status;
  }
}

if($aksi=='aksi_posisi'){
    $nama="";
    $no_telp="";
    $kota="";
    $kelamin="";
    $id_posisi="";
    $status="";
}else{
  foreach($qdata as $rowdata){
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
  <div class="panel-heading"><b>Form Pegawai</b></div>
  <div class="panel-body">
  <?=$this->session->flashdata('pesan')?>
     <form action="<?=base_url()?>perusahaan/form/<?=$aksi?>" method="post">
       <table class="table table-striped">

         <tr>
          <td>Nama </td>
          <td>
            <div class="col-sm-6">
                <input type="text" name="nama" class="form-control" value="<?=$nama?>">
            </div>
            </td>
         </tr>
         <tr>
          <td>No Telp</td>
          <td>
            <div class="col-sm-2">
                <input type="text" name="notelp" class="form-control" value="<?=$no_telp?>">
            </div>
            </td>
         </tr>

         <?php if(empty($qkelamin)){ ?>
         <tr>
          <td>kelamin</td>
          <td><div class="col-sm-5">Data tidak ditemukan</td>
         </tr>
         <?php }else{
          $no=1;
          foreach($qkelamin as $rowkelamin){ $no++;?>

          <tr>
          <td>kelamin</td>
          <td> <div class="col-sm-5">
          <select name="kelamin" required="requreid" class="form-control">
           <option></option>
           <option value="<?=$rowkelamin->id?>" <? if($aksi=="aksi_edit"){if($kelamin=='<?=$rowkelamin->id?>'){echo"selected=selected";}}?><?=$rowkelamin->nama?></option>
           <option value="<?=$rowkelamin->id?>" <? if($aksi=="aksi_edit"){if($kelamin=='<?=$rowkelamin->id?>'){echo"selected";}}?><?=$rowkelamin->nama?></option>
          </select>
          </div>
          </td>
         </tr>
         <?php }}?>

         <?php if(empty($qposisi)){ ?>
         <tr>
          <td>posisi</td>
          <td><div class="col-sm-5">Data tidak ditemukan</td>
         </tr>
         <?php }else{
          $no=1;?>
          

          <tr>
          <td>posisi</td>
          <td> <div class="col-sm-5">
          <select name="kelamin" required="requreid" class="form-control">
           <option></option>
           <?php foreach($qposisi as $rowposisi){ $no++;?>
           <option value="<?=$rowposisi->id?>" <? if($aksi=="aksi_edit"){if($posisi=='<?=$rowposisi->id?>'){echo"selected";}}?><?=$rowposisi->nama?></option>           
           <?php }?>
          </select>
          </div>
          </td>
         </tr>
         <?php }?>

         <?php if(empty($qkota)){ ?>
         <tr>
          <td>kota</td>
          <td><div class="col-sm-5">Data tidak ditemukan</td>
         </tr>
         <?php }else{
          $no=1;?>
          <tr>
          <td>kota</td>
          <td> <div class="col-sm-5">
          <select name="kelamin" required="requreid" class="form-control">
           <option></option>
           <?php foreach($qkota as $rowkota){ $no++;?>
           <option value="<?=$rowkota->id?>" <? if($aksi=="aksi_edit"){if($posisi=='<?=$rowkota->id?>'){echo"selected";}}?><?=$rowkota->nama?></option>           
           <?php }?>
          </select>
          </div>
          </td>
         </tr>
         <?php }?>

         <tr>
          <td>Status</td>
          <td>
          <div class="col-sm-4">
            <input type="text" name="status" class="form-control" value="<?=$status?>">
          </div>
          </td>
         </tr>


       <tr>
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Simpan">
            <button type="reset" class="btn btn-default">Batal</button>
          </td>
         </tr>
       </table>
     </form>
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->
<?php $this->load->view('footer');?>