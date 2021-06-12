@include('dashboard.components.form._text', ['name' => 'name'])
@include('dashboard.components.form._select', ['name' => 'package_type_id', 'data' => $types])
@include('dashboard.components.form._select', ['name' => 'hotel_id', 'data' => $hotels])
@include('dashboard.components.form._select', ['name' => 'meeting_room_id', 'data' => $meeting_rooms])
@include('dashboard.components.form._select', ['name' => 'services', 'data' => $services, 'select_2' => true, 'multiple' => true])
@include('dashboard.components.form._select', ['name' => 'extra_services', 'data' => $extra_services, 'select_2' => true, 'multiple' => true])
@include('dashboard.components.form._file', ['name' => 'image', 'object' => $package ?? null])

<ul class="nav nav-tabs nav-tabs-top">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item"><a href="#top-{{$localeCode}}" class="nav-link @if($loop->first) active show @endif" data-toggle="tab">{{$properties['name']}}</a></li>
    @endforeach
</ul>

<div class="tab-content mt-3">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <div class="tab-pane fade @if($loop->first) active show @endif" id="top-{{$localeCode}}">
            @include('dashboard.components.form._text', ['name' => "name_$localeCode", 'value' => $data[$localeCode]->name ?? null])
            @include('dashboard.components.form._textarea', ['name' => "description_$localeCode", 'value' => $data[$localeCode]->description ?? null])
        </div>
    @endforeach
</div>




