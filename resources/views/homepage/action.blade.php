@extends('homepage.app')
<div class="bg bg-black">
   @section('content')
      @foreach ($banner as $ban)
         <div class="hero min-h-screen" style="background-image: url({{ $ban->image() }});">
               <div class="hero-content text-neutral-content -ml-96 -mt-20">
                  <div class="max-w-md -ml-96">
                     <h1 class="mb-5 text-7xl font-bold text-red-600">{{ $ban->title }}</h1>
                     <p class="text-xl mb-5">{{ $ban->description }}</p>
                  </div>
               </div>
         </div>
      @endforeach
      <div class="mt-20">
         <div class="grid grid-cols-5 grid-flow-row lg:items-stretch">
               @foreach ($action as $act)
                  <div class="w-full -mt-32">
                     <div class="h-80 w-76 image-full">
                           <a href="{{ route('action.show', $act->id) }}">
                              <img href="{{ route('action.show', $act->id) }}" src="{{ $act->image() }}" alt="" width="250" height="120"
                                 class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-125 duration-300 shadow-black">
                           </a>
                           <div class="card-body">
                           </div>
                     </div>
                  </div>
               @endforeach
         </div>
      @endsection
   </div>
