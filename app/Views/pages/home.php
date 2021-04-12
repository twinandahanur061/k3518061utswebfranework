<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div style="background-color: gray;">
    <aside class="text-primary"><img class="logo uns" src="assets/img/Logo-UNS-New-04.png" width="300" height="300">
        <h1 class="text-center text-dark" style="text-shadow: 1px 3px 12px;font-family: 'Abril Fatface', cursive;">Pendidikan Teknik Informatika dan Komputer</h1>
        <h1 class="text-center text-dark" style="text-shadow: 1px 3px 12px;font-family: 'Abril Fatface', cursive;">Universitas Sebelas Maret</h1>
    </aside>
</div>
<section class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="box-shadow: 0px 0px;padding: 10px 20px 0px;margin: 0px 0px 0px;">Informasi</h2>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item" style="padding: 20px;">
                <h3 class="name">Aktreditasi Program Studi</h3>
                <p class="description"><br>Berdasarkan&nbsp;<strong>SK BAN-PT NOMOR : 4485/SK/BAN-PT/Akred/S/XI/2019</strong>&nbsp;, Program Studi Pendidikan Teknik Informatika dan Komputer UNS telah terakreditasi dengan&nbsp;<strong>peringkat A</strong>.&nbsp;<br><br></p>
            </div>
            <div class="col-sm-6 col-md-4 item" style="padding: 20px;">
                <h3 class="name">Fasilitas</h3>
                <p class="description"><br>Progam Studi S-1 Pendidikan Teknik Informatika dan Komputer FKIP UNS menempati gedung yang cukup luas, representative dan strategis di lingkungan FKIP Universitas Sebelas Maret.<br></p>
            </div>
            <div class="col-sm-6 col-md-4 item" style="padding: 20px;">
                <h3 class="name">Jalur Penerimaan</h3>
                <p class="description"><br>Sistem penerimaan mahasiswa baru di program studi pendidikan teknik informatika dan komputer Fakultas Keguruan dan Ilmu Pendidikan Universitas Sebelas Maret untuk tahun pertama yaitutahun 2012 hanya membuka 1 jalur yaitu sistem SPMB.<br><br></p>
            </div>
        </div>
    </div>
</section>
<section class="article-list">
    <div class="container">
        <h2 class="text-center" style="box-shadow: 0px 0px;padding: 10px 20px 0px;margin: 0px 0px 0px;">Video Profil PTIK</h2>
        <div class="iframe-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ijdrsNmd1YE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <?= $this->endSection(); ?>