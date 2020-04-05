
@if ($SideBanners->where('status',1)->where('type_id',2)->count() > 0)


    <div class="row block3">
        <div class="box box-default">
            <div class="box-header with-border">
                <img src="/images/background/lotus.ico" width="30px">
                <h4 class="box-title"> &nbsp;{{ trans('frontLang.events') }}</h4>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                

                <div class="demo-gallery">

                        <div id="su-kien" class="list-unstyled justified-gallery">
                            @foreach($SideBanners->where('status',1)->where('type_id',2) as $photo)
                            <a href="/uploads/banners/{{ $photo->$file_var }}" data-sub-html="{{ $photo->$title_var }}">
                                <img class="img-responsive" src="/uploads/banners/{{ $photo->$file_var }}" />
                                <div class="demo-gallery-poster">
                                    <img src="/frontEnd/img/zoom.png">
                                </div>
                            </a>
                            @endforeach
                            
                        
                        </div>
                        
                </div>
            </div>
        </div>
    </div>


@endif

@if ($SideBanners->where('status',1)->where('type_id',1)->count() > 0)

    <div class="row block3">
        <div class="box box-default">
            <div class="box-header with-border">
                <img src="/images/background/lotus.ico" width="30px">
                <h4 class="box-title"> &nbsp;{{ trans('frontLang.sponsers') }}</h4>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                

                <div class="demo-gallery">

                        <div id="doanh-nghiep" class="list-unstyled justified-gallery">
                            @foreach($SideBanners->where('status',1)->where('type_id',1) as $photo)
                            <a href="/uploads/banners/{{ $photo->$file_var }}" data-sub-html="{{ $photo->$title_var }}">
                                <img class="img-responsive" src="/uploads/banners/{{ $photo->$file_var }}" />
                                <div class="demo-gallery-poster">
                                    <img src="/frontEnd/img/zoom.png">
                                </div>
                            </a>
                            @endforeach
                            
                        
                        </div>
                        
                </div>
            </div>
        </div>
    </div>

    
@endif



