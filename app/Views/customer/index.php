<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Customer</h3>
        </div>

        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/customer/create'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>Kode</th>
                    <th>Barcode/ISBN</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Keterangan</th>
                    <th>Harga Buku(Rp.)</th>
                    <th>Diskon Beli(%)</th>
                    <th>Diskon Jual(%)</th>
                    <th>Kategori</th>
                    <th>Penerbit</th>
                    <th>Distributor</th>
                    <th scope="row justify-content-md-center">Action</th>
                </tr>

                <?php

                $no = 1;
                foreach ($customer as $row) {
                ?>
                    <tr>
                        <td><?= $row->code; ?></td>
                        <td><?= $row->barcode; ?></td>
                        <td><?= $row->judul; ?></td>
                        <td><?= $row->pengarang; ?></td>
                        <td><?= $row->keterangan; ?></td>
                        <td><?= $row->harga; ?></td>
                        <td><?= $row->diskon_beli; ?></td>
                        <td><?= $row->diskon_jual; ?></td>
                        <td><?= $row->kategori; ?></td>
                        <td><?= $row->penerbit; ?></td>
                        <td><?= $row->distributor; ?></td>


                        <td>
                            <a title="Edit" href="<?= base_url("customer/edit/$row->code"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("customer/delete/$row->code") ?>" class="btn
      btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php

                }
                ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>