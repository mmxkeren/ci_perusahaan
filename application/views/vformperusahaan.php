<? $this->load->view('header');?>
<?
if($aksi=='aksi_add'){
    $nama="";
    $no_telp="";
    $kota="";
    $kelamin="";
    $id_posisi="";
    $status="";
}else{
  foreach($qdata as $rowdata){
    $nama=$rowdata->kode_brg;
    $no_telp=$rowdata->barcode;
    $kota=$rowdata->nama_brg;
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
         <tr>
          <td>Kota</td>
          <td>
           <div class="col-sm-6">
            <textarea  name="uraian" class="form-control"><?=$kota?></textarea>
           </div>
            </td>
         </tr>
         <tr>
         <tr>
          <td>kelamin</td>
          <td> <div class="col-sm-5">
          <select name="kelamin" required="requreid" class="form-control">
           <option></option>
           <option value="Papan" <? if($aksi=="aksi_edit"){if($kelamin=='Papan'){echo"selected=selected";}}?>>Papan</option>
           <option value="Obat" <? if($aksi=="aksi_edit"){if($kelamin=='Obat'){echo"selected";}}?>>Obat</option>
           <option value="Kelontong"<? if($aksi=="aksi_edit"){if($kelamin=='Kelontong'){echo"selected";}}?>>Kelontong</option>
          </select>
          </div>
          </td>
         </tr>
          <td>posisi </td>
          <td>
           <div class="col-sm-4">
            <input type="text" name="id_posisi" class="form-control" value="<?=$id_posisi?>">
            </div>
           </td>
         </tr>
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
<? $this->load->view('footer');?>