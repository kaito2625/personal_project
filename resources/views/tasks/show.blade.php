<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>To DO list</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
     <body>
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
                            <div class="panel panel-heading">{{ $folder->title }}</div>
                            <div class="panel-body">
                                <a href="/folders/{{ $folder->id }}/tasks/create" class="btn btn-default btn-block">タスクを追加する</a>
                            </div>
                        </nav>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>タイトル</th>
                                <th>期限</th>
                                <th>状態</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>
                                   {{ $task->due_date }}
                                </td>
                                <td>
                                    <div class="button">
                                        <a href="" class="btn-default">完了</a>
                                    </div>
                                </td>
                                <td><a href="">編集</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/folders" class="btn btn-default">戻る</a>
                </div>
            </div>
        </main>
    </body>
</html>