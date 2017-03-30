<header role="banner">
  <nav role="navigation">
    <p class="logo"><a href="<?php echo $site->url() ?>" title="La Piscine"><?php echo $site->title() ?></a></p>

    <ul>
      <?php foreach ($site->pages()->visible() as $p) : ?>
        <li class="menu">
          <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
        </li>
      <?php endforeach ?>
      <li class="twitter">
        <a rel="external" href="https://twitter.com/laPiscineMTL" title="Twitter">
          <svg class="fa-twitter">
            <use xlink:href="#fa-twitter"></use>
          </svg>
          <em>@laPiscineMTL</em>
        </a>
      </li>
      <li class="mail">
        <a rel="external" href="mailto:info@lapiscine.ca" title="Mail">
          <svg class="fa-envelope">
            <use xlink:href="#fa-envelope"></use>
          </svg>
        </a>
      </li>
    </ul>
  </nav>
</header>