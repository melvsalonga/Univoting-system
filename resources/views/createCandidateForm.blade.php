@extends("layouts.main")

@section("content")

<div class="container mt-5">
    <h2 class="text-center">Insert New Candidate/Name</h2>
    <form action="{{route('createCandidate')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
        <label class="form-label" for="customFile">Profile Img</label>
        <input type="file" name="candidateImg" class="form-control"  />
        </div>
        
        <div class="form-group">
        <label >Name</label>
        <input type="text" name="candidateName" class="form-control" placeholder="Type the name of the candidate" required/><br>
        </div>

        <div class="form-group">
        <label >Information</label>
        <input type="text" name="candidateInfo" class="form-control" placeholder="Type the about information of the candidate"/><br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection