<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-xs-12">
                <p>
                    <a href="<?php echo base_url('laporan_polisi/tambah') ?>" class="btn btn-success fa fa-plus"> TAMBAH DATA</a>
                </p>
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="20">No.</th>
                            <th>Laporan Polisi</th>
                            <th>Tanggal Lapor</th>
                            <th>Nama Pelapor</th>
                            <th>Laporan Tahun</th>
                            <th width="130">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1;
                        foreach ($laporan as $l) { ?>
                            <tr>
                                <td><?= $i++; ?>.</td>
                                <td><?= $l['laporan_polisi']; ?></td>
                                <td><?= $l['tanggal_lapor']; ?></td>
                                <td><?= $l['nama_pelapor']; ?></td>
                                <td><?= $l['laporan_tahun']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="<?php echo base_url('laporan_polisi/edit/' . $l['id']) ?>">
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm align-center" href="<?php echo base_url('laporan_polisi/hapus/' . $l['id']) ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')">
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