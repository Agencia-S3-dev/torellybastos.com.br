<?php
if (get_option('social_media_linkedin') != "") {
    ?>
    <a class="text-success font-22" href="<?php echo get_option('social_media_linkedin'); ?>" title="Linkedin" target="_blank">
        <i class="fa-brands fa-linkedin" alt="Linkedin"></i>
    </a>
<?php
}
?>

<?php
if (get_option('social_media_facebook') != "") {
    ?>
    <a class="text-success font-22" href="<?php echo get_option('social_media_facebook'); ?>" title="Facebook" target="_blank">
        <i class="fa-brands fa-facebook-f" alt="Facebook"></i>
    </a>
<?php
}
?>

<?php
if (get_option('social_media_instagram') != "") {
    ?>
    <a class="text-success font-22" href="<?php echo get_option('social_media_instagram'); ?>" title="Instagram" target="_blank">
        <i class="fa-brands fa-instagram" alt="Instagram"></i>
    </a>
<?php
}
?>