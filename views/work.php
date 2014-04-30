<header class="blue">
    <div class="align-center section-padding wow bounceInDown">
        <h1>Work</h1>
        <h2>Here is a selection of my work.</h2>
    </div>
</header>

<main>

    <section class="white">
        <div id="work-items" class="align-center section-padding">
<!--         <div id="work-filter">
            <input type="checkbox" id="filter-btn-toggle" class="checkbox-hack" autocomplete="off"/>
            <label for="filter-btn-toggle" id="filter-btn" class="btn ico-"><div id="filter-btn-text">Filter</div></label>    
            <div id="filter-btn-categories">
                <a href="/work" class="btn">All</a>
                <a href="?category=web" class="btn">Web</a>
                <a href="?category=graphic-design" class="btn">Graphic Design</a>
                <a href="?category=digital-art" class="btn">Digital Art</a>
                <a href="?category=3d" class="btn">3D</a>
                <a href="?category=mobile-app" class="btn">Mobile App</a>
                <a href="?category=production" class="btn">Production</a>
            </div>
        </div> -->
            <?php
                foreach($feed->item as $item):
                getData($item);
                
                if ($category != "" && $category != $categoryName) {
                    continue;
                }
                
                ?>
                    <a href="/work/<?= $url; ?>">
                        <div class="work-item wow flipInX" data-wow-offset="0">
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

    <section class="yellow">
        <div class="align-center section-padding">
            <div class="half-margin">
                <h3>For more and hi-res versions of my digital art and graphic design please visit my DeviantArt</h3>
                <a href="http://chubbaart.deviantart.com/gallery" target="_blank" class="btn"><i class="ico-link"></i>VISIT MY DEVIANT ART PAGE</a>
            </div>
            <div id="work-photography" class="half-margin">
                <h3>For examples of my photography take a look on my blog</h3>
                <a href="http://chubbaart.tumblr.com/search/photography" target="_blank" class="btn"><i class="ico-link"></i>VIEW MY PHOTOGRAPHY</a>
            </div>
        </div>
    </section>

</main>