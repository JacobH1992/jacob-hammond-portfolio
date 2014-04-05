<header id="index-header" class="blue">
    <div id="index-header-text" class="align-center section-padding">
        <h1>Hi, I'm Jacob.</h1>
        <h2>I <i class="ico-heart ico--no-margin"></i> beautiful, clean and intuitive design.</h2>
        <a href="#about" class="btn"><i class="ico-arrow-down"></i>A BIT MORE ABOUT ME</a>
    </div>
</header>

<main>
    <section id="index-about" class="white">
        <div class="align-center section-padding">
            <h1>About</h1>
            <h2>I'm a recent <i class="ico-graduate ico--no-margin"></i> of the University of Kent in Canterbury, England with a degree in Multimedia Technology & Design.</h2>
            <p class="half-margin">I have just completed the 4th and final year of my degree. During that time I worked on many projects for my course, as a freelance designer and as Design & Production Intern for The Walt Disney Company in London.</p>
            <p class="half-margin">My passion for design continues to grow along with my skills in many areas of design and development. As a recent graduate I am keen to find opportunities that will help further my skill set and career.</p>
            <div class="section-content-wrapper">
                <div class="btn"><i class="ico-download"></i>DOWNLOAD MY CV</div>
            </div>
        </div>
    </section>

    <section class="yellow">
        <div class="align-center section-padding">
            <h1>Skills</h1>
            <h2>I have acquired a wide range of skills in many different types of design.</h2>
            <div class="list third-margin">
                <h3><i class="ico-keyboard"></i>Website Design</h3>
                <h3><i class="ico-graphic"></i>Graphic Design</h3>
                <h3><i class="ico-art"></i>Digital Art</h3>
                <h3><i class="ico-cube"></i>3D Design</h3>
                <h3><i class="ico-mobile"></i>Mobile App Design</h3>
                <h3><i class="ico-camera"></i>Photography</h3>
                <h3><i class="ico-producer"></i>Website Production</h3>
            </div>
            <div class="list third-margin">
                <h3><i class="ico-tools"></i>Tools</h3>
                <ul>
                    <li><p>Adobe Master Collection CS6</p></li>
                    <li><p>Sublime Text</p></li>
                    <li><p>Git / GitHub</p></li>
                    <li><p>Autodesk 3DS Max</p></li>
                    <li><p>Microsoft Visual Studio</p></li>
                    <li><p>Eclipse</p></li>
                    <li><p>Wordpress</p></li>
                    <li><p>Nikon DSLR</p></li>
                </ul>
            </div>
            <div class="list third-margin">
                <h3><i class="ico-languages"></i>Languages</h3>
                <ul>
                    <li><p>HTML5</p></li>
                    <li><p>CSS3</p></li>
                    <li><p>Javascript &amp; jQuery</p></li>
                    <li><p>SASS / Compass</p></li>
                    <li><p>PHP</p></li>
                    <li><p>ActionScript 3.0</p></li>
                    <li><p>Java &amp; Android SDK</p></li>
                    <li><p>XML, XSLT, XML Schema</p></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="align-center section-padding">
            <h1>Recent work</h1>
            <?php
                $feed = simplexml_load_file('xml/work.xml');
                include('php/getData.php');

                $i = 0;
                foreach($feed->item as $item):    
                    if (++$i > 3) {
                        break;
                    }

                getData($item);

                ?>
                    <div class="work-item third">
                        <img src="img/spinner.gif" data-src="<?= $imgSmall; ?>" alt="<?= $title; ?>" title="<?= $title; ?>" class="lazy"/>
                        <noscript>
                            <img src="<?= $imgSmall; ?>" alt="<?= $title; ?>" title="<?= $title; ?>"/>
                        </noscript>                        <div class="work-item-description">
                            <h1><?= $title; ?></h1>
                            <p><?= $type; ?></p>
                        </div>
                        <div class="work-item-icon">
                            <i class="ico-"><?= $icon; ?></i>
                        </div>
                    </div>
                <?php endforeach;
            ?>
            <a href="/work" class="btn"><i class="ico-arrow-left"></i>VIEW ALL MY WORK</a>
        </div>
    </section>


</main>