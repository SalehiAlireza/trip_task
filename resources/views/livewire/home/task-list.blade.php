<div>
    <div class="contacts-list scroll-y">

        <div class="tab-content">
            <h4 style="padding: 10px 10px;">Task Lists : </h4>
            <ul class="list-unstyled contacts">
                @foreach($tasks as $taskItem)
                    <li data-toggle="tab"  data-target="#inbox-message-1" class="active">
                        <div>
                            <p class="text-center">
                                <i class="fa fa-trash-o" wire:key="task-{{ $taskItem->id  }}" wire:click="deleteTask({{ $taskItem->id  }})" style="cursor: pointer;color: red !important;"></i>
                            </p>
                        </div>
                        <div class="vcentered info-combo">
                            <h3 class="no-margin-bottom name">
                                {{  substr($taskItem->task,0,15) }}
                            </h3>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>
