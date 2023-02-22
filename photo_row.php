<div class="row">
    <?php
    $imgs = ['b.jpg', 'c.jpg', 'd.jpg', 'e.jpg'];
    for ($x = 0; $x < 4; $x++) : ?>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div>
                <h4 class="mb-3 text-danger fw-bold">Video 0<?php echo $x + 1 ?></h4>
                <img src="./img/<?php echo $imgs[$x] ?>" alt="serviceImg" class="w-100 rounded h-100">
            </div>
        </div>
    <?php endfor ?>
</div>