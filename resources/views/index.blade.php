<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       

        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body class="antialiased">
        
        <header class="mt-5 md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                  <h1>Laravel Ajex Curd</h1>
                  <hr>
                </div>
            </div>
        </div>
        </header>

        <section class="body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#taskModal">Create New</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="text-center">
                                   
                                    <tr>
                                            <td>Id</td>
                                            <td>Name </td>
                                            <td style="width:200px;">Action</td>
                                    </tr>
                                    
                                    </thead>
                                    <tbody id="taskTableBody">
                                    @foreach($data as $tsk)
                                        <tr>
                                            <td>{{$tsk->id}}</td>
                                            <td>{{$tsk->name}}</td>
                                            <td style="width:200px;">
                                            <a class="btn btn-primary">Edit</a>
                                            <a class="btn btn-danger">Delete</a>
                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- Modal -->
                <div class="modal fade" id="taskModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="createTaskFrom">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="createTaskMassage">
                                    </div>
                                    <div class="form-group">
                                    <label for="">Enter Task</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Task Name">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal End -->

    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/jquery-3.5.1.min.js')}}"></script>
    <!-- <script src="{{asset('bootstrap/js/jquery-3.5.1.slim.min.js')}}"></script> -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>
