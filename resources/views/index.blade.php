<!------------AUTORA: ANGÉLICA BATASSIM NUNES---------------------------
--------------GITHUB: https://github.com/4ngelica --------------------->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>User CRUD</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script> 
  </head>

  <body>
    <table class="users">
      <thead>
        <tr>
          <th class="row-1 row-ID">ID</th>
          <th class="row-2 row-name">Nome</th>
          <th class="row-4 row-email">Email</th>
          <th class="row-3 row-job">Bio</th>
          <th class="row-4 row-action"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user_list as $key => $user_list)
          <tr>
            <td>{{$user_list->id}}</td>
            <td>{{$user_list->nome}}</td>
            <td>{{$user_list->email}}</td>
            <td>{{$user_list->bio}}</td>
            <td>
              <form action="{{ route('admin.delete',$user_list->id)}}" method="get">
                @csrf
                <a href="{{ URL::to('/' . $user_list->id) }}">
                <button type="button">X</button>
                </a>
              </form>

              <form action="{{ route('admin.update',$user_list->id)}}" method="put">
                @csrf
                <a href="{{ URL::to('/' . $user_list->id) }}">
                <button type="button">U</button>
                </a>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="login-page">
      <div class="form">
        <form class="login-form" action="{{ route('admin.save')}}" method="post">
          @csrf
          <input type="text" placeholder="Nome" name="nome"/>
          {{$errors->has('nome') ? $errors->first('nome'): '' }}
          <input type="text" placeholder="Email" name="email"/>
          {{$errors->has('email') ? $errors->first('email'): '' }}
          <input type="text" placeholder="Bio" name="bio"/>
          {{$errors->has('bio') ? $errors->first('bio'): '' }}
          <button type="submit">Registrar</button>
          <p class="message">Saint CRUD by <a href="http://www.github.com/4ngelica">4ngelica</a></p>
        </form>
      </div>
    </div>

    <div class="login-page">
      <div class="form">
        <form class="login-form" action="{{ route('admin.save')}}" method="post">
          @csrf
          <input type="text" placeholder="Nome" name="nome"/>
          {{$errors->has('nome') ? $errors->first('nome'): '' }}
          <input type="text" placeholder="Email" name="email"/>
          {{$errors->has('email') ? $errors->first('email'): '' }}
          <input type="text" placeholder="Bio" name="bio"/>
          {{$errors->has('bio') ? $errors->first('bio'): '' }}
          <button type="submit">Registrar</button>
          <p class="message">Saint CRUD by <a href="http://www.github.com/4ngelica">4ngelica</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
