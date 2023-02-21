<?php
require('./config.php');
$page_name = 'video';
require('./header.php');
?>
<div class="py-4 bg-light">
    <div class="container">
        <div class="h3 mb-0">Company Video</div>
    </div>
</div>
<div class="container py-4">
    <?php require('./video_row.php') ?>
</div>
<?php
require('./footer.php');
