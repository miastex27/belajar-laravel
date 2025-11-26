<x-layout :judul="$judul">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">


        @foreach ($posts as $post)
            <article class="py-8 max-w-3xl border-b border-grey-500">
                <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post['author'] }} | 26 November 2025</a>
                </div>

                <p class="my-4 font-light">
                    {{ Str::limit($post['body'], 100) }}
                </p>
                <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more...</a>
            </article>
        @endforeach

    </div>
</x-layout>
