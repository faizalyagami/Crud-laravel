<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Quiz</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Latihan CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Membuat Soal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/question">View Jawaban</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5" style="width: 33%;">
        <form class="mb-4" action="{{ route('question.store') }}" method ="POST">
        @csrf
            <h1 class="text-center mb-4">Membuat Soal</h1>
            <div class="form-group">
                <label for="">Input Soal</label>
                <input type="text" class="form-control" name="question">
            </div>
            <!-- <div class="form-group">
                <label for="">Pilihan Ganda</label>
                <i>
                <li> <input type="text" class="form-control" name="answer[]"> </li>
                <li> <input type="text" class="form-control" name="answer[]"> </li>
                <li> <input type="text" class="form-control" name="answer[]"> </li>
                <li> <input type="text" class="form-control" name="answer[]"> </li>
                </i>
            </div> -->
            <div class="form-group">
                <label for="">Input Jawaban</label>
                <input type="text" class="form-control" name="answer[]">
            </div>
            <!-- <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control">
            </div> -->
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
<script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('scripts/bootstrap.min.js')}}"></script>
</body>
</html>