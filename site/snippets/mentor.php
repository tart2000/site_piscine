<li>
	<a href="#">
	  <figure>
	  	<?php if($image = $mentor->images()->sortBy('sort', 'asc')->first()): ?>
	    	<?php $thumb = thumb($image, array('width' => 400, 'height' => 400, 'crop' => true)) ?>
	    	<img alt="Thumbnail" src="<?php echo $thumb->url() ?>">
	    <?php endif ?>
	    <figcaption>
	      <h2><?php echo $mentor->title() ?></h2>
	      <?php if ($cat = $mentor->category()) : ?>
	      	<?php $thecat = page('categories')->children()->findByURI($cat) ?>
		    <p><b><?php echo $thecat->title() ?></b></p>
		  <?php endif ?>
	      <p>
	      	<a href="<?php e($mentor->mentorLink()!='',$mentor->mentorLink()) ?>" target="_blank">
	            <?php echo $mentor->skill() ?> <?php if($mentor->skill() != '' && $mentor->company()!='') { echo ' - ';} ?> <?php echo $mentor->company() ?>
	        </a>
	      </p>
	    </figcaption>
	  </figure>
	</a>
</li>