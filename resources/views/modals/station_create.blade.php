@extends('layouts.app')
@section('content')

<div>
    <livewire:station>
</div>

@endsection

@section('script')
    <script>

window.addEventListener('close-model', event => {

$('#stationModal').modal('hide');

})

</script>
@endsection