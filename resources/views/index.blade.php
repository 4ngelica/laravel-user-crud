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
    <script src="https://kit.fontawesome.com/0f6189f33e.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <table class="users">
      <thead>
        <tr>
          <th class="row-1 row-ID">ID</th>
          <th class="row-2 row-name">Name</th>
          <th class="row-4 row-email">Email</th>
          <th class="row-3 row-bio">Bio</th>
          <th class="row-4 row-action"></th>
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
            <td id="name">{{$user_list->name}}</td>
            <td id="email">{{$user_list->email}}</td>
            <td id="bio">{{$user_list->bio}}</td>
            <td>
              <button id="edit-button" type="button" class="{{$user_list->id}}" value="{{$user_list->id}},{{$user_list->name}},{{$user_list->email}},{{$user_list->bio}}"> <i class="fas fa-list"></i> </button>
            </td>
            <td>
              <form action="{{ route('admin.delete',$user_list->id)}}" method="get">
                @csrf
                <a href="{{ URL::to('/' . $user_list->id) }}">
                <button id="delete-button" type="button"> <i class="fas fa-times"></i> </button>
                </a>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    @if (Session::has('flash'))
      <h4 class="flash" style="text-align: center;">{{Session::get("flash")}}</h4>
    @endif
    <div class="register-page" id="formstore">
      <div class="form">
        <h2 class="title">REGISTER</h2>
        <form class="login-form" action="{{ route('admin.save')}}" method="post">
          @csrf
          <input type="text" placeholder="Name" name="name"/>
          {{$errors->has('name') ? $errors->first('name'): '' }}
          <input type="text" placeholder="Email" name="email"/>
          {{$errors->has('email') ? $errors->first('email'): '' }}
          <input type="text" placeholder="Bio" name="bio"/>
          {{$errors->has('bio') ? $errors->first('bio'): '' }}
          <button type="submit">Save</button>
          <p class="message">User CRUD by <a href="http://www.github.com/4ngelica">4ngelica</a></p>
        </form>
      </div>
    </div>

    <div class="update-page" id="formupdate" style="display: none;">
      <div class="form">
        <h2 class="title">EDIT USER</h2>
        <form class="login-form" id="update-form" action="" method="post">
          @csrf
          <input type="text" name="name" id="update-name"/>
          {{$errors->has('name') ? $errors->first('name'): '' }}
          <input type="text" name="email" id="update-email"/>
          {{$errors->has('email') ? $errors->first('email'): '' }}
          <input type="text" name="bio" id="update-bio"/>
          {{$errors->has('bio') ? $errors->first('bio'): '' }}
          <div class="buttons">
          <button type="button" class="cancel">Cancel</button>
          <button type="submit">Save changes</button>
          </div>
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
