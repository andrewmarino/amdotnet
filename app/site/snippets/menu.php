<nav class="dib" role="navigation">
  <ul class="list pa0 mt1 f5 fw6">
    <?php foreach($pages->visible() as $p): ?>
    <li class="dib mr3 mt2">
      <a class="<?php e($p->isOpen(), 'active underline') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
