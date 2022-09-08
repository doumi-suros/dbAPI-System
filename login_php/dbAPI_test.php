<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="style_css/db_login_220905.css" rel="stylesheet" type="text/css">
        <title>- SUROS DB - login page</title>
    </head>
    <body>
        <div class="bg_frame">
            <span class="login_banner_title">
                <img id="login_logo_suros" src="image/suros_2208A.jpg" />資產報告資料庫
            </span>
            <div class="login_block">
                <h3>Login</h3>
                <form action="用戶管理.php">
                    <input type="text" id="username" name="username" placeholder="帳號 | user email" required />
                    <div class="login_line_space"></div>
                    <input type="text" id="password" name="password" placeholder="密碼 | password" required />
                    <div class="login_line_space"></div>
                    <input type="submit" class="login_submit" value="登　入" onclick="location.href='db_login.php'" />
                </form>
            </div>
            <span id="login_copyright">Copyright © 2022 SUROS Inc. 蘇羅士科技股份有限公司</span>
        </div>
    </body>
</html>

