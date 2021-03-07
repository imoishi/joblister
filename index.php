<?php include_once 'config/init.php'; ?>

<?php 
$template = new template('templates/frontpage.php');

$template->title = 'Latest Jobs';

echo $template;