<?php
    $title_var = "title_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $file_var = "file_" . trans('backLang.boxCode');
?>

<header>
    
            <div class="banner-header">

                    <img src="/uploads/banners/15232802311756.jpg" width="100%">

            </div>

            <div class="menu-main hidden-xs" style="margin-bottom: 5px; z-index: 1000;">
                <div id="top_nav" class="ddsmoothmenu">
                    @include('frontEnd.includes.menu')
                </div>
            </div>
            <div class="menu-main visible-xs">
                <div id="top_nav" class="ddsmoothmenu">
                    @include('frontEnd.includes.menu-mb')
                </div>
            </div>

            @if (!empty($MarqueeTopics))

                <marquee class="hot-tip" behavior="scroll" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="7">
                    
                    @foreach($MarqueeTopics as $key=>$Topic)

                        <?php
                            if ($Topic->$title_var != "") {
                                $title = $Topic->$title_var;
                            } else {
                                $title = $Topic->$title_var2;
                            }
                            if ($Topic->$details_var != "") {
                                $details = $details_var;
                            } else {
                                $details = $details_var2;
                            }
                            $section = "";
                            try {
                                if ($Topic->section->$title_var != "") {
                                    $section = $Topic->section->$title_var;
                                } else {
                                    $section = $Topic->section->$title_var2;
                                }
                            } catch (Exception $e) {
                                $section = "";
                            }

                            if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                    $topic_link_url = url(trans('backLang.code') . "/" . $Topic->id . "-" . $Topic->$slug_var);
                                } else {
                                    $topic_link_url = url($Topic->id . "-" . $Topic->$slug_var);
                                }
                            } else {
                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                    $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                } else {
                                    $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                }
                            }
                        ?>
                        
                        <a href="{{ $topic_link_url }}" target="_blank" style="text-decoration: none">{{ $Topic->$title_var }}</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;

                        @endforeach
                </marquee>

            @endif

</header>