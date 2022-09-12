@if(isset($video_section) && $video_section)
<section class="videos-section pattern-bg py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto">
        @php $grid ='grid-cols-2';  @endphp
        @if(count($video_section)==1)
            @php $grid = 'grid-cols-12'; $col_start = 'col-start-4 col-span-6'; @endphp
        @else
            @php $grid = 'grid-cols-2'; $col_start = ''; @endphp
        @endif

        <div class="block lg:grid {{$grid}} lg:gap-20 lg:px-14 items-start">
            @php $i=0; @endphp
            @foreach($video_section as $video)
                <div class="video-holder mb-8 lg:mb-0 {{$col_start}}">
                        @if($video['video_url'])
                                    @php 
                                    $src = "";
                                        $ifrm = $video['video_url'];
                                        $sources = explode("src",$ifrm);
                                        $id = explode("/",$sources[1]);
                                    @endphp
                                    @if($id[2]=="www.youtube.com")
                                    @php $src= "";
                                    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video['video_url'], $match);
                                        $video_id = $match[1];

                                        $image = "https://i3.ytimg.com/vi/". $video_id ."/hqdefault.jpg"; @endphp
                                    @endif
                                    @if($id[2]=="player.vimeo.com")
                                        @php
                                            $ids = explode("?",$sources[1]);
                                            $v_id = explode("/",$ids[0]);

                                        $imgid = $v_id['4'];

                                        $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));

                                        @endphp

                                    @endif
                                    @php
                                        // add extra params to iframe src
                                        $params = array(
                                            'controls'    => 0,
                                            'hd'        => 1,
                                            'autohide'    => 1, 
                                            'autoplay'  => 1,
                                        );

                                        $new_src = add_query_arg($params, $src);

                                        $video['video_url'] = str_replace($src, $new_src, $video['video_url']);

                                        // add extra attributes to iframe html
                                        $attributes = 'loading=lazy" frameborder="0" class="lazyload" allow="autoplay"';

                                        $video['video_url'] = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video['video_url']);
                                        $video['video_url'] =  preg_replace('/src="(.+?)"/', 'src="$1&autoplay=1"', $video['video_url']); // this is needed for autoplay!
                                    @endphp
                                    @if($video['play_icon'])<span class="play-icon " id="play-{{$i}}">{!! $video['play_icon'] !!}</span>@endif
                                <div class="video-image" id="video-image-{{$i}}">
                                    <img src="@if($id[2]=='player.vimeo.com'){{$hash[0]['thumbnail_large']}}@elseif($id[2]=='www.youtube.com'){{$image}}@endif" class="img-drop-shadow rounded-md">
                                <div class="video-player vp-{{$i}}"></div>
                                </div>
                                <script>    
                                    jQuery( document ).ready(function() {

                                    jQuery(document).on('click', '#play-{{$i}}', function() {
                                        jQuery(this).hide();
                                        jQuery("#video-image-{{$i}}").addClass('video-played')
                                        jQuery(".vp-{{$i}}").html('{!! $video["video_url"] !!}');
                                    });
                                    });
                                </script>
                                @php
                                $title = explode("title",$ifrm); 
                                $title_iframe = explode('"',$title[1]);
                                @endphp
                        <h3 class="title pt-5 text-2xl tk-modesto-poster tracking-wider uppercase">{{ htmlspecialchars_decode($title_iframe[1])}}</h3>
                        @endif
                    
                </div> 
                
            @php $i++ @endphp @endforeach
        </div>
    </div>
</section>
@endif



								 