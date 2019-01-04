<?php
include('controller/c_admin.php');
$c_admin = new C_admin();
$user = $c_admin->getUser();
?>
<h2 class='text-center mb-2'>Danh sách thành viên</h2>
<table class='table table-hover'>
    <thead>
      <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
      </tr>
    </thead>   
    <tbody>
    <?php
	foreach($user as $us){
	?>	
      <tr>
        <td><?=$us->name?></td>
        <td><?=$us->username?></td>
        <td><?=$us->email?></td>
        <td><?=$us->role?></td>
      </tr>
     <?php
		}
	?> 
    </tbody>
</table>
