<div class="container-fluid">
    <div class="row">
        <div class="col-12" id="feeds">
            <div class="row align-items-center pt-2">
                <div class="col-4 d-flex justify-content-center"><img src="/public/assets/img/figaro.png" alt="logo figaro" class="w-50 img-fluid"></div>
                <div class="col-4 d-flex justify-content-center"><img src="/public/assets/img/lemonde.png" alt="logo monde" class="w-50 img-fluid"></div>
                <div class="col-4 d-flex justify-content-center"><img src="/public/assets/img/zdnet.png" alt="logo zdnet" class="w-50 img-fluid"></div>
            </div>
        </div>
        <div class="mt-2 parameters">
            <h2 class="text-center pt-3 parameters fs-5">Nombres d'articles</h2>
            <form action="" method="get" class="mb-3 pt-1 d-flex justify-content-center parameters">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nbrArticles" id="six" value="6">
                    <label class="form-check-label" for="six">
                        6
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nbrArticles" id="nine" value="9">
                    <label class="form-check-label" for="nine">
                        9
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nbrArticles" id="twelve" value="12">
                    <label class="form-check-label" for="twelve">
                        12
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">

    <?php

    foreach ($mediaSelects as $key => $value) { ?>
        <div class="d-flex justify-content-center">
            <img src="<?= $key ?>" alt="<?= 'logo' ?>" class="img-fluid p-3 w-50">
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-2">
            <?php
            $articles = fnFeed($value, $display);
            for ($j = 0; $j < $display; $j++) {
                $title = $articles[$j][0];
                $date = $articles[$j][1];
                $imageUrl = $articles[$j][2];
                $link = $articles[$j][3];
                $description = $articles[$j][4];
                $imageAlt = $articles[$j][5];
            ?>

                <div class="col">
                    <?php include __DIR__ . '/../views/templates/card.php'; ?>
                </div>

            <?php
            } ?>
        </div>
    <?php
    }
    ?>
</div>