<?php
if (!empty($data['prod'])) :
    foreach ($data['prod'] as $prod) : extract($prod); ?>

        <!-- product box -->
        <div class="col box">
            <div class="card border-0 shadow-sm mb-5 mx-auto" style="min-width: 21vh; max-width: 34vh;">
                <a href="<?= URLROOT ?>/Home/details/<?= $prod_id ?>">
                    <img src="<?= IMAGE ?>/<?= $data['image'][$prod_id - 1]['img_link'] ?>" class="card-img-top img-fluid" alt="...">
                </a>

                <div class="card-body" style="z-index: 2; background-color: white;">
                    <div class="mt-3 fw-bold fs-5"> <?= $prod_name ?> </div>
                    <div class="mt-1 fs-5"> $<?= number_format($prod_price, 2, '.', ',') ?></div>
                </div>

                <!-- quick view  -->
                <button type="button" class="add-to-cart">
                    <p>ADD TO CART</p>
                </button>
            </div>
        </div>

<?php endforeach;
endif; ?>