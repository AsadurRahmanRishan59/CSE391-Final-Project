<?php 
	session_start(); 
	if(!isset($_SESSION['user'])){
		message("Login before you play a song.","info");
		header("Location: login.php");
		die();
	}

	include 'files/functions.php';
	// require_once("files/header.php"); 

	$user_id = $_SESSION['user']['user_id'];
	$song_id = $_GET['song'];
	record_dowload($conn,$song_id,$user_id);

	$song = $_GET['song'];
	$s = get_top_song_by_song_id($conn,$song);

	header("Content-type: application/mp3");
	header("Content-Disposition: attachment; filename=".$s['song_name'].".mp3");
	header('Pragma: no-cache');
	header('Expires: 0');
	//So the browser can display the download progress
	readfile('uploads/'.$s['song_mp3']);
	exit;
?>
