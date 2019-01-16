<?php
include('controller/c_admin.php');
$c_admin = new C_admin();
$dichvu = $c_admin->getdichvu();
?>
<h2 class='text-center mb-2'>Danh sách dịch vụ</h2>
<table class='table table-hover'>
    <thead>
      <tr>
        <th>Tên dịch vụ</th>
        <th>Mô tả dịch vụ</th>
        <th>Giá</th>
        <th>Hình</th>
      </tr>
    </thead>   
    <tbody>
    <?php
	foreach($dichvu as $dv){
	?>	
      <tr>
        <td><?=$dv->Tendv?></td>
        <td><?=$dv->MoTa?></td>
        <td><?=$dv->Gia?></td>
        <td><?=$dv->Hinh?></td>
      </tr>
     <?php
		}
	?> 
    </tbody>
</table>
<div class="btn">
  <button class="btn btn-success">Thêm dịch vụ</button>
  <button class="btn btn-info">Cập nhật dịch vụ</button>
  <button class="btn btn-danger">Xóa dịch vụ</button>
</div>
