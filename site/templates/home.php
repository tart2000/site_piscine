<?php snippet('header') ?>

<!-- Quick Guide
  - Each parent <section> in the <article id="webslides"> element is an individual slide.
  - Vertical sliding = <article id="webslides" class="vertical">
  - <div class="wrap"> = container 1200px
-->

<section class="bg-gradient-v aligncenter">
  <span class="background dark" style="background-image:url('https://source.unsplash.com/kwXby58kRSo/1440x1440')"></span>
  <div class="wrap size-70">
    <img src="assets/images/piscine_logo_white.png">
    <h3><?php echo $site->description() ?></h3>
    <p>
      <svg class="fa-map-pin">
        <use xlink:href="#fa-map-pin"></use>
      </svg>
      Montréal
    </p>
    <a href="#" onClick="ws.goNext()" class="button radius" title="Download WebSlides">
      Plonger ! 
    </a>
  </div>
  <!-- .end .wrap -->
</section>

<section>
  <div class="wrap">
    <img class="alignright size-30" src="assets/images/piscine_waves.png" alt="pool">
    <?php echo $page->intro()->kirbytext() ?>
  </div>
  <!-- .end .wrap -->
</section>

<section>
  <div class="wrap">
    <h3><?php echo $page->stepsintro() ?></h3>
    <ul class="flexblock steps">
      <!-- li>a? Add blink = <ul class="flexblock steps blink">-->
      <?php $counter = 1 ?>
      <?php foreach ($page->steps()->yaml() as $s) : ?>
        <li>
          <?php if ($counter != 1) : ?>
            <div class="process step-<?php echo $counter ?>"></div>
          <?php endif ?>
          <span>
            <img class="alignleft" src="assets/images/icones_pisine_<?php echo $counter ?>.png">                
          </span>
          <h2><?php echo $s['title'] ?></h2>
          <p><?php echo $s['text'] ?></p>
        </li>
        <?php $counter++ ?>
      <?php endforeach ?>
    </ul>
  </div>
  <!-- .end .wrap -->
</section>

<section>
  <div class="wrap">
    <!-- [class*="content-"] = container max-width:50% = 600px -->
    <div class="content-center">
      <h3>Des ressources uniques</h3>
      <ul class="flexblock specs">
        <?php foreach ($page->ctas()->yaml() as $cta) : ?>
          <li>
            <div>
              <h2>
                <svg class="fa-<?php echo $cta['faicon'] ?>">
                  <use xlink:href="#fa-<?php echo $cta['faicon'] ?>"></use>
                </svg>
                <?php echo $cta['title'] ?>
              </h2>
              <?php echo $cta['description'] ?>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
    <!-- end .content-center -->
  </div>
  <!-- .end .wrap -->
</section>

<section>
  <h3>Ils sont dans l'aventure</h3>
  <ul class="flexblock gallery">
    <?php foreach (page('ecosystem')->children()->limit(4) as $mentor) : ?>
      <?php snippet('mentor', array('mentor'=>$mentor)) ?>
    <?php endforeach ?>
  </ul>
  <div class="wrap content-center">
    <a href="/ecosystem" class="button">Voir</a>
  </div>
</section>

<section class="bg-white">
  <div class="wrap">
    <div class="alignleft">
      <h2>Ils ont fait partie de la version Beta</h2>
      <hr>
    </div>
    <ul class="flexblock">
      <li>
        <div>
          <img src="assets/images/logos/mappingmatter_h.png" alt="Mapping Matter">
          <p>Mapping Matter est une plateforme de simulation de projection mapping in-browser.
            <br>
            <a href="http://www.mappingmatter.com/" target="_blank">http://www.mappingmatter.com/</a>
          </p>
        </div>
      </li>
      <li>
        <div>
          <img src="assets/images/logos/sidecar.png" alt="Sidecar Studio">
          <p>
            Sidecar Studio est un studio de création spécialisé dans les expériences en Réalité Virtuelle et univers 3D aussi bien pour l'art ou l'ingénierie. 
            <br>
            <a href="http://www.sidecarstudio.ca/" target="_blank">http://www.sidecarstudio.ca/</a>
          </p>
        </div>
      </li>

    </ul>
  </div>
</section>

<?php snippet('faq') ?>

<?php snippet('link') ?>

<?php snippet('footer') ?>



