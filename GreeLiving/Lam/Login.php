<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <center>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="post" action="process.php">
            <?php session_start(); ?>
            <div class="input-group">
                <label>UserId</label>
                <input type="text" name="id" required>
                </div>
                <p>Login type :</p>
                <div>
                    <input type="radio" id="business" name="type" value="business" checked />
                    <label for="business">Business</label>
                </div>

                <div>
                    <input type="radio" id="user" name="type" value="user" />
                    <label for="user">User</label>
                </div>
                <?php
                if (isset($_SESSION['error'])) {
                    echo '<p style="color:red;">' . "Wrong information" . '</p>';
                }
                ?>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <button type="reset" class="cancelbtn" value= reset >Cancel</button><br>

            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <span class="psw">Forgot <a href="#">id?</a></span>
            </div>
        </form>
    </center>
</body>

</html>
