@props(['title', 'body'])

<div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition dark:bg-gray-800 dark:text-gray-100">
    <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
    <p>{{ $body }}</p>
</div>
