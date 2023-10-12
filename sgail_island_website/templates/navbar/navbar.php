<div id='navbarBox'>
    <div class='logoBox'>
        <a class='arkLogoButton' href="home"><img src='../public/img/ark_society_logo.png'></a>
    </div>

    <div class='rightBox'>
        <div class='buttonBox'>
            <a class='navButton' href='arkSociety'>Ark Society</a>
            <a class='navButton' href='booking'>Booking</a>
            <?php
            if (isset($_SESSION['login'])) {
                $loginStatus = $_SESSION['login'] == True;

                if ($loginStatus) {
                    echo "<a class='loginLogoButton' href='logout'>Logged !</a>"; // if session login var is initialized and logged
                } else {
                    echo "<a class='loginLogoButton' href='login'>Login ?</a>"; // if Session login var is initialized but not logged
                }
            } else {
                echo "<a class='loginLogoButton' href='login'>Login ?</a>"; // if Session login var isn't initialize
            }
            ?>
        </div>
    </div>
</div>

<script type="text/javascript">

    window.onscroll = function() {
        const navbar = document.getElementById("navbarBox")
        if (window.pageYOffset > 0) {
            navbar.classList.add("headerBoxShadow");
        } else {
            navbar.classList.remove("headerBoxShadow");
        }
    };
</script>