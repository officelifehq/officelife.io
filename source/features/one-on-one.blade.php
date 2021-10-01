@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">1:1 management</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">One on ones between a manager and her direct reports are critical for both parties. It's a privileged moment to understand what's going on, to discuss challenges and to talk about how to grow. OfficeLife makes this entire process super easy and actually fun.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Anatomy of a 1:1.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto text-xl"></p>

  @component('_components.screenshot')
  379403fc-f74e-4fe8-8f09-2842a1a5a0ef
  @endcomponent

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Know what your team mates have done at a glance.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">When the employee is part of a team, (s)he can read what other have done on the team's dashboard. OfficeLife provides a simple way of browsing the current week, as well as last Friday, and see who's done what. And of course, all the work logs are also available for everyone to see on the profile page of the employee.</p>

  @component('_components.screenshot')
  ed41da08-d522-46f5-95d4-32e7613c068e
  @endcomponent

  @include('_partials.footer-features')
</div>
@endsection
