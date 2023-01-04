
 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12"> 
                    <?php if($this->session->flashdata('error_msg')){ ?>
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">Gagal</span>
                                <?= $this->session->flashdata('error_msg'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php }else if($this->session->flashdata('success_msg')){ ?>
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <span class="badge badge-pill badge-success">Berhasil</span>
                                <?= $this->session->flashdata('success_msg'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <br>
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title"><i class="fa fa-user"><I>&nbsp;</I>
                  </i>Total User <span>| 2022</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                </div>
                <div >
                  <h4><?php echo $total; ?></h4>
                  <a href="<?= site_url('Admin/lihat_data')?>" class="btn btn-primary">Lihat Data</a>
                </div>
              </div>
            </div>
          </div>

            