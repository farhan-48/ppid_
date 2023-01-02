<div class="navbar-area">

	<div class="mobile-nav">
		<a href="" class="logo">
			<img src="<?php echo base_url(); ?>assets/admin/img/icon/logo.png" class="logo-one" alt="Logo">
			<img src="<?php echo base_url(); ?>assets/admin/img/icon/RSP.png" class="logo-two" style="width: 30%; height: 30%">
		</a>
	</div>

	<div class="main-nav">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light ">
				<a class="navbar-brand" href="<?php echo base_url('Halaman_utama') ?>">
					<img src="<?php echo base_url(); ?>assets/admin/img/icon/logo.png" class="logo-one" style="width: 30%; height: 20%"><br><br>
					<img src="<?php echo base_url(); ?>assets/admin/img/icon/RSP.png" class="logo-two" style="width: 40%; height: 40%">
				</a>
				<br>
				<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
					<ul class="navbar-nav m-auto">
						<li class="nav-item">
							<a href="<?php echo base_url(). 'web/index' ?>" class="nav-link active">
								Halaman Utama
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(). 'profil/profil_ppid' ?>" class="nav-link">
								Profil
								<i class='bx bx-chevron-down'></i>
							</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/index' ?>" class="nav-link">
										Kelembagaan
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_pedum' ?>" class="nav-link">
										Pedum PPID
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_ppid' ?>" class="nav-link">
										Profil PPID
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_visimisi' ?>" class="nav-link">
										Visi Misi PPID
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_sk' ?>" class="nav-link">
										SK PPID
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_tupoksi' ?>" class="nav-link">
										Tupoksi PPID
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_maklumat' ?>" class="nav-link">
										Maklumat
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_soplayanan' ?>" class="nav-link">
										SOP Layanan Informasi
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_soppengajuan' ?>" class="nav-link">
										SOP Pengajuan Keberatan
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_struktur' ?>" class="nav-link">
										Struktur PPID
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'profil/profil_regulasi' ?>" class="nav-link">
										Regulasi
									</a>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Layanan_informasi_permohonan_informasi') ?>" class="nav-link">
								Layanan Informasi
								<i class='bx bx-chevron-down'></i>
							</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a href="<?php echo base_url(). 'layanan/layanan_permohonan' ?>" class="nav-link">
										Permohonan Informasi
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'layanan/layanan_perorangan' ?>" class="nav-link">
										Pengajuan Permohonan Informasi
										<i class='bx bx-chevron-down'></i>
									</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="<?php echo base_url(). 'layanan/layanan_perorangan' ?>" class="nav-link">
												Pengajuan Permohonan Informasi Perorangan
											</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo base_url(). 'layanan/layanan_lembaga' ?>" class="nav-link">
												Pengajuan Permohonan Informasi Lembaga
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'layanan/layanan_keberatan' ?>" class="nav-link">
										Pengajuan Keberatan
										<i class='bx bx-chevron-down'></i>
									</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="<?php echo base_url(). 'layanan/layanan_keberatan' ?>" class="nav-link">
												Pernyataan Keberatan Atas Pengajuan Informasi
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Layanan_informasi_mekanisme') ?>" class="nav-link">
										Mekanisme/Proses
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(). 'layanan/layanan_pengaduan' ?>" class="nav-link">
										Pengaduan
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('Daftar_informasi_informasi_berkala') ?>" class="nav-link">
								Daftar Informasi
								<i class='bx bx-chevron-down'></i>
							</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a href="<?php echo base_url('Daftar_informasi_informasi_berkala') ?>" class="nav-link">
										Informasi Berkala
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Daftar_informasi_informasi_sertamerta') ?>" class="nav-link">
										Informasi Serta Merta
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Daftar_informasi_informasi_setiapsaat') ?>" class="nav-link">
										Informasi Setiap Saat
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Daftar_informasi_laporan_akses_informasi') ?>" class="nav-link">
										Laporan Akses Informasi
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url('Daftar_informasi_informasi_publik_yangdikecualikan') ?>" class="nav-link">
										Informasi Publik Yang Dikecualikan
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="others-options d-flex align-items-center">
						<div class="option-item">
							<i class='search-btn bx bx-search'></i>
							<i class='close-btn bx bx-x'></i>
							<div class="search-overlay search-popup">
								<div class='search-box'>
									<form class="search-form">
										<input class="search-input" name="search" placeholder="Search" type="text">
										<button class="search-button" type="submit">
											<i class="bx bx-search"></i>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>


	<div class="side-nav-responsive">
		<div class="container">
			<div class="dot-menu">
				<div class="circle-inner">
					<div class="circle circle-one"></div>
					<div class="circle circle-two"></div>
					<div class="circle circle-three"></div>
				</div>
			</div>
			<div class="container">
				<div class="side-nav-inner">
					<div class="side-nav justify-content-center align-items-center">
						<div class="side-item">
							<div class="option-item">
								<i class='search-btn bx bx-search'></i>
								<i class='close-btn bx bx-x'></i>
								<div class="search-overlay search-popup">
									<div class='search-box'>
										<form class="search-form">
											<input class="search-input" name="search" placeholder="Search" type="text">
											<button class="search-button" type="submit">
												<i class="bx bx-search"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
							<div class="option-item">
								<div class="add-cart-btn">
									<a href="#" class="cart-btn-icon">
										<i class='bx bx-shopping-bag'></i>
										<span>0</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>