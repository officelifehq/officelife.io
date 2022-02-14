@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">1:1 management</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">One on ones between manager and employees are critical for both parties. It's a privileged moment to understand what's going on, to discuss challenges and to talk about how to grow. OfficeLife makes this entire process super easy and actually fun.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Anatomy of a 1:1.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto text-xl">As soon as an employee is assigned a manager, both she and her manager will find on the dashboard a place to participate to 1:1. A 1:1 in OfficeLife has 3 main sections, that match what people talk about in real life: talking points, action items that are defined when the discussion takes place, and notes. Both the employee and the manager can populate a 1:1 either in advance or during the meeting. And when the meeting is over, simply mark it as happened, and a fresh entry will be created for your next session.</p>

  @include('_components.screenshot', ['uuid' => 'b849ef39-9ac3-472d-ad03-2faae16bec70'])

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Browse past entries.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">Both the manager and the employee can see past 1:1s very easily. Also, even the employee has a new manager, she will be able to see her past 1:1 on her profile. It's, obviously, totally private.</p>

  @include('_components.screenshot', ['uuid' => 'ed41da08-d522-46f5-95d4-32e7613c068e'])

  @include('_partials.footer-features')
</div>
@endsection
