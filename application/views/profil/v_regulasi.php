<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/navbar.php'); ?>
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>REGULASI</h3>
            <ul>
                <li>
                    <a href="<?php echo base_url('Halaman_utama') ?>">HALAMAN UTAMA</a>
                </li>
                <li>REGULASI</li>
            </ul>
        </div>
    </div>
    <div class="inner-banner-shape">
        <div class="shape1">
            <img src="<?php echo base_url(); ?>assets/medizo/default/assets/img/inner-banner/inner-banner-shape1.png" alt="Images">
        </div>
        <div class="shape2">
            <img src="<?php echo base_url(); ?>assets/medizo/default/assets/img/inner-banner/inner-banner-shape2.png" alt="Images">
        </div>
    </div>
</div>

<div class="case-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-article">
                    <div class="case-details-img">
                        <h2>REGULASI</h2>
                        <table id="Product-Sale" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">REGULASI</th>
                                    <th class="text-center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center">1</th>
                                    <th class="text-center">UU NDSIKS</th>
                                    <th class="text-center" width="150">
                                        <a href="<?php echo base_url('assets/medizo/default/assets/img/sk_ppid.pdf') ?>" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip">Buka File</a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php'); ?>