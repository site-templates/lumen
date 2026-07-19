@props([
    'eyebrow' => 'Error 404',
    'headingStart' => 'This page never saw the',
    'headingAccent' => 'light',
    'body' => "The address may be mistyped, or the page may have moved on. Either way, there's nothing to measure here — head back and pick up where you left off.",
    'buttonText' => 'Back to the homepage',
    'buttonLink' => '/',
    'secondaryText' => 'Read the writings',
    'secondaryLink' => '/writings',
])
    <!-- The not-found message — shown when a visitor reaches a URL that doesn't exist. -->
    <section class="relative overflow-hidden">
        <div class="hero-wash pointer-events-none absolute inset-0"></div>
        <div class="relative mx-auto max-w-7xl px-6 pt-24 pb-24 sm:pt-32 sm:pb-32">
            <p class="fade-up eyebrow">{{ $eyebrow }}</p>
            <h1 class="fade-up font-display mt-4 max-w-[24ch] text-balance text-5xl tracking-tight [animation-delay:50ms] sm:text-6xl">
                {{ $headingStart }} <span class="italic">{{ $headingAccent }}</span>
            </h1>
            <p class="fade-up mt-6 max-w-[56ch] text-pretty text-lg text-[#0f231d]/60 [animation-delay:100ms]">
                {{ $body }}
            </p>
            <div class="fade-up mt-10 flex flex-wrap items-center gap-x-8 gap-y-4 [animation-delay:150ms]">
                <a href="{{ $buttonLink }}" class="flex items-center rounded-full bg-[#1e4038] px-5 py-2.5 text-sm font-medium text-white inset-ring inset-ring-transparent transition-colors duration-300 hover:bg-white hover:text-[#0f231d] hover:inset-ring-[#0f231d]/15 active:scale-[0.98]">{{ $buttonText }}</a>
                <a href="{{ $secondaryLink }}" class="group flex items-center gap-2 text-sm font-medium text-[#0f231d]">
                    {{ $secondaryText }}
                    <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" class="size-4 shrink-0 transition-transform group-hover:translate-x-0.5">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
