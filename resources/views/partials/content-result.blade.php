@php 
$table_row=$table['table_row'];
//$final_result=$table['class_within_class_final_result']; 
$table_title = $table['table_title'];
@endphp
<section class="results-section py-16 bg-repeat-x bg-top bg-auto lg:bg-no-repeat lg:bg-cover relative px-9 lg:px-0">
    <div class="container mx-auto">
        @if($results['starting_text'] || $results['middle_text'] || $results['ending_text'] || $results['link'] || $results['content'])
        <div class="block lg:grid grid-cols-12 lg:gap-5 lg:px-16 items-center">
            <div class="col-span-6 col-start-4 text-center">
            @if($results['starting_text'] || $results['middle_text'] || $results['ending_text'])<h1 class="font-40 font-normal tk-modesto-poster tracking-wider mb-0.5 uppercase">{!! $results['starting_text'] !!}<span class="color-red">{!! $results['middle_text'] !!} </span>{!! $results['ending_text'] !!}</h1>@endif
            @if($results['link'])
                @if($results['link']['target'])
                    @php $target = $results['link']['target']; @endphp
                @else
                    @php $target = "_blank"; @endphp
                @endif
                <a href="{{$results['link']['url']}}" class="tracking-wider inline-block button-red uppercase tk-azo-sans-web text-base font-bold text-white mt-3" target="{{$target}}">{{$results['link']['title']}}</a>
            @endif
            @if($results['content'])
                <div class="wysiwyg-content text-base tracking-wider tk-azo-sans-web font-normal pb-6 pt-7">
                    {!! $results['content'] !!}
                </div>
            @endif
            </div>
        </div>
        @endif
        @if($table_row)
            <div class="block lg:grid grid-cols-12 lg:gap-5 items-center pt-8">
                <div class="col-span-12">
                    <table class="table-auto w-full text-center border-separate border-spacing-1 text-xl font-bold tracking-wider tk-azo-sans-web bg-white img-drop-shadow uppercase">
                        <thead>
                            <tr class="bg-red text-white">
                            <th>Date</th>
                            <th>Class</th>
                            <th>Round</th>
                            <th>Class within class final result</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr class="text-white">
									@if($table_title)
                                    <td colspan="3" class="bg-black">{!! $table_title !!}</td>
									@endif
                                    <td class="bg-red"></td>
									{{-- @if($final_result)
                                    <td rowspan="0" class="bg-red">
                                    @foreach($final_result as $f_result)
                                        @php $detail=$f_result['detail']; @endphp
                                        @if($detail)
                                            @php $target = $detail['target'];  @endphp
                                            <a href="{{$detail['url']}}" target="{{$target}}" class="block">{{$detail['title']}}</a>
                                        @endif
                                    @endforeach
                                    </td>
									@endif --}}
                                </tr>
                            
                            @if($table_row)
                                @php $k=1; @endphp
                                @foreach($table_row as $t_data)
                                    @php 
                                        $date=$t_data['date'];
                                        $class_round=$t_data['class_round'];
                                        $class_count=0;
                                        $tr_class='';
                                        $td_class=2;
                                        $mod_round=$k%2;
                                        if($mod_round==1){
                                            $tr_class=' odd';
                                        }
                                        else {
                                            $tr_class=' even';
                                        }
                                    @endphp
                                    @if($date || $class_round || $result_link)
                                        <tr class="tr-data{{$tr_class}}">
                                            @if($date)<td rowspan="{{count($class_round)}}" class="td-1">{{$date}}</td>@endif
                                            @if($class_round)
                                                @php $i=1; @endphp
                                                @foreach($class_round as $r_data)
                                                    @if($i==1)
                                                        @php
                                                        $class=$r_data['class'];
                                                        $round=$r_data['round'];
                                                        $result_link=$r_data['result_link'];
                                                        @endphp
                                                        @if($class)<td class="color-red td-{{$td_class}}"><a href="{{$class['url']}}" target="_blank">{{$class['title']}}</a></td>@endif
                                                        @php $td_class_new=$td_class+1; @endphp
                                                        @if($round)<td class="color-red td-{{$td_class_new}}">{{$round}}</td>@endif
                                                        @if($result_link)
                                                            @php $target = $result_link['target'];  @endphp
                                                            <td class="bg-red text-white"><a href="{{$result_link['url']}}" target="{{$target}}" class="block">{{$result_link['title']}}</a></td>
                                                        @else
                                                            <td class="bg-red text-white"></td>
                                                        @endif
                                                    @endif
                                                    @php $i++; @endphp
                                                @endforeach
                                            @endif
                                        </tr>
                                        @if($class_round)
                                            @for($j=1;$j<=count($class_round);$j++)
                                                @php $i=1; @endphp
                                                @foreach($class_round as $r_data)
                                                    @if($j>=2 && $j==$i)
                                                        <tr class="tr-data{{$tr_class}}">
                                                        @php
                                                        $class=$r_data['class'];
                                                        $round=$r_data['round'];
                                                        $result_link=$r_data['result_link'];
                                                        @endphp
                                                            @if($class)<td class="color-red td-{{$td_class}}"><a href="{{$class['url']}}" target="_blank">{{$class['title']}}</a></td>@endif
                                                            @php $td_class_new=$td_class+1; @endphp
                                                            @if($round)<td class="color-red td-{{$td_class_new}}">{{$round}}</td>@endif
                                                            @if($result_link)
                                                                @php $target = $result_link['target'];  @endphp
                                                                <td class="bg-red text-white"><a href="{{$result_link['url']}}" target="{{$target}}" class="block">{{$result_link['title']}}</a></td>
                                                            @else
                                                                <td class="bg-red text-white"></td>
                                                            @endif
                                                        </tr>   
                                                    @endif
                                                        @php $i++; @endphp
                                                    @endforeach
                                            @endfor
                                        @endif
                                    @endif
                                    @php $k++; @endphp
                                @endforeach
                            @endif
                        </tbody>
                        </table>
                </div>
            </div>
        @endif
    </div>
</section>