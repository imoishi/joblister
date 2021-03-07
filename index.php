<?php include_once 'config/init.php'; ?>

<?php 
$job = new Job;

$template = new template('templates/frontpage.php');

$template->title = 'Latest Jobs';
$template->jobs = $job->getAllJobs();

echo $template;