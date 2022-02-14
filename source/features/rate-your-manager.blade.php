@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Rate your manager</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">Managers are used to rate employees. However, what if we offered the possibility for employees to rate their managers in return? This would be useful to understand how a team performs, or how the performance of a single employee is impacted. A great manager shouldn't be scared to be rated by the people (s)he's supposed to help grow.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Once per month, rate your boss.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto	text-xl">At the end of each month, all the employees who have a manager are being asked, on their dashboards, to rate their managers. This poll lasts three days and disappears after this time period, even though not everyone have answered. By default, answers are anonymous - but you can decide to reveal your identity if you want to.</p>

  @include('_components.screenshot', ['uuid' => '3fec656b-0f69-40f8-9484-0fbccfb7e521'])

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">As a manager, access your reports so you can become better at your job.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">Once per month, when the polls stop, managers have the ability to read the results of the poll. Moreover, the manager of this manager will also have the ability to see how this person performs - so everyone's accountable.</p>

  @include('_components.screenshot', ['uuid' => 'afee591e-da72-4934-a580-d0fa8ab00af4'])

  @include('_partials.footer-features')
</div>
@endsection
