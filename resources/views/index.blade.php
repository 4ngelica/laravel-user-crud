<!------------AUTORA: ANGÉLICA BATASSIM NUNES---------------------------
--------------GITHUB: https://github.com/4ngelica --------------------->


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>User CRUD</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  </head>

  <body>
    <table class="users">
  <thead>
    <tr>
      <th class="row-1 row-ID">ID</th>
      <th class="row-2 row-name">Nome</th>
      <th class="row-3 row-job">Bio</th>
      <th class="row-4 row-email">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>0001</td>
      <td>Johnny Five</td>
      <td>Robotin'</td>
      <td>need@input.com</td>
    </tr>
    <tr>
      <td>0002</td>
      <td>Super Superlonglastnamesmith</td>
      <td>Doin' stuff</td>
      <td>doing@stuff.com</td>
    </tr>
    <tr>
      <td>0003</td>
      <td>Roger Wilco</td>
      <td>Truckdrivin'</td>
      <td>roger@wilco.com</td>
    </tr>
    <tr>
      <td>0004</td>
      <td>Mad Hatter</td>
      <td>Hat Makin'</td>
      <td>loves@mercury.com</td>
    </tr>
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

{{$user_list}}


  </body>
</html>
