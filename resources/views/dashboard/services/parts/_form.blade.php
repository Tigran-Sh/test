@include('dashboard.components.form._text', ['name' => 'name'])
@include('dashboard.components.form._select', ['name' => 'user_id', 'data' => $contacts])
@include('dashboard.components.form._select', ['name' => 'hotel_id', 'data' => $hotels])
@include('dashboard.components.form._number', ['name' => 'duration'])
@include('dashboard.components.form._text', ['name' => 'address'])
@include('dashboard.components.form._text', ['name' => 'longitude'])
@include('dashboard.components.form._text', ['name' => 'latitude'])
@include('dashboard.components.form._file_multiple', ['name' => 'images', 'object' => $service ?? null])

<ul class="nav nav-tabs nav-tabs-top">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item"><a href="#top-{{$localeCode}}" class="nav-link @if($loop->first) active show @endif"
                                data-toggle="tab">{{$properties['name']}}</a></li>
    @endforeach
</ul>

<div class="tab-content mt-3">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <div class="tab-pane fade @if($loop->first) active show @endif" id="top-{{$localeCode}}">
            @include('dashboard.components.form._text', (['name' => "name_$localeCode", 'value' => $data[$localeCode]->name ?? null]))
            @include('dashboard.components.form._text', (['name' => "team_proven_$localeCode", 'value' => $data[$localeCode]->team_proven ?? null]))
            @include('dashboard.components.form._text', (['name' => "dress_code_$localeCode", 'value' => $data[$localeCode]->dress_code ?? null]))
            @include('dashboard.components.form._text', (['name' => "slogan_$localeCode", 'value' => $data[$localeCode]->slogan ?? null]))
            @include('dashboard.components.form._textarea', (['name' => "description_$localeCode", 'value' => $data[$localeCode]->description ?? null]))
            @include('dashboard.components.form._textarea', (['name' => "details_$localeCode", 'value' => $data[$localeCode]->details ?? null]))
        </div>
    @endforeach
</div>
