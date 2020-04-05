<?php

$pageBuilder = new HTMLPageBuilder();

$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();

$page = $pageDirector->GetPage();

?>

<?php echo $page->showPage(); ?>
