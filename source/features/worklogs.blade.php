@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Work logs</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">Communication between employees and team members is critical to the success of the company. Work logs let employees record what they have done, once per day, so everyone knows what's going on.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Team members have an unique view of knowing what their team mates have done.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto	text-xl">If an employee is part of a team, (s)he can create an accomplishment. An accomplishment is something great that one or more individuals have shipped - and as it's a celebration, the design is cheerful.</p>

  @component('_components.screenshot')
  af67a423-405a-4dae-8b59-09f2ca6e60f3
  @endcomponent

  <p class="mt-32 mb-16 max-w-prose text-center mx-auto	text-xl">Accomplishments are displayed on the team page, as well as on the company page so everyone knows what's going on. Broadcasting small victories is very empowering for everyone.</p>

  @component('_components.screenshot')
  4ce34886-060c-428c-8abc-15499e72c30a
  @endcomponent

  @include('_partials.footer-features')
</div>
@endsection
