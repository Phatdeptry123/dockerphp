<?php
function signupController()
{
    if (isset($_POST['signupSubmit']) && ($_POST['signupSubmit'])) {
        $account   = $_POST['account'];
        $password   = $_POST['password'];
        $ten_user   = $_POST['ten_user'];
        if (!$account || !$password || !$ten_user)
        {
            echo "<h1> Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a> </h1>";
            exit;
        }
        $user = check_account($account);
        if ($user) {
            echo "<h1> Tài khoản đã tồn tại. <a href='javascript: history.go(-1)'>Trở lại</a> </h1>";
            exit;
        }
        $password = md5($password);
        // echo $account, $password, $ten_user;
        insert_user($account, $password, $ten_user);
        header('Location: /?act=login');
        $thongbao = "them thanh cong";
    }
    include "../app/Views/auth/signup.php";
}
function loginController()
{
    if (isset($_POST['loginSubmit'])){
        $account = $_POST['account'];
        $password = $_POST['password'];
        if (!$account || !$password) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $password = md5($password);
        $user = check_user($account, $password);
        if ($user) {
            $_SESSION['user'] = $user;
            // echo $user['ten_user'];
            header('Location: /');
        } else {
            // echo $user['ten_user'];
            echo "Sai tên đăng nhập hoặc mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
    }
    include "../app/Views/auth/login.php";
}