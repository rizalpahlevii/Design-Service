<div class="me-top-header">
	<div class="container">
		<div class="me-top-head">
			<div class="me-top-header-left">
				<ul>
					<li>Ikuti Kami :</li>
					<li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="me-top-header-right">
				<ul>
					<li>
						<i class="far fa-envelope-open"></i> redboxmaximum@gmail.com
					</li>
					<li>
						<i class="fas fa-mobile-alt"></i> +6282300120168
					</li>
					<li>
						<a href="javascript:;" data-toggle="modal" data-target="#meLogin">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="me-main-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-7">
				<div class="me-logo">
					<a href="<?= site_url('home') ?>"><img src="<?= base_url('frontend') ?>/images/logo.svg" alt="logo" class="img-fluid" /></a>
				</div>
			</div>
			<div class="col-sm-9 col-5">
				<div class="me-menu">
					<ul>
						<li class="me-menu-children"><a href="<?= site_url('home') ?>" class="me-active-menu">Beranda</a></li>
						<li class="me-menu-children"><a href="javascript:;">Service Kami</a>
							<ul class="me-sub-menu">
								<?php foreach ($this->db->get('kategori')->result() as $row) : ?>
									<li><a href="<?= site_url('service/view/' . $row->id_kategori) ?>"><?= $row->nama_kategori ?></a></li>
								<?php endforeach; ?>
							</ul>
						</li>
						<li><a href="<?= site_url('about') ?>">Tentang Kami</a></li>
						<li><a href="<?= site_url('contact') ?>">Kontak</a></li>
					</ul>
					<div class="me-toggle-nav">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
