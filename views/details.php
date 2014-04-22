<?php
    $newer  = $feed->xpath("//item[@url='$detailsUrl']/preceding-sibling::*[1]");
    $older  = $feed->xpath("//item[@url='$detailsUrl']/following-sibling::*[1]");
?>

<header class="blue">
    <div class="align-center section-padding wow bounceInDown">
        <h1><?= $title; ?></h1>
        <h2><?= $type; ?></h2>
    </div>
</header>

<main id="details-main">
    <section class="white">
        <div class="align-center section-padding">

            <?php if($icon == 1) : ?>
            <!-- web design & dev -->
                <div class="details-description half-margin">
                    <h3><i class="ico-info"></i>About</h3>
                    <p><?= $description; ?></p>
                    <p class="details-description-technologies">Technologies / Applications used:</p>
                    <ul>
                        <?= $technologies; ?>
                    </ul>
                    <a href="<?= $link; ?>" class="details-link btn" target="_blank"><i class="ico-link"></i>VISIT SITE</a>     
                </div>
                <div class="description-image description-image--web half-margin">
                    <img src="<?= $imgLarge; ?>" alt="<?= $title; ?>" title="<?= $title; ?>"/>
                </div>
            <?php endif; ?>

            <?php if($icon == 2 || $icon == 3 || $icon == 5 || $icon == 7) : ?>
            <!-- graphic design, digital art, mobile app -->
                <div class="details-description">
                    <div class="half-margin">
                        <h3><i class="ico-info"></i>About</h3>
                        <p><?= $description; ?></p>
                    </div>
                    <div class="half-margin">
                        <p class="details-description-technologies">Technologies / Applications used:</p>
                        <ul>
                            <?= $technologies; ?>
                        </ul>
                    </div>
                </div>
                <div class="description-image description-image--mobile">
                    <img src="<?= $imgLarge; ?>" alt="<?= $title; ?>" title="<?= $title; ?>"/>
                </div>
            <?php endif; ?>

            <?php if($icon == 4) : ?>
            <!-- 3d/video -->
                    <?= $video; ?>
                    <div class="half-margin">
                        <h3><i class="ico-info"></i>About</h3>
                        <p><?= $description; ?></p>
                    </div>
                        <img src="<?= $imgLarge; ?>" alt="<?= $title; ?>" title="<?= $title; ?>" class="half-margin description-image"/>
            <?php endif; ?>

        </div>
    </section>

    <section class="yellow">
        <div id="details-navigation" class="align-center section-padding">
            <?php if(!empty($newer)): $newerUrl = $newer[0]->attributes()->url; ?>
                <a href="/work/<?= $newerUrl; ?>" class="btn btn--previous"><i class="ico-arrow-right"></i><div class="btn--text">PREVIOUS</div></a>
            <?php endif; ?>
            <a href="/work" class="btn btn--work"><i class="ico-grid"></i></a>
            <?php if(!empty($older)): $olderUrl = $older[0]->attributes()->url; ?>
                <a href="/work/<?= $olderUrl; ?>" class="btn btn--next"><div class="btn--text">NEXT</div><i class="ico-arrow-left"></i></a>
            <?php endif; ?>
        </div>
    </section>

</main>