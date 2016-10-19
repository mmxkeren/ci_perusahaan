<?php $this->load->view('header');?>
<?php
if($aksi=='aksi_add'){
    $id_pegawai="";
    $nama="";
    $no_telp="";
    $kota="";
    $kelamin="";
    $id_posisi="";
    $status="";
}else{
  foreach($qdata as $rowdata){
    $id_pegawai=$rowdata->id_pegawai;
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
          <td>ID pegawai </td>
          <td>
            <div class="col-sm-6">
                <input type="text" name="id_pegawai" class="form-control" value="<?=$id_pegawai?>">
            </div>
            </td>
         </tr>
         <tr>
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
                <input type="text" name="no_telp" class="form-control" value="<?=$no_telp?>">
            </div>
            </td>
         </tr>
         <tr>
          <td>Kota</td>
          <td>
           <div class="col-sm-6">
            <select name="kota" required="requreid" class="form-control">
              <option></option>
              <option value="1" <? if($aksi=="aksi_edit"){if($id_posisi=='1'){echo"selected=selected";}}?>Malang</option>
              <option value="2" <? if($aksi=="aksi_edit"){if($id_posisi=='2'){echo"selected";}}?>Nganjuk</option>
              <option value="3" <? if($aksi=="aksi_edit"){if($id_posisi=='3'){echo"selected";}}?>Blitar</option>
              <option value="4" <? if($aksi=="aksi_edit"){if($id_posisi=='4'){echo"selected";}}?>Tulungagung</option>
              <option value="5" <? if($aksi=="aksi_edit"){if($id_posisi=='5'){echo"selected";}}?>Surabaya</option>
            </select>
           </div>
            </td>
         </tr>
         <tr>
         <tr>
          <td>kelamin</td>
          <td> <div class="col-sm-5">
          <select name="kelamin" required="requreid" class="form-control">
           <option></option>
           <option value="1" <? if($aksi=="aksi_edit"){if($kelamin=='1'){echo"selected=selected";}}?>Laki-laki</option>
           <option value="2" <? if($aksi=="aksi_edit"){if($kelamin=='2'){echo"selected";}}?>Perempuan</option>
          </select>
          </div>
          </td>
         </tr>
          <td>posisi </td>
          <td>
           <div class="col-sm-4">
            <select name="id_posisi" required="requreid" class="form-control">
              <option></option>
              <option value="1" <? if($aksi=="aksi_edit"){if($id_posisi=='1'){echo"selected=selected";}}?>IT</option>
              <option value="2" <? if($aksi=="aksi_edit"){if($id_posisi=='2'){echo"selected";}}?>HRD</option>
              <option value="3" <? if($aksi=="aksi_edit"){if($id_posisi=='3'){echo"selected";}}?>Keungan</option>
              <option value="4" <? if($aksi=="aksi_edit"){if($id_posisi=='4'){echo"selected";}}?>Produk</option>
              <option value="5" <? if($aksi=="aksi_edit"){if($id_posisi=='5'){echo"selected";}}?>Marketing</option>
            </select>
          </div>
        </td>
         </tr>
         <tr>
          <td>Status</td>
          <td>
          <div class="col-sm-4">
            <select name="status" required="requreid" class="form-control">
              <option></option>
              <option value="1" <? if($aksi=="aksi_edit"){if($id_posisi=='1'){echo"selected=selected";}}?>Pegawai Tetap</option>
              <option value="2" <? if($aksi=="aksi_edit"){if($id_posisi=='2'){echo"selected";}}?>Freelance</option>
            </select>
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