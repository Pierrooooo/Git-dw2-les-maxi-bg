<?php


get_header();


$fields = get_fields();

$fields["article1"];

function highlight_text(){
    $fields = get_fields();
    $highlight =  str_split($fields["article1"]["text_article1"]);
    $completed = "";
    $startOfSpan = true;

    foreach($highlight as $char){
       
        if ($char == "*") {
           
            if ($startOfSpan == true){
                $completed .= "<span>";
                $startOfSpan = false;
            } else {
                $completed .= "</span>";
                $startOfSpan = true;
            };
            
        } else {
            $completed .= $char;
        }

    };

    return $completed;
};






$footer_datas = get_field('footer');
$header_datas = get_field('header');
?>
<header>
    <nav>
        <a href=""><img src=" <?= $header_datas['logo']['url'] ?>" alt="Medi-Link\'s logo"></a>
        <div class="burger_menu">
            <div class="burger burger1"></div>
            <div class="burger burger2"></div>
            <div class="burger burger3"></div>
        </div>
    </nav>

    <ul class="burger_texts">
        <?php
        foreach ($header_datas['header_texts'] as $value) {
            echo '<li><a>' . $value['header_text'] . '</a></li>';
        }
        ?>
    </ul>

</header>

<section class="first_article_container">

<h1> <?= $fields["article1"]['titre_article1']?></h1>

<div class="imgContainer">
<img src="<?= $fields["article1"]["image_article1"]["url"] ?>" alt="<?= $fields["article1"]["image_article1"]["title"] ?>">
</div>

<p>
    <?= highlight_text()?>
</p>

   <button>Découvrez nos activités</button>

</section>

<section class="second_article_container">

<h1> <?= $fields["article2"]['titre']?></h1>

<p>
    <?= $fields["article2"]['text'] ?>
</p>


<div class="slider">

<?php

foreach($fields["article2"]['slider'] as $slide){
?>
<div class="slide">

    <img src="<?= $slide["image"]["url"] ?>" alt="">

    <h2> <?= $slide["titre"] ?> </h2>

    <p> <?= $slide["text"] ?></p>

</div>

<?php }?>

</div>

<div class="container">

<?php

foreach($fields["article2"]['slider'] as $slide){
?>
<div class="containerContent">

    <img src="<?= $slide["image"]["url"] ?>" alt="">

    <h2> <?= $slide["titre"] ?> </h2>

    <p> <?= $slide["text"] ?></p>
</div>
<div class="bar"></div>

<?php }
?>

</div>


</section>

<section class="third_article_container" >

<h1>
    <?= $fields["article3"]["titre_article3"] ?>
</h1>


<section>

<?php 
foreach($fields["article3"]['ouais'] as $info){?>

<div class="infoContainer">
    <div><h2><?= $info["soustitre"] ?></h2></div>
    <div class="descContainer"><p><?= $info["desc"] ?></p></div>
</div>

<?php
}
?>

</section>


</section>


<section class="fourth_article_container">   

<div class="ownerPres">
    
    <img src="http://localhost:8000/app/uploads/2022/04/medilink_owner.jpg" alt="Medilink owner's photo">
    <h1>Christophe Soyez</h1>
    <p>Gérant et Fondateur de Medi-Link</p>
    
</div>

<?php

echo do_shortcode('[wpforms id="149" title="false"]'); 


?>

</section>

<?php


?>

<section class="fith_article_container">

<div class="mapContainer">

    <img src="<?= $fields["article_5_map"]["map_image"]["url"]?>" alt="">
    <div class="bar"></div>

    <div class="implementationPart1">

        <div class="internContainer">
            <div>
                <p><?= $fields["article_5_map"]["arcs_interne"]?></p>
                <p>ARCs en interne</p>
            </div>
            <div>
                <p><?= $fields["article_5_map"]["arcs_externe"]?></p>
                <p>ARCs en externe</p>
            </div>
        </div>

        <div>
            <p><?= $fields["article_5_map"]["regions_couvertes_en_local"]?></p>
            <p>Régions couverte en local</p>
        </div>

    </div>

</div>

</section>


<section class="six_article_container">

<h1>Ils nous font confiance</h1>

<div class="img_container">



<?php
foreach($fields["article_6_confiance"]["images"] as $info){?>

<img src="<?=$info["image"]["url"] ?>" alt="">

<?php
}
?>
</div>


</section>

<footer id="colophon" class="site-footer">
    <section class="section_footer">
        <a class="socials_link" href="https://fanlnk.to/Medilink">Nos Réseaux</a>

        <a class="footer_logo" href=""><img src=" <?= $header_datas['logo']['url'] ?>" alt="Medi-Link\'s logo"></a>

        <div class="div_footer_right">
            <div class="footer_adresse">
                <p class="footer_title"><?= $footer_datas['footer_texts'][0]['titre'] ?></p>
                <p>
                    <?php foreach ($footer_datas['footer_texts'] as $value) {
                        echo '<span>' . $value['type_et_nom_de_rue_+_numero'] . '</span><br>';
                        echo '<span>' . $value['code_postal'] . '</span><br>';
                        echo '<span>' . $value['ville'] . '</span><br>';
                        echo '<span>' . $value['pays'] . '</span><br>';
                    }
                    ?>
                </p>
            </div>
            <div class="footer_socials">
                <p class="footer_title"><?= $footer_datas['reseaux'][0]['titre'] ?></p>
                <p>
                    <?php foreach ($footer_datas['reseaux'] as $value) {
                        echo '<a src="' . $value['telephone'] . '">Télephone</a><br>';
                        echo '<a src="' . $value['LinkedIn'] . '">LinkedIn</a><br>';
                        echo '<a src="' . $value['mail'] . '">Mail</a><br>';
                    }
                    ?>
                </p>
            </div>

            <a class="qr_medilink" href="https://imgbb.com/"><img src="https://i.ibb.co/ncV5R7M/qr-medilink.png" alt="qr-medilink" /></a>

            <div class="footer_member">
                <p class="footer_title">Membre de</p>
                <ul>
                    <?php foreach ($footer_datas['member_of']['images'] as $value) {
                        echo '<li><a href=""><img src="' . $value['image']['url'] . '" alt="member\'s logo"></a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>



    </section>

</footer>


<script defer>
    let infoContainer = document.querySelectorAll('.infoContainer')

    infoContainer.forEach(item => {
        item.addEventListener('click', function(){
        item.classList.toggle("active")
    })
    })

    let burgerMenu = document.querySelector('.burger_menu')
    let burger1 = document.querySelector('.burger1')
    let burger2 = document.querySelector('.burger2')
    let burger3 = document.querySelector('.burger3')
    let list = document.querySelector('.burger_texts')

    var count = 0
    burgerMenu.addEventListener('click', function() {
        count += 1

        if (count % 2) {
            list.style.transform = 'translate(-50%, 25%)'
            burger1.style.transform = 'translate(50%, 300%) rotate(-45deg) scaleX(2.2)'
            burger2.style.transform = 'rotate(45deg)'
            burger3.style.transform = 'scale(0)'
        } else {
            list.style.transform = 'translate(-50%, -155%)'
            burger1.style.transform = 'translate(0) rotate(0) scaleX(1)'
            burger2.style.transform = 'rotate(0)'
            burger3.style.transform = 'scale(1)'
        }
    })
</script>