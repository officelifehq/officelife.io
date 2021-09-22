<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="canonical" href="{{ $page->getUrl() }}">
  <meta name="description" content="{{ $page->description }}">
  <title>{{ $page->title }}</title>
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="text-gray-900 font-sans antialiased md:p-0 p-4">

  <div class="container mx-auto w-full max-w-4xl flex justify-between mb-16 mt-8 items-center">
    <a href="{{ $page->baseUrl }}"><img src="/assets/images/officelife.svg" /></a>

    <ul>
      <li class="inline mr-4"><a href="{{ $page->baseUrl }}/features">Features</a></li>
      <li class="inline mr-4">Pricing</li>
      <li class="inline mr-4"><a href="https://docs.officelife.io/documentation/introduction.html">Docs</a></li>
      <li class="inline mr-8">Blog</li>
      <li class="inline mr-4">Sign in</li>
      <li class="inline">Free trial</li>
    </ul>
  </div>

  @yield('body')

  <ul>
    <li>Built in Montreal and Paris.</li>
    <li>Privacy policy</li>
    <li>Terms of use</li>
  </ul>

  <script>
    (function(src, cb) {
      var s = document.createElement('script');
      s.setAttribute('src', src);
      s.onload = cb;
      (document.head || document.body).appendChild(s);
    })('https://ucarecdn.com/libs/blinkloader/3.x/blinkloader.min.js', function() {
      window.Blinkloader.optimize({
        pubkey: '52fe97dfda7420ab1741',
        fadeIn: false,
        lazyload: true,
        smartCompression: true,
        responsive: true,
        retina: true,
        webp: true
      });
    })
  </script>
</body>

</html>
