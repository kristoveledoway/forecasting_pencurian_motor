<h2>
    <center>Laporan Polisi</center>
</h2>
<hr />
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th width="20">No.</th>
        <th>Laporan Polisi</th>
        <th>Tanggal Lapor</th>
        <th>Nama Pelapor</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Pekerjaan</th>
        <th>No. HP</th>
        <th>Alamat</th>
        <th>Uraian</th>
        <th>Nama Motor</th>
        <th>No. Rangka</th>
        <th>No. Mesin</th>
        <th>Pasal</th>
        <th>Terlapor</th>
        <th>Unit</th>
        <th>Laporan Tahun</th>
    </tr>
    <?php $i = 1;
    foreach ($laporan as $l) { ?>
        <tr>
            <td><?= $i++; ?>.</td>
            <td><?= $l->laporan_polisi; ?></td>
            <td><?= $l->tanggal_lapor; ?></td>
            <td><?= $l->nama_pelapor; ?></td>
            <td><?= $l->umur; ?></td>
            <td><?= $l->jenis_kelamin; ?></td>
            <td><?= $l->agama; ?></td>
            <td><?= $l->pekerjaan; ?></td>
            <td><?= $l->no_hp; ?></td>
            <td><?= $l->alamat_tkp; ?></td>
            <td><?= $l->uraian_singkat; ?></td>
            <td><?= $l->nama_motor; ?></td>
            <td><?= $l->no_rangka; ?></td>
            <td><?= $l->no_mesin; ?></td>
            <td><?= $l->pasal; ?></td>
            <td><?= $l->terlapor; ?></td>
            <td><?= $l->unit; ?></td>
            <td><?= $l->laporan_tahun; ?></td>
        </tr>
    <?php } ?>
</table>