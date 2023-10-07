<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>To DO list</title>
        <link rel="stylesheet" href="//unpkg.com/flatpickr/dist/flatpickr.min.css">
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
                    <div class="col col-md-offset-3 col-md-6">
                        <nav class="panel-default">
                            <div class="panel-heading">タスクを追加する</div>
                            <div class="panel-body">
                                <form action="/tasks" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">タイトル</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="due_date">期限</label>
                                        <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}"/>
                                    </div>
                                    <input type="hidden" value="{{ $folder->id }}" name="folder_id"/>
                                    <div class="text-right">
                                        <input type="submit" class="btn-primary" value="store"/>
                                    </div>
                                    <div class="text-center">
                                        <a href="/folders/{{ $folder->id }}/tasks">戻る</a>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
        
        <script src="//unpkg.com/flatpickr"></script>
        <script src="//unpkg.com/flatpickr/dist/l10n/ja.js"></script>
        <script>
            flatpickr(document.getElementById('due_date'),{
                locale: 'ja',
                dateFormat: "Y/m/d",
                minDate: new Date()
            });
        </script>
    </body>