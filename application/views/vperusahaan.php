<?php $this->load->view('header');?>
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>Daftar Pegawai</b></div>
        <div class="panel-body"><p><?=$this->session->flashdata('pesan')?> </p>
          <a href="<?=base_url()?>perusahaan/form/add" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          <div class="col-md-5 pull-right">
            <form action="<?=base_url()?>perusahaan/cari" method="get">

              <div class="input-group">
                <input type="text" name="key" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">cari</button>
                </span>
              </div><!-- /input-group -->
            </form>
          </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID pegawai</th>
                  <th>nama</th>
                  <th>No Telp</th>
                  <th>Kota</th>
                  <th>Kelamin</th>
                  <th>Posisi</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
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
                    <td>
                        <a href="<?=base_url()?>perusahaan/form/edit/<?=$rowperusahaan->id_pegawai?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a href="<?=base_url()?>perusahaan/detail/<?=$rowperusahaan->id_pegawai?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>
                        <a href="<?=base_url()?>perusahaan/hapus/<?=$rowperusahaan->id_pegawai?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
                      </td>
                    </tr>
                    <?php }}?>
                  </tbody>
                </table>
              </div>
            </div>    <!-- /panel -->
            </div> <!-- /container -->
            <?php $this->load->view('footer'); ?>