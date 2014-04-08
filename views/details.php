<header class="blue">
    <div class="details-header align-center section-padding">
        <div class="half-margin">
            <h1><?= $title; ?></h1>
            <h2><?= $type; ?></h2>
        </div>
        <div class="half-margin">
            <p><?= $description; ?></p>
        </div>
    </div>
</header>

<main>

    <section class="white">
        <div class="align-center section-padding">
            <?= $video; ?>
            <img src="<?= $imgLarge1; ?>" alt="<?= $title; ?>" title="<?= $title; ?>" class="description-image"/>
            
<!--             <div class="half-margin">
                <img src="img/blank.gif" data-src="<?= $imgLarge2; ?>" alt="<?= $title; ?>" title="<?= $imgLarge2; ?>" class="lazy"/>
                <noscript><img src="<?= $imgLarge2; ?>" alt="<?= $title; ?>" title="<?= $title; ?>"/></noscript>
            </div> -->
            

        </div>
    </section>

    <section class="yellow">
        <div class="align-center section-padding">
        </div>
    </section>

</main>