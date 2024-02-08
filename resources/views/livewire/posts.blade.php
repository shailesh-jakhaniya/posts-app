<div>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            @foreach ($posts as $post)
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article class="flex max-w-xl flex-col items-start justify-between">
                  <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">{{ date('M d, Y', strtotime($post->created_at)) }}</time>
                  </div>
                  <div class="group relative">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        {{ $post->title }}
                      </a>
                    </h3>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $post->description }}</p>
                  </div>
                  <div class="relative mt-8 flex items-center gap-x-4">
                    <div class="text-sm leading-6">
                      <p class="font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Post By
                          {{ $post->user->name }}
                        </a>
                      </p>
                    </div>
                  </div>
                </article>
                <!-- More posts... -->
              </div>
            @endforeach
        </div>
      </div>
</div>
