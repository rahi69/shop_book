
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">

                    {{-- (Free)--}}

                    <h2 class="section-title">Free Books</h2>

                    <div class="product-carousel">
                        @foreach($books as $book)
                            @if($book->price == 0)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$book->photos[0]->file}}"  alt="{{$book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($book->price == 0)
                                        <span style="color: red">Free</span>
                                    @else
                                        <ins>{{$book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                            @endif
                        @endforeach

                    </div><hr>

                    {{--End (Free)--}}
{{---------------------------------------------------------------------------------------------------}}
                    {{-- (Most Popular)--}}

                    <h2 class="section-title">Most Popular Books</h2>

                    <div class="product-carousel">
                        @foreach($ratings as $rating)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($rating->book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$rating->book->photos[0]->file}}"  alt="{{$rating->book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$rating->book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$rating->book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($rating->book->price == 0)
                                        <span style="color: red">Free</span>
                                    @else
                                        <ins>{{$rating->book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div><hr>

                    {{--End (Most Popular)--}}
{{---------------------------------------------------------------------------------------------------}}
                    {{-- (Children)--}}

                    <h2 class="section-title">Children's & Teen Books</h2>

                    <div class="product-carousel">
                        @foreach($child_books as $child_book)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($child_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$child_book->photos[0]->file}}"  alt="{{$child_book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$child_book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$child_book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($child_book->price == 0)
                                        <span style="color: red">Free</span>
                                    @else
                                        <ins>{{$child_book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div><hr>

                    {{--End (Children)--}}
{{---------------------------------------------------------------------------------------------------}}
                    {{-- (Novel)--}}

                    <h2 class="section-title">Romance & Fiction Books</h2>

                    <div class="product-carousel">
                        @foreach($novel_books as $novel_book)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($novel_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$novel_book->photos[0]->file}}"  alt="{{$novel_book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$novel_book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$novel_book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($novel_book->price == 0)
                                        <span style="color: red">Free</span>
                                    @else
                                        <ins>{{$novel_book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div><hr>

                    {{--End (Novel)--}}
{{---------------------------------------------------------------------------------------------------}}
                    {{-- (Poetry)--}}

                    <h2 class="section-title">Literature & Poetry Books</h2>

                    <div class="product-carousel">
                        @foreach($poetry_books as $poetry_book)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($poetry_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$poetry_book->photos[0]->file}}"  alt="{{$poetry_book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$poetry_book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$poetry_book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($poetry_book->price == 0)
                                        <sspan style="color: red">Free</sspan>
                                    @else
                                        <ins>{{$poetry_book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div><hr>

                    {{--End (Poetry)--}}
{{---------------------------------------------------------------------------------------------------}}
                    {{-- (History)--}}

                    <h2 class="section-title">History Books</h2>

                    <div class="product-carousel">
                        @foreach($history_books as $history_book)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($history_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$history_book->photos[0]->file}}"  alt="{{$history_book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$history_book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$history_book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($history_book->price == 0)
                                        <span style="color: red">Free</span>
                                    @else
                                        <ins>{{$history_book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div><hr>

                    {{--End (History)--}}
{{---------------------------------------------------------------------------------------------------}}
                    {{-- (Scientific)--}}

                    <h2 class="section-title">Scientific Books</h2>

                    <div class="product-carousel">
                        @foreach($scientific_books as $scientific_book)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($scientific_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$scientific_book->photos[0]->file}}"  alt="{{$scientific_book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$scientific_book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$scientific_book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($scientific_book->price == 0)
                                        <span style="color: red">Free</span>
                                    @else
                                        <ins>{{$scientific_book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div><hr>

                    {{--End (Scientific)--}}
{{---------------------------------------------------------------------------------------------------}}
                    {{-- (Mystery)--}}

                    <h2 class="section-title">Mystery Books</h2>

                    <div class="product-carousel">
                        @foreach($mystery_books as $mystery_book)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($mystery_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$mystery_book->photos[0]->file}}"  alt="{{$mystery_book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$mystery_book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$mystery_book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($mystery_book->price == 0)
                                        <span style="color: red">Free</span>
                                    @else
                                        <ins>{{$mystery_book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div><hr>

                    {{--End (Mystery)--}}
{{---------------------------------------------------------------------------------------------------}}
                    {{-- (Psychology)--}}

                    <h2 class="section-title">Psychology Books</h2>

                    <div class="product-carousel">
                        @foreach($psychology_books as $psychology_book)

                            <div class="single-product">

                                <div class="product-f-image">
                                    {{--<img src="img/product-1.jpg" alt="">--}}

                                    @if(empty($psychology_book->photos[0]))
                                        {{"empty"}}
                                    @else
                                        <img style="height: 300px;width: 220px" src="{{$upload}}/{{$psychology_book->photos[0]->file}}"  alt="{{$psychology_book->name}}">
                                    @endif
                                    <div class="product-hover">
                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{$psychology_book->name}}</a></h2>
                                <h2><a href="single-product.html">{{$psychology_book->author}}</a></h2>

                                <div class="product-carousel-price">
                                    @if($psychology_book->price == 0)
                                        <span style="color: red">Free</span>
                                    @else
                                        <ins>{{$psychology_book->price}}</ins> <del>$100.00</del>
                                    @endif
                                </div>

                            </div>
                        @endforeach

                    </div><hr>

                    {{--End (Psychology)--}}
{{---------------------------------------------------------------------------------------------------}}
                </div>

            </div>

        </div>

    </div>
</div> <!-- End main content area -->
