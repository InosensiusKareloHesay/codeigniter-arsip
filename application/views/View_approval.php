<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Transaksi
            <small>Approval Peminjaman</small>
          </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
        <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
                 <thead>
                <tr>
                  <th>No.</th>
                  <th>No. Dok</th>
                  <th>Nama Dokumen</th>
                  <th>Tgl Ambil</th>
                  <th>Tgl Kembali</th>
                  <th>Peminjam</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $i = $this->uri->segment('3')+1;  
                    foreach($req as $data){ 
                ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nomor_dokumen']; ?></td>
                    <td ><?php echo $data['nama_dokumen']; ?></td>
                    <td ><?php echo $data['tanggal_pinjam']; ?></td>
                    <td ><?php echo $data['tanggal_kembali']; ?></td>
                    <td ><?php echo $data['nama_user'];?></td>
                    <td colspan="2"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Approve<?php echo $data['id_peminjaman'];?>"><i class="fa fa-edit"></i></button></a></td>
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

<?php foreach($req as $data){ ?>
    <div id="Approve<?php echo $data['id_peminjaman'];?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <form action="<?php echo base_url("edit/approveDokumen/")?><?php echo $data['id_peminjaman'];?>" method="post">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="ion-close-circled"></i></button>
                    <h5 class="modal-title"><i class="ion-folder fa-lg text-primary"></i> &nbsp;Approve Dokumen</h5>
                  </div>
                  <div class="col-md-12">
                    <div class="profile-section">
                      <div class="modal-body">
                        <div class="form-group">
                        <label class="col-md-4">Status Approve: </label>
                        <span class="col-md-8">
                          <select class="form-control" name="status" id="status">
                              <option value="0">Belum Di Approve</option>
                              <option value="1">Approve</option>
                              <option value="2">Ditolak</option>
                          </select>
                        </span>
                        </div>
                      </div>
                      <br /><br />
                      <div class="modal-body">
                        <div class="form-group">
                        <span class="col-md-12"><input type="submit" value="Simpan" class="btn btn-block btn-info"></span>
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

  </div>