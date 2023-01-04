<!-- Begin Page Content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="<?= base_url('media/images/') .$gambar; ?>"  alt="..." class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                  <br>
                  <br>
                    <h5 class="card-title">Kode Account: <?= $id_user; ?></h5>
                    <h5 class="card-title">Name Account: <?= $username; ?></h5>
                    <h5 class="card-title">Level Account : <?= $level; ?></p>
                    <h5 class="card-title">Status Account : <?= $active; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 