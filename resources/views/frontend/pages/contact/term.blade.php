@extends('frontend.layouts.others.index')
@section('title', 'F8News - Quy định và điều khoản')
@section('og-title', 'F8News - Quy định và điều khoản')
@section('og-url', url('frontend/term'))
@section('content')
    <!-- Hero Section -->
    <div class="bg-img-hero" style="background-image: url(../../../../assets//svg/components/abstract-shapes-12.svg);">
        <div class="container space-top-3 space-top-lg-2 space-bottom-2 position-relative z-index-2">
            <div class="w-md-80 w-lg-60 text-center mx-md-auto">
                <h1>Điều khoản &amp; Điều kiện phía trước</h1>
                <p>Ngày có hiệu lực: 01/10/2020</p>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Terms Content Section -->
    <div class="container space-2 space-bottom-lg-3">
        <div class="row">
            <div id="stickyBlockStartPoint" class="col-md-4 col-lg-3 mb-7 mb-md-0">
                <!-- Nav -->
                <nav class="js-sticky-block card shadow-none bg-light"
                     data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPoint",
                 "targetSelector": "#logoAndNav",
                 "breakpoint": "md",
                 "startPoint": "#stickyBlockStartPoint",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 24,
                 "stickyOffsetBottom": 24
               }'>
                    <div class="card-body">
                        <ul class="js-scroll-nav nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold mb-2" href="#services">1. Sử dụng dịch vụ của chúng tôi</a>

                                <ol class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link mb-2" href="#personal-data">A. Dữ liệu Cá nhân mà chúng tôi thu thập về bạn</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-2" href="#information">B. Thông tin mà chúng tôi thu thập tự động trên Trang web của mình</a>
                                    </li>
                                </ol>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold mb-2" href="#privacy">2. Bảo vệ quyền riêng tư và bản quyền</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold mb-2" href="#yourContent">3. Nội dung của bạn trong các dịch vụ của chúng tôi</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Nav -->
            </div>

            <div class="col-md-8 col-lg-9">
                <div id="intro" class="space-bottom-1">
                    <!-- Title -->
                    <div class="mb-3">
                        <h2 class="h3">Chào mừng bạn đến với Fnews</h2>
                    </div>
                    <!-- End Title -->

                    <p>Cảm ơn bạn đã sử dụng sản phẩm và dịch vụ của chúng tôi ("Dịch vụ"). Dịch vụ được cung cấp bởi Fnews. có địa chỉ tại 137 Nguyễn Thị Thập - Hòa Minh - Liên Chiểu - Đà Nẵng.
                    <p>Bằng cách sử dụng Dịch vụ của chúng tôi, bạn đồng ý với các điều khoản này. Hãy đọc chúng một cách cẩn thận.</p>
                    <p>Dịch vụ của chúng tôi rất đa dạng, vì vậy đôi khi có thể áp dụng các điều khoản bổ sung hoặc yêu cầu sản phẩm (bao gồm cả yêu cầu về độ tuổi). Các điều khoản bổ sung sẽ có sẵn với các Dịch vụ liên quan và các điều khoản bổ sung đó trở thành một phần trong thỏa thuận của bạn với chúng tôi nếu bạn sử dụng các Dịch vụ đó.</p>
                </div>

                <div id="services" class="space-bottom-1">
                    <!-- Title -->
                    <div class="mb-3">
                        <h3>1. Sử dụng dịch vụ của chúng tôi</h3>
                    </div>
                    <!-- End Title -->

                    <p>Bạn phải tuân theo bất kỳ chính sách nào được cung cấp cho bạn trong Dịch vụ.</p>
                    <p>Đừng lạm dụng Dịch vụ của chúng tôi. Ví dụ: không can thiệp vào Dịch vụ của chúng tôi hoặc cố gắng truy cập chúng bằng phương pháp khác với giao diện và hướng dẫn mà chúng tôi cung cấp. Bạn chỉ có thể sử dụng Dịch vụ của chúng tôi khi được pháp luật cho phép, bao gồm các luật và quy định hiện hành về kiểm soát xuất khẩu và tái xuất khẩu. Chúng tôi có thể tạm ngừng hoặc ngừng cung cấp Dịch vụ của chúng tôi cho bạn nếu bạn không tuân thủ các điều khoản hoặc chính sách của chúng tôi hoặc nếu chúng tôi đang điều tra hành vi sai trái bị nghi ngờ.</p>
                    <p>Việc sử dụng Dịch vụ của chúng tôi không cung cấp cho bạn quyền sở hữu bất kỳ quyền sở hữu trí tuệ nào trong Dịch vụ của chúng tôi hoặc nội dung bạn truy cập. Bạn không được sử dụng nội dung từ Dịch vụ của chúng tôi trừ khi bạn được chủ sở hữu cho phép hoặc được pháp luật cho phép. Các điều khoản này không cấp cho bạn quyền sử dụng bất kỳ nhãn hiệu hoặc biểu tượng nào được sử dụng trong Dịch vụ của chúng tôi. Không xóa, che khuất hoặc thay đổi bất kỳ thông báo pháp lý nào được hiển thị trong hoặc cùng với Dịch vụ của chúng tôi.</p>

                    <!-- Title -->
                    <div id="personal-data" class="mb-3">
                        <h4>A. Dữ liệu Cá nhân mà chúng tôi thu thập về bạn.</h4>
                    </div>
                    <!-- End Title -->

                    <p>Dữ liệu Cá nhân là bất kỳ thông tin nào liên quan đến một cá nhân được xác định hoặc nhận dạng được. Dữ liệu Cá nhân mà bạn cung cấp trực tiếp cho chúng tôi thông qua Trang web của chúng tôi sẽ rõ ràng theo ngữ cảnh mà bạn cung cấp dữ liệu. Đặc biệt:</p>

                    <ul>
                        <li class="pb-2">Khi bạn đăng ký tài khoản Fnews, chúng tôi sẽ thu thập họ tên, địa chỉ email và thông tin đăng nhập tài khoản của bạn.</li>
                        <li class="pb-2">Khi bạn điền vào biểu mẫu trực tuyến của chúng tôi để liên hệ với nhóm bán hàng của chúng tôi, chúng tôi sẽ thu thập họ tên, email công việc, quốc gia của bạn và bất kỳ thông tin nào khác mà bạn cho chúng tôi biết về dự án, nhu cầu và tiến trình của bạn.</li>
                        <li class="pb-2">Khi bạn sử dụng tính năng "Ghi nhớ thông tin" của Front Checkout, chúng tôi sẽ thu thập địa chỉ email, số thẻ thanh toán, mã CVC và ngày hết hạn của bạn.</li>
                    </ul>

                    <p>Khi bạn trả lời email hoặc khảo sát của Mặt trận, chúng tôi sẽ thu thập địa chỉ email, tên và bất kỳ thông tin nào khác mà bạn chọn để đưa vào nội dung email hoặc phản hồi của mình. Nếu bạn liên hệ qua điện thoại, chúng tôi sẽ thu thập số điện thoại bạn dùng để gọi cho Front. Nếu bạn liên hệ với chúng tôi qua điện thoại với tư cách là Người dùng chính, chúng tôi có thể thu thập thêm thông tin để xác minh danh tính của bạn.</p>

                    <!-- Title -->
                    <div id="information" class="mb-3">
                        <h4>B. Thông tin mà chúng tôi thu thập tự động trên Trang web của chúng tôi.</h4>
                    </div>
                    <!-- End Title -->

                    <p>Chúng tôi cũng có thể thu thập thông tin về các hoạt động trực tuyến của bạn trên các trang web và thiết bị được kết nối theo thời gian và trên các trang web, thiết bị, ứng dụng của bên thứ ba và các tính năng và dịch vụ trực tuyến khác. Chúng tôi sử dụng Google Analytics trên Trang web của mình để giúp chúng tôi phân tích việc Bạn sử dụng Trang web của chúng tôi và chẩn đoán các vấn đề kỹ thuật.</p>

                    <p>Để tìm hiểu thêm về các cookie có thể được cung cấp qua Trang web của chúng tôi và cách Bạn có thể kiểm soát việc sử dụng cookie và phân tích của bên thứ ba của chúng tôi, vui lòng xem Chính sách Cookie của chúng tôi.</p>
                </div>

                <div id="privacy" class="space-bottom-1">
                    <!-- Title -->
                    <div class="mb-3">
                        <h3>2. Bảo vệ quyền riêng tư và bản quyền</h3>
                    </div>
                    <!-- End Title -->

                    <p>Các chính sách bảo mật của Front giải thích cách chúng tôi xử lý dữ liệu cá nhân của bạn và bảo vệ quyền riêng tư của bạn khi bạn sử dụng Dịch vụ của chúng tôi. Bằng cách sử dụng Dịch vụ của chúng tôi, bạn đồng ý rằng Front có thể sử dụng dữ liệu đó theo chính sách bảo mật của chúng tôi.</p>
                    <p>Chúng tôi phản hồi các thông báo bị cáo buộc vi phạm bản quyền và chấm dứt tài khoản của những người tái vi phạm theo quy trình được quy định trong Đạo luật Bản quyền Thiên niên kỷ Kỹ thuật số của Hoa Kỳ.</p>
                    <p>Chúng tôi cung cấp thông tin để giúp chủ sở hữu bản quyền quản lý tài sản trí tuệ của họ trực tuyến. Nếu bạn cho rằng ai đó đang vi phạm bản quyền của bạn và muốn thông báo cho chúng tôi, bạn có thể tìm thông tin về cách gửi thông báo và chính sách của Mặt trận về phản hồi thông báo trong  <a href="../help-desk/index.html">Trung tâm trợ giúp của chúng tôi </a>.</p>
                </div>

                <div id="yourContent">
                    <!-- Title -->
                    <div class="mb-3">
                        <h3>3. Nội dung của bạn trong các dịch vụ của chúng tôi</h3>
                    </div>
                    <!-- End Title -->

                    <p>Một số Dịch vụ của chúng tôi cho phép bạn tải lên, gửi, lưu trữ, gửi hoặc nhận nội dung. Bạn giữ quyền sở hữu bất kỳ quyền sở hữu trí tuệ nào mà bạn có trong nội dung đó. Tóm lại, những gì thuộc về bạn vẫn là của bạn.</p>
                  
                </div>

                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>
        </div>
    </div>
    <!-- End Terms Content Section -->
@endsection
