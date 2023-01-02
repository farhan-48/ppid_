<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/navbar.php'); ?>
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>PENGAJUAN KEBERATAN</h3>
            <ul>
                <li>
                    <a href="<?php echo base_url('Halaman_utama') ?>">HALAMAN UTAMA</a>
                </li>
                <li>PERNYATAAN KEBERATAN ATAS PENGAJUAN INFORMASI</li>
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
                        <h2>PERNYATAAN KEBERATAN ATAS PENGAJUAN INFORMASI</h2>
                        <div class="col-lg-12">
                            <div class="contact-form">
                                <form action="<?php echo base_url() . '/layanan/add3' ?>" method="POST">
                                    <div class="row">
                                        <div class="form-control h-auto">
                                            <h5> A. INFORMASI PENGUJI KEBERATAN</h5>
                                            <hr>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="number" name="no_regiskeberatan" id="no_regiskeberatan" class="form-control" required data-error="Please enter your name" placeholder="Nomor Registrasi Keberatan ">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="number" name="no_pendaftaran" id="no_pendaftaran" class="form-control" required data-error="Please enter your id" placeholder="Nomor Pendaftaran Permohonan Informasi">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="tujuan_pengguna" id="tujuan_pengguna" class="form-control" required data-error="Please enter your id" placeholder="Tujuan Penggunaan Informasi Identitas Pemohon">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-control h-auto">
                                            <h5> Identitas Pemohon</h5>
                                            <hr>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="nama" id="nama" class="form-control" required data-error="Please enter your name" placeholder="Nama Lengkap">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="alamat" id="alamat" class="form-control" required data-error="Please enter your id" placeholder="Alamat">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" required data-error="Please enter your id" placeholder="Pekerjaan">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="no_hp" id="no_hp" class="form-control" required data-error="Please enter your id" placeholder="Nomor Telephone">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-control h-auto">
                                            <h5> Identitas Kuasa Pemohon</h5>
                                            <hr>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Nama Lengkap">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="alamats" id="alamats" class="form-control" required data-error="Please enter your id" placeholder="Alamat">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="no_hpn" id="no_hpn" class="form-control" required data-error="Please enter your id" placeholder="Nomor Telephone">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12"><br>
                                            <div class="form-group">
                                                <label>Alasan Pengajuan Keberatan </label>
                                                <hr>
                                                <div class="form-control h-auto">
                                                    <input type='radio' name='cara_info' value='Permohonan Informasi ditolak' /> Permohonan Informasi ditolak <br>
                                                    <input type='radio' name='cara_info' value='Informasi berkala tidak disediakan' /> Informasi berkala tidak disediakan <br>
                                                    <input type='radio' name='cara_info' value='Permintaan informasi tidak ditanggapi' /> Permintaan informasi tidak ditanggapi <br>
                                                    <input type='radio' name='cara_info' value='Permintaan informasi ditanggapi tidak sebagaimana yang diminta' /> Permintaan informasi ditanggapi tidak sebagaimana yang diminta <br>
                                                    <input type='radio' name='cara_info' value='Permintaan informasi tidak dipenuhi' /> Permintaan informasi tidak dipenuhi <br />
                                                    <input type='radio' name='cara_info' value='Biaya yang dikenakan tidak wajar' /> Biaya yang dikenakan tidak wajar <br>
                                                    <input type='radio' name='cara_info' value='Informasi disampaikan melebihi jangka waktu yang ditentukan' /> Informasi disampaikan melebihi jangka waktu yang ditentukan <br />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-control h-100">
                                            <h5> Kasus Posisi</h5>
                                            <hr>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="kasus" id="kasus" class="form-control" required data-error="Please enter your name" placeholder="Tulis Kasus Posisi ...">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
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