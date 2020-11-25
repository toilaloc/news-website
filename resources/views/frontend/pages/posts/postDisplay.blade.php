@extends('frontend.layouts.others.index')
@section('title', $post->name)
@section('content')
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
                    <div class="col-sm-7 mb-2 mb-sm-0">
                        <div class="d-flex align-items-center">
                            <span class="d-block small font-weight-bold text-cap mr-2">Đánh giá:</span>
                            @include('frontend.pages.posts.voteDisplay',[
                            'votes' => $post->Rate($post->id),
                            'post_id'=>$post->checkRate($post->id)
                            ])
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
                            @if (Auth::check())
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
                                @else
                                <h3 class="mb-0">{{ $post->Author->fullname }}</h3>
                            @endif


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
                                @include('frontend.components.hotPosts')
                                </div>
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
                    @include('frontend.components.relaPost')
                </div>



                <div class="mb-3 border-bottom mt-3">
                <h3>Bài khác của tác giả {{$post->Author->fullname}}</h3>
                </div>
                <!-- End Title -->

                <div class="row">
                    @include('frontend.components.postAuthor')
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
        // $(document).on('change', 'input[type=star]', function() {
        //     if ($(this).is(':checked')) {
        //         ids.push($(this).val());
        //         count++;
        //         // alert(123);
        //     } else {
        //         ids.splice($.inArray($(this).val(), ids), 1);
        //         count--;
        //         // alert(321);
        //     }
        // })
        $(document).on('change', 'input[name="star"]', function() {
            // alert($(this).val());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                }
            });
            $.ajax({
                url: "{{ url('post_vote') }}",
                type: "post",
                data: {
                    'star': $(this).val(),
                    'user_id': '{{ Auth::id() }}',
                    'post_id': '{{ $post->id }}'
                },
                success: function(data) {
                    document.location.reload(true);
                },
                error: function(error) {
                    document.location.reload(true);
                }
            });
        });

    </script>



@endsection
