@include('dashboard.components.form._text', ['name' => 'name'])
@include('dashboard.components.form._select', ['name' => 'company_type_id', 'data' => $company_types])
@include('dashboard.components.form._select', ['name' => 'user_id','data' => $contacts, 'selected' => isset($company) ? $company->contacts()->first()->id : null])
@include('dashboard.components.form._text', ['name' => 'website'])
@include('dashboard.components.form._email', ['name' => 'email'])
@include('dashboard.components.form._number', ['name' => 'phone'])
@include('dashboard.components.form._number', ['name' => 'fax'])
@include('dashboard.components.form._text', ['name' => 'zip'])
@include('dashboard.components.form._text', ['name' => 'city'])
@include('dashboard.components.form._text', ['name' => 'street'])
@include('dashboard.components.form._text', ['name' => 'house'])
@include('dashboard.components.form._file', ['name' => 'image', 'object' => $company ?? null])

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

