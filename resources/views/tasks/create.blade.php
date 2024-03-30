@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Create a Task') }}</div>

                <div class="card-body">
                   <form action="#" method="POST" enctype="multipart/form-data">
                       <div class="form-group">
                         <label for="">Task Title</label>
                         <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                       </div>
                       <div class="form-group">
                         <label for="">Task Description</label>
                         <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                       </div>
                       <div class="form-group">
                         <label for="">Task Priority</label>
                         <select class="form-control" name="" id="">
                           <option>High Priority</option>
                           <option selected>Normal Priority</option>
                           <option>Low Priority</option>
                         </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection