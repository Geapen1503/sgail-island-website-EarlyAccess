<?php
ob_start();
?>
    <link rel="stylesheet" href="../public/css/booking.css">
    <link rel="stylesheet" href="../public/lcss/lbooking.css" media="screen and (max-width: 1000px)">
<?php
$head = ob_get_clean();

ob_start();
?>

<div id="MainBox">
    <div class="backgroundImgBox">
        <img class="background-image" src="../public/img/sgail_opera.jpg">
    </div>

    <div class="introBookingBox">
        <p class="introBookingTitle">Book a room</p>
        <p class="introBookingDescription">On this page you can book a room in Sgail island. The number of room are limited, book fast !</p>
        <a class="introBookingButton" href="#bookingBoxScrollMarker">Book a room</a>
    </div>

    <div class="bookingBox1">
        <span id="bookingBoxScrollMarker"></span>


        <div class="bookingRoomBox">
            <p class="bookingBoxTitle">Our rooms</p>
                <p class="bookingBoxDescription">Here you can choose one of our rooms</p>
                <div class="topBox">
                    <div class="roomBox1">
                        <div class="imgTopRoomBox">
                            <img class="roomImg" src="../public/img/sgail_room1.jpg">
                        </div>

                        <div class="textBottomRoomBox">
                            <p class="roomTitle">Marquise's Room</p>
                            <p class="roomDescription">This room is full of history, the room itself is from middle age. But the room was renovated during renaissance.</p>

                            <div class="pricingBookingBottomBox">
                                <p class="textRoomPrice">5k$/night</p>
                                <a class="roomButton" href="">Book</a>
                            </div>
                        </div>
                    </div>

                    <div class="roomBox2">
                        <div class="imgTopRoomBox">
                            <img class="roomImg" src="../public/img/sgail_room2.jpg">
                        </div>

                        <div class="textBottomRoomBox">
                            <p class="roomTitle">Charles I Room</p>
                            <p class="roomDescription">This room as been used by many president. Historically the room was for Charles I, you will like it especially if you like Charles I.</p>

                            <div class="pricingBookingBottomBox">
                                <p class="textRoomPrice">11k$/night</p>
                                <a class="roomButton" href="">Book</a>
                            </div>
                        </div>
                    </div>

                    <div class="roomBox3">
                        <div class="imgTopRoomBox">
                            <img class="roomImg" src="../public/img/sgail_room3.jpg">
                        </div>

                        <div class="textBottomRoomBox">
                            <p class="roomTitle">Relaxation Room</p>
                            <p class="roomDescription">If you want calm and luxury, this room is perfect for you. This room is located in the back of the castle, so it's very calm.</p>

                            <div class="pricingBookingBottomBox">
                                <p class="textRoomPrice">4.3k$/night</p>
                                <a class="roomButton" href="">Book</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>



    <div class="bookingBox2">
        <div class="bookingRoomBox">
            <div class="topBox">
                <div class="roomBox4">
                    <div class="imgTopRoomBox">
                        <img class="roomImg" src="../public/img/sgail_room4.jpg">
                    </div>

                    <div class="textBottomRoomBox">
                        <p class="roomTitle">Painting Room</p>
                        <p class="roomDescription">This room is pretty famous in the castle because there is a lot of well known painting in it. The castle have a lot of piece of art.</p>

                        <div class="pricingBookingBottomBox">
                            <p class="textRoomPrice">21k$/night</p>
                            <a class="roomButton" href="">Book</a>
                        </div>
                    </div>
                </div>

                <div class="roomBox5">
                    <div class="imgTopRoomBox">
                        <img class="roomImg" src="../public/img/sgail_room5.jpg">
                    </div>

                    <div class="textBottomRoomBox">
                        <p class="roomTitle">Sculpture Room</p>
                        <p class="roomDescription">This room is also famous in the castle because there is a lot of sculpture in it. If you go in this room you can see many famous sculptures.</p>

                        <div class="pricingBookingBottomBox">
                            <p class="textRoomPrice">17k$/night</p>
                            <a class="roomButton" href="">Book</a>
                        </div>
                    </div>
                </div>

                <div class="roomBox6">
                    <div class="imgTopRoomBox">
                        <img class="roomImg" src="../public/img/sgail_dungeon_1.jpg">
                    </div>

                    <div class="textBottomRoomBox">
                        <p class="roomTitle">Dungeon Room</p>
                        <p class="roomDescription">This room was one of the dungeons of the castle, but we transform it in a beautiful bedroom. It's more modern than the others.</p>

                        <div class="pricingBookingBottomBox">
                            <p class="textRoomPrice">6.7k$/night</p>
                            <a class="roomButton" href="">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();