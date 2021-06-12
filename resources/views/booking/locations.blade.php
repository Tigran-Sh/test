@extends('layouts.app')
@section('head')
    <style>
        header {
            border-bottom: 0;
        }
    </style>
@endsection
@section('content')

<reservation-components.vue :route-id="{{ $package->id }}"></reservation-components.vue>

@endsection

@section('scripts')
@endsection
<script>
    import ReservationComponents
    export default {
        components: {ReservationComponents}
    }
</script>
