<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pertanyaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('question.create') }}">Membuat Pertanyaan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/">Jawaban</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5">
        <h1>Latihan Soal</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Option</th>
                    <th>Answer</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                  <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$question->question}}</td>
                  <td>{{$question->option}}</td>
                  <td>{{$question->answer}}</td>
                  <td>
                  <a href="{{ route('question.show', [$question->id]) }}" class="btn btn-success">View</a>
                  <a href="" class="btn btn-success">Edit</a>
                  <button type="submit" class="btn btn-danger">Delete</Button>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>