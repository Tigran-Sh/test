@include('dashboard.components.form._text', ['name' => 'name'])
@include('dashboard.components.form._select', ['name' => 'hotel_id', 'data' => $hotels])
@include('dashboard.components.form._number', ['name' => 'min'])
@include('dashboard.components.form._number', ['name' => 'max'])
@include('dashboard.components.form._number', ['name' => 'price_per_person'])
@include('dashboard.components.form._number', ['name' => 'daily_pay'])
@include('dashboard.components.form._number', ['name' => 'fee'])

<ul class="nav nav-tabs nav-tabs-top">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item"><a href="#top-{{$localeCode}}" class="nav-link @if($loop->first) active show @endif" data-toggle="tab">{{$properties['name']}}</a></li>
    @endforeach
</ul>

<div class="tab-content mt-3">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <div class="tab-pane fade @if($loop->first) active show @endif" id="top-{{$localeCode}}">
            @include('dashboard.components.form._textarea', ['name' => "description_$localeCode", 'value' => $data[$localeCode]->description ?? null])
        </div>
    @endforeach
</div>




