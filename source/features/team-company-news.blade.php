@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Team and company news</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">Good communication is key for everything. Email can be easily missed and burried in your inbox. Slack conversations are even more easily lost. Therefore, a reliable way of communication is the good old board where the information is always there, easily findable, and accessible to everyone.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Meet team and company news.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto text-xl">Team members, and certain employees with the right permissions, can write either team news, for all team members to see, or company wide news, that will be displayed to everyone.</p>

  @include('_components.screenshot', ['uuid' => '65213160-bc4e-4c7d-bf21-180a898e9c82'])

  @include('_partials.footer-features')
</div>
@endsection
