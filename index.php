<?php



if (isset($_POST["submit"])) {


$user_name = $_POST["name"];
$enter_date = $_POST["date"];
$user_comment = $_POST["comment"];

//new post
// $new_post = ;

//colleting user data
$user_info = fopen("chat.txt", "a") or die("Unable to open file.");
$txt = $user_name . "--" .  $enter_date . "--" . $user_comment . "\n";
$chat_info = explode("--", $txt);
fwrite($user_info, $txt);
fclose($user_info);

print_r($_POST);


}



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Chat</title>
</head>
<body>
	<div class="container">
		<form action="index.php" method="post" id="user_info">
			<div class="form-group">
				<label for="exampleFormControlInput1">Name</label>
				<input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jonas">
			</div>

			<div class="form-group">
				<label for="exampleFormControlInput1">Date</label>
				<input name="date" type="text" class="form-control" id="exampleFormControlInput1" placeholder="2018-11-06">
			</div>

			<div class="form-group">
				<label for="exampleFormControlTextarea1">Your comment</label>
				<textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>

			<button type="submit" name="submit" class="btn btn-primary mb-2">Post comment</button>
		</form>

		<hr />
		
		<div class="row">
			<?php ?>
		</div>

	</div>

	

</body>
</html>