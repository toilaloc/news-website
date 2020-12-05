<!DOCTYPE html>
<html>

<head>
    <title>Thông báo tin tức mới!</title>
</head>

<body>
    <h1>Tác giả {{ $data['author'] }} bạn theo dõi vừa đăng bài mới, bạn có muốn xem không?</h1>

    <p>Link: <a href="'https://f8news.xyz/post/'{{ $data['link'] }}">{{ $data['name'] }}</a></p>

    <p>Cảm ơn bạn đã ủng hộ chúng tôi!</p>
</body>

</html>
