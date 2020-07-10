<!DOCTYPE html>
<html>

<head>
    <x-header-scripts />
</head>

<body class="loading"
      x-data="{ quiz: window.livewire.find(document.getElementById('Quiz').getAttribute('wire:id')).data }"
      x-on:next-step.document="quiz = window.livewire.find(document.getElementById('Quiz').getAttribute('wire:id')).data"
>

<header class="p-2 mb-6 flex">
    <div class="container flex flex-col items-center">
        <img src="{{ $site['branding']['logo'] ?? null }}" class="h-12 md:h-16 mb-1" />
    </div>
</header>

<main class="container bg-white rounded shadow-lg p-6 md:py-10 md:px-20" id="app">
    <div class="hidden md:flex items-center space-x-8 line-middle relative after:border-gray-200">
        <template x-for="(_, step) in Array.from({ length: quiz.stepMax - 1 })">
            <span class="rounded-full border border-gray-200 border-solid px-5 py-2 select-none font-bold bg-white z-10" x-bind:class="{ 'bg-blue-500 shadow-outline-blue text-white': step + 1 == quiz.step }" x-text="step + 1"></span>
        </template>
    </div>
    <template x-if="quiz.step <= 1">
        <div>
            @if(!empty($page['headline'] ?? false))
                <h1 class="Quiz--heading">{!! $page['headline'] !!}</h1>
            @endif
            @if(!empty($page['subheadline'] ?? false))
                <h2 class="Quiz--subheading">{!! $page['subheadline'] !!}</h2>
            @endif
        </div>
    </template>
    @livewire('quiz', ['page' => $page])
    <small class="mx-auto flex items-center justify-center text-gray-700"><i class="fas fa-lock mr-1"></i> 100% free savings estimate</small>
    <a href="javascript:void(0)" x-show="quiz.step > 1" x-on:click="window.livewire.emit('backStep')" class="Quiz--back"><i class="far fa-angle-left"></i> Back</a>
</main>

<footer class="text-center flex flex-col space-y-4 mt-10">
    <img src="img/logo-light.png" class="mx-auto h-8 md:h-12" />
    <address class="flex flex-col text-white text-xs">
        <span>3000 East main Street, suite 156<br />Columbus, OH 43209</span>
        <a href="mailto:#" class="text-blue-400">info@compensationadvocate.com</a>
        <a href="tel:#">+1 (888) 405-6035</a>
    </address>

    <small class="leading-none text-gray-400">© 2020 Copyright Compensation Advocate</small>
</footer>

<x-alert />
<x-footer-scripts />
</body>
</html>
