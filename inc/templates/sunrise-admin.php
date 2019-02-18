<h1>Sunrise Theme Options</h1>
<!-- <h3 class="title">Manage Options</h3>
<p>Customize the default WordPress Appearnce Options</p>
<p>Customize Sidebar Options</p> -->
<?php //bloginfo('name'); ?>

<?php settings_errors(); ?>


<form action="options.php" method="post">
    <?php settings_fields('sunrise-settings-group');  ?>
    <?php do_settings_sections('jahangir_sunrise'); ?>
    <?php  submit_button();  ?>
</form>