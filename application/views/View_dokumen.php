<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <small>Dokumen</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
               <form action="<?php echo base_url('load/searchdoc'); ?>" method="post">
                  <div class="form-group">
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="search" placeholder="Search For Document Name">
                      </div>
                      <input type="submit" class="btn btn-default" value="Search">
                  </div>
              </form>
        <table id="example1" class="table table-bordered table-striped">
        <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Lokasi</th>
              <th>No. Dok</th>
              <th>Nama Dokumen</th>
              <th>Size (KB)</th>
              <th>Tgl Upload</th>
              <th colspan="2"><center>Action</center></th>
              <?php if($this->session->userdata("level") == 1){ ?>
                <th colspan="2"><a href="<?php echo base_url('c_home/loadInputDokumen');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Data</b><i class="fa fa-plus"></i></button></div> </a></th>
              <?php } ?>
          </tr>
            </thead>
              <tbody>
                <?php
                    $i = $this->uri->segment('3')+1;  
                    foreach($doc as $data){ 
                ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['lokasi']; ?></td>
            <td><?php echo $data['nomor_dokumen']; ?></td>
            <td><?php echo $data['nama_dokumen']; ?></td>
            <td><?php echo $data['size']; ?></td>
            <td><?php echo $data['tanggal_upload']; ?></td>
            <td><button type="button" style="cursor:pointer;" data-toggle="modal" data-target="#Det<?php echo $data['id'];?>" title="detail" class="btn btn-block btn-normal">Detail</button></td>

          <?php if($this->session->userdata("level") == 1){ ?>
            <td colspan="2"><a href="<?php echo base_url('edit/getDataDokumen/');?><?php echo $data['id']?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo base_url('delete/delete_dokumen/');?><?php echo $data['id']?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a></td>

          <?php } elseif ($this->session->userdata("level") == 0) { ?>

            <td colspan="2"><button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#Pinjam<?php echo $data['id'];?>">Pinjam</button></td>
          </form>
          <?php } ?>

        </tr>  
        <?php } ?>
             </tbody>
         </table>
        <?php echo $this->pagination->create_links(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php foreach($doc as $data){ ?>
    <div id="Pinjam<?php echo $data['id'];?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <form action="<?php echo base_url("input/pinjamDokumen/")?><?php echo $data['id'];?>" method="post">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ion-close-circled"></i></button>
                    <h5 class="modal-title"><i class="ion-folder fa-lg text-primary"></i> &nbsp;Pinjam Dokumen No. <b><?php echo $data['nomor_dokumen']; ?></b></h5>
                  </div>
                  <div class="col-md-12">
                    <div class="profile-section">
                      <div class="modal-body">
                        <div class="form-group">
                        <label class="col-md-4">Lama Pinjam</label>
                        <span class="col-md-8">
                          <select class="form-control" name="lamaPinjam" id="namaPinjam">
                            <?php for ($i=1; $i <= 7; $i++) { ?>
                              <option value="<?php echo $i; ?>"><?php echo $i;?> Hari</option>
                            <?php } ?>
                          </select>
                        </span>
                        </div>
                      </div>
                      <br /><br />
                      <div class="modal-body">
                        <div class="form-group">
                        <span class="col-md-12"><input type="submit" value="Pinjam" class="btn btn-block btn-info"></span>
                      </div>
                      </div>
                      <br />
                      <br />
                    </div>  
                  </div>
                  </form>
                  <div class="modal-footer no-margin-top"></div>
                </div>
              </div>
            </div>
 <?php } ?>
<?php foreach($doc as $data){ ?>
    <div id="Det<?php echo $data['id'];?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ion-close-circled"></i></button>
                    <h5 class="modal-title"><i class="ion-folder fa-lg text-primary"></i> &nbsp;Detail Dokumen No. <b><?php echo $data['nomor_dokumen']; ?></b></h5>
                  </div>
                  <div class="col-md-12">
                    <div class="profile-section">
                      <div class="modal-body">
                        <label class="col-md-4">Nomor Dokumen</label>
                        <span class="col-md-8"><?php echo $data['nomor_dokumen']; ?></span>
                      </div>
                      <div class="modal-body">
                        <label class="col-md-4">Kode</label>
                        <span class="col-md-8"><?php echo $data['kode_dokumen']; ?></span>
                      </div>
                      <div class="modal-body">
                        <label class="col-md-4">Nama</label>
                        <span class="col-md-8"><?php echo $data['nama_dokumen']; ?></span>
                      </div>
                      <div class="modal-body">
                        <label class="col-md-4">Deskripsi</label>
                        <span class="col-md-8"><?php echo $data['deskripsi']; ?></span>
                      </div>
                      <div class="modal-body">
                        <label class="col-md-4">Nama File</label>
                        <span class="col-md-8"><?php echo $data['file_name']; ?></span>
                      </div>
                      <div class="modal-body">
                        <label class="col-md-4">Ukuran</label>
                        <span class="col-md-8"><?php echo $data['size'];?> KB</span>
                      </div>
                      <div class="modal-body">
                        <label class="col-md-4">Tanggal Upload</label>
                        <span class="col-md-8"><?php echo $data['tanggal_upload']?></span>
                      </div>
                      <br />
                      <br />
                    </div>  
                  </div>
                  <div class="modal-footer no-margin-top"></div>
                </div>
              </div>
            </div>
          <?php } ?>
  </div>