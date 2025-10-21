<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h1 class="text-xl">Welcome to my Blog</h1> --}}

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 1 January 2025
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>

            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-700 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>
