@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Packages')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>

                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('packages.index')}}" class="breadcrumbs-link">{{__('Packages')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Packages')}}</h3>
                </div>

                <div class="ml-auto">
                    <a href="{{route('packages.create')}}" class="btn btn-create">
                        <i class="flaticon2-plus mr-2"></i>
                        {{__('Create New Package')}}
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="d-flex align-items-end justify-content-between flex-wrap">
                    <form action="{{route('packages.index')}}" class="ml-auto mb-4">
                        <div class="search-block position-relative ml-auto">
                            <input type="search" placeholder="{{__('Search')}}" name="search" class="form-control"
                                   value="{{request()->get('search')}}" aria-label="search">
                            <button type="submit" class="btn">
                                <i class="flaticon-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table mobile-table">
                        <thead>
                        <tr>
                            <th>@sortablelink('id', __('ID'))</th>
                            <th>@sortablelink('name', __('Name'))</th>
                            <th>@sortablelink('type.name', __('Type'))</th>
                            <th>@sortablelink('hotel.name', __('Hotel'))</th>
                            <th>@sortablelink('meeting_room.name', __('Meeting Room'))</th>
                            <th>@sortablelink('created_at', __('Created at'))</th>
                            <th class="text-center" style="width: 90px">{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($packages as $package)
                        <tr>
                            <td>{{$package->id}}</td>
                            <td>{{$package->name ?? ''}}</td>
                            <td>{{$package->type->name ?? ''}}</td>
                            <td>{{$package->hotel->name ?? ''}}</td>
                            <td>{{$package->meeting_room->name ?? ''}}</td>
                            <td>{{$package->created_at}}</td>
                            <td class="table-buttons">
                                <div class="text-center table-buttons">
                                    <a href="{{route('packages.show', $package->id)}}" class="btn" title="{{__('Show details')}}">
                                        <i class="flaticon-eye"></i>
                                    </a>
                                    <a href="{{route('packages.edit', $package->id)}}" class="btn" title="{{__('Edit details')}}">
                                        <i class="flaticon-edit"></i>
                                    </a>
                                    <a href="#" class="btn" title="{{__('Delete')}}" onclick="$(this).next().submit()">
                                        <i class="flaticon2-trash"></i>
                                    </a>
                                    <form action="{{route('packages.destroy', $package->id)}}" method="POST" onsubmit="return confirm('{{__('Are You Sure?')}}')">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $packages->appends(request()->all())->links() !!}
            </div>
        </div>
    </div>

@endsection

