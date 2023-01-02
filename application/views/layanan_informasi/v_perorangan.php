<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/navbar.php'); ?>
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>PERMOHONAN INFORMASI</h3>
            <ul>
                <li>
                    <a href="<?php echo base_url('Halaman_utama') ?>">HALAMAN UTAMA</a>
                </li>
                <li>PERMOHONAN INFORMASI</li>
            </ul>
        </div>
    </div>
    <div class="inner-banner-shape">
        <div class="shape1">
            <img src="<?php echo base_url(); ?>assets/medizo/default/assets/img/inner-banner/inner-banner-shape1.png" alt="Images">
        </div>
        <div class="shape2">`
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
                        <h2>PENGAJUAN PERMOHONAN INFORMASI PERORANGAN</h2>
                        <div class="col-lg-12">
                            <div class="contact-form">
                                <form action="<?php echo base_url() . '/layanan/add' ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Nama Lengkap">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="number" name="nik" id="nik" class="form-control" required data-error="Please enter your id" placeholder="Nomor Identitas">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="alamat" id="alamat" class="form-control" required data-error="Please enter your address" placeholder="Alamat">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" required data-error="Please enter your job" placeholder="Pekerjaan">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="number" name="telp" id="telp" class="form-control" required data-error="Please enter your telp" placeholder="Telephone">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="rincian_info" id="rincian_info" class="form-control" required data-error="Please enter your desc" placeholder="Rincian Informasi yang dibutuhkan">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="tujuan_info" id="tujuan_info" class="form-control" required data-error="Please enter your puspose" placeholder="Tujuan Penggunaan Informasi">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Cara Memperoleh Informasi </label>
                                                <br>
                                                <div class="form-control h-auto">
                                                    <input type='radio' name='cara_info' value='melihat' /> Melihat <br>
                                                    <input type='radio' name='cara_info' value='membaca' /> Membaca <br>
                                                    <input type='radio' name='cara_info' value='mendengar' /> Mendengar <br>
                                                    <input type='radio' name='cara_info' value='mencatat' /> Mencatat <br>
                                                    <input type='radio' name='cara_info' value='mendapatkan salinan informasi' /> Mendapatkan salinan informasi (hardcopy/softcopy) <br />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Cara Mendapatkan Salinan Informasi </label>
                                                <br>
                                                <div class="form-control h-auto">
                                                    <input type='radio' name='salinan_info' value='mengambil langsung' /> Mengambil Langsung <br>
                                                    <input type='radio' name='salinan_info' value='kurir' /> Kurir <br>
                                                    <input type='radio' name='salinan_info' value='pos' /> Pos <br>
                                                    <input type='radio' name='salinan_info' value='faximile' /> Faximile <br>
                                                    <input type='radio' name='salinan_info' value='email' /> Email <br />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="identitas">Identitas Pemohon</label>
                                                <div class="form-control">
                                                    <input type="file" name="name_file" id="name_file" accept="image/png, image/jpeg, image/jpg, image/gif">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">
                                                Send Message
                                            </button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php'); ?>