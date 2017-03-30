<?php $faq = page('faq') ?> 

<section>
  <!--.wrap = container 1200px with fadein animation -->
  <div class="wrap">
    <h2 class="aligncenter"><?php echo $faq->title() ?></h2>
    <p class="aligncenter"><?php echo $faq->intro() ?></p>
    <div class="grid">
      <div class="column">
        <?php foreach (page('faq')->questions1()->yaml() as $qa) : ?>
          <h6><?php echo $qa['question'] ?></h6>
          <p><?php echo $qa['answer'] ?></p>
        <?php endforeach ?>
      </div>  
      <div class="column">
        <?php foreach (page('faq')->questions2()->yaml() as $qa) : ?>
          <h6><?php echo $qa['question'] ?></h6>
          <p><?php echo $qa['answer'] ?></p>
        <?php endforeach ?>
      </div> 
    </div>
    <!-- end .grid -->
  </div>
  <!-- end .wrap -->
</section>
