<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtUsername'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('connect.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    $fullname   = addslashes($_POST['txtFullname']);
    $birthday   = addslashes($_POST['txtBirthday']);
    $sex        = addslashes($_POST['txtSex']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex)
    {
        echo "Please enter full information. <a href='javascript: history.go(-1)'>eturn</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT username FROM member WHERE username='$username'")) > 0){
        echo "This username already has a user. Please choose another username. <a href='javascript: history.go(-1)'>Return</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
    if(!preg_match($regex, $email)) { 
        echo "Suitable email address"; 
    } 
    else { 
        echo "Email is not correct"; 
    } 
          
    //Kiểm tra email đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT email FROM member WHERE email='$email'")) > 0)
    {
        echo "This email already has a user. Please choose another Email. <a href='javascript: history.go(-1)'>Return</a>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    if (preg_match("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday))
    {
            echo "Invalid date of birth. Please re-enter. <a href='javascript: history.go(-1)'>Return</a>";
            exit;
        }
          
    //Lưu thông tin thành viên vào bảng
    @$addmember = mysql_query("
        INSERT INTO member (
            username,
            password,
            email,
            fullname,
            birthday,
            sex
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$fullname}',
            '{$birthday}',
            '{$sex}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Successful registration process. <a href='/'>Return homepage</a>";
    else
        echo "An error occurred during registration. <a href='Register.php'>Retry</a>";
?>