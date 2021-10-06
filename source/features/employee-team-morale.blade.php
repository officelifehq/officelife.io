@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Employee and team morale</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">How do you know if an employee is happy? How do you know if the entire team is happy? You can't really know for sure. OfficeLife lets any employee expresses how (s)he feels anonymously so (s)he can be heard, without being afraid of the consequences. And this is a win-win for the entire company, as the employer will be able to know which teams are happier and which teams need more attention at this time.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Every day, log your morale.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto	text-xl">Once per day, employees can indicate how they feel. Was it a good day? Or was it a day a little bit odd today? OfficeLife asks one simple question, with only 3 possible answers, to make sure the process is extremely quick and easy. The poll is totally anonymous and will never be displayed to anyone - not even the employee.</p>

  @component('_components.screenshot')
  82aa6625-01fd-476a-af2e-0a1f0d25f190
  @endcomponent

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Know which team needs attention.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">Because most employees belong to a team, and because employees log their morale every day, we have a way of knowing what is the general mood of the team members - in a completely private way. On every team page, you will find the average morale of the team members, and see trends (yesterday, last week, last month).</p>

  @component('_components.screenshot')
  9b23c11c-c35f-43c0-98ff-800819225958
  @endcomponent

  @include('_partials.footer-features')
</div>
@endsection
