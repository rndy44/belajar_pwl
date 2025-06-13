<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
if (session()->getFlashData('success')) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}
?>
<!-- Table with stripped rows -->
<div class="row">
    <?php foreach ($product as $key => $item) : ?>
    <div class="col-lg-4">
        <?= form_open('keranjang') ?>
        <?php
            echo form_hidden('id', $item['id']);
            echo form_hidden('nama', $item['nama']);
            echo form_hidden('harga', $item['harga']);
            echo form_hidden('foto', $item['foto']);
            ?>
        <div class="card">
            <div class="card-body">
                <img src="<?php echo base_url() . "img/" . $item['foto'] ?>" alt="..." width="100%">
                <h5 class="card-title"><?php echo $item['nama'] ?><br><?php echo $item['harga'] ?></h5>
                <button type="submit" class="btn btn-info rounded-pill">Beli</button>
            </div>
        </div>
        <?= form_close() ?>
    </div>
    <?php endforeach ?>
</div>
<!-- End Table with stripped rows -->
<?= $this->endSection() ?>
ini halaman home<br>
<a href="/produk">ke halaman produk</a><br>
<a href="/keranjang">ke halaman keranjang</a>