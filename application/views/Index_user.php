<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>Peminjaman</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#profile" data-toggle="tab"><span class="visible-xs">Profile</span><span class="hidden-xs"><i class="ion-ios-person fa-lg text-primary"></i> Profile</span></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="profile">
                        <!-- begin profile-container -->
                        <div class="profile-container">
                        <!-- begin profile-section -->
                            <div class="profile-section">
                                <div class="profile-info">
                                    <div class="box table-responsive">
                                        <table class="table table-profile">
                                            <?php foreach ($profile as $data){ ?>
                                            <thead>
                                                <tr>
                                                    <th><h5><span class=""> # Biodata Peminjam </span></h5></th>
                                                    <th>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="highlight">
                                                    <td class="field">NIP</td>
                                                    <td><?php echo $data['nip'];?></td>
                                                </tr>
                                                <tr class="divider">
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Nama</td>
                                                    <td><?php echo $data['nama_user'];?></td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Jabatan</td>
                                                    <td><?php echo $data['jabatan'];?></td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />&nbsp;
                                <hr />
                            </div>
                            <!-- end profile-section -->
                        </div>
                        <!-- end profile-container -->
                    </div>
                </div>
            
            </div>
        </div>
        
        <script> // 500 = 0,5 s
            $(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$(".pesan").fadeOut('slow');}, 7000);
        </script>		
    </div>        
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->