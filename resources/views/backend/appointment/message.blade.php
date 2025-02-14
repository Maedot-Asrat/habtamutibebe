<div id="messages">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->
        @if(count(Helper::appointmentList())>5)
            <span data-count="5" class="badge badge-danger badge-counter">5+</span>
        @else 

    <span data-count="{{count(Helper::appointmentList())}}" class="badge badge-danger badge-counter">{{count(Helper::appointmentList())}}</span>

        @endif
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
        Appointments Center
        </h6>
        <div id="message-items">
            @foreach(Helper::appointmentList() as $appointment)
                <a class="dropdown-item d-flex align-items-center" href="{{route('appointment.show',$appointment->id)}}">
                    <div class="dropdown-list-image mr-3">
                        @if($appointment->photo)
                        <img class="rounded-circle" src="{{$appointment->photo}}" alt="profile">
                        @else 
                        <img class="rounded-circle" src="{{asset('backend/img/avatar.png')}}" alt="default img">
                        @endif
                        {{-- <div class="status-indicator bg-success"></div> --}}
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">{{$appointment->phone}}</div>
                        <div class="small text-gray-500">{{$appointment->name}} · {{$appointment->created_at->diffForHumans()}}</div>
                    </div>
                </a>
                @if($loop->index+1==5) 
                  @php 
                    break;
                  @endphp
                @endif
            @endforeach
         
        </div>
        <a class="dropdown-item text-center small text-gray-500" href="{{route('appointment.index')}}">Read More Appointments</a>
    </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {

    Echo.channel('message')
      .listen('MessageSent', (e) => {

      const message_container = $('#message-items');
      const message_counter_area = $('#messages .count');
      const message_counter = parseInt( $(message_counter_area).attr('data-count') ) + 1;
      const message_length = parseInt( $('#message-items>.dropdown-item').length );
      $(message_counter_area).attr('data-count', message_counter);

      const data = `
      <a class="dropdown-item d-flex align-items-center message-item" href="${e.message.url}">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="${e.message.photo}" alt="${e.message.name}">
        </div>
        <div class="font-weight-bold">
          <div class="text-truncate">${e.message.subject}</div>
          <div class="small text-gray-500">${e.message.name} · ${e.message.date}</div>
        </div>
      </a>
      `;

      $(message_container).prepend(data);

      if(message_counter<=5){
        $(message_counter_area).text( message_counter );
      }else{ 
        $(message_counter_area).text('5+');
      };

      if(message_length>=5) $(message_container).find('.message-item').last().remove();

    });

  });
</script>
@endpush
