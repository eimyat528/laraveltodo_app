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

        background: #ACAFFF;
        border: #ACAFFF;

      }
      

      .btn-circle:active{

      background: #9395D3;
      border: #9395D3;

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

        .checkbox {
    --background: #fff;
    --border: #acafff;
    --border-hover: #BBC1E1;
    --border-active: #acafff;
    --tick: #fff;
    position: relative;
    input,
    svg {
        width: 21px;
        height: 21px;
        display: block;
    }
    input {
        -webkit-appearance: none;
        -moz-appearance: none;
        position: relative;
        outline: none;
        background: var(--background);
        border: none;
        margin: 0;
        padding: 0;
        cursor: pointer;
        border-radius: 4px;
        transition: box-shadow .3s;
        box-shadow: inset 0 0 0 var(--s, 1px) var(--b, var(--border));
        &:hover {
            --s: 2px;
            --b: var(--border-hover);
        }
        &:checked {
            --b: var(--border-active);
        }
    }
    svg {
        pointer-events: none;
        fill: none;
        stroke-width: 2px;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke: var(--stroke, var(--border-active));
        position: absolute;
        top: 0;
        left: 0;
        width: 21px;
        height: 21px;
        transform: scale(var(--scale, 1)) translateZ(0);
    }
    &.path {
        input {
            &:checked {
                --s: 2px;
                transition-delay: .4s;
                & + svg {
                    --a: 16.1 86.12;
                    --o: 102.22;
                }
            }
        }
        svg {
            stroke-dasharray: var(--a, 86.12);
            stroke-dashoffset: var(--o, 86.12);
            transition: stroke-dasharray .6s, stroke-dashoffset .6s;
        }
    }
    &.bounce {
        --stroke: var(--tick);
        input {
            &:checked {
                --s: 11px;
                & + svg {
                    animation: bounce .4s linear forwards .2s;
                }
            }
        }
        svg {
            --scale: 0;
        }
    }
}

@keyframes bounce {
    50% {
        transform: scale(1.2);
    }
    75% {
        transform: scale(.9);
    }
    100% {
        transform: scale(1);
    }
}

html {
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
}

* {
    box-sizing: inherit;
    &:before,
    &:after {
        box-sizing: inherit;
    }
}

// Center & dribbble
body {
   
    .grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        grid-gap: 24px;
    }
    .dribbble {
        position: fixed;
        display: block;
        right: 20px;
        bottom: 20px;
        img {
            display: block;
            height: 28px;
        }
    }
    .twitter {
        position: fixed;
        display: block;
        right: 64px;
        bottom: 14px;
        svg {
            width: 32px;
            height: 32px;
            fill: #1da1f2;
        }
    }
}
  </style>
</head>
<body>
      <div class="container m-5">
       <div class="row">
        <div class="col-md-12">
        <div class="form-row justify-content-between">
          <h3 class="text-center font-weight-bold text-white">TODO APP</h5>
          <img src="/images/calendar.png" alt="" class="i-img">

        </div>
        @foreach($todos as $todo)
        <div class="card p-3 mt-2">
          <div class="row">
            <div class="col-9">
              <h6 style=" font-style: bold;">{{ $todo -> title}}</h6>
              <p style=" font-style: italic;">{{ $todo -> description}}</p>
            </div>
            <div class="col-1">
              <a href="/todo/{{$todo->id}}/edit">
              <button class="btn m-1"><img src="/images/edit.svg" alt="" class="i-img"></button>        

              </a>
            </div>
            <div class="col-1">
              <form action="/todo/{{$todo->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button  type="submit" class="btn m-1" onclick="return confirm('Are you sure to delete this task ?');"><img src="/images/delete.svg" alt="" class="i-img"></button>        

              </form>
            </div>
            <div class="col-1">
              <label class="checkbox path mt-4" >
                  <input type="checkbox">
                  <svg viewBox="0 0 21 21">
                      <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                  </svg>
              </label>       

            </div>
          </div>
        </div>
        @endforeach
     

        <a href="/todo/create" style="float:right;">
        <button class="btn btn-circle btn-circle-sm m-1"><img src="/images/plus.png" alt=""></button>        
       </a>
        </div>
       </div>
    </div>
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