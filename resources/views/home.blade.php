<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Topix</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            * { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
            p { margin-bottom: 1.5rem; }
            #blog-description a { color: inherit; font-weight: bold; }
        </style>
    </head>
    <body class="pt-24">
        <x-header :title="$blog['blog_title']" :frsh="$blog['frsh']" />

        <div class="px-10 mx-auto sm:w-3/4 lg:w-1/2 text-gray-800">
            <div class="py-4 mb-8 flex space-x-4 text-sm border-t border-b border-gray-100">
                <h2 class="font-bold">Topics</h2>
                <ul class="space-x-3">
                    <li class="inline"><a href="/code" class="text-gray-600 hover:text-gray-800">Code</a></li>
                    <li class="inline"><a href="/faith" class="text-gray-600 hover:text-gray-800">Faith</a></li>
                </ul>
            </div>
            <div id="blog-description" class="text-sm text-gray-500 mb-10 border-b border-gray-100">
                <?php echo html_entity_decode($blog['blog_description']) ?>
            </div>

            <h2 class="font-bold mb-10 text-gray-500 text-sm">Recent Posts</h2>
            @foreach($posts as $post)
            <div>
                <h3 class="text-2xl font-bold mb-4"><a href="{{ $post['slug'] }}">{{ $post['title'] }}</a></h3>
                <p class="text-sm text-gray-500">Posted {{ $post['created'] }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
