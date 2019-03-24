<div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
  <ol class="carousel-indicators">
    @foreach ($comments as $index => $comment)
      <li data-target="#carouselIndicators" data-slide-to="{{$index}}" class="{{$comment['active']}}"></li>
    @endforeach  
  </ol>
  <div class="carousel-inner">
    @foreach ($comments as $comment)
    <div class="carousel-item {{$comment['active']}}">
      <div class="carousel-item__inner">
        <div class="carousel-item__head">
          <img class="carousel-item__avatar"  src="@asset($comment['avatar'])" alt="avatar">
          <div class="carousel-item__description">
            <h2 class="heading heading_small">{{$comment['name']}}</h2>
            <p class="text text_medium text_bold">Description​​​​​​​</p>
          </div>  
        </div>
        
        <div class="carousel-item__text">
          @foreach ($comment['content'] as $par)
            <p class="text">
              {{$par}}
            ​​​​​​​</p>
          @endforeach
          <div class="shape bg-color_gray"></div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
