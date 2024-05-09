<h1>Trang đăng ký thành viên</h1>
        <form action="index.php?act=signup" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input type="text" name="account" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="password" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input type="text" name="ten_user" size="50" />
                    </td>
                </tr>
            </table>
            <input type="submit" name="signupSubmit" value="Đăng ký" />
        </form>