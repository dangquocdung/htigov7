@if(!empty($CmBanners))
    <section>
        <!-- start slider -->
        <!-- Slider -->
        @foreach($CmBanners->slice(0,1) as $CmBanner)
            <?php
            try {
                $CmBanner_type = $CmBanner->webmasterBanner->type;
            } catch (Exception $e) {
                $CmBanner_type = 0;
            }
            ?>
        @endforeach
        <?php
        $title_var = "title_" . trans('backLang.boxCode');
        $details_var = "details_" . trans('backLang.boxCode');
        $file_var = "file_" . trans('backLang.boxCode');
        ?>
        
        <div class="banner-tuyentruyen">
            <div id="carousel-cm" class="carousel slide" data-ride="carousel">
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($CmBanners->where('status',1) as $key=>$CmBanner)
                        <div class="item
                        @if ($key == 0) active @endif">
                            <a href="{{ $CmBanner->link_url }}" target="_blank">
                                <img src="/uploads/banners/{{ $CmBanner->$file_var }}" width="100%">
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- end slider -->
    </section>
@endif