@extends('_layouts.main')

@section('body')
<div class="container mx-auto w-full max-w-4xl mb-14">
  <h3 class="mb-8 text-center text-5xl">Asset management</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">OfficeLife manages everything about the employees. That includes the hardware and the softwares they need to work efficiently. While OfficeLife won't replace dedicated asset management softwares, it's powerful enough to serve your basic needs, and nothing more. Keep track of seats and availability, link stuff to your employees, and have a single source of truth.</p>

  <h3 class="mb-8 text-center text-3xl font-bold">Manage softwares the right way.</h3>

  <p class="mb-8 max-w-prose text-center mx-auto text-xl">OfficeLife lets you add software information, manage seats and add receipts, too. It will tell you if you don't have enough seats left. It tracks only the data you really need when you need to keep track of the softwares used in your organization.</p>

  @component('_components.screenshot')
  a22f2d32-2ad7-4039-a747-9e86c111b8c1
  @endcomponent

  <h3 class="mt-32 mb-8 text-center text-3xl font-bold">Manage hardware used by your employees.</h3>

  <p class="mb-16 max-w-prose text-center mx-auto text-xl">It's always hard to keep track of what you gave to employees. Who has which hardware? When an employee leaves, what equipment should the company have back? With OfficeLife, you will know the answers to all those questions.</p>

  @component('_components.screenshot')
  021f3b49-c7bd-4c73-9a79-446a6f44cfdf
  @endcomponent

  <p class="mt-32 mb-16 max-w-prose text-center mx-auto text-xl">You will find on the employee's profile page all the details of either the softwares or the hardware the company has granted.</p>

  @component('_components.screenshot')
  d429d0c9-a9da-441f-b428-71eac339a9cc
  @endcomponent

  @include('_partials.footer-features')
</div>
@endsection
