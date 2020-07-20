<?php
function is_logged_in_admin()
{
	$ci = get_instance();
	if ($ci->session->userdata('status') != "login_admin") {
		redirect('backoffice/auth');
	}
}
