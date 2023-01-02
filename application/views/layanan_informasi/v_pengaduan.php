<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/navbar.php'); ?>
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>PENGADUAN</h3>
            <ul>
                <li>
                    <a href="<?php echo base_url('Halaman_utama') ?>">HALAMAN UTAMA</a>
                </li>
                <li>PENGADUAN</li>
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
                        <h2>PENGADUAN</h2>
                        <div class="col-lg-12">
                            <div class="contact-form">
                                <form action="<?php echo base_url() . '/layanan/add4' ?>" method="POST">
                                    <div class="row">
                                        <div class="form-control h-auto">
                                            <h5> IDENTITAS PELAPOR</h5>
                                            <hr>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="nama" id="nama" class="form-control" required data-error="Please enter your name" placeholder="Nama Lengkap">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kelamin </label>
                                                    <br>
                                                    <div class="form-control h-auto">
                                                        <input type='radio' name='jenis_kelamin' value='laki-laki' />Laki-laki<br>
                                                        <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan <br>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="alamat" id="alamat" class="form-control" required data-error="Please enter your id" placeholder="Alamat">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanda Pengenal </label>
                                                    <br>
                                                    <div class="form-control h-auto">
                                                        <input type='radio' name='tanda_pengenal' value='ktp' />KTP<br>
                                                        <input type='radio' name='tanda_pengenal' value='sim' />SIM <br>
                                                        <input type='radio' name='tanda_pengenal' value='paspor' />Paspor <br>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="no_tp" id="no_tp" class="form-control" required data-error="Please enter your name" placeholder="Nomor Tanda Pengenal ">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="no_hp" id="no_hp" class="form-control" required data-error="Please enter your id" placeholder="Nomor Telephone">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="faximile" id="faximile" class="form-control" required data-error="Please enter your id" placeholder="Faximile">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="email" id="email" class="form-control" required data-error="Please enter your id" placeholder="Email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-control h-auto">
                                            <h5> IDENTITAS TERLAPOR</h5>
                                            <hr>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Nama Lengkap">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="instansi" id="instansi" class="form-control" required data-error="Please enter your name" placeholder="Instansi">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="alamats" id="alamats" class="form-control" required data-error="Please enter your id" placeholder="Alamat">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" name="no_hpn" id="no_hpn" class="form-control" required data-error="Please enter your id" placeholder="Nomor Telephone">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="faximiles" id="faximiles" class="form-control" required data-error="Please enter your id" placeholder="Faximile">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="emails" id="emails" class="form-control" required data-error="Please enter your id" placeholder="Email">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group h-100">
                                                    <input type="teks" name="kronologi" id="kronologi" class="form-control" required data-error="Please enter your id" placeholder="Kronologi">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" name="waktu" id="waktu" class="form-control" required data-error="Please enter your id" placeholder="Waktu">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="identitas_pelapor">Identitas Pelapor</label>
                                                    <div class="form-control">
                                                        <input type="file" name="identitas_pelapor" id="identitas_pelapor" accept="image/png, image/jpeg, image/jpg, image/gif">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bukti">Dokumen Pendukung</label>
                                                    <div class="form-control">
                                                        <input type="file" name="bukti" id="bukti" accept="image/png, image/jpeg, image/jpg, image/gif">
                                                    </div>
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