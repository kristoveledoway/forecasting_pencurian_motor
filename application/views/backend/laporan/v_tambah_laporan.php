<div class="col-xs-12">
    <div class="row">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="text-center">FORM LAPORAN POLISI</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <form action="<?php echo base_url('laporan_polisi/tambah_data'); ?>" class="form-horizontal" role="form" method="POST">
                        <div class="form-group">
                            <div class="col-xs-3">
                                <div>
                                    <label>Laporan Polisi : </label>
                                    <div>
                                        <input class="col-xs-12" type="text" name="laporan_polisi" placeholder="Masukan Laporan Polisi" />
                                    </div>
                                </div>
                                <hr />
                                <div>
                                    <label>Tanggal Lapor : </label>
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-11">
                                            <div class="input-group">
                                                <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" name="tanggal_lapor" />
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
                                    <input class="col-xs-12" type="text" name="nama_pelapor" placeholder="Masukan Nama Pelapor" />
                                </div>
                                <hr />
                                <div>
                                    <label>Umur : </label><br>
                                    <input class="col-xs-12" type="text" name="umur" placeholder="Masukan Umur Pelapor" />
                                </div>
                                <hr />
                                <div>
                                    <label>Jenis Kelamin : </label><br>
                                    <input class="col-xs-12" type="text" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin Pelapor" />
                                </div>
                                <hr />
                                <div>
                                    <label>Agama : </label><br>
                                    <input class="col-xs-12" type="text" name="agama" placeholder="Masukan Agama Pelapor" />
                                </div>
                                <hr />
                                <div>
                                    <label>Pekerjaan : </label><br>
                                    <input class="col-xs-12" type="text" name="pekerjaan" placeholder="Masukan Pekerjaan Pelapor" />
                                </div>
                                <hr />
                                <div>
                                    <label>No. HP : </label><br>
                                    <input class="col-xs-12" type="text" name="no_hp" placeholder="Masukan No. Hp Pelapor" />
                                </div>
                                <hr />
                                <div>
                                    <label>Alamat TKP : </label><br>
                                    <input class="col-xs-12" type="text" name="alamat_tkp" placeholder="Masukan Alamat Pelapor" />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div>
                                    <label>Uraian Singkat : </label><br>
                                    <textarea class="autosize-transition form-control" name="uraian_singkat" placeholder="Masukan Uraian Singkat"></textarea>
                                </div>
                                <hr />
                                <div>
                                    <label>Nama Motor : </label><br>
                                    <input class="col-xs-12" type="text" name="nama_motor" placeholder="Masukan Nama Motor" />
                                </div>
                                <hr />
                                <div>
                                    <label>No. Rangka : </label><br>
                                    <input class="col-xs-12" type="text" name="no_rangka" placeholder="Masukan No. Rangka" />
                                </div>
                                <hr />
                                <div>
                                    <label>No. Mesin : </label><br>
                                    <input class="col-xs-12" type="text" name="no_mesin" placeholder="Masukan No. Mesin" />
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div>
                                    <label>Pasal : </label><br>
                                    <input class="col-xs-12" type="text" name="pasal" placeholder="Masukan Pasal" />
                                </div>
                                <hr />
                                <div>
                                    <label>Terlapor : </label><br>
                                    <input class="col-xs-12" type="text" name="terlapor" placeholder="Masukan Terlapor" />
                                </div>
                                <hr />
                                <div>
                                    <label>Unit : </label><br>
                                    <input class="col-xs-12" type="text" name="unit" placeholder="Masukan Unit" />
                                </div>
                                <hr />
                                <div>
                                    <label>Laporan Tahun : </label><br>
                                    <div class="row">
                                        <div class="col-xs-8 col-sm-11">
                                            <div class="input-group">
                                                <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" name="laporan_tahun" />
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
                                Simpan
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