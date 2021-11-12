@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Work logs</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">Communication between employees and team members is critical to the success of the company. Work logs let employees record what they have done, once per day, so everyone knows what's going on.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Keep track of what you've done, everyday.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto	text-xl">Every day, employees can write about either what they will do, or what they have done. For remote teams on multiple timezones, this can replace a daily status meeting.</p>

  @include('_components.screenshot', ['uuid' => '379403fc-f74e-4fe8-8f09-2842a1a5a0ef'])

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Know what your team mates have done at a glance.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">When the employee is part of a team, (s)he can read what other have done on the team's dashboard. OfficeLife provides a simple way of browsing the current week, as well as last Friday, and see who's done what. And of course, all the work logs are also available for everyone to see on the profile page of the employee.</p>

  @include('_components.screenshot', ['uuid' => 'ed41da08-d522-46f5-95d4-32e7613c068e'])

  @include('_partials.footer-features')
</div>
@endsection
