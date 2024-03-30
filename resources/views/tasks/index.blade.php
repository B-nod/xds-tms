@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Manage a Task') }}</div>

                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>Action</th>
                               <th>S.N.</th>
                               <th>Task Title</th>
                               <th>Task Priority</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td scope="row">
                                   <a href="#" name="" id="" class="btn btn-primary btn-sm" role="button">Edit</a>
                                   <a href="#" name="" id="" class="btn btn-danger btn-sm" role="button">Delete</a>
                               </td>
                               <td>1</td>
                               <td>Assignment</td>
                               <td>Normal</td>
                           </tr>
                          
                       </tbody>
                        <thead>
                           <tr>
                               <th>Action</th>
                               <th>S.N.</th>
                               <th>Task Title</th>
                               <th>Task Priority</th>
                           </tr>
                       </thead>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection