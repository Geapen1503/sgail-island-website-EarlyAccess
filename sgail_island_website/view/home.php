<?php
ob_start();
?>
    <link rel="stylesheet" href="../public/css/home.css">
    <link rel="stylesheet" href="../public/lcss/lhome.css" media="screen and (max-width: 1000px)">
<?php
$head = ob_get_clean();

ob_start();
?>

    <div id="MainBox">
        <div class="backgroundImgBox">
            <img class="background-image" src="../public/img/sgail_island_background.jpg">
        </div>

        <div class="arkIntroBox">
            <p class="arkTitle">The Ark</p>
            <p class="arkDescription">“Luxury Redefined, Hidden from the Masses“</p>
            <a class="arkJoinButton" href="">Join us</a>
        </div>

        <div class="arkIntroductionBox">
            <div class="arkActivityBox">
                <p class="activityTitle">Activities in The Ark</p>
                    <p class="activityDescription">“All the things you need are here“</p>
                        <div class="arkActivityElementBox">

                            <div class="arkActivityElementBoxTop">
                                <div class="arkBarBox">
                                    <img class="arkBarImg" src="../public/img/sgail_bar.jpg">
                                    <p class="arkBarText">5 bars</p>
                                </div>
                                <div class="arkArchitectBox">
                                    <img class="arkArchitectImg" src="../public/img/sgail_concept_room.jpg">
                                    <p class="arkArchitectText">Concept Room</p>
                                </div>
                                <div class="arkMuseumBox">
                                    <img class="arkMuseumImg" src="../public/img/sgail_museum.jpg">
                                    <p class="arkMuseumText">Museum</p>
                                </div>
                            </div>

                            <div class="arkActivityElementBoxBottom">
                                <div class="arkPhoenixBox">
                                    <img class="arkPhoenixImg" src="../public/img/sgail_phoenix.jpg">
                                    <p class="arkPhoenixText">Pyrotechnic<br>Phoenix</p>
                                </div>
                                <div class="arkRooftopBox">
                                    <img class="arkRooftopImg" src="../public/img/sgail_rooftop.png">
                                    <p class="arkRooftopText">Historical<br>RoofTop</p>
                                </div>
                                <div class="arkHeliportBox">
                                    <img class="arkHeliportImg" src="../public/img/sgail_second_heliport.jpg">
                                    <p class="arkHeliportText">3 Heliports</p>
                                </div>
                            </div>

                        </div>
            </div>
        </div>

        <div class="arkBookingBox">
            <div class="arkBookIntroBox">
                <p class="bookingTitle">Book a room</p>
                <p class="bookingDescription">“A Realm of Luxury, book your retreat“</p>

                <div class="diaporamaBox">
                    <!--image slider start-->
                    <div class="slider">
                        <div class="slides">
                            <!--radio buttons start-->
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">
                            <!--radio buttons end-->
                            <!--slide images start-->
                            <div class="slide first">
                                <img src="../public/img/sgail_room1.jpg" alt="">
                            </div>
                            <div class="slide">
                                <img src="../public/img/sgail_room2.jpg" alt="">
                            </div>
                            <div class="slide">
                                <img src="../public/img/sgail_room3.jpg" alt="">
                            </div>
                            <div class="slide">
                                <img src="../public/img/sgail_room4.jpg" alt="">
                            </div>
                            <!--slide images end-->
                            <!--automatic navigation start-->
                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>
                            </div>
                            <!--automatic navigation end-->
                        </div>
                        <!--manual navigation start-->
                        <div class="navigation-manual">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                            <label for="radio4" class="manual-btn"></label>
                        </div>
                        <!--manual navigation end-->
                    </div>
                    <!--image slider end-->

                    <script type="text/javascript">
                        var counter = 1;
                        setInterval(function(){
                            document.getElementById('radio' + counter).checked = true;
                            counter++;
                            if(counter > 4){
                                counter = 1;
                            }
                        }, 5000);
                    </script>
                </div>

                <a class="arkBookingButton" href="">Book a room</a>
            </div>
        </div>

        <div class="coinHuntBackgroundBox">
            <img class="coinHuntBackgroundImg" src="../public/img/sgail_dungeon_1.jpg">
        </div>
        <div class="coinHuntIntroBox">
            <p class="coinHuntTitle">“Become an Ark member“</p>
            <p class="coinHuntDescription">
                Once in a year the ark offer you a chance to become an ark member. To become an ark member, you have to earn it. You have to found 10 commemorative coins, and bring them to Miss Washington in the dungeon.
            </p>
        </div>
    </div>

<?php
$content = ob_get_clean();