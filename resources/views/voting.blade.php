@extends("layouts.main")

@section("content")

<div class="container" style="min-height:70vh;">

    <form action="{{route('castYourVote')}}" method="post">
         {{ csrf_field() }}
        <fieldset class="form-group text-center">
            <div class="row">
            <div class="col-sm-10" style="margin:0 auto">
            <div class="card-body">
            <h3 class="mt-3">Candidates to vote for:</h3>
                
                @foreach($candidates as $candidate) 
                <div class="form-check mb-5 mt-3">
                <div ><img class="rounded-circle align-center" src="/storage/images/{{$candidate->c_img}}" alt="img" style="width:3.2em; height:3.2em;"></div>
                    <input class="form-check-input" type="radio" name="candidateId" id="exampleRadios1" value="{{$candidate->id}}" style="float:none">
                    <label class="form-check-label font-weight-bold" for="exampleRadios1">
                        {{$candidate->name}}
                    </label>
                </div>
                @endforeach

                <div class="form-group row">
                    <div class="col-sm-10 d-grid gap-2" style="margin:0 auto">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Vote</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Submit Vote</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to vote this?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                        </div>
                        </div>

                    </div>
                
                </div>
            </div>
            
            </div>
        </fieldset>
    </form>

</div>

@endsection

@section("js")
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection
