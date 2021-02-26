<?php

function is_logged_in()
{
	$isLoggedIn = get_instance();
	if (!$isLoggedIn->session->userdata('email')) {
		redirect('login');
	}
}

function must_admin()
{
	$isAdmin = get_instance();
	if (!$isAdmin->session->userdata('role') == 'admin') {
		redirect(base_url());
	}
}
