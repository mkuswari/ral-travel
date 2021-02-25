<?php

function mustLogin()
{
	$isLoggedIn = get_instance();
	if (!$isLoggedIn->session->userdata('email')) {
		redirect('auth');
	}
}

function mustAdmin()
{
	$isAdmin = get_instance();
	if (!$isAdmin->session->userdata('role' == 'admin')) {
		redirect('blocked');
	}
}
