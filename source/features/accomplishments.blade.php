@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Accomplishments</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">The best way to celebrate someone's efforts is to make it visible to everyone. Communication is crucial in a company - and knowing who's done what is even more important. OfficeLife lets employees brag about what they've done.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Once you've done awesome work, tell the world about it.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto	text-xl">If an employee is part of a team, (s)he can create an accomplishment. An accomplishment is something great that one or more individuals have shipped - and as it's a celebration, the design is cheerful.</p>

  @include('_components.screenshot', ['uuid' => 'af67a423-405a-4dae-8b59-09f2ca6e60f3'])

  <p class="mt-32 mb-16 max-w-prose text-center mx-auto	text-xl">Accomplishments are displayed on the team page, as well as on the company page so everyone knows what's going on. Broadcasting small victories is very empowering for everyone.</p>

  @include('_components.screenshot', ['uuid' => '4ce34886-060c-428c-8abc-15499e72c30a'])

  @include('_partials.footer-features')
</div>
@endsection
