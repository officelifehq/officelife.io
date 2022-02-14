<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="canonical" href="{{ $page->getUrl() }}">
  <meta name="description" content="{{ $page->description }}">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.png" />

  <meta content="Our EmpOps platform is a single application for unparalleled collaboration and visibility in the entire company." name="twitter:description" />
  <meta content="Our EmpOps platform is a single application for unparalleled collaboration and visibility in the entire company." property="og:description" />
  <meta content="OfficeLife" property="og:site_name" />
  <meta content="{{ $page->title }}" property="og:title" />
  <meta content="https://github.com/officelifehq/officelife" property="og:repo" />
  <meta content="https://app.officelife.io/" property="og:instance" />
  <meta content="https://officelife.io/" property="og:url" />
  <meta content="/assets/images/facebook-marketing.png" property="og:image">
  <meta content="/assets/images/twitter-marketing.png" name="twitter:image">
  <meta content=summary_large_image name="twitter:card" />
  <meta content="@OfficeLifeHQ" name="twitter:site" />
  <meta content="OfficeLife" name="twitter:title" />
  <meta content="@OfficeLifeHQ" name="twitter:creator" />

  <title>{{ $page->title }}</title>
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="text-gray-900 font-sans antialiased sm:p-0">

  <div class="p-4 sm:p-0 container mx-auto w-full max-w-9xl md:flex justify-between mb-20 mt-8 items-center">
    <div class="mx-auto sm:m-0 block sm:inline mb-6 sm:mb-0">
      <a href="{{ $page->baseUrl }}" class="mx-auto"><img src="/assets/images/logo.svg" /></a>
    </div>

    <ul class="mb-4 block sm:inline sm:mb-0 text-center sm:text-left">
      <li class="sm:inline block sm:mb-0 mb-3 text-left mr-5">
        <a href="{{ $page->baseUrl }}/features" class="relative transition-colors hover:bg-yellow-100 border border-white hover:border-yellow-400 px-2 py-1 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 b- h-4 w-4 inline icon-header relative" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
          </svg>
          Features
        </a>
      </li>
      <li class="sm:inline block sm:mb-0 mb-3 text-left mr-5">
        <a href="https://docs.officelife.io/documentation/introduction.html" class="relative transition-colors hover:bg-yellow-100 border border-white hover:border-yellow-400 px-2 py-1 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 b- h-4 w-4 inline icon-header relative" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
          Documentation
        </a>
      </li>
      <li class="sm:inline block sm:mb-0 mb-3 text-left mr-8">
        <a href="https://github.com/officelifehq/officelife" class="relative transition-colors hover:bg-yellow-100 border border-white hover:border-yellow-400 px-2 py-1 rounded">
          <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 b- h-4 w-4 inline icon-header relative" viewBox="0 0 24 24">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg>
          Code on GitHub
        </a>
      </li>
      <li class="sm:inline mr-5 hidden">
        <a href="https://app.officelife.io">Sign in</a>
      </li>
      <li class="sm:inline hidden">
        <a href="https://app.officelife.io/register">Free trial</a>
      </li>
    </ul>

    <ul class="block sm:hidden">
      <li class="sm:hidden block mb-3"><a href="https://app.officelife.io" class="bg-gray-900 text-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 w-full block text-center">Sign in</a></li>
      <li class="sm:hidden block"><a href="https://app.officelife.io/register" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 w-full block text-center">Free trial</a></li>
    </ul>
  </div>

  @yield('body')

  <div class="bg-gray-900 text-white pb-20 mt-20">
    <div class="container mx-auto w-full max-w-4xl text-center pt-10">
      <ul class="">
        <li class="sm:inline block mb-3 sm:mb-0 sm:mr-5">Made with <span style="color: transparent; text-shadow: 0 0 #fff;">♥︎</span> in Montreal and Paris.</li>
        <li class="sm:inline block mb-3 sm:mb-0 sm:mr-5">Privacy policy</li>
        <li class="sm:inline block mb-3 sm:mb-0 sm:mr-5">Terms of use</li>
        <li class="sm:inline block mb-3 sm:mb-0">Copyright ©2022 OfficeLife.</li>
      </ul>
    </div>
  </div>

  @if ($page->production)
  <script src="https://cdn.usefathom.com/script.js" data-site="LQWOZIMC" defer></script>
  @endif

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
