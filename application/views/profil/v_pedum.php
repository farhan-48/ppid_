<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/navbar.php'); ?>

<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>PEDUM PPID</h3>
                <ul>
                    <li>
                    <a href="<?php echo base_url('Halaman_utama')?>">HALAMAN UTAMA</a>
                    </li>
                    <li>PEDUM PPID</li>
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
</div>


<div class="case-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-article">
                    <div class="case-details-img">
                        <!-- <img src="<?php echo base_url(); ?>assets/medizo/default/assets/img/case-study/struktur_ppid.png" alt="Images"> -->
                        <object data="<?php echo base_url('assets/medizo/default/assets/img/sk_ppid.pdf')?>" width="100%" height="1000"></object>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer.php'); ?>