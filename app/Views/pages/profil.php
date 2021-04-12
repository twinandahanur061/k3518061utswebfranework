<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="text-center" style="box-shadow: 0px 0px;padding: 10px 20px 0px;margin: 0px 0px 0px;">Video Profil PTIK</h2>
    <div class="iframe-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ijdrsNmd1YE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <?= $this->endSection(); ?>