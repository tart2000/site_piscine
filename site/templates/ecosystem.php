<?php snippet('header') ?>

<section>
	<h3><?php echo $page->title() ?></h3>
    <ul class="flexblock gallery">
    	<?php foreach ($page->children() as $mentor) : ?>
    		<?php snippet('mentor', array('mentor'=>$mentor)) ?>
	    <?php endforeach ?>
    </ul>
  </div>
  <!-- .end .wrap -->
</section>

<?php snippet('link') ?>

<?php snippet('footer') ?>