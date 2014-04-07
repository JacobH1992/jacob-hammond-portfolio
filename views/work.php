<header class="blue">
    <div class="align-center section-padding">
        <h1>Work</h1>
        <h2>Here is a selection of my work.</h2>
    </div>
</header>

<main>
<!--     <section class="white">
        <div id="work-filter" class="align-center">
            <h3>Filter:</h3>
            <i class="ico-keyboard"></i>
            <i class="ico-graphic"></i>
            <i class="ico-art"></i>
            <i class="ico-cube"></i>
            <i class="ico-mobile"></i>
            <i class="ico-camera"></i>
            <i class="ico-producer"></i>
        </div>
    </section> -->

    <section class="white">
        <div id="work-items" class="align-center section-padding">
            <?php
                foreach($feed->item as $item):
                getData($item);

                ?>
                    <a href="/work/<?= $url; ?>">
                        <div class="work-item">
                            <img src="img/blank.gif" data-src="<?= $imgThumb; ?>" alt="<?= $title; ?>" title="<?= $title; ?>" class="lazy"/>
                            <noscript><img src="<?= $imgThumb; ?>" alt="<?= $title; ?>" title="<?= $title; ?>"/></noscript>
                            <div class="work-item-description">
                                <h1><?= $title; ?></h1>
                                <p><?= $type; ?></p>
                            </div>
                            <div class="work-item-icon">
                                <i class="ico-"><?= $icon; ?></i>
                            </div>
                        </div>
                    </a>
                <?php endforeach;
            ?>
        </div>
    </section>

    


</main>