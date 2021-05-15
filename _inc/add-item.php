<?php

	// include
	require 'config.php';

	// add new stuff
	$id = $database->insert('items', [
		'text' => $_POST['message']
	]);

	$item_id = $database->id();

	// success?
	if ( ! $id ) die('error');

	if ( is_ajax() )
	{
		header('Content-Type: application/json');

		$message = json_encode([
			'status' => 'success',
			'id' => $item_id
		]);

		die( $message );
	}
	else
	{
		redirect('/');
	}