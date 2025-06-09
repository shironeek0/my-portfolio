<!DOCTYPE html>
<html>
<body>
<pre>

<?php
// Array with data for each artist profile
$artists = [
    [
        "name" => "Catherine Diocales",
        "img" => "img/diocales/icon.jpg",
        "profile_url" => "https://www.instagram.com/sushie.artz?igsh=eThreWI0dzlzZGo5",
        "description" => "An experimental render drawing test art that I drew out of nowhere between two coupled people",
        "art_img" => "img/diocales/1.png"
    ],
    // You can add more artists here
    [
        "name" => "John Doe",
        "img" => "img/john/icon.jpg",
        "profile_url" => "https://www.instagram.com/johndoe?igsh=example",
        "description" => "A surreal depiction of the natural world in digital art.",
        "art_img" => "img/john/1.png"
    ]
];

foreach ($artists as $artist) {
    ?>
    <div class="pfp_border">
        <div class="pfp">
            <img src="<?php echo $artist['img']; ?>" width="60px">
            <h2><?php echo $artist['name']; ?></h2>
            <a href="<?php echo $artist['profile_url']; ?>" id="view">View Artist Profile</a>
        </div>
        <br>

        <p><?php echo $artist['description']; ?></p>
        <img id="myimg" class="myimages" src="<?php echo $artist['art_img']; ?>">
        <br>

        <!-- Modal 1 -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div>
    </div>
    <?php
}
?>


</pre>
</body>
</html>
