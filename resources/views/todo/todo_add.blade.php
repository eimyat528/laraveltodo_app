<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Form</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <style>

      .btn-circle{
        background: #9395D3;
        width: 75px;
        border: #9395D3;
        height: 75px;
        border-radius: 50%;
        box-shadow: 4px 4px #c4c4d3;
      }

      .btn-func{
       
        background: #9395D3;
        width: 45px;
        border: #9395D3;
        height: 45px;
        border-radius: 50%;

      }

      .btn-circle:hover{

        background: #303277;
        border: #303277;

      }
      

      .btn-circle:active{

      background: #303277;
      border: #303277;

    }

    .btn-action{
     width: 200px;
    color: #fff;
    background-color: #9395D3;
    box-shadow: 4px 4px #c4c4d3;

    }


      body{
        background-color:#D6D7EF;
      }
      
        .i-img{
          cursor: pointer;
          width:35px;
          margin-top:5px;
        }

        .c-img{
          cursor: pointer;
          width:75px;
          margin-top:5px;
        }
    </style>
</head>
<body>
<div class="container m-5">
       <div class="d-flex justify-content-between">
            <div>
            <a href="/">
            <img src="/images/back.svg" alt="" class="i-img">
            </a>
            </div>
            <div>
            <h3 class="text-center font-weight-bold text-white">Add Task</h5>
            </div>
        </div>
        <div class="card p-3 mt-2">
            <div class="card-body">
                  @if ($errors ->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors ->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif

                    <form action="/todo" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Detail</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                        </div>
                       

                        <button type="submit" class="btn btn-action">Submit</button>
                       
                    </form>       
                </div>
        </div>
       
</div><!-- /.container-fluid -->
</body>

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
</html>