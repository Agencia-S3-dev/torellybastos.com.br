<?php
$redesSociais = get_field('lista', 'options');
if (!empty($redesSociais)) :
?>
  <div class="socials d-flex gap-3 justify-content-center">
    <?php foreach ($redesSociais as $rede) : ?>
      <a href="<?php echo $rede['link']; ?>" title="<?php echo $rede['titulo']; ?>" target="_blank">
        <?php echo $rede['icone']; ?>
      </a>
    <?php endforeach; ?>
  </div>
<?php endif; ?>