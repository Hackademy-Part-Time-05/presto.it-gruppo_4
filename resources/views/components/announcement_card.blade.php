  
  @php
  use Illuminate\Support\Facades\Lang;
  @endphp
  
  <div class="card my-2 my-md-4 shadow p-0" style="width: 18rem">
    <p class="text-end py-3 px-4 text-blue fw-bold fs-5">{{ Lang::get('category.' . $announcement->category->name) }}</p>
    <img src="{{$announcement->images()->first()->getUrl(400,300)}}" class="card-img-top" alt="...">
    <div class="card-body text-align-center d-flex flex-column justify-content-between py-0">
      <h5 class="card-title text-center display-6 fw-bold my-0">{{$announcement->title}}</h5>
      @php
        $attributes = $announcement->getAttributes();
      @endphp
      <p class="card-text fs-4 my-0 p-4" id="AnnouncementBody{{$attributes['id']}}">{{$announcement->body}}</p>
      <p class="fw-bold display-5 text-blue fst-italic text-center">{{$announcement->price}}€</p>
    </div>
    <div class="bg-blue card-button d-flex justify-content-center">
        <a href="{{route('announcement.show',compact('announcement'))}}" class="text-light fst-italic fw-bold fs-3 py-2 py-md-4">{{__('ui.view')}}</a>
    </div>
</div>




<script>
    function truncate(id){
      const maxLength=100;
      const announcementBody = document.getElementById(`AnnouncementBody${id}`);
      const text = announcementBody.innerText;
        if (text.length > maxLength){
          const truncatedText = text.substring(0,maxLength) + '...';
          announcementBody.innerText = truncatedText;
      }
    }

    truncate({{$attributes['id']}})
// </script>