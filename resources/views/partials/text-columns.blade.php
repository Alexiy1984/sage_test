<div class="inner-content">
  <div class="inner-content__row text-columns">
    <div class="column_50">
      <div class="text-columns__title">
        <h3 class="text text_big mr-5 d-inline-block" ><?= $title ?></h3>
        <div class="fake-line d-none d-lg-inline-block"></div>
      </div>
    </div>
    <div class="column_50 text-columns__text">
      <h3 class="heading heading_small"><?= $heading ?></h3>
      @foreach ($text as $par)
        <p class="text">{{$par}}</p>
      @endforeach
    </div>
  </div>
</div>

