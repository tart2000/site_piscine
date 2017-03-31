<header role="banner">
  <nav role="navigation">
    <p class="logo"><a href="<?php echo $site->url() ?>" title="La Piscine"><?php echo $site->title() ?></a></p>

    <ul>
      <?php foreach ($site->pages()->visible() as $p) : ?>
        <li class="menu">
          <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
        </li>
      <?php endforeach ?>
      <?php if ($site->twitt() != '') : ?>
        <li class="twitter">
          <a rel="external" href="https://twitter.com/<?php echo $site->twitt() ?>" title="Twitter">
            <svg class="fa-twitter">
              <use xlink:href="#fa-twitter"></use>
            </svg>
            <em>@<?php echo $site->twitt() ?></em>
          </a>
        </li>
      <?php endif ?>
      <?php if ($site->fb() != '') : ?>
        <li class="facebook">
          <a rel="external" href="<?php echo $site->fb() ?>" title="Facebook">
            <svg class="fa-facebook">
              <use xlink:href="#fa-facebook"></use>
            </svg>
          </a>
        </li>
      <?php endif ?>
      <?php if ($site->lin() != '') : ?>
        <li class="linkedin">
          <a rel="external" href="<?php echo $site->lin() ?>" title="LinkedIn">
            <svg class="fa-linkedin">
              <use xlink:href="#fa-linkedin"></use>
            </svg>
          </a>
        </li>
      <?php endif ?>

      <?php if ($site->courriel() != '') : ?>
        <li class="mail">
          <a rel="external" href="mailto:<?php echo $site->courriel() ?>" title="email">
            <svg class="fa-envelope">
              <use xlink:href="#fa-envelope"></use>
            </svg>
          </a>
        </li>
      <?php endif ?>
    </ul>
  </nav>
</header>