<div id="share-applications">
  <a class="nav-link dropdown-toggle" href="#" id="shareApplicationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-folder fa-fw"></i>
      <!-- Counter - Share Applications -->
      @if(count(Helper::shareApplicationList()) > 5)
          <span data-count="5" class="badge badge-danger badge-counter">5+</span>
      @else 
          <span data-count="{{ count(Helper::shareApplicationList()) }}" class="badge badge-danger badge-counter">{{ count(Helper::shareApplicationList()) }}</span>
      @endif
  </a>
  <!-- Dropdown - Share Applications -->
  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="shareApplicationsDropdown">
      <h6 class="dropdown-header">
          Share Applications Center
      </h6>
      <div id="share-application-items">
          @foreach(Helper::shareApplicationList() as $shareApplication)
              <a class="dropdown-item d-flex align-items-center" href="{{ route('share-application.show', $shareApplication->id) }}">
                  <div class="font-weight-bold">
                      <div class="text-truncate">Name: {{ $shareApplication->name_to_grandmother }}</div>
                      <div class="small text-gray-500">Submitted: {{ $shareApplication->created_at->diffForHumans() }}</div>
                  </div>
              </a>
              @if($loop->index + 1 == 5) 
                @php 
                  break;
                @endphp
              @endif
          @endforeach
      </div>
      <a class="dropdown-item text-center small text-gray-500" href="{{ route('share-application.index') }}">Read More Applications</a>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

  Echo.channel('share-application')
    .listen('ShareApplicationReceived', (e) => {

    const application_container = $('#share-application-items');
    const application_counter_area = $('#share-applications .count');
    const application_counter = parseInt($(application_counter_area).attr('data-count')) + 1;
    const application_length = parseInt($('#share-application-items>.dropdown-item').length);
    $(application_counter_area).attr('data-count', application_counter);

    const data = `
    <a class="dropdown-item d-flex align-items-center share-application-item" href="${e.application.url}">
      <div class="font-weight-bold">
        <div class="text-truncate">Name: ${e.application.name}</div>
        <div class="small text-gray-500">Submitted: ${e.application.date}</div>
      </div>
    </a>
    `;

    $(application_container).prepend(data);

    if (application_counter <= 5) {
      $(application_counter_area).text(application_counter);
    } else { 
      $(application_counter_area).text('5+');
    }

    if (application_length >= 5) $(application_container).find('.share-application-item').last().remove();

  });

});
</script>
