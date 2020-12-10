<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-xs-12">

                <div class="clearfix">

                    <?php
                    // Cek role user
                    if ($this->session->userdata('level') == 'admin') { // Jika role-nya admin
                    ?>
                        <a href="<?php echo base_url('laporan_polisi/tambah') ?>" class="btn btn-success fa fa-plus"> TAMBAH DATA</a>
                    <?php
                    }
                    ?>
                    <a href="<?php echo base_url('laporan_polisi/print') ?>" class="btn btn-success fa fa-plus"> PRINT DATA</a>

                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header">
                    Data Laporan Polisi
                </div>
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="20">No.</th>
                                <th>Laporan Polisi</th>
                                <th>Tanggal Lapor</th>
                                <th>Nama Pelapor</th>
                                <th>Laporan Tahun</th>
                                <th>Konfirmasi</th>
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
                                        <a class="btn btn-success btn-sm align-center" href="<?php echo base_url('laporan_polisi/konfirmasi/' . $l['id']) ?>" onclick="return confirm('Cek lagi konfimasi ini?')">
                                            Konfirmasi
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm align-center" href="<?php echo base_url('laporan_polisi/hapus/' . $l['id']) ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->