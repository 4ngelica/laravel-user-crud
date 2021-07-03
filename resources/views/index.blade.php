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
        <script>
          const user = [];
        </script>
        @foreach ($user_list as $key => $user_list)
          <tr>
            <script>
              user.push({!! $user_list->toJson()!!});
            </script>
            <td>{{$user_list->id}}</td>
            <td id="nome">{{$user_list->nome}}</td>
            <td id="email">{{$user_list->email}}</td>
            <td id="bio">{{$user_list->bio}}</td>
            <td>
              <form action="{{ route('admin.delete',$user_list->id)}}" method="get">
                @csrf
                <a href="{{ URL::to('/' . $user_list->id) }}">
                <button type="button">X</button>
                </a>
              </form>
              {{-- <script>
                var user = {!! $user_list->toJson() !!};
              </script> --}}
              {{-- <form action="{{ route('admin.update',$user_list->id)}}" method="put">
                @csrf
                <a href="{{ URL::to('/' . $user_list->id) }}"> --}}
                <button type="button" class="{{$user_list->id}}" value="{{$user_list->id}},{{$user_list->nome}},{{$user_list->email}},{{$user_list->bio}}" id="teste">U</button>
                {{-- </a>
              </form> --}}
            </td>
          </tr>
          {{-- <div class="login-page" id="{{$user_list->id}}" style="display: none;">
            <div class="form">
              Atualizar registro
              <form class="login-form" action="{{ route('admin.save')}}" method="post">
                @csrf
                <input type="text" placeholder="{{$user_list->nome}}" name="nome"/>
                {{$errors->has('nome') ? $errors->first('nome'): '' }}
                <input type="text" placeholder="{{$user_list->email}}" name="email"/>
                {{$errors->has('email') ? $errors->first('email'): '' }}
                <input type="text" placeholder="{{$user_list->bio}}" name="bio"/>
                {{$errors->has('bio') ? $errors->first('bio'): '' }}
                <button type="submit">Atualizar</button>
                <button type="button" class="cancel">Cancelar</button>
                <p class="message">User CRUD by <a href="http://www.github.com/4ngelica">4ngelica</a></p>
              </form>
            </div>
          </div> --}}
        @endforeach

      </tbody>
    </table>




    {{-- <script>
      const TESTE = [];
        @foreach ($user_list as $key => $user_list)
          TESTE.push({!! $user_list->id!!});
        @endforeach
    </script> --}}
    <div class="login-page" id="formstore">
      <div class="form">
        Incluir usuário
        <form class="login-form" action="{{ route('admin.save')}}" method="post">
          @csrf
          <input type="text" placeholder="Nome" name="nome"/>
          {{$errors->has('nome') ? $errors->first('nome'): '' }}
          <input type="text" placeholder="Email" name="email"/>
          {{$errors->has('email') ? $errors->first('email'): '' }}
          <input type="text" placeholder="Bio" name="bio"/>
          {{$errors->has('bio') ? $errors->first('bio'): '' }}
          <button type="submit">Registrar</button>
          <p class="message">User CRUD by <a href="http://www.github.com/4ngelica">4ngelica</a></p>
        </form>
      </div>
    </div>

    <div class="login-page" id="formupdate" style="display: none;">
      <div class="form">
        Atualizar registro
        <form class="login-form" id="update-form" action="" method="put">
          @csrf
          <input type="text" name="nome" id="update-nome"/>
          {{$errors->has('nome') ? $errors->first('nome'): '' }}
          <input type="text" name="email" id="update-email"/>
          {{$errors->has('email') ? $errors->first('email'): '' }}
          <input type="text" name="bio" id="update-bio"/>
          {{$errors->has('bio') ? $errors->first('bio'): '' }}
          <button type="submit">Atualizar</button>
          <button type="button" class="cancel">Cancelar</button>
          <p class="message">User CRUD by <a href="http://www.github.com/4ngelica">4ngelica</a></p>
        </form>
      </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
