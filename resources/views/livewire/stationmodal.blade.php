<!-- Modal -->
<div wire:ignore.self class="modal fade" id="stationModal" tabindex="-1" role="dialog" aria-labelledby="stationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stationModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <!--<span aria-hidden="true">&times;</span>-->
        </button>
      </div>
    <form wire:submit.prevent="saveStation">
      <div class="modal-body">
        <div class="mb-3">
            <label>Station Name</label>
            <input type="text" wire:model="Station_Name" class="form_control">
            @error('station_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Start Date</label>
            <input type="text" wire:model="Start_Date" class="form_control">
            @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>End Date</label>
            <input type="text" wire:model="End_Date" class="form_control">
            @error('end_date') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Latitude Deg</label>
            <input type="text" wire:model="Latitude_deg" class="form_control">
            @error('latitude_deg') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Latitude Min</label>
            <input type="text" wire:model="Latitude_min" class="form_control">
            @error('latitude_min') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Latitude Sec</label>
            <input type="text" wire:model="Latitude_sec" class="form_control">
            @error('latitude_sec') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Longitude Deg</label>
            <input type="text" wire:model="Longitude_deg" class="form_control">
            @error('longitude_deg') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Longitude Min</label>
            <input type="text" wire:model="Longitude_min" class="form_control">
            @error('longitude_min') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Longitude Sec</label>
            <input type="text" wire:model="Longitude_sec" class="form_control">
            @error('longitude_sec') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Description</label>
            <input type="text" wire:model="Description" class="form_control">
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="text" wire:model="Image" class="form_control">
            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Country</label>
            <input type="text" wire:model="Country" class="form_control">
            @error('country') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>