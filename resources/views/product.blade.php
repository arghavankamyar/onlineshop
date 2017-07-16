@extends('master-item')
@section('content')
    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">
        <div class="push-up top-equal blocks-spacer">
            
            <!--  ==========  -->
            <!--  = Product =  -->
            <!--  ==========  -->
            <div class="row blocks-spacer">
                
                <!--  ==========  -->
                <!--  = Preview Images =  -->
                <!--  ==========  -->
                @foreach($contents->all() as $content)
                <div class="span5">
                    <div class="product-preview">
                        <div class="picture">
                            <img src="{{asset('images/products/' . $content->product_img)}}" alt="" width="940" height="940" id="mainPreviewImg" />
                        </div>
                        <div class="thumbs clearfix">
                            <div class="thumb active">
                                <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-1.jpg" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-2.jpg" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="images/dummy/products/shirt-3.jpg" alt="" width="940" height="940" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--  ==========  -->
                <!--  = Title and short desc =  -->
                <!--  ==========  -->
                <div class="span7">
                    <div class="product-title">

                        <h1 class="name"><span class="light">{{$content->product_name}}</span></h1>
                        <div class="meta">
                            <span class="tag"></span>
                            <span class="stock">
                                @if($content->stock > 0)
                                <span class="btn btn-success">موجود</span>
                                @endif
                                @if($content->stock == 0)
                                <span class="btn btn-danger">اتمام موجودی</span>
                                    @endif
                            </span>
                        </div>
                    </div>

                    <div class="for">
                        <span>مناسب برای:</span>
                        <span>{{$content->category->for}}</span>
                    </div>
                    <div class="product-scent">
                        <span>رایحه:</span>
                        <span>{{$content->scent}}</span>


                        <hr />
                        <!--  ==========  -->
                        <!--  = Add to cart form =  -->
                        <!--  ==========  -->
                        <div class="price">
                        <span>قیمت برای شما:</span>
                        <span>{{$content->price}}</span>
                            <span>تومان</span>
                        </div>
                        &nbsp;
                        <form action="#" class="form form-inline clearfix">
                            <button class="btn btn-danger"><i class="icon-shopping-cart"></i> اضافه به سبد خرید</button>
                        </form>

                        <hr />

                        <!--  ==========  -->
                        <!--  = Share buttons =  -->
                        <!--  ==========  -->
                        <div class="share-item">
                            <div class="pull-right social-networks">
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_pinterest_pinit"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977"></script>
                                <!-- AddThis Button END -->
                            </div>
                            با دوستان خود به اشتراک بگذارید :
                        </div>

                    </div>
                </div>
            </div>
            
            <!--  ==========  -->
            <!--  = Tabs with more info =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-1" data-toggle="tab">معرفی محصول</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="fade in tab-pane active" id="tab-1">
                            <h3>توضیحات محصول</h3>
                            {{$content->description}}
                        </div>

                    </div>
                </div>
                <div class="span12">
                    <ul id="myTab2" class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-2" data-toggle="tab">نظرات کاربران</a>
                        </li>
                    </ul>
                    @unless(auth()->check())
                        {{'برای درج دیدگاه خود ابتدا وارد شوید و یا ثبت نام کنید.'}}
                        @endunless
                    <div class="tab-content">
                        <div class="fade in tab-pane active" id="tab-2">
                            @if(count($comments))
                                @foreach($comments->all() as $comment)
                                <span>{{$comment->user->name}}</span>
                                <span>{{$comment->comment_body}}</span>
                                @endforeach
                                @endif
                            @unless(count($comments))
                                {{'برای این محصولد دیدگاهی وجود ندارد'}}
                                @endunless
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> <!-- /container -->
@endsection
