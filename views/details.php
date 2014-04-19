<header class="blue">
    <div class="align-center section-padding wow bounceInDown">
            <h1><?= $title; ?></h1>
            <h2><?= $type; ?></h2>
    </div>
</header>

<main id="details-main">
    <section class="white">
        <div class="align-center section-padding wow fadeIn">
        
            <!-- web design & dev -->
            <?php if($icon == 1) : ?>            
                <div class="details-description half-margin">
                    <h3><i class="ico-info"></i>About</h3>
                    <p><?= $description; ?></p>
                    <p class="details-description-technologies">Technologies used:</p>
                    <ul>
                        <?= $technologies; ?>
                    </ul>
                    <a href="http://cell-industries.co.uk/" class="details-link btn"><i class="ico-link"></i>VISIT SITE</a>     
                </div>
                <div class="half-margin">
                    <img src="<?= $imgLarge; ?>" alt="<?= $title; ?>" title="<?= $title; ?>" class="description-image"/>
                </div>
            <?php endif; ?>

            <!-- web design & dev -->
            <?php if($icon == 4) : ?>
                <div class="full">
                    <?= $video; ?>
                    <h3><i class="ico-info"></i>About</h3>
                    <p><?= $description; ?></p>
                    <img src="<?= $imgLarge; ?>" alt="<?= $title; ?>" title="<?= $title; ?>" class="description-image"/>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <section class="yellow">
        <div class="align-center section-padding">

        </div>
    </section>



</main>