<div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel">Create A Trip</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="tripName">Trip Name</label>
                            <input type="text" class="form-control" wire:model="tripName" placeholder="write a name for trip..." name="tripName" id="tripName">
                        </div>

                        <div class="col-md-6">
                            <label for="drivers">Select the driver</label>
                            <select name="drivers" id="drivers" wire:model="driver" class="form-control">
                                @foreach($drivers as $driverItem)
                                    <option value="{{ $driverItem->id }}">{{ $driverItem->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="trucks">Select the truck</label>
                            <select name="trucks" id="trucks" wire:model="truck" class="form-control">
                                @foreach($trucks as $truckItem)
                                    <option value="{{ $truckItem->id  }}">{{ 'Model: '.$truckItem->truck_model .' / '.$truckItem->truck_code }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="trucks">Tasks</label>
                            <select  multiple id="trucks" wire:model="tasks" class="form-control">
                                @foreach($trucks as $truckItem)
                                    <option value="{{ $truckItem->id  }}">{{ 'Model: '.$truckItem->truck_model .' / '.$truckItem->truck_code }}</option>
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
    </div>
</div>
