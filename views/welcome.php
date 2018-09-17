<?php include 'views/layouts/header.php';
session_start();
?>

<div class="row my-5">
    <div class="col-8 offset-2 col-md-4 offset-md-0">
        <img class="img-fluid" src="<?= $this->product[0]['image'] ?>" alt="">
    </div>
    <div class="col-12 col-md-6">
        <h2><?= $this->product[0]['name'] ?></h2>
        <p><?= $this->product[0]['description'] ?></p>
        <p>Vieneto kaina: <?= number_format($this->product[0]['price'],2) ?>€</p>
    </div>
</div>
<?php if (isset($_SESSION['error'])) : ?>
    <div class="row">
        <div class="col-12 bg-danger p-3">
            <?= $_SESSION['error']; unset($_SESSION['error']) ?>
        </div>
    </div>
<?php endif?>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="row">
        <div class="col-12 bg-success p-3">
            <?= $_SESSION['success']; unset($_SESSION['success']) ?>
        </div>
    </div>
<?php endif?>
<form class="form-group" action="/order/store" method="post">
    <input type="hidden" name="product_id" value="<?= $this->product[0]['id'] ?>">
    <input type="hidden" name="price" value="<?= $this->product[0]['price'] ?>">
    <div class="row">
        <div class="col-12 col-md-6 input-group px-5">
            <label>
                Vardas
                <input class="form-control" type="text" name="customer_name" value="<?= isset($_SESSION['customer_name']) ? $_SESSION['customer_name'] : ''; unset($_SESSION['customer_name'])?>" required>
            </label>
        </div>
        <div class="col-12 col-md-6 input-group px-5">
            <label>
                Pavarde
                <input class="form-control" type="text" name="customer_last_name" value="<?= isset($_SESSION['customer_last_name']) ? $_SESSION['customer_last_name'] : ''; unset($_SESSION['customer_last_name']); ?>" required>
            </label>
        </div>
        <div class="col-4 col-md-3 col-lg-2 input-group px-5">
            <label>Kiekis
                <input class="form-control" type="number" name="quantity" value="<?= isset($_SESSION['quantity']) ? $_SESSION['quantity'] : ''; unset($_SESSION['quantity']); ?>" required>
            </label>
        </div>
        <div class="col-12 col-md-6 offset-md-3 offset-lg-4 input-group px-5">
            <label>
                El. Paštas
                <input class="form-control" type="text" name="customer_email" value="<?= isset($_SESSION['customer_email']) ? $_SESSION['customer_email'] : ''; unset($_SESSION['customer_email']); ?>" required>
            </label>
        </div>
        <div class="col-12 col-md-6 input-group px-5">
            <label>
                Adresas
                <input class="form-control" type="text" name="adress" value="<?= isset($_SESSION['adress']) ? $_SESSION['adress'] : ''; unset($_SESSION['adress']); ?>" required>
            </label>
        </div>
        <div class="col-12 col-md-6 input-group px-5">
            <label>
                Miestas
                <input class="form-control" type="text" name="city" value="<?= isset($_SESSION['city']) ? $_SESSION['city'] : ''; unset($_SESSION['city']); ?>" required>
            </label>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit" name="button">Užsakyti</button>
        </div>
    </div>
</form>
<?php include 'views/layouts/footer.php' ?>
