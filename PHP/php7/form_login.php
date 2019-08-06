<?php
$user = isset($_COOKIE['cUser']) ? $_COOKIE['cUser'] : "";
$pass = isset($_COOKIE['cPass']) ? $_COOKIE['cPass'] : "";
?>
<html>
    <form action="login.php" method="POST">
        <table>
            <tr>
                <td colspan="3"><h1>Thông tin đăng nhập của khách hàng</h1></td>
            </tr>
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" id="username" name="username" value="<?php echo $user;?>"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" id="password" name="password" value="<?php echo $pass;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" id="memorize" name="memorize">Ghi nhớ</td>
            </tr>
            <tr>
                <td><input type="submit" id="login" name="btn_login" value="Đăng nhập"></td>
                <td><input type="reset" id="reset" name="btn_reset" value="Nhập lại"></td>
            </tr>
        </table>
    </form>
    
</html>

