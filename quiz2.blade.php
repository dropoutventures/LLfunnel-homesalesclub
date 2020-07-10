<!DOCTYPE html>
<html>

<head>
    <x-header-scripts />
</head>

<body class="loading"
      x-data="{ quiz: window.livewire.find(document.getElementById('Quiz').getAttribute('wire:id')).data }"
      x-on:next-step.document="quiz = window.livewire.find(document.getElementById('Quiz').getAttribute('wire:id')).data"
>

<header class="bg-white shadow py-2 sm:pb-0">
    <div class="container max-w-none flex items-center select-none">
        <img src="{{ $site['branding']['logo'] ?? null }}" class="h-12 md:h-16" />
        <div class="flex-1"></div>
        <div class="hidden md:flex items-start">
            <div class="flex flex-col items-center p-2">
                <span class="text-lg text-gray-800 font-light leading-none">We Can Assist You</span>
                <a href="#" class="text-3xl font-bold text-blue-900 hover:underline leading-tight">(786) 988-9983</a>
                <span class="text-sm text-gray-600 font-light leading-none flex items-center"><span class="inline-block flex-none rounded-full h-3 w-3 bg-green-400 pulse-green-200 mr-1"></span> Expert Agents Available Now</span>
            </div>
            <img src="https://go.homesalesclub.com/seller/8/assets/images/agent.png" class="h-24 w-24" />
        </div>
        <a href="#" class="Quiz--button leading-none hidden md:hidden" style="background-color: #fff; border-color: #ccc; color: #000;"><span class="inline-block flex-none rounded-full h-3 w-3 bg-green-400 pulse-green-200 mr-2"></span> Agents Online</a>
    </div>
</header>

<main id="app">
    <section class="bg-cover" style="background-image: url('https://go.homesalesclub.com/seller/8/assets/images/hero.jpg')">
        <div class="container p-6 md:py-12 md:px-20">
            <h1 class="text-4xl leading-none font-bold text-center text-white text-shadow mb-10">Lock In Your Free All-Cash Offer Today</h1>
        </div>
    </section>
    <section>
        <div class="container relative p-6 md:py-12 md:px-20">
            <div class="absolute top-0 inset-x-0 transform -translate-y-1/2 select-none mx-auto bg-white rounded-full h-24 w-24 border-8 border-double border-transparent"
                 x-bind:style="'background-image: linear-gradient(#fff, #fff), conic-gradient(var(--brand2) ' + (((quiz.step - 1) / (quiz.stepMax - 1)) * 100).toFixed(0) + '%, #eee 0); background-origin: border-box; background-clip: content-box, border-box;'"
            >
                <template x-if="quiz.step <= 1">
                    <div class="relative flex flex-col items-center justify-center w-full h-full">
                        <span class="uppercase text-xl">Start</span>
                        <i class="far fa-chevron-down absolute bottom-0 mb-2" style="animation: float 6s ease-in-out infinite;"></i>
                    </div>
                </template>
                <template x-if="quiz.step > 1">
                    <div class="relative flex flex-col items-center justify-center w-full h-full">
                        <span class="uppercase text-xl" x-text="(((quiz.step - 1) / (quiz.stepMax - 1)) * 100).toFixed(0) + '%'">Start</span>
                    </div>
                </template>
            </div>
            @livewire('quiz', ['page' => $page])
            <small class="mx-auto flex items-center justify-center text-gray-700"><i class="fas fa-lock mr-1"></i> 100% free savings estimate</small>
            <a href="javascript:void(0)" x-show="quiz.step > 1" x-on:click="window.livewire.emit('backStep')" class="Quiz--back"><i class="far fa-angle-left"></i> Back</a>
        </div>
    </section>
</main>

<footer class="text-center bg-gray-100 border-t-2 border-solid border-gray-200 flex flex-col space-y-4 py-10">
    <img src="img/logo.png" class="mx-auto h-8 md:h-12" />
    <address class="flex flex-col text-gray-900 text-xs">
        <span>3000 East main Street, suite 156<br />Columbus, OH 43209</span>
        <a href="mailto:#" class="text-blue-400">info@compensationadvocate.com</a>
        <a href="tel:#">+1 (888) 405-6035</a>
    </address>

    <small class="leading-none text-gray-700">© 2020 Copyright Compensation Advocate</small>
</footer>

<x-alert />

<x-footer-scripts />
</body>
</html>
