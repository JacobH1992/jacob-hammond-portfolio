<header class="blue">
    <div class="align-center section-padding">
            <h1><?= $title; ?></h1>
            <h2><?= $type; ?></h2>
    </div>
</header>

<main id="details-main">

PHP if e.g. ($icon = 1)

include e.g. web.php for web layout / 3d.php etc.

    <section class="white">
        <div class="align-center section-padding">
            <div class="details-description half-margin">
                <h3><i class="ico-info"></i>About</h3>
                <?= $description; ?>
                <p class="details-description-technologies">Technologies used:</p>
                <ul>
                    <li>WebGL,</li>
                    <li>ThreeJS,</li>
                    <li>WebRTC webcam gestures,</li>
                    <li>Google Elevation API,</li>
                    <li>Google Static Maps API,</li>
                    <li>PHP MVC,</li>
                    <li>Login system,</li>
                    <li>Checkbox hack,</li>
                    <li>Feature detection,</li>
                    <li>Font icons,</li>
                    <li>Mobile first responsive,</li>
                    <li>Sass.</li>
                </ul>
                <a href="http://cell-industries.co.uk/" class="details-link btn"><i class="ico-link"></i>VISIT SITE</a>     
            </div>
            <div class="half-margin">
                <?= $video; ?>
                <img src="<?= $imgLarge1; ?>" alt="<?= $title; ?>" title="<?= $title; ?>" class="description-image"/>
            </div> 
<!--             <div class="half-margin">
            </div> -->
        </div>
    </section>

    <section class="yellow">
        <div class="align-center section-padding">

        </div>
    </section>



</main>