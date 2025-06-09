<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@0;1&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wdth,wght@101,404&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>portfolio</title>
</head>

<body>
    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <img src="img/logo.png" alt="logo" width="170">
            </div>
        </div>
    </div>

    <div class="container">
        <br>
        <div class="fa">
        <h1>#Featured Artist</h1>
        <img src="img/inojosa/2.jpg" id="featured_art" alt="Featured Art"></div>

        <div class="featured-profile">
            <img src="img/inojosa/icon.png" alt="Artist Profile">
            <div>
                <h2>Vhans Vinsell Inojosa</h2>
                <a href="https://vhansue.wordpress.com/gallery/https://vhansue.wordpress.com/gallery/" class="profile-button">View Artist Profile</a>
            </div>
        </div>

        <br>
        <br>



        <?php
$artists = [
    [
        "name" => "Catherine Diocales",
        "img" => "img/diocales/icon.jpg",
        "profile_url" => "https://www.instagram.com/sushie.artz?igsh=eThreWI0dzlzZGo5",
        "description" => "An experimental render drawing test art that I drew out of nowhere between two coupled people.",
        "art_img" => "img/diocales/1.png"
    ],
    [
        "name" => "Yngwie Comin",
        "img" => "img/comin/icon.jpg",
        "profile_url" => "https://www.facebook.com/yngwie.comin.1",
        "description" => "The GAR slang term with the use of graffiti theme.",
        "art_img" => "img/comin/1.png"
    ],
    [
        "name" => "Cedric Llagas",
        "img" => "img/llagas/icon.jpg",
        "profile_url" => "https://www.facebook.com/share/19AMqZUAok/",
        "description" => "Sidhing Edad - Pagsusumikap kahit sa hirap ang siyang tungkod para sa buhay na mahaharap.",
        "art_img" => "img/llagas/1.jpg"
    ],
    [
        "name" => "Jamie Pavon",
        "img" => "img/pavon/icon.jpg",
        "profile_url" => "https://framesbyjl.my.canva.site/",
        "description" => "Designed this sleek and elegant business card for my uncle’s boutique hotel, El Coco. The gold
                accents and modern layout reflect the luxury and sophistication of the brand. A rewarding commission
                that truly showcases the hotel’s identity.",
        "art_img" => "img/pavon/1.png"
    ],
    [
        "name" => "Marcus Dirk Baronia",
        "img" => "img/baronia/icon.jpg",
        "profile_url" => "https://www.facebook.com/share/18zwQB89ZP/",
        "description" => "Hi there! I'm Marcus Dirk Sebastian Baronia, a photographer, adventurer, and eternal optimist.
                I believe that life is a beautiful journey, and through my lens, I capture moments that tell stories,
                evoke emotions, and celebrate the world’s wonders.
                Whether I'm exploring new places or simply soaking in the beauty of the everyday,
                I'm always chasing light and happiness.",
        "art_img" => "img/baronia/1.jpg"
    ],
    [
        "name" => "Daniebelle Danez",
        "img" => "img/danez/icon.jpg",
        "profile_url" => "https://mgaimahemulakaydanie.my.canva.site/",
        "description" => "Always hold it high, look at the world straight in the eye.",
        "art_img" => "img/danez/1.jpg"
    ],
    [
        "name" => "Alia Burilla",
        "img" => "img/burilla/icon.jpg",
        "profile_url" => "https://aliaburilla1234.wixsite.com/my-site-3/artists",
        "description" => "Each portrait is custom-made, ensuring that every brushstroke
                reflects the essence of your beloved companion.",
        "art_img" => "img/burilla/1.jpg"
    ],
    [
        "name" => "Gabriel Guinto",
        "img" => "img/guinto/icon.jpg",
        "profile_url" => "https://www.facebook.com/share/18czozcsnr/",
        "description" => "Echoes of divinity
                Step into a sacred perspective where sanctity meets.
                Where golden-lit saints stand in silent reverence as they whisper oaths on prayers,
                divinity, healing, faith, and devotions. Where people arise and hope as this echoes of soul reflects,
                wonders, and belives through with it.",
        "art_img" => "img/guinto/1.jpg"
    ],
    [
        "name" => "Irish Mei Alvarado",
        "img" => "img/alvarado/icon.jpg",
        "profile_url" => "https://vgen.co/shibakiba/portfolio",
        "description" => "antimatter
                the hole in your heart grows with every passing moment . . .",
        "art_img" => "img/alvarado/1.PNG"
    ],
    [
        "name" => "Djan Ryle Ingente",
        "img" => "img/ingente/icon.jpg",
        "profile_url" => "https://ingente6.wordpress.com",
        "description" => "live your life through art, I chose music. what's yours?",
        "art_img" => "img/ingente/1.jpg"
    ],
    [
        "name" => "John Julian Villeta",
        "img" => "img/villeta/icon.jpg",
        "profile_url" => "https://www.facebook.com/johnjulian.villeta.7",
        "description" => "CrusherMarco's terraria for the worthy thumbnail",
        "art_img" => "img/villeta/1.jpg"
    ],
    [
        "name" => "Vhans Vinsell P. Inojosa",
        "img" => "img/inojosa/icon.png",
        "profile_url" => "https://vhansue.wordpress.com/gallery/?fbclid=IwY2xjawIplp1leHRuA2FlbQIxMAABHSuSF81bTZTBuXjpr0_US-9bPUh5F6RqRe4zHtrZbfsVrFTCzwPYSKDlpg_aem_RLSPg3X-Fl-fXoSPVMfjxw",
        "description" => "Sunkissed Lola performed their hit song Pasilyo at the Faith.Hope.Charity concert in Quezon
                Convention Center, Lucena City. Being able to capture this moment gives me surreal moments on as the
                composition aligned with the audience holding their flashlights, making a sea of light.",
        "art_img" => "img/inojosa/1.jpg"
    ],
    [
        "name" => "Johncarlo Rojo Seldres",
        "img" => "img/seldres/icon.jpg",
        "profile_url" => "",
        "description" => "Hi! I'm John Carlo Seldres, a multimedia arts student.",
        "art_img" => "img/seldres/1.jpg"
    ],
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

    <hr>
    <?php
}
?>





        <!-- post 1 -->
        

        
    </div>
    <script>
        // variables used for the zooming in pics and close
        // loops through all the classes with the name "myimages", "modal", and "modal-content" and store them in their respective variables
        // it makes an array basically
        const imgs = document.querySelectorAll(".myimages");
        const modals = document.querySelectorAll(".modal");
        const modalContents = document.querySelectorAll(".modal-content");


        // this is for zooming in the pic when you click the pic lmao xd -friday
        for (let i = 0; i < imgs.length; i++) {
            imgs[i].onclick = function () {
                modals[i].style.display = "block";
                modalContents[i].src = this.src;
                captionText.innerHTML = this.alt;
            }

        }

        var span = document.querySelectorAll(".close");

        // When the user clicks on <span> (x), close the modal
        for (let i = 0; i < span.length; i++) {
            span[i].onclick = function () {
                modals[i].style.display = "none";
            }
        }
    </script>
</body>

</html>