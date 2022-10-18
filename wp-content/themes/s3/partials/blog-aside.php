<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));
?>
<?php
$tags = get_tags(array(
    'metakey' => 'tag',
    'order'   => 'ASC'
));
?>
<div class="procura mb-5">
     <form class="position-relative" role="search" method="get" autocomplete="off">
                        <input class="border border-green height40 px-3 font-14 text-green w-100" type="text" placeholder="O que você procura?">
                        <button class="btn btn-green btn-circle position-absolute end-0 top-0">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
</div>
<div class="mb-5">
    <hr class="hr-blog mb-2">
    <h3 class="categoria font-16 fw-bold text-primary text-uppercase mb-0">Categorias</h3>
    <hr class="hr-blog mt-2">

    <ul class="list-group">
        <?php
        foreach ($categories as $cat) :
        ?>
            <li class="list-group-item p-0 border-none">
                <a class="font-16 text-decoration-none text-black" href="<?php echo get_category_link($cat->term_id) ?>" title="<?php echo $cat->name ?>" >
                <?php echo $cat->name ?>
                </a>
            </li>
        <?php
        endforeach;
        ?>
    </ul>
</div>
<div class="mb-3">
    <hr class="hr-blog mb-2">
    <h3 class="tags font-16 fw-bold text-primary text-uppercase mb-0">Tags</h3>
    <hr class="hr-blog mt-2">

    <ul class="list-group">
        <?php
        foreach ($tags as $tag) :
        ?>
            <li class="list-group-item p-0 border-none">
                <a class="font-16 text-decoration-none text-black" href="<?php echo get_tag_link($tag->term_id) ?>" title="<?php echo $tag->name ?>" class="text-decoration-none">
                    #<?php echo $tag->name ?>
                </a>
            </li>
        <?php
        endforeach;
        ?>
    </ul>
</div>