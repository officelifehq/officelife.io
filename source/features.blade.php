@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <p class="mb-8 text-center text-5xl">Doing it all, in a very simple interface.</p>
  <p class="mb-16 max-w-prose text-center mx-auto	text-xl">OfficeLife has everything you need to manage employees in a company, and to follow what's going on with them. It consists of 5 domains, that match the lifecycle of employees in a company.</p>
</div>

@include('_partials.all-features')

<div class="container mx-auto w-full max-w-4xl mb-14 text-center">
  <div class="text-left">
    <h3 class="mb-6 text-center">Our product philosophy</h3>
    <p class="max-w-prose text-3xl mb-8 text-center">Only what you need, and nothing else.</p>
    <p class="max-w-prose text-xl mb-3">Most softwares come with a gazillion number of features about the specific domain they address. For instance, Microsoft Project has everything you will ever need to complete a project from start to finish. But do every company need all those features for project management? Would they be satisfied with 10% of what project management is all about?</p>
    <p class="max-w-prose text-xl mb-3">OfficeLife is entirely built around this approach. Every need that we've identified has been studied long and hard to make sure that we extract its core and build the feature around this core.</p>
    <p class="max-w-prose text-xl mb-3">OfficeLife is a very large application that covers many domains. If we don't want to end up with a massively complicated product to use, each feature must do exactly what it's supposed to do, and nothing else.</p>
    <p class="max-w-prose text-xl mb-3">Because of its size, we have carefully designed every single feature of this big application to be extremely simple to use, and to disappear when it doesn't need to be there.</p>
    <p class="max-w-prose text-xl mb-3">This approach is not for every company. It's for companies that care about efficiency and simplicity. That care about not spending weeks to configure everything. Companies that want to get things done.</p>
  </div>
</div>
@endsection
