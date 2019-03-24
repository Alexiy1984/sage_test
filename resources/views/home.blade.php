@extends('layouts.app')

@section('content')

  
  <div class="top-line">
    <div class="top-line__absolute">
      <img  src="@asset('images/LongView9__Original.jpg')" alt="main_img"> 
      <div><h1 class="heading_big">About LongView</h1></div>
    </div>
    
    <img class="top-line__background" src="@asset('images/index.png')" alt="main_bg">
    <div></div> 
  </div>


  <?php 
    $title = "New solutions";
    $heading = "To old problems";
    $text = array(
      "Every real estate agency gives you the same service, the same products and treats property management as the poor relation to their lucrative sales business. We are different. We see the day-to-day service of property management as our crown jewel.",
      "More importantly, we see a whole range of needs that the broader, traditional real estate industry has ignored for a long time. We are setting about to change this and offer simple, fair and unique solutions for those needs."
    );
  ?>
  <div class="container-fluid">
    @include('partials.text-columns')
  </div>

  <div class="container-fluid bg-color-gray_half">
    <div class="inner-content">
      <img class="full-width-img" src="@asset('images/LongView_RealEstate_9.jpg')" alt="RealEstate">
    </div>
  </div>

  <div class="container-fluid bg-color_gray">
    <?php 
      $title = "The LongView vision";
      $heading = "Lorem ipsum dolor sit amet consectetur";
      $text = array(
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.",
        "More importantly, we see a whole range of needs that the broader, traditional real estate industry has ignored for a long time. We are setting about to change this and offer simple, fair and unique solutions for those needs. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.",
      );
    ?>
    @include('partials.text-columns')
    <?php $test_data = array(
        array(
          "heading" => "Sub-title", 
          "img" => "images/house.png",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip"
        ),
        array(
          "heading" => "Sub-title", 
          "img" => "images/contract.png",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
        ),
        array(
          "heading" => "Sub-title", 
          "img" => "images/insurance.png",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
        ),
        array(
          "heading" => "Sub-title", 
          "img" => "images/open_house.png",
          "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. "
        )
    );?>
    <div class="inner-content">
      <div class="inner-content__row">
        @foreach ($test_data as $card) 
          @include('partials.cards')
        @endforeach
      </div>  
    </div>  
  </div>

  <?php 
    $title = "The Guaranteed Rent company";
    $heading = "Lorem ipsum dolor sit amet consectetur";
    $text = array(
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.",
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
    );
  ?>
  <div class="container-fluid">
    @include('partials.text-columns')
  </div>

  <?php
    $presentation_items = array(
      array(
        "propose" => "Buy with",
        "content" => array(
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
        ),
        "img" => "images/GR_LongView_04.jpg",
        "order" => 0,
        "shadow" => "left"
      ),
      array(
        "propose" => "Manage with",
        "content" => array(
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed."
        ),
        "img" => "images/LongView_Manage_GR.jpg",
        "order" => 1,
        "shadow" => "right",
      ),
      array(
        "propose" => "Sell with",
        "content" => array(
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.",
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
        ),
        "img" => "images/LongView_Sell_GR.jpg",
        "order" => 0,
      ),
    );
  ?>

  @foreach ($presentation_items as $pres_item)
    @include('partials.presentation-item')
  @endforeach

  <?php 
    $title = "Testimonials";
    $heading = "What people say about us";
    $text = null;
  ?>
  <div class="container-fluid">
    @include('partials.text-columns') 

    <?php 
      $comments = array(
        array(
          "avatar" => "images/ava_man.jpg",
          "name" => "John Daw",
          "description" => "Description​​​​​​​",
          "content" => array (
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.",
            "Donec placerat nisl magna, et faucibus arcu condimentum sed."
          ),
          "active" => "active"
        ),
        array(
          "avatar" => "images/ava_woman.jpg",
          "name" => "Jane Frost",
          "description" => "Description​​​​​​​",
          "content" => array (
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat."
          )
        ),
        array(
          "avatar" => "images/ava_man.jpg",
          "name" => "Mate Newell",
          "description" => "Description​​​​​​​",
          "content" => array (
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem.  Aliquam erat volutpat.",
            "Donec placerat nisl magna, et faucibus arcu condimentum sed.",
            "Aenean eu mauris facilisis, pellentesque purus et, ultricies augue. Nullam posuere posuere neque."
          )
        )
      );
    ?>

    <div class="inner-content"> 
      <div class="inner-content__row">
        @include('partials.carousel')
      </div>  
    </div>
  </div>    
 
@endsection
