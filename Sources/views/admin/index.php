<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style type="text/css" media="screen">
	
	</style>
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Admin</a>
  <ul class="navbar-nav ml-auto ">
  	<li class="nav-item">
  		<a href="" class="nav-link text-white">Log out</a>
  	</li>
  </ul>
</nav>
<div class="row" style="margin-right:0;">
	<div class="col-3" >
		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action ">Home</a>
			<a href="#" class="list-group-item list-group-item-action ">Quản lý thành viên</a>
			<a href="#" class="list-group-item list-group-item-action ">Quản lý dịch vụ</a>
			<a href="#" class="list-group-item list-group-item-action ">Quản lý bài viết</a>
			<a href="#" class="list-group-item list-group-item-action ">Thống kê</a>
		</div>
	</div>
	<div class="col-8">
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Firstname</th>
		        <th>Lastname</th>
		        <th>Email</th>
		      </tr>
		    </thead>
		    <tbody id="myTable">
		      <tr>
		        <td>John</td>
		        <td>Doe</td>
		        <td>john@example.com</td>
		      </tr>
		      <tr>
		        <td>Mary</td>
		        <td>Moe</td>
		        <td>mary@mail.com</td>
		      </tr>
		      <tr>
		        <td>July</td>
		        <td>Dooley</td>
		        <td>july@greatstuff.com</td>
		      </tr>
		      <tr>
		        <td>Anja</td>
		        <td>Ravendale</td>
		        <td>a_r@test.com</td>
		      </tr>
		    </tbody>
 		 </table>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>