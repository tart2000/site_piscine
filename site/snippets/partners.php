<section class="bg-white">
  <div class="wrap">
    <div class="content-left">
      <h2><?php echo page('partners')->title() ?></h2>
      <?php echo page('partners')->description()->kirbytext() ?>
    </div>
    <!-- end .content-left -->
    <ul class="flexblock partners">
      <?php foreach (page('partners')->children() as $p) : ?>
        <li>
          <a href="<?php echo $p->partnerLink() ?>" target="_blank">
            <div>
              <img src="<?php echo $p->images()->first()->url() ?>" alt="<?php echo $p->title() ?>">
            </div>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
  <!-- .end .wrap -->
</section>