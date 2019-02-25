<?php
include('session.php');
$_SESSION['pageStore'] = "index.php";
if(!isset($_SESSION['login_id'])){
header("location: login.php"); // Redirecting To login
}
echo '<div style="font-size: 35px;">
<strong>Profile</strong>
<br>'
. $session_fullName
. '<br>

<button class="button"> <a href="logout.php">Logout</a></button>
</div>';
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Q&A</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="intro">
			<div class="left stack-image"></div>
			<div class="explanation">
				<h1>Analysis of Website</h1>
				<p>This Website lets you search by topic for most searched  questions on Stack Overflow to help you build your skills. Find most difficult queries for a topic you know about, search quality answers.</p>
				<p>Sometimes, you also need some inspiration. This page also lets you search for the top answerers for a tag. </p>
			</div>
		</div>
		<hr><br><br>
		<div class="stack">
			<h3>QUESTIONS</h3>
			<p>Find top questions by tag. For multiple tags, use a semi-colon to separate.</p>
			<form class="unanswered-getter">
				<input type="text" id="inputTag" placeholder='e.g., "HTML" or "HTML;CSS"' name="tags" size="30" autofocus required>
				<input type="submit" value="Submit" class="button">
			</form><br><br>
			<h3>View the Top Answerers for a Tag</h3>
			<form class="inspiration-getter">
				<input type="text" id="inputTag2" placeholder="eg: DATABASE MANAGEMENT" name="answerers" size="30"  required>
				<input type="submit" value="Submit" class="button">
			</form>
		</div>
		<div class="results-container">
			<div class="search-results"></div>
			<div class="results"></div>
		</div>
	</div>
	<div class="templates hidden">
		<dl class="result question">
			<dt>Question</dt><br>
				<dd class="question-text"><a href="" target="_blank"></a></dd><br>
			<dt>Asked</dt><br>
				<dd class="asked-date"></dd><br>
			<dt>Viewed</dt><br>
				<dd class="viewed"></dd><br>
			<dt>Asker</dt>
				<dd class="asker"></dd>
		</dl>
		<dl class="answerer tag">
			<dt>User</dt><br>
				<dd class="user"><a href="" target="_blank"></a></dd><br>
				<dd class="profile_pic"><img src=""></dd><br>
			<dt>Reputation</dt><br>
				<dd class="reputation"></dd><br>
			<dt>User Type</dt><br>
				<dd class="user_type"></dd><br>
			<dt>Acceptance Rate</dt><br>
				<dd class="acceptance_rate"></dd><br>
			<dt>Score</dt><br>
				<dd class="score"></dd>
		</dl>
		<div class="error">
			<p>Uh-oh! Something went wrong with your request. Here's what we know:</p>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/app.js"></script>
	<script src="build/stackerajax.1.0.0.js"></script>
</body>
</html>
