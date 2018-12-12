<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <!-- The Modal -->
    <div class="modal fade " id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Đăng Nhập</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <form action="" method="post">
                    <label>Tên Đăng Nhập:</label>  
                    <input type="text" name="username" id="username" class="form-control" />  
                    <br />  
                    <label>Mật khẩu:</label>  
                    <input type="password" name="password" id="password" class="form-control" />  
                    <br />  
                    <button type="submit" name="login_button" id="login_button" class="btn btn-dark">Đăng nhập</button>  
                    <button type="submit" name="login_button" id="login_button" class="btn btn-light">Đăng ký</button> 
                  </form>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
        </div>
</body>
</html>