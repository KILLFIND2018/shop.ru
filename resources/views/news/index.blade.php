@include('layouts.head')
@include('layouts.mainmenu')

<div class="news-header">
    <h1>{{ $title}}</h1>
</div>
<div class="news-items">



    @foreach($news as $arrnews)
        <div class="news-item">
            {{ $arrnews->id }}
            {{ $arrnews->img }}
            {{ \Carbon\Carbon::parse($arrnews->date)->translatedFormat('j F Y')}}
            {{ $arrnews->title }}
            {{ $arrnews->short_content }}
            {{ $arrnews->content }}
            {{ $arrnews->url }}

        </div>
    @endforeach

</div>



@include('layouts.footer')

