<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-xs-12">
                <p>
                    <a href="<?php echo base_url('ruang/tambah') ?>" class="btn btn-success fa fa-plus"> TAMBAH DATA</a>
                </p>
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="20">No.</th>
                            <th>Nama Ruang Sium</th>
                            <th width="130">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1;
                        foreach ($ruang as $r) { ?>
                            <tr>
                                <td><?= $i++; ?>.</td>
                                <td><?= $r['nama_rs']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="<?php echo base_url('ruang/edit/' . $r['id_rs']) ?>">
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm align-center" href="<?php echo base_url('ruang/hapus/' . $r['id_rs']) ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.span -->
        </div><!-- /.row -->

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->