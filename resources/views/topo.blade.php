<style media="screen">
.menu {
  background-color: #282c34;
  width: 100%;
  height: 70px;
  padding: 3px;
  position: relative;
}
.menu .topo_esquerdo {
  float: left;
}
.menu .topo_esquerdo .img_logo {
  width: 150px;
  max-height: 62px;
  min-height: 62px;
}
.menu .topo_esquerdo .links {
  display: inline;
}
.menu .topo_esquerdo .links a {
  margin: 10px;
  font-weight: bold;
  text-decoration: none;
  color: #f3b300;
}
.menu .topo_esquerdo .links a:hover {
  color: #ffca4c;
}
.menu .topo_esquerdo .links .active {
  color: #eee;
  font-style: italic;
}
.menu .topo_direito {
  float: right;
  padding-right: 5px;
  margin-top: 15px;
}
</style>
<div class="menu hidden-xs well">
    <div class='topo_esquerdo '>
        <img src="http://via.placeholder.com/150x65" alt='Estrutura Laravel' class='img_logo'>
        <div class="links">
            {{-- <a {{ Request::route()->getName() == 'home' ? 'class=active' : '' }} href="{{ Route('home') }}">Home</a> --}}
            {{-- <a {{ Request::route()->getName() == 'produtos' ? 'class=active' : '' }} href="{{ Route('produtos') }}">Produtos</a> --}}
            {{-- <a {{ Request::route()->getName() == 'contato' ? 'class=active' : '' }} href="{{ Route('contato') }}">Fale conosco</a> --}}
            <a href="#" class='active'>Home</a>
            <a href="#">link 1</a>
            <a href="#">Link 2</a>
        </div>
    </div>

    @if (Auth::check() == 0)
        <div class="topo_direito">
            <div>
                <a href='{{ Route('login') }}' class="btn btn-login">Login</a>
                <a href='{{ Route('register') }}' class="btn btn-cadastro">Cadastre-se</a>
            </div>
        </div>
    @else
        <div class="topo_direito">
            <div>
                <a href='{{ Route('admin.home') }}' class="btn btn-cadastro">Admin</a>
            </div>
        </div>

    @endif
</div>

<br style="clear:both;"/><br>
