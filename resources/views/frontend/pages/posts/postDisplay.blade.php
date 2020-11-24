@extends('frontend.layouts.others.index')
@section('title', $post->name)
@section('content')
    <style>
        .reply-button {
            color: #377dff;
        }

        .reply-button:hover {
            color: #0052ea;
        }

        div.stars {
            width: 42%;
            display: inline-block;
        }

        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 10px;
            font-size: 36px;
            color: #444;
            transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        input.star-5:checked~label.star:before {
            color: rgb(255, 238, 0);
            text-shadow: 0 0 20px rgb(248, 236, 56);
        }

        input.star-1:checked~label.star:before {
            color: #F62;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star:before {
            content: '\f005';
            font-family: 'Font Awesome 5 Free';
        }

    </style>
    <hr>
    <!-- Content Section -->
    <div class="container space-lg-0">
        <div class="row">
            <div class="col-lg-12" style=" padding-left: 0px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="margin-bottom: 0rem!important;">
                        @foreach ($post->Categories as $category)
                            <li class="breadcrumb-item"><a href="{{ url('category', $category->slug) }}"
                                    style="color:#888; text-transform: uppercase;">{{ $category->name }}</a></li>
                        @endforeach
                    </ol>
                </nav>
            </div>
            <div class="mb-1 pl-3">
                <h1 class="h2">{{ $post->name }}</h1>
            </div>
            <div class="col-lg-8">
                <div class="w-lg-70">
                    <!-- Author -->
                    <div class=" border-bottom py-2 mb-5">
                        <div class="row align-items-md-center">
                            <div class="col-md-5 mb-5 mb-md-0">
                                <div class="media align-items-center">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="d-flex justify-content-md-end align-items-center">
                                    <span class="d-block text-muted">{{ $post->Author->fullname }},
                                        {{ $dateTime->diffForHumans($post->created_at) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Author -->
                </div>
                <div class="pl-lg-1" style="text-align: justify">
                    @php
                    $content = $post->content;
                    echo str_replace("<img","<img
                        class='img-fluid rounded'",$content);
                                                                                                                                                                                                    @endphp
                                                                                                                                                                                      </div>
                                                                                                                                                                                      <!-- Badges -->
                                                                                                                                                                                      <div class="
                        mt-5">
                        @foreach ($post->Tags as $tag)
                            <a class="btn btn-xs btn-soft-secondary mb-1"
                                href="{{ url('tag', $tag->slug) }}">{{ $tag->name }}</a>
                        @endforeach
                </div>
                <!-- End Badges -->

                <!-- Share -->
                <div class="row justify-content-sm-between align-items-sm-center space-1 ">
                    <div class="col-sm-7 mb-2 mb-sm-0">
                        <div class="d-flex align-items-center">
                            <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>

                            <a class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-xs btn-icon btn-ghost-secondary rounded-circle mr-2" href="#">
                                <i class="fab fa-telegram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-2 text-sm-right">
                        <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle mr-2" href="#" data-toggle="tooltip"
                            data-placement="top" title="Bookmark story">
                            <i class="far fa-bookmark"></i>
                        </a>
                        <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle" href="#" data-toggle="tooltip"
                            data-placement="top" title="Report story">
                            <i class="far fa-flag"></i>
                        </a>
                    </div>
                </div>
                <!-- End Share -->


                <div class="border-top pt-3">
                    <h3 class="mb-4">Thông tin tác giả</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 pl-7">
                            <div class="avatar avatar-xl avatar-circle mb-3">
                                <img class="avatar-img" style="width: 100%;height: 100%;"
                                    src="{{ asset('uploads/users') }}/{{ $post->Author->thumbnail }}"
                                    alt="Image Description">
                            </div>
                            <!-- End Icon Block -->
                        </div>

                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <!-- Info -->
                            <div class="row">
                                <div class="col-6">
                                    @if (App\Models\Followers::where(['author_id' => $post->author_id, 'user_id' => Auth::user()->id])->exists())
                                        <form action="{{ route('followers.store') }}" method="POST">
                                            @csrf
                                            <h3 class="mb-0">{{ $post->Author->fullname }}
                                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                                <input type="hidden" name="author_id" value="{{ $post->author_id }}">
                                                <button type="submit"
                                                    class="btn btn-xs btn-soft-danger font-weight-bold transition-3d-hover py-1 px-2 ml-1"
                                                    name="unfollow" value="unfollow">Unfollow
                                                </button>
                                            </h3>
                                        </form>
                                    @else
                                        <form action="{{ route('followers.store') }}" method="POST">
                                            @csrf
                                            <h3 class="mb-0">{{ $post->Author->fullname }}
                                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                                <input type="hidden" name="author_id" value="{{ $post->author_id }}">
                                                <button type="submit"
                                                    class="btn btn-xs btn-soft-primary font-weight-bold transition-3d-hover py-1 px-2 ml-1"
                                                    name="follow" value="follow">Follow
                                                </button>
                                            </h3>
                                        </form>
                                    @endif
                                </div>
                                <div class="col-6">
                                    @if (App\Models\Author_votes::where(['author_id' => $post->author_id, 'user_id' => Auth::user()->id])->exists())
                                        <span>Bạn đã đánh giá bài tác giả này rồi!</span>
                                    @else
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="stars" style="float: right;width: 100%;">
                                                    <input class="star star-5" id="star-5" type="radio" value="5"
                                                        name="star" />
                                                    <label style="padding: 2px;font-size: 14px;" class="star star-5"
                                                        for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" value="4"
                                                        name="star" />
                                                    <label style="padding: 2px;font-size: 14px;" class="star star-4"
                                                        for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" value="3"
                                                        name="star" />
                                                    <label style="padding: 2px;font-size: 14px;" class="star star-3"
                                                        for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" value="2"
                                                        name="star" />
                                                    <label style="padding: 2px;font-size: 14px;" class="star star-2"
                                                        for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" value="1"
                                                        name="star" />
                                                    <label style="padding: 2px;font-size: 14px;" class="star star-1"
                                                        for="star-1"></label>

                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <form action="">
                                                    <button class="btn btn-primary btn-xs " style="float: left"
                                                        type="submit">Đánh
                                                        giá
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <p style="text-align: justify;">{{ $post->Author->bio }} </p>
                            <!-- End Info -->
                        </div>
                    </div>
                </div>


                <div class="pt-2 mb-11 border-top space-lg-1">
                    <div class="pt-2 mb-11">
                        <div class="mb-4">
                            <h3>{{ $post->hasComments->count() }} Bình luận</h3>
                        </div>
                        @include('frontend.pages.comments.listComments',['comments'=>$post->Comment_post($post->id)])
                        <div class="mb-5">
                            <h3>Bình luận</h3>
                        </div>
                        <!-- Form -->
                        @include('frontend.pages.comments.formComment',['post_id'=>$post->id])
                        <!-- End Form -->
                    </div>
                </div>
            </div>
            <div id="stickyBlockStartPoint" class="col-lg-4 mb-7 mb-lg-0">
                <!-- Sidebar Content -->
                <div class="card bg-white">
                    {{-- Include 5 Post New --}}
                    @include('frontend.components.postNew')
                    <div class="card-header" style="padding: 0rem 0rem; border-bottom: none;">
                        <div class="col-lg">
                            <div class="mb-7">
                                <div class="mb-3 border-bottom">
                                    <h3>Tin nổi bật</h3>
                                </div>

                                <!-- Blog -->
                                <article class="mb-3">
                                    <div class="media">
                                        <div class="avatar avatar-lg mr-3">
                                            <img class="img-fluid"
                                                src="https://znews-photo.zadn.vn/w210/Uploaded/lce_qjlcv/2020_11_09/bao_so_12_9.11_thumb.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0"><a class="text-inherit" href="#">Bão số 12 hình
                                                    thành,
                                                    miền
                                                    Trung mưa lớn</a></h4>
                                            <small class="d-inline-block">Feb 15, 2020</small>
                                        </div>
                                    </div>
                                </article>
                                <!-- End Blog -->
                                <!-- Blog -->
                                <article class="mb-3">
                                    <div class="media">
                                        <div class="avatar avatar-lg mr-3">
                                            <img class="img-fluid"
                                                src="https://znews-photo.zadn.vn/w210/Uploaded/lce_qjlcv/2020_11_09/bao_so_12_9.11_thumb.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0"><a class="text-inherit" href="#">Bão số 12 hình
                                                    thành,
                                                    miền
                                                    Trung mưa lớn</a></h4>
                                            <small class="d-inline-block">Feb 15, 2020</small>
                                        </div>
                                    </div>
                                </article>
                                <!-- End Blog -->
                                <!-- Blog -->
                                <article class="mb-3">
                                    <div class="media">
                                        <div class="avatar avatar-lg mr-3">
                                            <img class="img-fluid"
                                                src="https://znews-photo.zadn.vn/w210/Uploaded/lce_qjlcv/2020_11_09/bao_so_12_9.11_thumb.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0"><a class="text-inherit" href="#">Bão số 12 hình
                                                    thành,
                                                    miền
                                                    Trung mưa lớn</a></h4>
                                            <small class="d-inline-block">Feb 15, 2020</small>
                                        </div>
                                    </div>
                                </article>
                                <!-- End Blog -->
                                <!-- Blog -->
                                <article class="mb-3">
                                    <div class="media">
                                        <div class="avatar avatar-lg mr-3">
                                            <img class="img-fluid"
                                                src="https://znews-photo.zadn.vn/w210/Uploaded/lce_qjlcv/2020_11_09/bao_so_12_9.11_thumb.jpg"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0"><a class="text-inherit" href="#">Bão số 12 hình
                                                    thành,
                                                    miền
                                                    Trung mưa lớn</a></h4>
                                            <small class="d-inline-block">Feb 15, 2020</small>
                                        </div>
                                    </div>
                                </article>

                                <!-- End Blog -->
                            </div>
                        </div>
                    </div>
                    <div class="card-header" style="padding: 0rem 0rem; border-bottom: none;">
                        <div class="col-lg">
                            <div class="mb-7">
                                <div class="mb-3 border-bottom">
                                    <h3>Đánh giá bài viết</h3>
                                </div>

                                <!-- Blog -->
                                <article class="mb-3">
                                    @if (App\Models\Post_votes::where(['post_id' => $post->id, 'user_id' => Auth::user()->id])->exists())
                                        <div class="mb-4">
                                            <span>Bạn đã đánh giá bài viết này rồi!</span>
                                        </div>
                                    @else
                                        <div class="border-bottom pb-4 mb-4">
                                            <!-- Checkboxes -->
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="rating custom-control-input" id="rating1"
                                                        name="rating" value="1">
                                                    <label class="custom-control-label" for="rating1">
                                                        <span class="d-block text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                                <small></small>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="rating custom-control-input" id="rating2"
                                                        name="rating" value="2">
                                                    <label class="custom-control-label" for="rating2">
                                                        <span class="d-block text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                                <small></small>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="rating custom-control-input" id="rating3"
                                                        name="rating" value="3">
                                                    <label class="custom-control-label" for="rating3">
                                                        <span class="d-block text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                                <small></small>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="rating custom-control-input" id="rating4"
                                                        name="rating" value="4">
                                                    <label class="custom-control-label" for="rating4">
                                                        <span class="d-block text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star text-muted"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                                <small></small>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-lg text-body mb-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="rating custom-control-input" id="rating5"
                                                        name="rating" value="5">
                                                    <label class="custom-control-label" for="rating5">
                                                        <span class="d-block text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                                <small></small>
                                            </div>
                                            <!-- End Checkboxes -->
                                        </div>
                                    @endif
                                </article>
                                <!-- End Blog -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sidebar Content -->
        </div>
    </div>
    </div>
    <!-- End Content Section -->

    <!-- Sticky Block End Point -->
    <div id="stickyBlockEndPoint"></div>

    <!-- Testimonials -->
    <div class="bg-light">
    </div>
    <!-- Testimonials -->


    <!-- Blog Card Section -->
    <div class="container">
        <div class="w-lg-70 mx-lg-auto">
            <!-- Stories Section -->
            <div class="container space-lg-0">
                <!-- Title -->
                <div class="mb-0 border-bottom">
                    <h3>Tin liên quan</h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Blog Card -->
                        <article class="border-bottom h-100 py-5">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <a class="d-block small font-weight-bold text-cap mb-2" href="#">Product</a>
                                    <h4 class="mb-0"><a class="text-inherit" href="single-article.html">Better is when
                                            everything works together</a></h4>
                                </div>

                                <div class="col-5">
                                    <img class="img-fluid" src="../../../assets/img/500x280/img1.jpg"
                                        alt="Image Description">
                                </div>
                            </div>
                        </article>
                        <!-- End Blog Card -->
                    </div>

                    <div class="col-md-6">
                        <!-- Blog Card -->
                        <article class="border-bottom h-100 py-5">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <a class="d-block small font-weight-bold text-cap mb-2" href="#">Tech</a>
                                    <h4 class="mb-0"><a class="text-inherit" href="single-article.html">Should You Buy
                                            An
                                            Apple Pencil?</a></h4>
                                </div>

                                <div class="col-5">
                                    <img class="img-fluid" src="../../../assets/img/500x280/img3.jpg"
                                        alt="Image Description">
                                </div>
                            </div>
                        </article>
                        <!-- End Blog Card -->
                    </div>

                    <div class="col-md-6">
                        <!-- Blog Card -->
                        <article class="border-bottom h-100 py-5">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <a class="d-block small font-weight-bold text-cap mb-2" href="#">Product</a>
                                    <h4 class="mb-0"><a class="text-inherit" href="single-article.html">This Watch gym
                                            partnerships give you perks for working out</a></h4>
                                </div>

                                <div class="col-5">
                                    <img class="img-fluid" src="../../../assets/img/500x280/img5.jpg"
                                        alt="Image Description">
                                </div>
                            </div>
                        </article>
                        <!-- End Blog Card -->
                    </div>

                    <div class="col-md-6">
                        <!-- Blog Card -->
                        <article class="border-bottom h-100 py-5">
                            <div class="row justify-content-between">
                                <div class="col-6">
                                    <a class="d-block small font-weight-bold text-cap mb-2" href="#">Tech</a>
                                    <h4 class="mb-0"><a class="text-inherit" href="single-article.html">Drone Company
                                            PrecisionHawk Names New CEO</a></h4>
                                </div>

                                <div class="col-5">
                                    <img class="img-fluid" src="../../../assets/img/500x280/img7.jpg"
                                        alt="Image Description">
                                </div>
                            </div>
                        </article>
                        <!-- End Blog Card -->
                    </div>
                </div>



                <div class="mb-3 border-bottom mt-3">
                    <h3>Có thể bạn quan tâm</h3>
                </div>
                <!-- End Title -->

                <div class="row">
                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card Info -->
                        <div class="card h-100">
                            <img class="card-img-top" src="../../../assets/img/480x320/img13.jpg" alt="Image Description">
                            <div class="card-body">
                                <div class="max-w-13rem w-100 mb-3">
                                    <img class="img-fluid" src="../../../assets/svg/clients-logo/amazon-original.svg"
                                        alt="Logo">
                                </div>
                                <p class="mb-0">Amazon launched their enterprise platform and built a powerful user
                                    experience.</p>
                            </div>
                            <div class="card-footer">
                                <a class="font-weight-bold" href="customer-story.html">Read story <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></a>
                            </div>
                        </div>
                        <!-- End Card Info -->
                    </div>

                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card Info -->
                        <div class="card h-100">
                            <img class="card-img-top" src="../../../assets/img/480x320/img17.jpg" alt="Image Description">
                            <div class="card-body">
                                <div class="max-w-13rem w-100 mb-3">
                                    <img class="img-fluid" src="../../../assets/svg/clients-logo/mapbox-original.svg"
                                        alt="Logo">
                                </div>
                                <p class="mb-0">Mapbox empowers marketers to create digital marketing dashboards easily
                                    and
                                    share them with their team.</p>
                            </div>
                            <div class="card-footer">
                                <a class="font-weight-bold" href="customer-story.html">Read story <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></a>
                            </div>
                        </div>
                        <!-- End Card Info -->
                    </div>

                    <div class="col-sm-6 col-md-4 mb-5">
                        <!-- Card Info -->
                        <div class="card h-100">
                            <img class="card-img-top" src="../../../assets/img/480x320/img16.jpg" alt="Image Description">
                            <div class="card-body">
                                <div class="max-w-13rem w-100 mb-3">
                                    <img class="img-fluid" src="../../../assets/svg/clients-logo/netflix-original.svg"
                                        alt="Logo">
                                </div>
                                <p class="mb-0">Netflix's mission is to create a planet run by the sun. In order to
                                    achieve
                                    this goal, they needed to find a way to make solar simple.</p>
                            </div>
                            <div class="card-footer">
                                <a class="font-weight-bold" href="customer-story.html">Read story <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></a>
                            </div>
                        </div>
                        <!-- End Card Info -->
                    </div>
                </div>
            </div>
            <!-- End Stories Section -->
        </div>
    </div>
    <!-- End Blog Card Section -->

    <div class="card bg-img-hero bg-navy text-white text-center p-4 my-4 w-md-60  mx-md-auto "
        style="background-image: url({{ asset('frontend/assets/svg/components/abstract-shapes-1.svg') }});">
        <h4 class="text-white mb-3">Like what you're reading? Subscribe to our top stories.</h4>

        <!-- Form -->
        <form class="js-validate w-md-75 mx-md-auto">
            <div class="js-form-message">
                <div class="d-flex align-items-center">
                    <label class="sr-only" for="subscribeSrArticle">Subscribe</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="subscribeSrArticle" placeholder="Your email"
                            aria-label="Your email">
                    </div>
                    <button type="submit" class="btn btn-light ml-3">Submit</button>
                </div>
            </div>
        </form>
        <!-- End Form -->
    </div>
    <script>
        function calcRate(r) {
            const f = ~~r, //Tương tự Math.floor(r)
                id = 'star' + f + (r % f ? 'half' : '')
            id && (document.getElementById(id).checked = !0)
        }
        $(document).on('change', 'input[name="rating"]', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                }
            });
            $.ajax({
                url: "{{ route('followers.store') }}",
                type: "post",
                data: {
                    'user_id': '{{ Auth::id() }}',
                    'author_id': '{{ $post->author_id }}',
                    'follow': 1
                },
                success: function(data) {
                    alert("Theo dõi tác giả thành công!");
                },
                error: function(error) {
                    alert("Theo dõi tác giả thất bại!");
                }
            });
        });

    </script>



@endsection
