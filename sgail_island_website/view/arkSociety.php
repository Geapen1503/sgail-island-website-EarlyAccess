<?php
ob_start();
?>
<link rel="stylesheet" href="../public/css/arkSociety.css">
<link rel="stylesheet" href="../public/lcss/larkSociety.css" media="screen and (max-width: 1000px)">
<?php
$head = ob_get_clean();

ob_start();
?>


<div id="MainBox">
    <div class="backgroundImgBox">
        <img class="background-image" src="../public/img/sgail_island_background_2.jpg">
    </div>

    <div class="aboutArkBox">
        <p class="aboutArkTitle">
            What's Ark Society ?
        </p>

        <p class="aboutArkDescription">
            The Ark was founded in 1991 by Mr Janus. The Ark Society is a group of rich and powerful people that's preparing for a global economic crisis. Once a year, they meet up on Sgail Island. The island is kind of a hotel, you can book a room on the island and join them. Once a year, during this party, you can become an Ark member if you find 10 commemorative coins hidden on the island.
        </p>
    </div>
</div>


<?php
$content = ob_get_clean();