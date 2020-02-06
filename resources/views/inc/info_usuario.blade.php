@if (session()->exists('usuario'))    

<div class="row">
    <div class="col-1 align-self-start" style="position:absolute;top:100px;left:0px">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">USUARIO</th>
                <th scope="col">STATUS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{session()->get('id_usuario')}}</td>
                <td>{{session()->get('usuario')}}</td>
                <td><a  class="badge badge-success">CONECTADO</a></td>
                <td><a href="/deslogar" class="badge badge-danger">DESLOGAR</a></td>
              </tr>             
            </tbody>
          </table>
    </div>    
  </div>

  @endif