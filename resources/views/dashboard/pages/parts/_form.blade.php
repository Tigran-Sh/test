@include('dashboard.components.form._text', ['name' => 'slug'])

<ul class="nav nav-tabs nav-tabs-top">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item"><a href="#top-{{$localeCode}}" class="nav-link @if($loop->first) active show @endif" data-toggle="tab">{{$properties['name']}}</a></li>
    @endforeach
</ul>

<div class="tab-content mt-3">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <div class="tab-pane fade @if($loop->first) active show @endif" id="top-{{$localeCode}}">
            @include('dashboard.components.form._text', (['name' => "title_$localeCode", 'value' => $data[$localeCode]->title ?? null]))
            @include('dashboard.components.form._textarea', (['name' => "content_$localeCode", 'value' => $data[$localeCode]->content ?? null, 'editor' => true, 'rows' => 5]))
        </div>
    @endforeach
</div>

