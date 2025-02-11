<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM EDIT Pengeluaran Perusahaan/Usaha Menengah dan Besar untuk Pekerja Menurut Kabupaten/Kota dan Jenis Pengeluaran</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.pengeluaranpekerja', $edit_pengeluaran_pekerja->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_pengeluaran_pekerja->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_pengeluaran_pekerja->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Banyaknya Perusahaan *</label>
                                <input placeholder="Banyak Perusahaan" name="banyak_perusahaan" id="banyak_perusahaan" value="{{$edit_pengeluaran_pekerja->banyak_perusahaan}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Kerja Produksi</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Upah / Gaji *</label>
                                <input placeholder="Upah / Gaji" name="produksi_upah" id="produksi_upah" value="{{$edit_pengeluaran_pekerja->produksi_upah}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Insentif Lainnya *</label>
                                <input placeholder="Insentif" name="produksi_insentif" id="produksi_insentif" value="{{$edit_pengeluaran_pekerja->produksi_insentif}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Kerja Lainnya</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Upah / Gaji *</label>
                                <input placeholder="Upah / Gaji" name="lainnya_upah" id="lainnya_upah" value="{{$edit_pengeluaran_pekerja->lainnya_upah}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Insentif Lainnya *</label>
                                <input placeholder="Insentif" name="lainnya_insentif" id="lainnya_insentif" value="{{$edit_pengeluaran_pekerja->lainnya_insentif}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jumlah" id="jumlah" value="{{$edit_pengeluaran_pekerja->jumlah}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pengeluaran Per Pekerja *</label>
                                <input placeholder="" name="pengeluaran_pekerja" id="pengeluaran_pekerja" value="{{$edit_pengeluaran_pekerja->pengeluaran_pekerja}}" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
