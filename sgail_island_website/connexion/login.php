<?php
global $conn;
ob_start();
?>
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="stylesheet" href="../public/lcss/llogin.css" media="screen and (max-width: 1000px)">
<?php
$head = ob_get_clean();

ob_start();
?>


<div id="MainBox">
    <div class="backgroundImgBox">
        <img class="background-image" src="../public/img/sgail_entrance.jpg">
    </div>

    <div class="loginBox">
        <form class="loginForm" method="post" action="">
            <p class="loginTitle">Login</p>
            <input class="loginInput" name="email" type="email" placeholder="Email...">
            <input class="loginInput" name="password" type="password" placeholder="Password...">
            <button id="loginSubmitButton" name="loginSubmitButton" type="submit">Submit</button>
        </form>
        <?php
        if (isset($_POST['loginSubmitButton'])) {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $stmt = $conn->prepare('SELECT * FROM users WHERE email = ?');
            $stmt->bind_param("s", $email);
            $stmt->execute();

            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            if (mysqli_num_rows($result) > 0) {
                if ($password == $row['password']){
                    $_SESSION['email'] = $email;
                    $_SESSION["login"] = True;
                    $_SESSION["id"] = $row["id"];
                    echo "<p class='loginInfoText'>You're logged !</p>";
                } else {
                    echo "<p class='loginInfoText'>Wrong password, try again</p>";
                }
            } else {
                echo "<p class='loginInfoText'>User is not registered, please register first !</p>";
            }
        }
        ?>
        <a class="registerButton" href="register">Don't have an account ? Sign up !</a>
    </div>
</div>


<?php
$content = ob_get_clean();