@include('dashboard.components.form._text', ['name' => 'address'])
@include('dashboard.components.form._select', ['name' => 'extra_service_type_id', 'data' => $types])
@include('dashboard.components.form._select', ['name' => 'user_id', 'data' => $contacts])
@include('dashboard.components.form._select', ['name' => 'destination_id', 'data' => $destinations])
@include('dashboard.components.form._text', ['name' => 'start_longitude'])
@include('dashboard.components.form._text', ['name' => 'end_longitude'])
@include('dashboard.components.form._text', ['name' => 'start_latitude'])
@include('dashboard.components.form._text', ['name' => 'end_latitude'])
@include('dashboard.components.form._number', ['name' => 'minimum'])
@include('dashboard.components.form._number', ['name' => 'maximum'])
@include('dashboard.components.form._number', ['name' => 'price_per_km'])
@include('dashboard.components.form._number', ['name' => 'car_size'])

<ul class="nav nav-tabs nav-tabs-top">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item"><a href="#top-{{$localeCode}}" class="nav-link @if($loop->first) active show @endif" data-toggle="tab">{{$properties['name']}}</a></li>
    @endforeach
</ul>

<div class="tab-content mt-3">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <div class="tab-pane fade @if($loop->first) active show @endif" id="top-{{$localeCode}}">
            @include('dashboard.components.form._textarea', ['name' => "description_$localeCode", 'value' => $data[$localeCode]->description ?? null])
            @include('dashboard.components.form._textarea', ['name' => "payment_conditions_$localeCode", 'value' => $data[$localeCode]->payment_conditions ?? null])
            @include('dashboard.components.form._textarea', ['name' => "refund_conditions_$localeCode", 'value' => $data[$localeCode]->refund_conditions ?? null])
        </div>
    @endforeach
</div>

