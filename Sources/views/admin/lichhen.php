<?php
include('controller/c_admin.php');
$c_admin = new C_admin();
$lichhen = $c_admin->getLich();
?>
<h2 class='text-center mb-2'>Danh sách lịch hẹn</h2>
<table class='table table-hover'>
    <thead>
      <tr>
        <th>Tên</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Thông tin</th>
        <th>Yêu cầu</th>
        <th>Ngày gửi</th>
        <th>Trạng thái</th>
      </tr>
    </thead>   
    <tbody>
    <?php
	foreach($lichhen as $lh){
	?>	
      <tr>
        <td><?=$lh->name?></td>
        <td><?=$lh->phone?></td>
        <td><?=$lh->diachi?></td>
        <td><?=$lh->thongtin?></td>
        <td><?=$lh->yeucau?></td>
        <td><?=$lh->date?></td>
        <td><?=$lh->status?></td>
      </tr>
     <?php
		}
	?> 
    </tbody>
</table>
<div class="btn">
  <button class="btn btn-info">Cập nhật lịch</button>
  <button class="btn btn-danger">Xóa lịch</button>
</div>
