<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM POK</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('post.pok')}}" method="post">
        @csrf
        <div class="ibox-content">
            <div class="row">
                <div class="col-6">
                    <div class="form-group" id="pd">
                         <label class="col-lg-12 control-label">RKO Kegiatan</label>
                        <select class="select2_demo_2 form-control" name="rko_id" id="rko_id">
                            @foreach($dropdown as $d)
                                <option value="{{$d->id}}">{{$d->nama_kegiatan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group" id="data_1">
                        <label class="col-lg-12 control-label">Bulan</label>
                        <div class="col-lg-12">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="bulan" id="bulan" class="form-control"
                                       value="{{$today}}" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Realisasi Fisik (Rp)</label>
                            <input placeholder="Realisasi Fisik (Rp)" data-mask="#.##0" data-mask-reverse="true" name="realisasi_fisik" id="realisasi_fisik"
                                   class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Realisasi Keuangan (Rp)</label>
                            <input placeholder="Realisasi Keuangan (Rp)" data-mask="#.##0" data-mask-reverse="true" name="realisasi_keu" id="realisasi_keu"
                                   class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Keterangan</label>
                            <input placeholder="Keterangan" name="ket" id="ket"
                                   class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="col-lg-offset-0 col-lg-12">
                            <button class="btn btn-sm btn-white" type="submit" id="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
            </div>
        </div>
    </div>
</div>
