<div>

    @include('livewire.stationmodal')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
            @endif
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stationModal">
            ADD STATION
            </button>
            <!--<div class="card">
                <div class="card-header">
                    <h4>-->
                        <!-- Button trigger modal -->

                    <!--</h4>
                </div>-->
                <!--<div class="card-body">
                    table data
                </div>-->
            </div>
        </div>
    </div>
</div>
</div>
