<div class="modal fade me-login-model" id="meLogin">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<div class="modal-body">
				<h1 class="me-login-title">Login</h1>
				<form method="POST" action="<?= site_url('auth/login') ?>">
					<div class="me-login-form">
						<input type="text" placeholder="Username" name="username" />
						<input type="password" placeholder="Password" name="password" />
						<div class="me-remember">
							<label>Remember Me
								<input type="checkbox">
								<span class="s_checkbox"></span>
							</label>
							<a href="javascript:;" class="me-forgot-password" data-toggle="modal" data-target="#meforgot" data-dismiss="modal" aria-label="Close">Forgot Password ?</a>
						</div>
						<div class="me-login-btn">
							<button class="me-btn" type="submit">Login</button>
							<p>Don't have an account? <a href="javascript:;" data-toggle="modal" data-target="#meSignup" data-dismiss="modal" aria-label="Close">Sign up</a></p>
						</div>
					</div>
				</form>
				<div class="me-login-with-social">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Signup Modal -->
<div class="modal fade me-login-model" id="meSignup">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="close me-team-close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<div class="modal-body">
				<h1 class="me-login-title">Sign Up</h1>
				<form method="POST" action="<?= site_url('auth/register') ?>">
					<div class="me-login-form">
						<input type="text" placeholder="Username" />
						<input type="text" placeholder="Email" />
						<input type="password" placeholder="Password" />
						<input type="password" placeholder="Confirm Password" />

						<div class="me-login-btn">
							<button class="me-btn" type="submit">Sign up</button>
							<p>Already have an account? <a href="javascript:;" data-toggle="modal" data-target="#meLogin" data-dismiss="modal" aria-label="Close">Login</a></p>
						</div>
					</div>
				</form>
				<div class="me-login-with-social">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="me-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="me-footer-block">
					<div class="me-logo">
						<a href="index-three.html"><img src="<?= base_url('frontend') ?>/images/logo.svg" alt="logo" class="img-fluid" /></a>
					</div>
					<ul>
						<li class="me-footer-emial">redboxmaximum@gmail.com</li>
						<li>+6282-30012-0168</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="me-footer-block">
					<h4>Service</h4>
					<ul>
						<li><a href="javascript:;">Logo Design</a></li>
						<li><a href="javascript:;">Social Media Management</a></li>
						<li><a href="javascript:;">Digital Marketing</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="me-footer-block">
					<h4>Tentang Kami</h4>
					<ul>
						<li><a href="javascript:;">Tentang Redbox</a></li>
						<li><a href="javascript:;">Penawaran & Promo</a></li>
						<li><a href="javascript:;">Paket Branding</a></li>
						<li><a href="javascript:;">Karir</a></li>
						<li><a href="javascript:;">Kontak Kami</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="me-footer-block">
					<h4>Alamat</h4>
					<ul>
						<li>Jl. Palagan Tentara Pelajar No.98, Waras, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</li>
					</ul>
					<ul class="me-footer-share">
						<li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Copyright Footer -->
<div class="me-footer-copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="me-copyright-block">
					<p>&copy; 2020 copyright all right reserved by <a href="javascript:;">Redbox</a></p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="me-copyright-block">
				</div>
			</div>
		</div>
	</div>
</div>
