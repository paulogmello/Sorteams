<div class="col mx-2">
    <?php foreach ($erros as $erro) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro ?>
        </div>
    <?php endforeach ?>

    <?php if ($quantidadeDeTimes >= "2") : ?>
        <div class="row d-flex justify-content-center row-cols-md-4 row-cols-2 mt-3">
            <!-- FIRE -->
            <div class="col mb-3">
                <div class="card h-100 text-center">
                    <div class="card-header fs-3 fw-bold bg-danger text-light"><i class="fa-solid fa-fire"></i> Fire</div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <ul>
                            <?php foreach ($times[0] as $i => $time) : ?>
                                <li><?= $time ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- WATER -->
            <div class="col mb-3">
                <div class="card h-100 text-center">
                    <div class="card-header fs-3 fw-bold bg-primary text-light"><i class="fa-solid fa-water"></i> Water</div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <ul>
                            <?php foreach ($times[1] as $i => $time) : ?>
                                <li><?= $time ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php if ($quantidadeDeTimes === "3") : ?>
            <!-- WIND -->
            <div class="col mb-3">
                <div class="card h-100 text-center">
                    <div class="card-header fs-3 fw-bold bg-secondary text-light"><i class="fa-solid fa-wind"></i> Wind</div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <ul>
                            <?php foreach ($times[2] as $i => $time) : ?>
                                <li><?= $time ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <?php if ($quantidadeDeTimes === "4") : ?>
            <!-- WIND -->
            <div class="col mb-3">
                <div class="card h-100 text-center">
                    <div class="card-header fs-3 fw-bold bg-secondary text-light"><i class="fa-solid fa-wind"></i> Wind</div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <ul>
                            <?php foreach ($times[2] as $i => $time) : ?>
                                <li><?= $time ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- EARTH -->
            <div class="col mb-3">
                <div class="card h-100 text-center">
                    <div class="card-header fs-3 fw-bold bg-success text-light"><i class="fa-solid fa-mountain"></i> Earth</div>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <ul>
                            <?php foreach ($times[3] as $i => $time) : ?>
                                <li><?= $time ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif ?>

        </div>
</div>