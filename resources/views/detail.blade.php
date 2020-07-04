<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal Latihan</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Soal Quiz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('question.create') }}">Membuat Soal</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/">Pilihan Ganda</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5">
        <h1>Soal Latihan</h1>
        {{ $question->question }}

        <br><br>
        Pilihan ganda
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Option</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($question->options as $option)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$option->option}}</td>
                        <td>{{$option->answer}}</td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>  
</body>
</html>