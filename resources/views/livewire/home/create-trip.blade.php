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
                            <input type="text" class="form-control" placeholder="write a name for trip..." name="tripName" id="tripName">
                        </div>

                        <div class="col-md-6">
                            <label for="drivers">Select the driver</label>
                            <select name="drivers" id="drivers" class="form-control">
                                <option value="ali">ali</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="trucks">Select the truck</label>
                            <select name="trucks" id="trucks" class="form-control">
                                <option value="aa02">aa02</option>
                            </select>
                        </div>

                        <div class="clearfix"></div>
                        <br>

                        <div class="col-md-12">
                            <button class="btn btn-success">Save Trip</button>
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
