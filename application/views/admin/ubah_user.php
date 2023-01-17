
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ubah Data User</h3>
              </div>

             <!--  <div class="title_right">
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

            <div class="x_panel">
                <div class="x_title">
                  <h2>Ubah Data User <small>Users</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                      </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                
                    <form class="form-label-left input_mask" method="post" action="<?= site_url()?>admin/ubah_data/<?= $this->uri->segment(3)?>">

                    <div class="form-group row">
                      <label for="kode_user" class="col-form-label col-md-3 col-sm-3 ">Kode User</label>
                      <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" id="kode_user" value="<?php echo $this->uri->segment('2')=="update" ? $user['id_user'] : $id ?>" name="id_user" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3" for="nama_user">Nama User </label>
                      <div class="col-md-9 col-sm-9 ">
                      <input type="text" class="form-control" id="nama_user" value="<?= $user['username']?>" name="username">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  for="pwd" class="col-form-label col-md-3 col-sm-3 ">Password User </label>
                      <div class="col-md-9 col-sm-9 ">
                      <input type="password" class="form-control" id="pwd" name="password" placeholder="Masukkan Password Baru">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Level </label>
                      <div class="col-md-9 col-sm-9 ">
                        <select  class="form-control"  name="level">
                        <option selected> Pilih Level</option>
                          <option value="Default-admin"> Default-Admin</option>
                          <option value="Default-user"> Default-User</option>
                        </select>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Status </label>
                      <div class="col-md-9 col-sm-9 ">
                      <select class="form-control" name="active">
                        <option selected> Pilih Status User</option> 
                          <option value="1"> Aktif</option>
                          <option value="0"> Tidak Aktif</option>
                        </select>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group row">
                      <div class="col-md-9 col-sm-9  offset-md-3">
                        <button type="button" onclick="location.href = '<?php echo site_url('admin/lihat_data') ?>';" class="btn btn-primary">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>

          </div>
        </div>
        <!-- /page content -->