<?php
    include('php/getData.php');

    foreach($feed->item as $item):    

    getData($item);
    getDetails($url);

    ?>

<header class="blue">
    <div class="align-center section-padding">
        <h1>Cell Industries</h1>
        <h2>Web Design & Development</h2>
    </div>
</header>

<main>

    <section class="white">
        <div class="header-work align-center section-padding">        
            <img src="/img/work/web/large/cell-industries.jpg" alt="">
        </div>
    </section>
    <section class="yellow">
        <div class="align-center section-padding">        
            <img src="/img/work/web/large/cell-industries.jpg" alt="">
        </div>
    </section>

</main>