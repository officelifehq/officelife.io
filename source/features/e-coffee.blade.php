@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">E-Coffee</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">Remember the pre-Covid era, when you randomly met a colleague at the coffee machine, and simply... talked? This helps people connect in an unique way - which is really hard to do remotely. Companies have success when people bond with each other and create this secret sauce called the company's culture. OfficeLife offers a simple and effective way of recreating what we used to have in an office.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Talk to a random colleague every week.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto	text-xl">When the E-Coffee feature is active in the company, every Monday morning, OfficeLife will match employees together, randomly. Once matched, employees have one week to schedule a moment in the week to get to know his/her colleague and discuss about everything but the actual job. And every week, you will be matched with someone else. Chances are, at the end of the year, you'll know a lot more colleagues that you do now.</p>

  @include('_components.screenshot', ['uuid' => 'bbca7e55-07ad-4518-8678-f02ea066211c'])

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Consult the entire history of e-coffee.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">As always with OfficeLife, we keep track of past interactions. On each employee's profile page, you will find the complete history of all the sessions that occured in the past - so you won't forget who's talked with who.</p>

  @include('_components.screenshot', ['uuid' => '718cda5d-bacd-4c89-83b9-9961b9d18061'])

  @include('_partials.footer-features')
</div>
@endsection
