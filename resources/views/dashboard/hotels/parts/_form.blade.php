@include('dashboard.components.form._text', ['name' => 'name'])
@include('dashboard.components.form._select', ['name' => 'status', 'data' => ['active' => __('Active'), 'inactive' => __('Inactive')]])
@include('dashboard.components.form._select', ['name' => 'destination_id', 'data' => $destinations])
@include('dashboard.components.form._text', ['name' => 'longitude'])
@include('dashboard.components.form._text', ['name' => 'latitude'])
@include('dashboard.components.form._number', ['name' => 'stars'])
@include('dashboard.components.form._number', ['name' => 'max_room'])
@include('dashboard.components.form._number', ['name' => 'available_single_rooms'])
@include('dashboard.components.form._number', ['name' => 'available_double_rooms'])
@include('dashboard.components.form._file_multiple', ['name' => 'images', 'object' => $hotel ?? null])
@include('dashboard.components.form._number', ['name' => 'price', 'value' => $hotel->price->price ?? null])
@include('dashboard.components.form._number', ['name' => 'd_price', 'value' => $hotel->price->d_price ?? null])
@include('dashboard.components.form._number', ['name' => 'system_price', 'value' => $hotel->price->system_price ?? null])
@include('dashboard.components.form._number', ['name' => 'system_d_price', 'value' => $hotel->price->system_d_price ?? null])
@include('dashboard.components.form._select', ['name' => 'weekday', 'selected' => $hotel->price->weekday ?? null, 'data' => config('enums.weekdays'), 'multiple' => true, 'select_2' => true])
@include('dashboard.components.form._select', ['name' => 'month', 'selected' => $hotel->price->month ?? null, 'data' => config('enums.months'), 'multiple' => true, 'select_2' => true])
@include('dashboard.components.form._number', ['name' => 'breakfast', 'value' => $hotel->price->breakfast ?? null])
@include('dashboard.components.form._number', ['name' => 'fee', 'value' => $hotel->price->fee ?? null])

<ul class="nav nav-tabs nav-tabs-top">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item"><a href="#top-{{$localeCode}}" class="nav-link @if($loop->first) active show @endif" data-toggle="tab">{{$properties['name']}}</a></li>
    @endforeach
</ul>

<div class="tab-content mt-3">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <div class="tab-pane fade @if($loop->first) active show @endif" id="top-{{$localeCode}}">
            @include('dashboard.components.form._textarea', ['name' => "details_$localeCode", 'value' => $data[$localeCode]->details ?? null, 'editor' => true])
            @include('dashboard.components.form._textarea', ['name' => "short_description_$localeCode", 'value' => $data[$localeCode]->short_description ?? null, 'editor' => true])
            @include('dashboard.components.form._textarea', ['name' => "payment_conditions_$localeCode", 'value' => $data[$localeCode]->payment_conditions ?? null])
            @include('dashboard.components.form._textarea', ['name' => "refund_conditions_$localeCode", 'value' => $data[$localeCode]->refund_conditions ?? null])
        </div>
    @endforeach
</div>





