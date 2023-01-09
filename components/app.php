<div class="row row-cols-md-2 row-cols-1 h-100 d-flex align-items-center justify-content-center text-center">
    <div class="col p-5 border rounded">
        <h1 class="text-light">Sort Teams</h1>
        <p class="text-secondary">Discover your teamates in this simple sort app<br>
        Developed by <a href="https://paulogmello.com/">Paulo G. Mello</a>
        </p>
        <hr class="text-light">
        <div class="row">
            <form action="" method="post">
                <h2 class="text-light mb-3"><i id="gear" class="fa-solid fa-gear text-secondary"></i> Configurations</h2>
                <div class="form-floating mb-3">
                    <input name="players" value="<?= $_POST['players'] ?>" type="text" class="form-control text-center" id="floatingInput" placeholder="separated with comma">
                    <label for="floatingInput text-center">Players</label>
                </div>
                <select name="qnt" class="form-select mb-3 text-center" aria-label="Default select example">
                    <option value="1">How many teams will are?</option>
                    <option value="2" <?php if ($_POST['qnt'] === "2") {
                                            echo "selected";
                                        } ?>>2 Teams</option>
                    <option value="3" <?php if ($_POST['qnt'] === "3") {
                                            echo "selected";
                                        } ?>>3 Teams</option>
                    <option value="4" <?php if ($_POST['qnt'] === "4") {
                                            echo "selected";
                                        } ?>>4 Teams</option>
                </select>
                <button class="btn btn-primary w-100">Sort</button>
            </form>
        </div>
    </div>
    <?php include './components/teams.php' ?>
</div>