<div class="container-fluid presentation-item">
  <div class="inner-content">
    <div class="inner-content__row  presentation-item__row_{{$pres_item['order']}}">
      <div class="column_50 presentation-item__text">
        <div>
          <h2 class="heading heading_medium text-color_pink">
            {{$pres_item['propose']}}
          </h2>
          <h2 class="heading heading_medium text-color_pink">
            Guaranteed Rent
          </h2>
          @foreach ($pres_item['content'] as $content)
            <p>{{$content}}</p>
          @endforeach
        </div>  
      </div>
      <div class="column_50 presentation-item__img">
        <img src="@asset($pres_item['img'])" alt="$pres_item['img']">
      </div> 
    </div>
  </div>
  @if ($pres_item['shadow'] == 'left' || $pres_item['shadow'] == 'right')  
    <div class="d-none d-lg-block presentation-item__shadow_{{$pres_item['shadow']}} bg-color_gray"></div>
  @endif    
</div>
