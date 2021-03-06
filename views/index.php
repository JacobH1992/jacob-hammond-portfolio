<header id="index-header" class="blue">
    <div id="index-header-text" class="align-center section-padding wow bounceInDown">
        <h1>Hi, I'm Jacob.</h1>
        <h2>I <i class="ico-heart ico--no-margin"></i> beautiful, clean and intuitive design.</h2>
        <a href="#about" id="index-more" class="btn wow"><i class="ico-arrow-down"></i>A BIT MORE ABOUT ME</a>
    </div>
</header>

<main>

    <section id="index-about" class="white">
<a id="about"></a>
        <div class="align-center section-padding">
            <h1>About</h1>
            <h2 class="wow fadeIn" data-wow-delay=".25s">I am a <i class="ico-graduate ico--no-margin"></i> of the University of Kent in Canterbury, England with a First Class Degree in Multimedia Technology & Design.</h2>
            <p class="half-margin wow fadeIn" data-wow-delay=".5s">I’m an all-rounder with skills in UX/UI design, web design, development, graphic design, 3D design, photography and production. I have worked on many projects whilst at uni, with my freelance design company and as a Design & Production Intern for The Walt Disney Company in London.</p>
            <p class="half-margin wow fadeIn" data-wow-delay=".75s">Recently I have focussed on designing mobile experiences, whether it be native apps for iOS, Android and Windows Phone or web apps. I am currently working as a User Experience & User Interface Designer for <a href="http://fuerteint.com/" target="_blank">Fuerte International</a> in London.</p>
            <div class="section-content-wrapper">
                <a href="/downloads/Jacob-Hammond-Multimedia-Designer-CV-2014.pdf" target="_blank" class="btn"><i class="ico-download"></i>DOWNLOAD MY CV</a>
            </div>
        </div>
    </section>

    <section class="yellow">
        <div class="align-center section-padding">
            <h1>Skills</h1>
            <h2 class="wow fadeIn" data-wow-delay=".25">I have acquired a wide range of skills in many different types of design.</h2>
            <div class="list third-margin wow fadeIn" data-wow-delay=".5s">
                <h3><i class="ico-keyboard"></i>Website Design</h3>
                <h3><i class="ico-graphic"></i>Graphic Design</h3>
                <h3><i class="ico-mobile"></i>Mobile App Design</h3>
                <h3><i class="ico-art"></i>Digital Art</h3>
                <h3><i class="ico-cube"></i>3D Design</h3>
                <h3><i class="ico-camera"></i>Photography</h3>
                <h3><i class="ico-producer"></i>Website Production</h3>
            </div>
            <div class="list third-margin wow fadeIn"  data-wow-delay=".75s">
                <h3><i class="ico-tools"></i>Tools</h3>
                <ul>
                    <li><p>Adobe Creative Cloud 2014</p></li>
                    <li><p>Sublime Text</p></li>
                    <li><p>Git / GitHub</p></li>
                    <li><p>Autodesk 3DS Max</p></li>
                    <li><p>OmniGraffle</p></li>
                    <li><p>Microsoft Visual Studio</p></li>
                    <li><p>Eclipse</p></li>
                    <li><p>Nikon DSLR</p></li>
                </ul>
            </div>
            <div class="list third-margin wow fadeIn" data-wow-delay="1s">
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
                include('php/getData.php');

                $i = 0;
                foreach($feed->item as $item):    
                    if (++$i > 3) {
                        break;
                    }

                getData($item);

                ?>  
                    <a href="work/<?= $url; ?>">
                        <div class="work-item third">
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
            <a href="/work" class="index-work-btn btn"><i class="ico-arrow-left"></i>VIEW ALL MY WORK</a>
        </div>
    </section>

</main>