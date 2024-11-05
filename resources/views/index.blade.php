<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{trans('translation.todo_list')}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/about">@lang('translation.about')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/readme">@lang('translation.readme')</a>
                </li>
                @if (session('lang') === 'en')
                    <li class="nav-item">
                        <a href="/lang/uz" class="nav-link">UZ</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link" style="color: red">ENG</p>
                    </li>
                @else
                    <li class="nav-item">
                        <p class="nav-link" style="color: red">UZ</p>
                    </li>
                    <li class="nav-item">
                        <a href="/lang/en" class="nav-link">ENG</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>
<div id="app"></div>
</body>
</html>
