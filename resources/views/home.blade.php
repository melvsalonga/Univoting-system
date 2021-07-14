<!-- Etoo ang home page front end -->

@extends("layouts.main")

@section("content")

    @include('flashmsg')
    <div class="container">
    <h3 class="text-center mt-3">Latest Result</h3>
    @foreach($candidates as $candidate)
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <div class="card mb-3 mt-3">
            <div class="card-body">
            <div class="text-center"><img class="rounded-circle align-center" src="/storage/images/{{$candidate->c_img}}" alt="img" style="width:6.2em; height:6.2em;"></div>
                <h4>Name : {{$candidate->name}}</h4>
                    <!-- Button trigger modal -->
                    <br><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                      More Info
                    </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center font-weight-bold">
                            {{$candidate->information}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>


                <h3 class="text-center mt-3"><span>{{($candidate->votes/100) * 100}} Voted</span></h3>

                <div class="progress mt-5">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{($candidate->votes/100) * 100}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$candidate->votes}}</div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endforeach   
    </div>
    

@endsection 



