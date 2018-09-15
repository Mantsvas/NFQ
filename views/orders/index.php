<?php include 'views/layouts/header.php';?>

<form action="/order" method="GET">
    <input type="hidden" name="page" value="<?= $this->page ?>">
    <input type="hidden" name="date1" value="<?=$this->date1 ?>">
    <input type="hidden" name="date2" value="<?=$this->date2 ?>">
    <input type="hidden" name="quantity1" value="<?= !empty($this->quantity1) ? $this->quantity1 : '' ?>">
    <input type="hidden" name="quantity2" value="<?= !empty($this->quantity2) ? $this->quantity2 : '' ?>">
    <input type="hidden" name="status" value="<?= !empty($this->status) ? $this->status : '' ?>">
    <input type="hidden" name="orderby" value="<?=$this->orderby ?>">
    <input type="hidden" name="direction" value="<?=$this->direction ?>">
    <div class="row mt-4">
        <div class="input-group col-6 col-md-4">
            <input class="form-control" type="text" name="search" value="<?= !empty($this->search) ? $this->search : '' ?>" placeholder="Ieškoti...">
            <button class="btn btn-info" type="submit" name="button">>></button>
        </div>
    </div>
</form>
<form action="/order" method="GET">
    <input type="hidden" name="page" value="<?= $this->page ?>">
    <input type="hidden" name="date1" value="<?=$this->date1 ?>">
    <input type="hidden" name="date2" value="<?=$this->date2 ?>">
    <input type="hidden" name="quantity1" value="<?= !empty($this->quantity1) ? $this->quantity1 : '' ?>">
    <input type="hidden" name="quantity2" value="<?= !empty($this->quantity2) ? $this->quantity2 : '' ?>">
    <input type="hidden" name="status" value="<?= !empty($this->status) ? $this->status : '' ?>">
    <input type="hidden" name="search" value="<?= !empty($this->search) ? $this->search : '' ?>">
    <div class="row mt-4">
        <div class="col-12">
            <label for="sort">Rikiuoti pagal:</label>
        </div>
        <div class="input-group col-12 col-md-6 mb-4">
            <div class="input-group-prepend">
                    <select id="sort" class="form-control" name="orderby">
                        <option <?= ($this->orderby == 'total_price') ? 'selected="selected"' : '' ?> value="total_price">Sumą</option>
                        <option <?= ($this->orderby == 'quantity') ? 'selected="selected"' : '' ?> value="quantity">Kiekį</option>
                        <option <?= ($this->orderby == 'adress') ? 'selected="selected"' : '' ?> value="adress">Adresą</option>
                        <option <?= ($this->orderby == 'city') ? 'selected="selected"' : '' ?> value="city">Miestą</option>
                        <option <?= ($this->orderby == 'customer_name') ? 'selected="selected"' : '' ?> value="customer_name">Pirkėjo vardą</option>
                        <option <?= ($this->orderby == 'customer_last_name') ? 'selected="selected"' : '' ?> value="customer_last_name">Pirkėjo pavardę</option>
                        <option <?= ($this->orderby == 'customer_email') ? 'selected="selected"' : '' ?> value="customer_email">Pirkėjo El.Paštą</option>
                        <option <?= ($this->orderby == 'order_date') ? 'selected="selected"' : '' ?> value="order_date">Užsakymo datą</option>
                    </select>
                </label>
            </div>
            <select class="form-control" name="direction">
                <option <?= ($this->direction == 'ASC') ? 'selected="selected"' : '' ?> value="ASC">Didėjimo tvarka</option>
                <option <?= ($this->direction == 'DESC') ? 'selected="selected"' : '' ?> value="DESC">Mažėjimo tvarka</option>
            </select>
            <button class="btn btn-info" type="submit" name="button">Rušiuoti</button>
        </div>
    </div>
</form>
<form class="" action="/order" method="GET">
    <input type="hidden" name="page" value="<?= $this->page ?>">
    <input type="hidden" name="orderby" value="<?=$this->orderby ?>">
    <input type="hidden" name="direction" value="<?=$this->direction ?>">
    <input type="hidden" name="search" value="<?= !empty($this->search) ? $this->search : '' ?>">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-12 mb-4">
                    Filtruoti Pagal Datą
                </div>
                <div class="input-group col-6">
                    <label for="from">Nuo: </label>
                </div>
                <div class="input-group col-6">
                    <label for="to">Iki: </label>
                </div>
                <div class="input-group col-6 mb-4">
                    <input class="form-control" id="from" class="ml-1" type="date" name="date1">
                </div>
                <div class="input-group col-6 mb-4">
                    <input class="form-control" id="to" class="ml-1" type="date" name="date2">
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-12 mb-4">
                    Filtruoti Pagal Kiekį
                </div>
                <div class="input-group col-2">
                    <label for="from">Nuo: </label>
                </div>
                <div class="input-group col-2">
                    <label for="to">Iki: </label>
                </div>
                <div class="input-group col-8">
                    <label for="to">Būsena </label>
                </div>
                <div class="input-group col-2 mb-4">
                    <input id="from" class="form-control" class="ml-1" type="number" min="0" name="quantity1" value="<?= !empty($this->quantity1) ? $this->quantity1 : '' ?>">
                </div>
                <div class="input-group col-2 mb-4">
                    <input id="to" class="form-control" class="ml-1" type="number" min="0" name="quantity2" value="<?= !empty($this->quantity2) ? $this->quantity2 : '' ?>">
                </div>
                <div class="input-group col-4 mb-4">
                    <select id="status" class="form-control" name="status">
                        <option <?= (!empty($this->status) && $this->status == '') ? 'selected="selected"' : '' ?> value="">Visi</option>
                        <option <?= (!empty($this->status) && $this->status == 'Vykdomas') ? 'selected="selected"' : '' ?> value="Vykdomas">Vykdomas</option>
                        <option <?= (!empty($this->status) && $this->status == 'Įvykdytas') ? 'selected="selected"' : '' ?> value="Įvykdytas">Įvykdytas</option>
                    </select>
                </div>
                <div class="input-group col-3 mb-4">
                    <button class="btn btn-info" type="submit">Filtruoti</button>
                </div>
            </div>
        </div>
    </div>
</form>
<table class="table">
    <thead>
        <tr>
        <th>#</th>
        <th>Data</th>
        <th>Pirkėjas</th>
        <th>Email</th>
        <th>Adresas</th>
        <th>Kiekis</th>
        <th>Suma</th>
        <th>Būsena</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = $this->pageFirstRecord; $i < count($this->orders) && $i < $this->pageFirstRecord + $this->perPage; $i++) :?>
            <tr>
              <td><?= $i+1 ?></td>
              <td><?= $this->orders[$i]['order_date'] ?></td>
              <td><?= $this->orders[$i]['customer_name'].' '.$this->orders[$i]['customer_last_name'] ?></td>
              <td><?= $this->orders[$i]['customer_email'] ?></td>
              <td><?= $this->orders[$i]['adress'].', '.$this->orders[$i]['city']?></td>
              <td><?= $this->orders[$i]['quantity']?></td>
              <td><?= number_format($this->orders[$i]['total_price'],2)?>€</td>
              <td><?= $this->orders[$i]['status']?></td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>
<div class="mb-5 text-center">
    <?php for ($i = 1, $a = 0; $a < count($this->orders) ; $a += $this->perPage, $i++) :?>
        <a class="border btn px-4 py-3 btn-info <?= ($this->page == $i) ? 'active' : '' ?>"
            href="/order?page=<?= $i ;?>&orderby=<?=$this->orderby ?>&direction=<?= $this->direction ?>&date1=<?=$this->date1 ?>&date2=<?=$this->date2 ?><?=!empty($this->quantity1) ? '&quantity1='.$this->quantity1 : ''?><?=!empty($this->quantity2) ? '&quantity2='.$this->quantity2 : '' ?><?=!empty($this->status) ? '&status='.$this->status : ''?><?= !empty($this->search) ? '&search='.$this->search : '' ?>">
            <?= $i ;?>
        </a>
    <?php endfor; ?>
</div>





<?php include 'views/layouts/footer.php' ?>
