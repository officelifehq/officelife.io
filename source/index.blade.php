@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-20">
  <!-- <h1 class="text-4xl font-bold text-center mb-12">OfficeLife is an open HR and planning platform.</h1> -->
  <h1 class="text-5xl font-bold text-center mb-12 leading-tight">Say goodbye to messy spreadsheets to manage employees, teams and projects.</h1>
  <p class="text-center max-w-prose mx-auto mb-4 text-2xl">OfficeLife replaces dozens of confusing softwares that no one like to use, with a single, private & simple all-in-one tool to manage the entire employee lifecycle.</p>
  <p class="text-center max-w-prose mx-auto mb-10">Also, it's open source, and with no vendor lock-ins.</p>

  @component('_components.screenshot')
  755d110f-0163-4ccd-ac10-c600cfc73cab
  @endcomponent
</div>

@include('_partials.all-features')

<div class="container mx-auto w-full max-w-4xl mb-20">
  <h3 class="mb-12 text-2xl text-center">Why did we create OfficeLife?</h3>

  <p class="max-w-prose mx-auto mb-6">Companies have dozens of tools to manage what’s going on inside the company. Tools to manage human resources. Timesheets. Team morale. 1-on-1 management. Expenses. OKR. You name it. For every need, there is a dedicated tool.</p>

  <p class="max-w-prose mx-auto mb-6">Companies spend an awful lot of time and money on choosing, setting up and maintaining all those tools. Moreover, <span class="bg-indigo-100 px-2 py-1 rounded font-semibold">there is not a single source of truth</span> about your employees when we have that many softwares.</p>

  <p class="max-w-prose mx-auto mb-6">Put together, these tools are supposed to give answers to two questions: how is the company going, and how does an employee perform.</p>

  <p class="max-w-prose mx-auto mb-6">However, how can you know if an employee performs well if you have only one angle of the overall situation? If you use a software that manages OKR, you would only have one side of the story at the end of the year. If you want to understand the complete picture, you need to know if the employee has taken enough holidays during the year, if the projects he worked on were a success, if he had enough time to talk with her manager, and so on.</p>

  <p class="max-w-prose mx-auto mb-6">You could use the APIs of all the different software to find partial answers of those questions – but which companies do that? We don't know any.</p>

  <p class="max-w-prose mx-auto mb-6">Moreover, most small and medium-size companies don't need all the features that each one of these tools provides. They would be completely satisfied with, say, 20% of what each specialized tool does. Take a look at Basecamp. A lot of people love using Basecamp, a simple project management tool, instead of Microsoft Project which does 90% more stuff.</p>

  <p class="max-w-prose mx-auto mb-6">We think there is a place for a single software that manages the entire lifecycle of an employee. By knowing everything we need to know about an employee, we can know how teams are doing, what everyone does, improve communication and gives you unique insights on how the company truly operates.</p>

  <div class="sm:text-xl font-medium flex justify-center">
    <div class="flex flex-col items-center mr-5">
      <div class="p-1 border-2 border-blue-300 rounded-full mb-3">
        <a href="https://twitter.com/djaiss"><img data-blink-uuid="12e5aa8b-16ff-421f-a417-7efc0b0854a6" class="w-10 h-10 rounded-full bg-light-blue-100" /></a>
      </div>
      <div class="text-gray-900 text-base">Regis Freyd</div>
    </div>
    <div class="flex flex-col items-center">
      <div class="p-1 border-2 border-blue-300 rounded-full mb-3">
        <a href="https://twitter.com/asbin"><img data-blink-uuid="25543f7e-8fb9-46b2-b0c3-b12f06e84604" class="w-10 h-10 rounded-full bg-light-blue-100" /></a>
      </div>
      <div class="text-gray-900 text-base">Alexis Saettler</div>
    </div>
  </div>
</div>

<div class="container mx-auto w-full max-w-4xl">
  <h2 class="mb-12 text-3xl text-center">3 ways to use OfficeLife in your company</h2>

  <div class="lg:grid grid-cols-3 gap-4">
    <div class="sm:mb-0 mb-6 border border-gray-400 border-solid rounded-md px-4 py-4">
      <h3 class="text-2xl mb-6">Use our hosted version</h3>
      <ul class="mb-6">
        <li class="mb-3">We deal with updates, backups, security and reliability.</li>
        <li class="mb-3">Enterprise-level infrastructure on AWS.</li>
        <li>Servers are shared amongst customers.</li>
      </ul>
      <p class="text-gray-500 mb-6 text-center"><span class="font-bold text-3xl text-gray-900">$7</span>/employee/month.</p>
      <p class="text-gray-600 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-700 h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        Daily backups.
      </p>
      <p class="text-gray-600 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-700 h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        No other hidden or setup fees.
      </p>
      <p class="text-gray-600 text-sm mb-8">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-700 h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        Cancel anytime.
      </p>

      <div class="text-center mb-4">
        <a href="https://app.officelife.io/register" class="relative bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Create account

          <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 relative icon-header inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    </div>
    <div class="sm:mb-0 mb-6 border border-gray-400 border-solid rounded-md px-4 py-4">
      <h3 class="text-2xl mb-6">Your private instance we host for you</h3>
      <ul class="mb-3">
        <li class="mb-6">We deal with updates, backups, security and reliability.</li>
        <li>The database and servers are <span class="font-bold">not</span> shared with other customers.</li>
      </ul>
      <p class="text-gray-500 mb-6 text-center"><span class="block"><span class="font-bold text-3xl text-gray-900">$25</span>/employee/month</span> + <span class="block"><span class="font-bold text-3xl text-gray-900">$500</span>/month infrastructure fee.</span></p>
      <p class="text-gray-600 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-700 h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        No other hidden or setup fees.
      </p>
      <p class="text-gray-600 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-700 h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        Your own private instance.
      </p>
      <p class="text-gray-600 text-sm mb-8">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-700 h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        Cancel anytime.
      </p>
      <div class="text-center mb-4">
        <a href="mailto:contat@officelife.io" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Contact us</a>
      </div>
    </div>
    <div class="border border-gray-400 border-solid rounded-md px-4 py-4">
      <h3 class="text-2xl mb-6">Host it yourself on premise</h3>
      <ul class="mb-6">
        <li class="mb-3">Use our official Docker image.</li>
        <li class="mb-3">You deal with updates, backups, security and reliability.</li>
        <li>Your own infrastructure.</li>
      </ul>
      <p class="font-bold text-3xl text-gray-900 mb-6 text-center">Free</p>
      <p class="text-gray-600 text-sm mb-8">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-700 h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        No other hidden or setup fees.
      </p>
      <div class="text-center mb-4">
        <a href="https://github.com/officelifehq/officelife" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Code on GitHub</a>
      </div>
    </div>
  </div>
</div>

@endsection
