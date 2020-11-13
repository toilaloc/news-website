
@extends('frontend.layouts.index')

@section('content')
<!-- Hero Section -->
<div class="position-relative">
    <!-- Main Slider -->
    <div id="heroSlider" class="js-slick-carousel slick"
         data-hs-slick-carousel-options='{
           "vertical": true,
           "verticalSwiping": true,
           "autoplay": true,
           "autoplaySpeed": 10000,
           "dots": true,
           "dotsClass": "slick-pagination slick-pagination-white d-lg-none position-absolute bottom-0 right-0 left-0 mb-3",
           "asNavFor": "#heroSliderNav",
           "responsive": [
             {
               "breakpoint": 576,
               "settings": {
                 "vertical": false,
                 "verticalSwiping": false
               }
             }
           ]
         }'>

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(https://static.thebristolcable.org/uploads/2016/04/07-cover-1900x1080.jpg);">
            <!-- News Block -->
            <div class="container d-flex align-items-center min-h-620rem">
                <div class="w-lg-40 mr-5">
                    <!-- Author -->
                    <div class="media align-items-center mb-3"
                         data-hs-slick-carousel-animation="fadeInUp">
                        <div class="avatar avatar-sm avatar-circle mr-3">
                            <img class="avatar-img" src="../../../../assets//img/100x100/img10.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                            <a class="text-white" href="single-article.html">Christina Kray</a>
                        </div>
                    </div>
                    <!-- End Author -->

                    <div class="mb-5">
                        <h3 class="h1 font-weight-bold text-white"
                            data-hs-slick-carousel-animation="fadeInUp"
                            data-hs-slick-carousel-animation-delay="150">Front Interview with a Lead Designer of the Hubble</h3>
                    </div>
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                       data-hs-slick-carousel-animation="fadeInUp"
                       data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
            <!-- End News Block -->
        </div>

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(https://wallpapercave.com/wp/wp1923873.jpg);">
            <!-- News Block -->
            <div class="container d-flex align-items-center min-h-620rem">
                <div class="w-lg-40 mr-5">
                    <!-- Author -->
                    <div class="media align-items-center mb-3"
                         data-hs-slick-carousel-animation="fadeInUp">
                        <div class="avatar avatar-sm avatar-circle mr-3">
                            <img class="avatar-img" src="../../../../assets//img/100x100/img10.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                            <a class="text-white" href="single-article.html">Christina Kray</a>
                        </div>
                    </div>
                    <!-- End Author -->

                    <div class="mb-5">
                        <h2 class="h1 font-weight-bold text-white"
                            data-hs-slick-carousel-animation="fadeInUp"
                            data-hs-slick-carousel-animation-delay="150">Front Corporate - let's work together</h2>
                    </div>
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                       data-hs-slick-carousel-animation="fadeInUp"
                       data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
            <!-- End News Block -->
        </div>

        <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(https://www.beltandroad.news/wp-content/uploads/2019/10/388273782-1900x1080.jpg);">
            <!-- News Block -->
            <div class="container d-flex align-items-center min-h-620rem">
                <div class="w-lg-40 mr-5">
                    <div class="mb-7">
                        <!-- Author -->
                        <div class="media align-items-center mb-3"
                             data-hs-slick-carousel-animation="fadeInUp">
                            <div class="avatar avatar-sm avatar-circle mr-3">
                                <img class="avatar-img" src="../../../../assets//img/100x100/img4.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <a class="text-white" href="single-article.html">Jeff Fisher</a>
                            </div>
                        </div>
                        <!-- End Author -->

                        <h1 class="font-weight-bold text-white"
                            data-hs-slick-carousel-animation="fadeInUp"
                            data-hs-slick-carousel-animation-delay="150">How Google Assistant now helps you record stories</h1>
                    </div>
                    <a class="btn btn-primary btn-wide transition-3d-hover" href="single-article.html"
                       data-hs-slick-carousel-animation="fadeInUp"
                       data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
            </div>
            <!-- End News Block -->
        </div>
    </div>
    <!-- End Main Slider -->

    <!-- Slider Nav -->
    <div class="container slick-pagination-line-wrapper content-centered-y right-0 left-0">
        <div class="content-centered-y right-0 mr-3">
            <div id="heroSliderNav" class="js-slick-carousel slick slick-pagination-line max-w-27rem ml-auto"
                 data-hs-slick-carousel-options='{
               "vertical": true,
               "verticalSwiping": true,
               "autoplay": true,
               "autoplaySpeed": 10000,
               "slidesToShow": 3,
               "isThumbs": true,
               "asNavFor": "#heroSlider"
             }'>
                <div class="js-slide my-3">
                    <span class="text-white">Front Interview with a Lead Designer of the Hubble</span>

                    <span class="slick-pagination-line-progress">
              <span class="slick-pagination-line-progress-helper"></span>
            </span>
                </div>
                <div class="js-slide my-3">
                    <span class="text-white">Front Corporate - let's work together</span>

                    <span class="slick-pagination-line-progress">
              <span class="slick-pagination-line-progress-helper"></span>
            </span>
                </div>
                <div class="js-slide my-3">
                    <span class="text-white">How Google Assistant now helps you record stories</span>

                    <span class="slick-pagination-line-progress">
              <span class="slick-pagination-line-progress-helper"></span>
            </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Nav -->
</div>
<!-- End Hero Section -->

<!-- Show Content Bellow Header-->
<div class="container space-2 space-lg-3">
    <div class="row">
        <!-- Blog -->
        <div class="col-lg-4 d-none d-lg-block">
            <article class="mb-3 pb-3 border-bottom">
                <div class="media  text-inherit">
                    <div class="avatar avatar-lg mr-3">
                        <img class="avatar-img" src="https://znews-photo.zadn.vn/w210/Uploaded/sgtnrb/2020_11_11/merlin_179552940_2da83d38_7216_4e60_911b_3362a216b569_jumbo.jpg" alt="Image Description" style="border-radius: 0rem;">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 mb-0"><a class="text-inherit" href="#">Nhân viên bưu chính Pennsylvania rút lại lời khai về gian lận bầu cử</a></h4>
                    </div>
                </div>
            </article>
            <!-- End Blog -->

            <!-- Blog -->
            <article class="mb-3 pb-3 border-bottom">
                <div class="media text-inherit">
                    <div class="avatar avatar-lg mr-3">
                        <img class="avatar-img" src="https://znews-photo.zadn.vn/w210/Uploaded/ngotgs/2020_11_11/a.JPG" alt="Image Description" style="border-radius: 0rem;">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 mb-0"><a class="text-inherit" href="#">Đề xuất truy thăng quân hàm cho thượng úy hy sinh khi ngăn ẩu đả</a></h4>
                    </div>
                </div>
            </article>
            <!-- End Blog -->

            <!-- Blog -->
            <article class="mb-3 pb-3 border-bottom">
                <div class="media text-inherit">
                    <div class="avatar avatar-lg mr-3">
                        <img class="avatar-img" src="https://znews-photo.zadn.vn/w210/Uploaded/chuobun/2020_04_11/57b438af8c0f77512e1e.jpg" alt="Image Description" style="border-radius: 0rem;">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 mb-0"><a class="text-inherit" href="#">Giá xăng giảm xuống thấp nhất 4 tháng</a></h4>
                    </div>
                </div>
            </article>


            <article class="mb-3 pb-3 border-bottom">
                <div class="media text-inherit">
                    <div class="avatar avatar-lg mr-3">
                        <img class="avatar-img" src="https://znews-photo.zadn.vn/w210/Uploaded/izhqv/2020_11_11/1_1.jpg" alt="Image Description" style="border-radius: 0rem;">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 mb-0"><a class="text-inherit" href="#">Phát ngôn dung tục, MCK đội Karik tự hủy hoại mình ở Rap Việt</a></h4>
                    </div>
                </div>
            </article>


            <article class="mb-3 pb-3 border-bottom">
                <div class="media text-inherit">
                    <div class="avatar avatar-lg mr-3">
                        <img class="avatar-img" src="https://znews-photo.zadn.vn/w210/Uploaded/ngogtn/2020_10_19/4556f3d5_truong_doan_vinh_hoa_23.jpg" alt="Image Description" style="border-radius: 0rem;">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 mb-0"><a class="text-inherit" href="#">‘Đoạn trường vinh hoa’ - nghệ thuật huy hoàng kết tinh từ nỗi đau</a></h4>
                    </div>
                </div>
            </article>
        </div>


        <div class="col-lg-5 col-md-7 d-none d-lg-block">
            <article class="card" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1)">
                <img class="card-img-top" src="https://znews-photo.zadn.vn/w960/Uploaded/sgtnrb/2020_11_04/1000_2020_11_10T050328.865.jpeg" alt="Image Description">
                <div class="card-body" style="padding: 0.3rem;">
                    <h2 class="h3"><a class="text-inherit" href="single-article.html">Ông Trump sa thải Bộ trưởng Quốc phòng Esper</a></h2>
                    <p>Ông Donald Trump hôm 9/11 đã sa thải Bộ trưởng Quốc phòng Mark Esper, động thái chưa từng tiền lệ của một tổng thống sau khi thất bại trong bầu cử.</p>
                </div>
            </article>
        </div>

        <div class="col-lg-3 col-md-5 d-none d-lg-block">
            <article class="card" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1)">
                <div class="card-img-top">
                    <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/ovhpaob/2020_11_10/202011060840246073_Toan_canh_PTT_Truong_Hoa_Binh.jpg" alt="Image Description">
                </div>
                <div class="card-body" style="padding: 0.1rem;">
                    <h5><a class="text-inherit" href="single-article.html">Thủ tướng trả lời chất vấn đại biểu Quốc hội</a></h5>
                </div>
            </article>
            <article class="card" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1)">
                <div class="card-img-top">
                    <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/reyxqqskxq/2020_11_09/biden_anti_china_3_theintercept.jpg" alt="Image Description">
                </div>
                <div class="card-body" style="padding: 0.1rem;">
                    <h5><a class="text-inherit" href="single-article.html">Đừng trông đợi ông Biden gỡ bỏ thuế trừng phạt Trung Quốc</a></h5>
                </div>
            </article>
        </div>
        <!-- End Blog -->

        <div class="col-sm-12 col-md-12 d-lg-none d-md-block">
            <div class="js-slick-carousel slick slick-equal-height slick-gutters-1"
                 data-hs-slick-carousel-options='{
          "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-soft-white slick-arrow-left slick-arrow-centered-y rounded-circle ml-sm-2 ml-xl-4\"></span>",
          "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-soft-white slick-arrow-right slick-arrow-centered-y rounded-circle mr-sm-2 mr-xl-4\"></span>",
          "autoplay": true,
       "autoplaySpeed": 5000,
       "infinite": true,
          "adaptiveHeight": true,
          "responsive": [{
            "breakpoint": 992,
              "settings": {
                "slidesToShow": 2
              }
            }, {
            "breakpoint": 768,
            "settings": {
              "slidesToShow": 1
            }
          }]
        }'>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w210/Uploaded/pwivovlb/2020_11_10/bao_ve_1.jpg" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">Bảo vệ chung cư xịt sơn hàng loạt ôtô</h5>
                            <p class="font-size-1 text-body mb-0">Chiều 10/11, Công an quận Hà Đông, Hà Nội, cho biết cơ quan điều tra đã triệu tập Trần Đình Thắng, Nguyễn Xuân Loan và Nguyễn Văn Tâm (các nhân viên của Công ty bảo vệ Tây Hồ).</p>
                        </div>
                    </a>
                </div>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w210/Uploaded/lce_qjlcv/2020_11_10/ten_bao_10.11_thumb2.jpg" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">Vì sao cơn bão sắp vào Biển Đông có tên Vamco?</h5>
                            <p class="font-size-1 text-body mb-0">Cơn bão Vamco sắp vào Biển Đông là tên mà cơ quan khí tượng Việt Nam đề xuất, với tên Tiếng Việt là Vàm Cỏ. Tên của các cơn bão được đặt theo danh sách đề cử của các quốc gia.</p>
                        </div>
                    </a>
                </div>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w210/Uploaded/chuobun/2020_04_01/20160427162842thitlontanggia.jpg" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">Giá lợn hơi tại miền Nam đắt hơn miền Bắc 10.000 đồng/kg</h5>
                            <p class="font-size-1 text-body mb-0">Giá lợn hơi trên cả nước ngày 10/11 có dấu hiệu hạ nhiệt. Tiểu thương thu mua tại miền Bắc với giá 64.000-68.000 đồng/kg, trong khi miền Nam dao động 72.000-77.000 đồng/kg.</p>
                        </div>
                    </a>
                </div>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w210/Uploaded/yqdlcqrwq/2020_11_09/10809112020_1_copy.jpg" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">Ứng dụng của DJI hiện ‘đường lưỡi bò’ phi pháp</h5>
                            <p class="font-size-1 text-body mb-0">DJI Fly, ứng dụng điều khiển thiết bị bay của hãng công nghệ Trung Quốc bị người dùng phản ánh hiện “đường lưỡi bò” trong phần bản đồ.</p>
                        </div>
                    </a>
                </div>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w210/Uploaded/zxgorz/2020_11_10/bat_canh_sat.jpg" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">Bắt thêm một công an phường ở TP.HCM</h5>
                            <p class="font-size-1 text-body mb-0">Sau khi bắt tạm giam 7 cán bộ Công an phường Phú Thọ Hòa, Công an TP.HCM xử lý thêm một trường hợp khác liên quan vụ nhận tiền của người vi phạm pháp luật.</p>
                        </div>
                    </a>
                </div>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w960/Uploaded/ovhpaob/2020_11_10/w.jpg" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">Thủ tướng: Người tài giỏi, người tâm huyết phải được trọng dụng</h5>
                            <p class="font-size-1 text-body mb-0">Những gì tháo gỡ được để dân tộc tiến bước mạnh mẽ hơn thì phải đặt ra trong văn kiện để mọi người đóng góp. Người tài giỏi, người tâm huyết phải được trọng dụng”, Thủ tướng nói.</p>
                        </div>
                    </a>
                </div>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/ovhpaob/2020_11_10/201906051221501429_Dao_Thanh_Hai_Doan_DBQH_thanh_pho_Ha_Noi_2_copy_1.jpg" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">Tướng Đào Thanh Hải: Không bảo vệ được cán bộ, không ai dám đổi mới</h5>
                            <p class="font-size-1 text-body mb-0">Theo thiếu tướng Đào Thanh Hải, trong đổi mới sáng tạo, ranh giới giữa đúng và sai rất mong manh. Gần đây, có tình trạng cán bộ đảng viên chỉ làm tròn vai, không dám đột phá.</p>
                        </div>
                    </a>
                </div>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/pwvopivp/2020_11_10/e6f1be19a0b25eec07a3.jpg" alt="Image Description">
                        <div class="card-body">
                            <h5 class="mb-0">Sau ngày bầu cử, ông Trump và Biden sống 'hai thế giới song song</h5>
                            <p class="font-size-1 text-body mb-0">Ở thế giới thứ nhất, ông Biden và các phụ tá bắt đầu lên kế hoạch tiếp quản đất nước. Ở thế giới còn lại, Tổng thống Trump và đội ngũ đánh cược với một cuộc chiến pháp lý lâu dài.</p>
                        </div>
                    </a>
                </div>



            </div>
        </div>


        <!-- Hien thi slide tren man hinh ipad/laptop -->
        <div class="d-none d-lg-block col-lg-12 space-lg-1">
            <div class="mb-3">
                <h3>TIN TỔNG HỢP</h3>
            </div>
            <div class="js-slick-carousel slick slick-gutters-1"
                 data-hs-slick-carousel-options='{
       "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-soft-white slick-arrow-left slick-arrow-centered-y rounded-circle ml-sm-2 ml-xl-4\"></span>",
       "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-soft-white slick-arrow-right slick-arrow-centered-y rounded-circle mr-sm-2 mr-xl-4\"></span>",
       "slidesToShow": 5,
       "autoplay": true,
       "autoplaySpeed": 3000,
       "infinite": true,
       "responsive": [{
         "breakpoint": 768,
         "settings": {
           "arrows": true
         }
       }]
     }'>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#" >
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/dqmblcvo/2020_11_11/51B40456_15A5_476C_9F21_7088FD95F5B3.jpeg" alt="Image Description" style="border-top-left-radius: 0rem;
            border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">Nhất định tôi sẽ tìm ra người thương tôi</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#" >
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_11/thumb_chim_xanh.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
          border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">'Con chim xanh biếc bay về' - cổ tích cho người lớn</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#" >
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/qoswae/2020_11_12/Pies_okopy.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
        border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body h-25" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">Sự hiện diện của các loài vật trong cuộc sống</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_12/starry_night_.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
      border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">Sự im lặng của bầy cừu - Tiến sĩ lạ lùng</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#" >
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/qoswae/2020_11_12/Pies_okopy.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
        border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body h-25" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">Sự hiện diện của các loài vật trong cuộc sống</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_12/starry_night_.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
      border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">Sự im lặng của bầy cừu - Tiến sĩ lạ lùng</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#" style="background: #f7f7f7; ">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_11/Tu_Du.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
    border-top-right-radius: 0rem; height: 150px;">
                        <div class="card-body" style="padding: 0.5rem;">
                            <h5 class="mb-0">'Từ Dụ thái hậu' đoạt giải nhất cuộc thi tiểu thuyết</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End -->
            </div>
        </div>



        <!-- Hien thi tren man hinh dien thoai -->
        <div class="d-lg-none col-sm-12 space-1">
            <div class="mb-3">
                <h3>TIN TỔNG HỢP</h3>
            </div>
            <div class="js-slick-carousel slick slick-gutters-1"
                 data-hs-slick-carousel-options='{
          "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-soft-white slick-arrow-left slick-arrow-centered-y rounded-circle ml-sm-2 ml-xl-4\"></span>",
          "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-soft-white slick-arrow-right slick-arrow-centered-y rounded-circle mr-sm-2 mr-xl-4\"></span>",
          "slidesToShow": 2,
          "autoplay": true,
          "autoplaySpeed": 3000,
          "infinite": true,
          "responsive": [{
            "breakpoint": 768,
            "settings": {
              "arrows": true
            }
          }]
        }'>

                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/dqmblcvo/2020_11_11/51B40456_15A5_476C_9F21_7088FD95F5B3.jpeg" alt="Image Description" style="border-top-left-radius: 0rem;
               border-top-right-radius: 0rem; height: 200px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">Nhất định tôi sẽ tìm ra người thương tôi</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_11/thumb_chim_xanh.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
             border-top-right-radius: 0rem; height: 200px;">
                        <div class="card-body" style="background: #f7f7f7; padding: 0.5rem;">
                            <h5 class="mb-0">'Con chim xanh biếc bay về' - cổ tích cho người lớn</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/qoswae/2020_11_12/Pies_okopy.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
           border-top-right-radius: 0rem; height: 200px; ">
                        <div class="card-body h-25" style="background: #f7f7f7;padding: 0.5rem;">
                            <h5 class="mb-0">Sự hiện diện của các loài vật trong cuộc sống</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_12/starry_night_.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
        border-top-right-radius: 0rem; height: 200px;">
                        <div class="card-body" style="background: #f7f7f7;padding: 0.5rem;">
                            <h5 class="mb-0">Sự im lặng của bầy cừu - Tiến sĩ lạ lùng</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_11/Tu_Du.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
      border-top-right-radius: 0rem; height: 200px;">
                        <div class="card-body" style="background: #f7f7f7;padding: 0.5rem;">
                            <h5 class="mb-0">'Từ Dụ thái hậu' đoạt giải nhất cuộc thi tiểu thuyết</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_12/starry_night_.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
         border-top-right-radius: 0rem; height: 200px;">
                        <div class="card-body" style="background: #f7f7f7;padding: 0.5rem;">
                            <h5 class="mb-0">Sự im lặng của bầy cừu - Tiến sĩ lạ lùng</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <div class="js-slide bg-img-hero-center">
                    <a class="card h-100 transition-3d-hover" href="#">
                        <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_11/Tu_Du.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
       border-top-right-radius: 0rem; height: 200px;">
                        <div class="card-body" style="background: #f7f7f7;padding: 0.5rem;">
                            <h5 class="mb-0">'Từ Dụ thái hậu' đoạt giải nhất cuộc thi tiểu thuyết</h5>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End -->
            </div>
        </div>

    </div>
    <!-- End Show Content Bellow Header-->

    <div class="col-lg-12 mb-3">
        <div class="mb-3">
            <h3>TIN SHOWBIZ</h3>
        </div>
        <div data-aos="fade-up" class="aos-init aos-animate">
            <div class="row" style="background: rgba(245, 202, 153, 0.1)">
                <div class="col-lg-6 col-md-6 order-md-2 col-sm-12 col-12 order-2 order-lg-2 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-md-2 col-sm-12 mb-sm-2 mb-4">
                            <a class="card transition-3d-hover" href="#" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                                <img class="card-img-top d-none d-lg-block" src="https://znews-photo.zadn.vn/w480/Uploaded/ovhpaob/2020_11_10/z2171282557494_5d27b80fa4f7b4c3e7e2441b6d7ae184.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                      border-top-right-radius: 0rem; ">
                                <div class="card-body" style="background: rgba(245, 202, 153, 0.1); padding: 4px 4px 4px 4px;">
                                    <h5 class="mb-0"><span class="dot-icon d-lg-none mr-2"></span> Những phát ngôn làm nóng nghị trường Quốc hội</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-md-2 col-sm-12 mb-sm-2 mb-4">
                            <a class="card transition-3d-hover" href="#" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                                <img class="card-img-top d-none d-lg-block" src="https://znews-photo.zadn.vn/w480/Uploaded/zdhwqmjwq/2020_11_11/r.jpeg" alt="Image Description" style="border-top-left-radius: 0rem;
                        border-top-right-radius: 0rem;">
                                <div class="card-body" style="background: rgba(245, 202, 153, 0.1); padding: 4px 4px 4px 4px;">
                                    <h5 class="mb-0"><span class="dot-icon d-lg-none mr-2"></span> Người TP.HCM co ro giữa tiết trời se lạnh</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-md-2 col-sm-12 mb-sm-2 mb-4">
                            <a class="card transition-3d-hover" href="#" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                                <img class="card-img-top d-none d-lg-block" src="https://znews-photo.zadn.vn/w480/Uploaded/mdf_uswreo/2020_11_11/t400.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                          border-top-right-radius: 0rem;">
                                <div class="card-body" style="background: rgba(245, 202, 153, 0.1); padding: 4px 4px 4px 4px;">
                                    <h5 class="mb-0"><span class="dot-icon d-lg-none mr-2"></span> Ivanka Trump thay đổi thế nào từ khi vào Nhà Trắng</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-md-2 col-sm-12 mb-sm-2 mb-4">
                            <a class="card transition-3d-hover" href="#" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                                <img class="card-img-top d-none d-lg-block" src="https://znews-photo.zadn.vn/w480/Uploaded/ohunuai/2020_11_10/NGCg.jpg_6654.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                            border-top-right-radius: 0rem;">
                                <div class="card-body" style="background: rgba(245, 202, 153, 0.1);padding: 4px 4px 4px 4px;">
                                    <h5 class="mb-0"><span class="dot-icon d-lg-none mr-2"></span> Gil Lê tránh chụp ảnh chung với Hoàng Thùy Linh</h5>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>



                <div class="col-lg-6 col-md-6 col-sm-12 col-12 order-1 order-md-1">
                    <!-- Blog -->
                    <article>
                        <a class="card align-items-start flex-wrap flex-row h-380rem gradient-x-overlay-sm-navy bg-img-hero transition-3d-hover mb-1" href="blog-profile.html" style="background-image: url(https://znews-photo.zadn.vn/w860/Uploaded/izhqv/2020_10_26/Thumb.jpg);">
                            <div class="card-footer border-0 bg-transparent mt-auto">
                                <h3 class="h2 text-white">Noo Phước Thịnh: 'Tôi mất rất nhiều, ví như mối quan hệ với Thủy Tiên'</h3>
                            </div>
                        </a>
                    </article>
                    <!-- End Blog -->
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-lg-between">
        <div class="col-lg-8">
            <div class="mb-3">
                <h3>TIN TỔNG HỢP</h3>
            </div>
            <!-- Card -->
            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">
                            <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/lce_uxlcq/2020_11_11/ds.jpg" alt="Image Description" style="border-radius: 0rem;">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="media mb-2">
                        <div class="media-body">
                            <a href="course-description.html"><h3 class="h4 text-hover-primary mb-0" >Nhiều người chơi Liên Quân Mobile chưa bị thu lại vật phẩm 'tặng nhầm'</h3></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center small text-muted">
                        <div class="d-inline-block mr-2">
                            6 GIỜ TRƯỚC
                        </div>
                        <div class="d-inline-block mr-2">
                            <a style="color: #333;" href="course-description.html">THỂ THAO</a>
                        </div>
                    </div>
                    <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                        Sau sự cố ngày 11/11, nhiều người chơi của Liên Quân Mobile vẫn được trang bị skin, tướng đầy đủ. Những người còn lại đã bị thu hồi vật phẩm "tặng nhầm".</p>
                </div>
            </div>


            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">
                            <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/mdf_drkydd/2020_11_11/800.jpeg" alt="Image Description" style="border-radius: 0rem;">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="media mb-2">
                        <div class="media-body">
                            <a href="course-description.html"><h3 class="h4 text-hover-primary mb-0" >Gia đình ông Trump có thể không giàu như nhiều người nghĩ</h3></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center small text-muted">
                        <div class="d-inline-block mr-2">
                            6 GIỜ TRƯỚC
                        </div>
                        <div class="d-inline-block mr-2">
                            <a style="color: #333;" href="course-description.html">THỂ THAO</a>
                        </div>
                    </div>
                    <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                        Kể từ khi cha bước chân vào Nhà Trắng, công việc kinh doanh của Ivanka và các anh trai cũng chịu ảnh hưởng.
                    </p>
                </div>
            </div>


            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">
                            <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/neg_sfzyrwj/2020_11_11/gian_lan.jpg" alt="Image Description" style="border-radius: 0rem;">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="media mb-2">
                        <div class="media-body">
                            <a href="course-description.html"><h3 class="h4 text-hover-primary mb-0" >Quan chức Nhà Trắng tung 234 trang hồ sơ cáo buộc gian lận bầu cử</h3></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center small text-muted">
                        <div class="d-inline-block mr-2">
                            6 GIỜ TRƯỚC
                        </div>
                        <div class="d-inline-block mr-2">
                            <a style="color: #333;" href="course-description.html">THỂ THAO</a>
                        </div>
                    </div>
                    <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                        Xuất hiện trên kênh Fox News ngày 10/11, Thư ký Báo chí Nhà Trắng Kayleigh McEnany đưa ra tập hồ sơ 234 trang chứa thông tin về 11.000 vụ gian lận bầu cử.
                    </p>
                </div>
            </div>

            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">
                            <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/lce_jwqcz/2020_11_11/khong_che_bb_baaacF5lT4.jpg" alt="Image Description" style="border-radius: 0rem;">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="media mb-2">
                        <div class="media-body">
                            <a href="course-description.html"><h3 class="h4 text-hover-primary mb-0" >
                                    Khởi tố nghi phạm giết chị ruột ở TP.HCM
                                </h3></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center small text-muted">
                        <div class="d-inline-block mr-2">
                            6 GIỜ TRƯỚC
                        </div>
                        <div class="d-inline-block mr-2">
                            <a style="color: #333;" href="course-description.html">THỂ THAO</a>
                        </div>
                    </div>
                    <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                        Sau khi cãi vã, Nho sát hại chị gái rồi cố thủ trong nhà. Cảnh sát phải phá cửa để khống chế nghi phạm.
                    </p>
                </div>
            </div>

            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">
                            <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/yrfjpyvslyr/2020_11_11/anh4.jpg" alt="Image Description" style="border-radius: 0rem;">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="media mb-2">
                        <div class="media-body">
                            <a href="course-description.html"><h3 class="h4 text-hover-primary mb-0" >
                                    Đông đảo CĐV nữ xem Jack so tài Quang Hải trên sân cỏ</h3></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center small text-muted">
                        <div class="d-inline-block mr-2">
                            6 GIỜ TRƯỚC
                        </div>
                        <div class="d-inline-block mr-2">
                            <a style="color: #333;" href="course-description.html">THỂ THAO</a>
                        </div>
                    </div>
                    <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                        Nhiều cổ động viên nữ có mặt trên khán đài sân Thống Nhất để xem trận đấu giao hữu giữa các tuyển thủ Việt Nam và dàn nghệ sĩ nổi tiếng như Jack, ViruSs lúc 18h30 ngày 11/11.</p>
                </div>
            </div>

            <div class="row mb-2 pb-2 border-bottom">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0">
                    <div class="position-relative">
                        <a href="course-description.html">
                            <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/wpdhnwhnw/2020_11_11/116418721_2252453701566817_9208072881615440565_o.jpg" alt="Image Description" style="border-radius: 0rem;">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="media mb-2">
                        <div class="media-body">
                            <a href="course-description.html"><h3 class="h4 text-hover-primary mb-0" >Game show đã khiến nghệ sĩ Việt lao đao thế nào?</h3></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start align-items-center small text-muted">
                        <div class="d-inline-block mr-2">
                            6 GIỜ TRƯỚC
                        </div>
                        <div class="d-inline-block mr-2">
                            <a style="color: #333;" href="course-description.html">THỂ THAO</a>
                        </div>
                    </div>
                    <p class="font-size-1 text-body mb-0 d-none d-md-block d-lg-block">
                        Về bản chất, game show như một con dao hai lưỡi. Nó có thể mang lại tiền bạc, tên tuổi cho nghệ sĩ nhưng cũng là nguyên nhân khiến họ bị nhấn chìm.</p>
                </div>
            </div>

            <!-- End Card -->
            <!-- Pagination -->
            <!-- End Pagination -->
        </div>
        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>

        <div class="col-lg-3">
            <div class="mb-7">
                <div class="mb-3">
                    <h3>Newsletter</h3>
                </div>

                <!-- Form -->
                <form class="js-validate mb-2">
                    <label class="sr-only" for="subscribeSr">Subscribe</label>
                    <div class="input-group input-group-flush mb-3">
                        <input type="email" class="form-control form-control-sm" name="email" id="subscribeSr" placeholder="Your email" aria-label="Your email" required
                               data-msg="Please enter a valid email address.">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary btn-block">Subscribe</button>
                </form>
                <!-- End Form -->
            </div>


            <!-- Sticky Block Start Point -->
            <div id="stickyBlockStartPoint"></div>

            <div class="js-sticky-block"
                 data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "breakpoint": "lg",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 40,
                 "stickyOffsetBottom": 20
               }'>
                <div class="mb-7">
                    <div class="mb-3">
                        <h3>Front culture</h3>
                    </div>

                    <!-- Blog -->
                    <article class="mb-5">
                        <div class="media align-items-center text-inherit">
                            <div class="avatar avatar-lg mr-3">
                                <img class="avatar-img" src="../../../../assets//img/320x320/img1.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="h6 mb-0"><a class="text-inherit" href="#">Announcing a free plan for small teams</a></h4>
                            </div>
                        </div>
                    </article>
                    <!-- End Blog -->

                    <!-- Blog -->
                    <article class="mb-5">
                        <div class="media align-items-center text-inherit">
                            <div class="avatar avatar-lg mr-3">
                                <img class="avatar-img" src="../../../../assets//img/320x320/img10.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="h6 mb-0"><a class="text-inherit" href="#">Mapping the first family tree for Front office</a></h4>
                            </div>
                        </div>
                    </article>
                    <!-- End Blog -->

                    <!-- Blog -->
                    <article class="mb-5">
                        <div class="media align-items-center text-inherit">
                            <div class="avatar avatar-lg mr-3">
                                <img class="avatar-img" src="../../../../assets//img/320x320/img9.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="h6 mb-0"><a class="text-inherit" href="#">Felline eyeing first major Classic win in 2018</a></h4>
                            </div>
                        </div>
                    </article>
                    <!-- End Blog -->
                </div>

            </div>
        </div>

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>XUẤT BẢN</h3>
                    </div>
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/piqbzcvo/2020_11_11/avd2_1592382028933928334407.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;">
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="single-article.html">Những bảo bối nào thường xuyên được Doraemon sử dụng?</a></h4>
                        </div>
                    </article>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_10/44043524_1903944283234338_6629408168860450816_n.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Khoảng trống sách nghệ thuật</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/piqbzcvo/2020_10_29/dan_quan.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Cuộc sống tại Hà Nội những năm 1967 đến 1975</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>SÁCH HAY</h3>
                    </div>
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_11/ly_thanh_co_elle_man_feature.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;">
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="single-article.html">'Trăng mật với bản thân' - bí quyết sống hạnh phúc của người độc thân</a></h4>
                        </div>
                    </article>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/dqmblcvo/2020_11_07/SachSG1.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Phố heo may về</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/mdf_fedrei/2020_11_10/gia_tri_cua_su_tu_te_2.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Nuôi dưỡng sự tử tế để chữa lành tâm hồn</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>TÁC GIẢ</h3>
                    </div>
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_10_26/thumb_R.jpg" alt="Image Description" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;">
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="single-article.html">Bức tranh cuộc đời trong 'Bệnh vẩy nến nơi vĩnh hằng'</a></h4>
                        </div>
                    </article>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/bpcpwiq2/2020_11_07/Di_tron_202011_Quynh_Tram_7_.JPG" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Tiểu thuyết mới của Bình Ca không có đánh lộn và yêu đương</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/oplukaa/2020_11_09/Hoc_tro.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Mối tình đầu</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <h3>XÃ HỘI</h3>
                    </div>
                    <article class="card border-bottom" style="box-shadow: 0px 0px 0px rgba(140, 152, 164, 0.1);">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="https://znews-photo.zadn.vn/w480/Uploaded/pgi_qvradhnat/2020_11_11/thumb_hue.jpeg" alt="Image Description" style="border-top-left-radius: 0rem;
                  border-top-right-radius: 0rem;">
                        </div>
                        <div class="card-body" style="padding: 0.5rem;">
                            <h4 class="h5"><a class="text-inherit" href="single-article.html">Người Huế đưa ôtô, xe máy lên cầu tránh lũ</a></h4>
                        </div>
                    </article>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/qhj_dvoahficbu/2020_11_12/uuu.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Chưa tăng lương để dành tiền chống dịch, khắc phục hậu quả thiên tai</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2 mt-2 pb-2 border-bottom">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 mb-3 mb-md-0">
                            <div class="position-relative">
                                <a href="course-description.html">
                                    <img class="img-fluid w-100" src="https://znews-photo.zadn.vn/w480/Uploaded/jugtzb/2020_10_27/N23.jpg" alt="Image Description" style="border-radius: 0rem;">
                                </a>
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-md-8 col-sm-8" style="padding-right: 2px;  padding-left: 2px;">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <a href="course-description.html"><h4 class="h6 text-hover-primary mb-0">
                                            Đà Nẵng cấm tàu thuyền ra khơi</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
