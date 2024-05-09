<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ( $blogs as $blog )
    <article class="py-8 max-w-screen-md border-b border-gray-300">
      <a href="/blog/{{ $blog['slug'] }}" class="hover:text-emerald-400">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $blog['title'] }}</h2>
      </a>
      <div class="text-base text-gray-500">
        <a href="#">{{ $blog['author'] }} | {{ date('d M Y') }}</a>
      </div>
      <p class="my-4 font-light">{{ Str::limit($blog['body'], 200) }}</p>
      <a href="/blog/{{ $blog['slug'] }}" class="font-medium text-blue-500 hover:text-emerald-400">Read more &raquo;</a>
    </article>
    @endforeach

  </x-layout>