<?php
global $conn;
ob_start();
?>
    <link rel="stylesheet" href="../public/css/register.css">
    <link rel="stylesheet" href="../public/lcss/lregister.css" media="screen and (max-width: 1000px)">
<?php
$head = ob_get_clean();

ob_start();
?>


<div id="MainBox">
    <div class="backgroundImgBox">
        <img class="background-image" src="../public/img/sgail_entrance.jpg">
    </div>

    <div class="registerBox">
        <form class="registerForm" method="post" action="">
            <p class="registerTitle">Register</p>
            <input class="registerInput" name="email" type="email" placeholder="E-mail...">
            <input class="registerInput" name="password" type="password" placeholder="Password...">
            <input class="registerInput" name="confirmPassword" type="password" placeholder="Confirm Password...">
            <button id="submitRegisterButton" name="submitRegisterButton" type="submit">Submit</button>
        </form>
        <?php
            if (isset($_POST['submitRegisterButton'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];

                $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

                if (mysqli_num_rows($duplicate) > 0) {
                    echo "<p class='registerInfoText'>This email is already taken</p>";
                } else {
                    if ($password == $confirmPassword) {
                        $query = "INSERT INTO users (email, password) VALUES (?, ?)";
                        $stmt = mysqli_prepare($conn, $query);
                        mysqli_stmt_bind_param($stmt, "ss", $email, $password);

                        if (mysqli_stmt_execute($stmt)) {
                            echo "<p class='registerInfoText'>Registration Success, you can now login !</p>";
                        } else {
                            echo "Error : " . mysqli_error($conn);
                        }

                        mysqli_stmt_close($stmt);

                    } else {
                        echo "<p class='registerInfoText'>Password Confirm does not match !</p>";
                    }
                }
            }
        ?>
    </div>
</div>


<?php
$content = ob_get_clean();