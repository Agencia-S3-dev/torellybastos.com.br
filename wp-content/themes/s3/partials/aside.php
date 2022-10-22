<div class="mb-5">
    <form action="<?php echo home_url(); ?>" method="get" class="position-relative">
        <input class="border-primary py-1 border px-2 font-14 w-100" name="s" type="text" placeholder="O que você procura?">
        <button class="position-absolute end-0 bg-transparent border-0 margin-top-3 margin-right-3">
            <i class="fa-solid text-secondary font-14 fa-magnifying-glass"></i>
        </button>
    </form>
</div>

<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));
?>
<div class="mb-4">
    <h3 class="text-primary border-top border-bottom border-primary py-2 fw-bold font-16">Categorias</h3>
    <ul class="nav flex-column">
        <?php
        foreach ($categories as $cat) :
        ?>
            <li class="nav-item">
                <a class="nav-link ps-0 fw-light text-secondary font-16" href="<?php echo get_category_link($cat->term_id) ?>" title="<?php echo $cat->name ?>">
                    <?php echo $cat->name ?>
                </a>
            </li>
        <?php
        endforeach;
        ?>
    </ul>
</div>
<?php
$categories = get_tags(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));
?>
<div class="mb-4">
    <h3 class="text-primary border-top border-bottom border-primary py-2 fw-bold font-16">Tags</h3>
    <ul class="nav flex-column">
        <?php
        foreach ($categories as $cat) :
        ?>
            <li class="nav-item">
                <a class="nav-link ps-0 fw-light text-secondary font-16" href="<?php echo get_category_link($cat->term_id) ?>" title="<?php echo $cat->name ?>">
                    <?php echo $cat->name ?>
                </a>
            </li>
        <?php
        endforeach;
        ?>
    </ul>
</div>