@extends('template')

@section('content')
    <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">


                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href="">{{$book->category->name}}</a>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        @if(empty($book->photos[0]))
                                            {{"empty"}}
                                        @else
                                            <img style="height: 400px;width: 400px;" src="{{$upload.'/'.$book->photos[0]->file}}"  alt=""  />
                                        @endif
                                    </div>

                                    <div class="product-gallery">

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <ul class="list-unstyled charectors" style="font-size: 18px">
                                        <li >
                                           <label class="inf"> Name:</label><b>{{$book->name}}</b>
                                        </li>
                                        <li ><br>
                                            <label class="inf">Time:</label><b>{{$book->time}}min</b>
                                        </li><br>
                                        <li >
                                            <label class="inf"> Author:</label><b>{{$book->author}}</b>
                                        </li><br>
                                        <li >
                                            <label class="inf">  Speaker:</label><b>{{$book->speaker}}</b>
                                        </li><br>
                                        <li >
                                            <label class="inf"> Publisher:</label><b>{{$book->publisher}}</b>
                                        </li><br>
                                        <li>
                                            <div class="product-inner-price">
                                                @if($book->price == 0)
                                                    <label class="inf"> Price: </label> <span style="color: red">Free</span>
                                                @else
                                                    <label class="inf">Price:</label> <ins>{{$book->price}}</ins> <del>$100.00</del>
                                                @endif

                                            </div>
                                        </li>

                                    </ul>



                                  {{--  <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>--}}

                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            <div role="tabpanel">
                <ul class="product-tab" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <h2>Book Description</h2>
                        <p>{{$book->description}}</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">

                        @if(Auth::check())
                            <h2>Your review</h2>
                        <div class="submit-review">
                            <form action="{{ url('review',$book->id ) }}" method="post" name="Review">
                                {{csrf_field()}}
                                <div class="rating-chooser" style="text-align: center;">
                                    <p style="font-size: 16px">Your rating</p>
                                    <div class=" " style="margin-right: 490px" >

                                        <input class="star_input" name="rate" type="radio" id="st1" value="5" />
                                        <label class="star_label" for="st1"></label>
                                        <input class="star_input" name="rate" type="radio" id="st2" value="4" />
                                        <label class="star_label" for="st2"></label>
                                        <input class="star_input" name="rate" type="radio" id="st3" value="3" />
                                        <label class="star_label" for="st3"></label>
                                        <input class="star_input" name="rate" type="radio" id="st4" value="2" />
                                        <label class="star_label" for="st4"></label>
                                        <input class="star_input" name="rate" type="radio" id="st5" value="1" />
                                        <label class="star_label" for="st5"></label>


                                    </div>

                                </div><br><br>
                                <p><label for="name">title</label> <input name="title" type="text" required></p>
                                <p><label for="review">Your review</label> <textarea name="description" id="" cols="30" rows="10" required></textarea></p>
                                <p><input type="submit" value="Submit"></p>
                            </form>
                        </div>
                        @else

                        @endif
                            <h2>Reviews</h2>
                            <div class="submit-review">
                                @foreach($reviews as $review )
                                    @for($i=0;$i<$review->rate;$i++)
                                        <i class="fa fa-star" style="color: yellow"></i>

                                    @endfor
                                    @for($j=$review->rate;$j<5;$j++)
                                            <i class="fa fa-star-o" style="color: yellow"></i>
                                    @endfor
                                    <p>{{$review->title}}</p>
                                    <p>{{$review->description}}</p>
                                @endforeach
                            </div>

                    </div>
                </div>
            </div>


            <div class="latest-product">
                <h2 class="related-products-title">Related Products</h2>
                <div class="product-carousel">
                    @foreach($other_books as $other_book )
                        <div class="single-product">
                            <div class="product-f-image">
                                @if(empty($other_book->photos[0]))
                                    {{"empty"}}
                                @else
                                    <img style="height: 300px;width: 220px;" src="{{$upload.'/'.$other_book->photos[0]->file}}"  alt=""  />
                                @endif
                                <div class="product-hover">
                                    <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="{{url('detail/'.$other_book->id)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="">{{$other_book->name}}</a></h2>

                            <div class="product-carousel-price">
                                @if($other_book->price == 0)
                                    <span style="color: red">Free</span>
                                @else
                                    <ins>{{$other_book->price}}</ins> <del>$100.00</del>
                                @endif

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>



@stop