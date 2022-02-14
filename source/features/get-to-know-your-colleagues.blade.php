@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Get to know your colleagues</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">In a remote context, how can you get to know your colleagues? I mean, truly get to know them, apart from the occasional chat on Slack or Teams (sigh). OfficeLife lets companies ask questions which only purpose is to have more information about the persons you are working with every day.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Ask (not too) personal questions and let employees have fun with it.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto text-xl">Employees with the right permission can ask questions to the entire company. These questions should be not work related, but rather help people get to know each other. When a question is asked, everyone in the company will be able to answer it. However, they won't be able to read the other answers until they've replied themselves.</p>

  @include('_components.screenshot', ['uuid' => 'ed0ac4b1-6453-4abe-862b-4ecdd49e2b84'])

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Get the full history of all the questions asked.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">As always with OfficeLife, you can see the full history of all the questions that have been asked to the employees, as well as read all the answers, even from employees who might have left the company. You can also see the answers to the questions on the employee's profile itself if you so desire.</p>

  @include('_components.screenshot', ['uuid' => 'da968427-74c7-43be-9fc9-23129dc974a2'])

  <p class="mt-32 mb-16 max-w-prose text-center mx-auto text-xl">You can also drill down all the answers by a specific team.</p>

  @include('_components.screenshot', ['uuid' => '3465b50a-78b4-401a-add7-ee8f4086104a'])

  @include('_partials.footer-features')
</div>
@endsection
