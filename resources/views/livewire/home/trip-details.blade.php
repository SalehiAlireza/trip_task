<div class="col-8">
    <div class="tab-pane message-body active" id="inbox-message-1">
        <div class="message-top">
            <a class="btn btn btn-success new-message" data-toggle="modal" data-target="#flipFlop"> <i class="fa fa-envelope"></i> New Trips </a>
            <div class="new-message-wrapper">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Send message to...">
                    <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
        </div>
        <div class="message-chat">
            <div class="chat-body">
                <div>
                    @foreach($trips as $tripItem)
                        <button class="btn btn-info" wire:click="showDetail({{ $tripItem->id }})">#Trip : {{ $tripItem->name }}</button>
                    @endforeach
                </div>
                <hr>
                <div>
                    <h4>Show trip details : </h4>
                    <table class="table bg-info table-bordered table-striped">
                        <thead>
                        <tr>

                            <th scope="col">Driver</th>
                            <th scope="col">Truck</th>
                            <th scope="col">Truck Code</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>{{ $this->driver  }}</td>
                            <td>{{ $this->truck }}</td>
                            <td>{{ $this->truckCode }}</td>
                        </tr>

                        </tbody>
                    </table>

                    <table class="table bg-info table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="row">Tasks: </th>
                                <td >
                                    @foreach($this->tasks as $taskITem)
                                        <span class="badge badge-info">{{ $taskITem->task }}</span>
                                    @endforeach
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
