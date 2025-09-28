<a {{ $attributes }} class="{{ $onPage ? 'text-indigo-600 dark:text-indigo-400 underline underline-offset-4' : 'text-gray-700 dark:text-white' }} text-sm/6 font-semibold" aria-current="{{ $onPage ? 'page' : false }}">
    {{ $slot }}
</a>