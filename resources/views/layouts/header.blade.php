<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UniVote</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body style="background-color: #e6e6fa;">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ml-5" href="{{route('welcome')}}"><img src="assets/img/UNIVOTE-LOGO.png" style="width:80px;height:80px;" alt="UniVote" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav text-uppercase ml-auto mr-5">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('votingPage')}}">Voting</a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" style="width:2.2em; height:2.2em;">
            </button>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" type="button" href="{{ route('profile.show') }}">Profile</a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" type="button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">
                  {{ __('Log Out') }}
                </a>
              </form>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  