<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher ::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Siswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL;?>/siswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari siswa.." name="keyword" id="keyword">
                    <button class="btn btn-primary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3> Daftar Siswa </h3>
                    <ul class="list-group">
                        <?php foreach( $data['siswa'] as $siswa ) : ?>
                            <li class="list-group-item">
                                <?=$siswa['nama']?>
                                <a style="text-decoration:none;" href="<?= BASEURL;?>/siswa/hapus/<?=$siswa['id']?>" class="badge text-bg-danger float-end ms-1" onclick="return confirm ('Hapus data?')"> Hapus </a>
                                <a style="text-decoration:none; " href="<?= BASEURL;?>/siswa/ubah/<?=$siswa['id']?>" class="badge text-bg-warning float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $siswa['id']; ?>"> Ubah </a>
                                <a style="text-decoration:none; " href="<?= BASEURL;?>/siswa/detail/<?=$siswa['id']?>" class="badge text-bg-primary float-end ms-1"> Detail </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="formModalLabel"> Tambah Data Siswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="number" class="form-control" id="nis" name="nis" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="Jurusan"> Jurusan </label>
                <select class="form-control" id="jurusan" name="jurusan" >
                <option value="Rekayasa Perangkat Lunak"> Rekayasa Perangkat Lunak </option>
                <option value="Desain Komunikasi Visual"> Desain Komunikasi Visual </option>
                <option value="Teknik Mekatronika"> Teknik Mekatronika </option>
                <option value="Teknik Komputer Jaringan"> Teknik Komputer Jaringan </option>
                <option value="Teknik Logistik"> Teknik Logistik </option>
                <option value="Perhotelan"> Perhotelan </option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"> Tambah data </button>
        </form>
        </div>
    </div>
    </div>
</div>