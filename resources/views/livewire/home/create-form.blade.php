<div>
    <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @error('tripName')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    @error('driver')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    @error('truck')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    @error('tasks')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="tripName">Trip Name</label>
                    <input type="text" class="form-control" wire:model="tripName" placeholder="write a name for trip..." name="tripName" id="tripName">
                </div>

                <div class="col-md-6">
                    <label for="drivers">Select the driver</label>
                    <select name="drivers" id="drivers" wire:model="driver" class="form-control">
                        @foreach($driver as $driverItem)
                            <option value="{{ $driverItem->id }}">{{ $driverItem->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="trucks">Select the truck</label>
                    <select name="trucks" id="trucks" wire:model="truck" class="form-control">
                        @foreach($truck as $truckItem)
                            <option value="{{ $truckItem->id  }}">{{ 'Model: '.$truckItem->truck_model .' / '.$truckItem->truck_code }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="trucks">Tasks</label>
                    <p class="text-se">( Hold the CTRL key and click to select multiple items )</p>
                    <select  multiple wire:model="tasks" class="form-control">
                        @foreach($this->tasks as $tasksItem)
                            @if(!is_null($tasksItem->trip_id))
                                <option disabled value="{{ $tasksItem->id  }}" disabled style="text-decoration: line-through;">{{ $tasksItem->task }}</option>
                            @else
                                <option value="{{ $tasksItem->id  }}" class="text-info">{{ $tasksItem->task }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="clearfix"></div>
                <br>

                <div class="col-md-12">
                    <button class="btn btn-success" wire:click="createTrip">Save Trip</button>
                </div>
            </div>
        </div>


    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>
