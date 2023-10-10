<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ToDO list</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <x-app-layout>
            <header>
            <nav class="my-navbar">
                <a class="my-navbar-brand">ToDo List</a>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <nav class="panel panel-default">
                            <div class="panel panel-heading">フォルダ</div>
                            <div class="panel-body">
                                <a href="/folders/create" class="btn btn-default btn-block">フォルダを追加する</a>
                            </div>
                            <div class="list-group">
                                @foreach($folders as $folder)
                                <div class="list-group-item">
                                    <a href='/folders/{{ $folder->id }}/tasks'>{{ $folder->title }}</a>
                                </div>
                                @endforeach
                            </div>
                        </nav>
                    </div>
                    <div class="column col-md-8">
                        
                    </div>
                </div>
            </div>
        </main>
        </x-app-layout>
    </body>
</html>