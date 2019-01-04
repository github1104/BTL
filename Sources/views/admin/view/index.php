
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Admin</a>
  <ul class="navbar-nav ml-auto ">
  	<li class="nav-item">
  		<a href="logout.php" class="nav-link text-white" >Log out</a>
  	</li>
  </ul>
</nav>
<div class="row" style="margin-right:0;">
	<div class="col-3" >
		<div class="list-group">
			<a href="index.php" class="list-group-item list-group-item-action " id="home">Home</a>
			<a href="#" class="list-group-item list-group-item-action " id="user">Quản lý thành viên</a>
			<a href="#" class="list-group-item list-group-item-action " id="lichhen">Lịch hẹn</a>
			<a href="#" class="list-group-item list-group-item-action ">Quản lý dịch vụ</a>
			<a href="#" class="list-group-item list-group-item-action ">Quản lý bài viết</a>
			<a href="#" class="list-group-item list-group-item-action ">Thống kê</a>
		</div>
	</div>
	<div class="col-8" id="div">
		<h2 class='text-center mb-2'>Home</h2>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
//ajax
$(document).ready(function(){
	$("#user").click(()=>{
		$("#div").load("getUser.php");
	});
	$("#lichhen").click(()=>{
		$("#div").load("lichhen.php");
	});
})
</script>
</body>
</html>