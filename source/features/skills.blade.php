@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Skills</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">Have you ever wondered who, in your company, possess a specific set of skills that would be really helpful to you, right now? You either know the right person in the company - or you spend hours to find who can help you. Not anymore.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Find employees by skills.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto	text-xl">Every employee can browse the list of all the skills that are in the company.</p>

  @include('_components.screenshot', ['uuid' => 'a5881d3c-3277-4822-b019-7df899a5cee0'])

  <p class="mt-32 mb-16 max-w-prose text-center mx-auto	text-xl">Skills are set by the employees themselves. And when you are stuck with something, browse this list, or search a specific keyword, and you'll find all the employees matching this skill - letting you solve your problem quicker.</p>

  @include('_components.screenshot', ['uuid' => '7cd5fd7f-76c1-4c53-b4f3-e28f08e898be'])

  @include('_partials.footer-features')
</div>
@endsection
