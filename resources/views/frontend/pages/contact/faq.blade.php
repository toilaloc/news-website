@extends('frontend.layouts.others.index')
@section('title', 'F8News - FAQ')
@section('og-title', 'F8News - FAQ')
@section('og-url', url('frontend/faq'))
@section('content')
    <!-- Hero Section -->
    <div class="bg-img-hero" style="background-image: url(../../../../assets//svg/components/abstract-shapes-12.svg);">
        <div class="container space-top-2 space-top-lg-2 space-bottom-1 position-relative z-index-2">
            <div class="w-md-80 w-lg-60 text-center mx-md-auto">
                <h1>Câu hỏi thường gặp</h1>
                <p>Tìm kiếm Câu hỏi thường gặp của chúng tôi để có câu trả lời cho bất kỳ điều gì bạn có thể hỏi.</p>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- FAQ Topics Section -->
    <div class="container space-2 space-bottom-lg-3">
        <div class="row justify-content-lg-center">
            <div class="col-lg-8">
                <div id="basics" class="space-bottom-1">
                    <h2>Khái niệm cơ bản
</h2>

                    <!-- Basics Accordion -->
                    <div id="basicsAccordion">
                    

                    

                    

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeadingFour">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                   Làm thế nào để thay đổi mật khẩu của tôi?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                                <div class="card-body px-0">
                                    <p>Để thay đổi mật khẩu của bạn vui lòng truy cập vào trang thông tin tài khoản, sau đó chọn đổi mật khẩu. Tại trang đổi mật khẩu bạn hãy điền đầy đủ thông tin để tiến hành đổi mật khẩu. Chúng tôi sẽ xác nhận và cập nhập lại mật khẩu mới cho bạn.</p>
                               
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Basics Accordion -->
                </div>

                <div id="syncing" class="space-1">
                    <h2>Đồng bộ hóa</h2>

                    <!-- Syncing Accordion -->
                    <div id="syncingAccordion">
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="syncingHeadingOne">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#syncingCollapseOne" aria-expanded="false" aria-controls="syncingCollapseOne">
                                    Đồng bộ hóa hoạt động như thế nào?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="syncingCollapseOne" class="collapse" aria-labelledby="syncingHeadingOne" data-parent="#syncingAccordion">
                                <div class="card-body px-0">
                                    <p>Đang cập nhật...</p>
                                  
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="syncingHeadingTwo">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#syncingCollapseTwo" aria-expanded="false" aria-controls="syncingCollapseTwo">
                                Làm cách nào để tải tệp lên từ điện thoại hoặc máy tính bảng của tôi?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="syncingCollapseTwo" class="collapse" aria-labelledby="syncingHeadingTwo" data-parent="#syncingAccordion">
                                <div class="card-body px-0">
                                <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="syncingHeadingThree">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#syncingCollapseThree" aria-expanded="false" aria-controls="syncingCollapseThree">
                                Làm cách nào để liên kết đến một tệp hoặc thư mục?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="syncingCollapseThree" class="collapse" aria-labelledby="syncingHeadingThree" data-parent="#syncingAccordion">
                                <div class="card-body px-0">
                                <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Syncing Accordion -->
                </div>

                <div id="account" class="space-1">
                    <h2>Tài khoản &amp; Cài đặt</h2>

                    <!-- Account Accordion -->
                    <div id="accountAccordion">
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="accountHeadingOne">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#accountCollapseOne" aria-expanded="false" aria-controls="accountCollapseOne">
                                Làm thế nào để thay đổi mật khẩu của tôi?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="accountCollapseOne" class="collapse" aria-labelledby="accountHeadingOne" data-parent="#accountAccordion">
                                <div class="card-body px-0">
                                   <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="accountHeadingTwo">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#accountCollapseTwo" aria-expanded="false" aria-controls="accountCollapseTwo">
                                Làm cách nào để xóa tài khoản của tôi?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="accountCollapseTwo" class="collapse" aria-labelledby="accountHeadingTwo" data-parent="#accountAccordion">
                                <div class="card-body px-0">
                                    <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="accountHeadingThree">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#accountCollapseThree" aria-expanded="false" aria-controls="accountCollapseThree">
                                Làm cách nào để thay đổi cài đặt tài khoản của tôi?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="accountCollapseThree" class="collapse" aria-labelledby="accountHeadingThree" data-parent="#accountAccordion">
                                <div class="card-body px-0">
                                <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="accountHeadingFour">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#accountCollapseFour" aria-expanded="false" aria-controls="accountCollapseFour">
                                Tôi quên mật khẩu của tôi. Làm cách nào để đặt lại nó?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="accountCollapseFour" class="collapse" aria-labelledby="accountHeadingFour" data-parent="#accountAccordion">
                                <div class="card-body px-0">
                                <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Account Accordion -->
                </div>

                <div id="privacy" class="space-1">
                    <h2>Riêng tư</h2>

                    <!-- Privacy Accordion -->
                    <div id="privacyAccordion">
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="privacyHeadingOne">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#privacyCollapseOne" aria-expanded="false" aria-controls="privacyCollapseOne">
                                Tôi có thể chỉ định khóa riêng của mình không?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="privacyCollapseOne" class="collapse" aria-labelledby="privacyHeadingOne" data-parent="#privacyAccordion">
                                <div class="card-body px-0">
                                <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="privacyHeadingThree">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#privacyCollapseThree" aria-expanded="false" aria-controls="privacyCollapseThree">
                                Làm cách nào để truy cập dữ liệu quyền riêng tư của tôi?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="privacyCollapseThree" class="collapse" aria-labelledby="privacyHeadingThree" data-parent="#privacyAccordion">
                                <div class="card-body px-0">
                                <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="privacyHeadingFour">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#privacyCollapseFour" aria-expanded="false" aria-controls="privacyCollapseFour">
                                Làm cách nào để kiểm soát nếu các công cụ tìm kiếm khác có thể liên kết đến hồ sơ của tôi?

                                    <span class="card-btn-toggle">
                      <span class="card-btn-toggle-default">&plus;</span>
                      <span class="card-btn-toggle-active">&minus;</span>
                    </span>
                                </a>
                            </div>
                            <div id="privacyCollapseFour" class="collapse" aria-labelledby="privacyHeadingFour" data-parent="#privacyAccordion">
                                <div class="card-body px-0">
                                <p>Đang cập nhật...</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Privacy Accordion -->
                </div>

                <div class="row mx-n2 space-top-lg-2">
                    <div class="col-md-6 px-2 mb-3 mb-lg-0">
                        <!-- Icon Block -->
                        <a class="card card-frame h-100" href="#">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="w-100 max-w-6rem mr-3">
                                        <img class="img-fluid" src="{{asset('frontend/assets/svg/icons/icon-4.svg')}}" alt="SVG">
                                    </figure>
                                    <div class="media-body">
                                        <h3>Đặt một câu hỏi</h3>
                                        <p class="text-body">Trò chuyện trực tiếp với các thành viên trong cộng đồng để được giải đáp thắc mắc của bạn.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Icon Block -->
                    </div>

                    <div class="col-md-6 px-2 mb-3 mb-lg-0">
                        <!-- Icon Block -->
                        <a class="card card-frame h-100" href="#">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="w-100 max-w-6rem mr-3">
                                        <img class="img-fluid" src="{{asset('frontend/assets/svg/icons/icon-2.svg')}}" alt="SVG">
                                    </figure>
                                    <div class="media-body">
                                        <h3>Đặt một câu hỏi</h3>
                                        <p class="text-body">Tìm hiểu chi tiết kỹ thuật của các sản phẩm và thuật toán đồng thuận của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Icon Block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ Topics Section -->
@endsection
