{"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/categories/index.blade.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":27,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <p>[<a href=\"/posts/create\">create</a>]</p>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>","                        <a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>","                    </h2>","                    <p class='body'>{{ $post->body }}</p>","                    <a href=\"\">{{ $post->category->name }}</a>","                    <a href=\"/categories/{{ $post->category->id }}\">{{ $post->category->name }}</a>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"],"id":1}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":62},"action":"remove","lines":["                    <a href=\"\">{{ $post->category->name }}</a>"],"id":2},{"start":{"row":17,"column":57},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":24,"column":14},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":25,"column":0},"end":{"row":25,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":8},"action":"remove","lines":["    "],"id":4},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":30},"action":"insert","lines":["            <a href=\"/\">戻る</a>"],"id":5}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":12},"action":"remove","lines":["    "],"id":6}],[{"start":{"row":6,"column":93},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":7,"column":0},"end":{"row":7,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":65},"action":"insert","lines":["<link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">"],"id":8}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":65},"end":{"row":7,"column":65},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1652169082089,"hash":"ec7244e4b10a4ef2b7bc561ef13a9178e66333d7"}