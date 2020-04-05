<?php
    $category_title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
?>

<ul>
    <?php
    $link_title_var = "title_" . trans('backLang.boxCode');
    ?>
    @foreach($FooterMenuLinks as $FooterMenuLink)

        <?php
            if ($FooterMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                    $mmnnuu_link = url(trans('backLang.code')."/" .$FooterMenuLink->webmasterSection[$slug_var]);
                }else{
                    $mmnnuu_link = url($FooterMenuLink->webmasterSection[$slug_var]);
                }
            }else{
                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                    $mmnnuu_link =url(trans('backLang.code')."/" .$FooterMenuLink->webmasterSection['name']);
                }else{
                    $mmnnuu_link =url($FooterMenuLink->webmasterSection['name']);
                }
            }
        ?>
        
            
        <li style="width:20%;">
            <a href="{{ (trim($FooterMenuLink->link) !="") ? $FooterMenuLink->link:$mmnnuu_link }}">{{ $FooterMenuLink->$link_title_var }}</a>
        </li>
        
    @endforeach

</ul>
