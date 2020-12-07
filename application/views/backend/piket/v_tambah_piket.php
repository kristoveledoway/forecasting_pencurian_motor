<div class="col-xs-12">
    <div class="row">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="text-center">FORM TAMBAH DATA PIKET SAT RESKRIM</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <form action="<?php echo base_url('piket/tambah_data'); ?>" class="form-horizontal" role="form" method="POST">
                        <div class="form-group">
                            <div class="col-xs-3"></div>
                            <div class="col-xs-6">
                                <div>
                                    <label>Nama Piket : </label>
                                    <div>
                                        <input class="col-xs-12" type="text" name="nama_piket" placeholder="Masukan Nama" />
                                    </div>
                                </div>
                                <hr />
                                <div>
                                    <label for="timepicker1">Waktu Piket : </label>

                                    <div class="input-group bootstrap-timepicker">
                                        <input id="timepicker1" type="text" class="form-control" name="waktu_piket" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o bigger-110"></i>
                                        </span>
                                    </div>

                                    <hr />
                                </div>
                            </div>
                            <div class="col-xs-3"></div>
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