@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <ul>
    <li>Other domains:</li>
    <li>Manage</li>
    <li>Operate</li>
    <li>Communicate</li>
    <li>Grow</li>
  </ul>
</div>

<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Recruiting</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">Recruiting is a critical aspect of any company. Hiring the right person is essential - and tough. Many organizations are not equipped to handle recruiting adequatly - even with a dedicated HR team which most of the time doesn't really have the time to help in the process. At the end of the day, it's up to the manager to handle most of the recruiting process. We have built all the tools you need to handle recruiting the easiest way possible.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">It starts with defining your recruiting flows.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto	text-xl">Every company, every department, every team has a dedicated recruiting process. Hiring a developer is different than hiring someone who works in a warehouse. Therefore, you need to define a flow that will be used when creating a job opening to be used as a template.</p>
  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">Each candidate will have to go through all the steps you define on this screen.</p>

  @component('_components.screenshot')
  e26bc7dd-33c0-4974-a393-f0093b188f0a
  @endcomponent

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Create as many job openings as necessary.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">Job openings will be public and anyone on Internet will be able to apply. Creating a job opening is really simple and only consists of a few key information. OfficeLife introduces the concept of sponsors in a job opening. In real life, recruiting is not restricted to HR. Often, a team lead needs to make sure the recruiting process moves forward. The sponsor will make sure we'll have the right persons to assist during the entire recruiting process.</p>

  @component('_components.screenshot')
  5a3f0dc3-8cbf-492e-815c-d5a869bf4caa
  @endcomponent

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Manage all the candidates like a boss.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">Once the job opening is created, anyone can apply. The sponsor of the job opening will have access to a simple dashboard, letting her sort the candidates.</p>

  @component('_components.screenshot')
  927cfd00-f837-4ff2-89b6-128103a6e36a
  @endcomponent

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Follow a candidate like never before.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">OfficeLife gives companies an unique way of going through all the different stages of a recruitment process for a candidate. Sponsors can invite other employees to the recruiting process, so they can give their opinion and add notes. Those employees will only see the current stage of the process and not the information that other employees have written. At every stage, the sponsor can decide to either go to the next stage, or reject the candidate - and the recruiting process for this candidate will stop.</p>

  @component('_components.screenshot')
  c4e67148-6e1d-4ff6-b91e-f25c1e4e7fcb
  @endcomponent

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Hire the candidate, and make her an employee of your company.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">At the end of the recruiting process, hiring the candidate is as easy as clicking on a button. This candidate will be changed into an employee, who will be part of the team you've designed and with the right information. If you indicate the start date of the employee, everyone in the team and in the company will be informed of when this employee will join the company. All this - automatically. And if you want, you can already assign hardware and softwares to the newly added employee immediately, so your employee is up and running.</p>

  @component('_components.screenshot')
  dffe9b76-9458-44f2-b371-51feeb2b1d5e
  @endcomponent

  @include('_partials.footer-features')
</div>
@endsection
