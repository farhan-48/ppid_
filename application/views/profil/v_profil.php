<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/navbar.php'); ?>
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>PROFIL PPID</h3>
            <ul>
                <li>
                    <a href="<?php echo base_url('Halaman_utama') ?>">HALAMAN UTAMA</a>
                </li>
                <li>PROFIL PPID</li>
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
                        <h2>SEKILAS INFO PPID</h2>
                        <span>APA ITU PPID ?</span>
                        <p style="text-align : justify;">
                        <ol type="1" style="text-align : justify;">
                            <li>Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan dan/ atau pelayanan informasi di badan publik.</li>
                            <li>PPID Pembantu adalah pejabat yang melaksanakan tugas dan fungsi sebagai PPID pada SKPD di lingkungan Pemerintah Provinsi Jawa Timur.</li>
                        </ol>
                        </p>
                        <p style="text-align : justify">
                            Pengelola Informasi Publik Rumah Sakit Paru Jember Jawa Timur ditangani oleh Pejabat Pengelola Informasi dan Dokumentasi sesuai dengan Undang Undang No. 14 Tahun 2008 tentang Keterbukaan Informasi Publik. Segala informasi akan dipublikasikan melalui website Rumah Sakit Paru Jeber Jawa Timur yang beralamatkan di http://rspjember.jatimprov.go.id .
                            <br>
                            <br>
                            PPID Rumah Sakit Paru Jember Jawa Timur bertanggung jawab untuk melakukan penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi publik di lingkungan Rumah Sakit Paru Jember Jawa Timur
                        </p>
                        <object data="<?php echo base_url('assets/medizo/default/assets/img/sk_ppid.pdf') ?>" width="100%" height="1000"></object>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php'); ?>