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

  <div class="container mx-auto w-full max-w-4xl flex justify-between mb-14 mt-8 items-center">
    <img src="/assets/images/officelife.svg" />

    <ul>
      <li class="inline mr-4">Features</li>
      <li class="inline mr-4">Pricing</li>
      <li class="inline mr-4">Docs</li>
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
</body>

</html>
