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
                    <div class="col col-md-offset-3 col-md-6">
                        <nav class="panel panel-default">
                            <div class="panel panel-heading">フォルダを追加する</div>
                            <div class="panel-body">
                                <form action="/folders/store" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">フォルダ名</label>
                                        <input type="text" class="form-control" name="title" id="title"/>
                                    </div>
                                    <div class="text-right">
                                        <input type="submit" class="btn-primary" value="送信"/>
                                    </div>
                                    <div class="text-center">
                                        <a href="/folders">戻る</a>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
        </x-app-layout>
    </body>
</html>