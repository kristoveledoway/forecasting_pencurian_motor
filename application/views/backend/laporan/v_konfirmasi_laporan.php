<div class="col-xs-12">
    <div class="row">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="text-center">FORM LAPORAN POLISI</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <form action="<?php echo base_url('laporan_polisi/ditemukan/' . $temuan->id); ?>" class="form-horizontal" role="form" method="POST">
                        <div class="form-group">
                            <div class="col-xs-3">
                                <div>
                                    <label>Laporan Polisi : </label>
                                    <div>
                                        <input class="col-xs-12" type="text" name="laporan_polisi" placeholder="Masukan Laporan Polisi" value="<?php echo $temuan->laporan_polisi; ?>" readonly />
                                    </div>
                                </div>
                                <hr />
                                <div>
                                    <label>Tanggal Lapor : </label>
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-11">
                                            <div class="input-group">
                                                <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" name="tanggal_lapor" value="<?php echo $temuan->tanggal_lapor; ?>" readonly />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar bigger-110"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div>
                                    <label>Nama Pelapor : </label><br>
                                    <input class="col-xs-12" type="text" name="nama_pelapor" placeholder="Masukan Nama Pelapor" value="<?php echo $temuan->nama_pelapor; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>Umur : </label><br>
                                    <input class="col-xs-12" type="text" name="umur" placeholder="Masukan Umur Pelapor" value="<?php echo $temuan->umur; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>Jenis Kelamin : </label><br>
                                    <input class="col-xs-12" type="text" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin Pelapor" value="<?php echo $temuan->jenis_kelamin; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>Agama : </label><br>
                                    <input class="col-xs-12" type="text" name="agama" placeholder="Masukan Agama Pelapor" value="<?php echo $temuan->agama; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>Pekerjaan : </label><br>
                                    <input class="col-xs-12" type="text" name="pekerjaan" placeholder="Masukan Pekerjaan Pelapor" value="<?php echo $temuan->pekerjaan; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>No. HP : </label><br>
                                    <input class="col-xs-12" type="text" name="no_hp" placeholder="Masukan No. Hp Pelapor" value="<?php echo $temuan->no_hp; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>Alamat TKP : </label><br>
                                    <input class="col-xs-12" type="text" name="alamat_tkp" placeholder="Masukan Alamat Pelapor" value="<?php echo $temuan->alamat_tkp; ?>" readonly />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div>
                                    <label>Uraian Singkat : </label><br>
                                    <textarea class="autosize-transition form-control" name="uraian_singkat" placeholder="Masukan Uraian Singkat" value="<?php echo $temuan->uraian_singkat; ?>" readonly></textarea>
                                </div>
                                <hr />
                                <div>
                                    <label>Nama Motor : </label><br>
                                    <input class="col-xs-12" type="text" name="nama_motor" placeholder="Masukan Nama Motor" value="<?php echo $temuan->nama_motor; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>No. Rangka : </label><br>
                                    <input class="col-xs-12" type="text" name="no_rangka" placeholder="Masukan No. Rangka" value="<?php echo $temuan->no_rangka; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>No. Mesin : </label><br>
                                    <input class="col-xs-12" type="text" name="no_mesin" placeholder="Masukan No. Mesin" value="<?php echo $temuan->no_mesin; ?>" readonly />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div>
                                    <label>Pasal : </label><br>
                                    <input class="col-xs-12" type="text" name="pasal" placeholder="Masukan Pasal" value="<?php echo $temuan->pasal; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>Terlapor : </label><br>
                                    <input class="col-xs-12" type="text" name="terlapor" placeholder="Masukan Terlapor" value="<?php echo $temuan->terlapor; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>Unit : </label><br>
                                    <input class="col-xs-12" type="text" name="unit" placeholder="Masukan Unit" value="<?php echo $temuan->unit; ?>" readonly />
                                </div>
                                <hr />
                                <div>
                                    <label>Laporan Tahun : </label><br>
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-11">
                                            <div class="input-group">
                                                <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" name="laporan_tahun" value="<?php echo $temuan->laporan_tahun; ?>" readonly />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar bigger-110"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions center">
                            <button type="submit" class="btn btn-sm btn-success">
                                Kendaraan Ditemukan
                                <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- /.row -->