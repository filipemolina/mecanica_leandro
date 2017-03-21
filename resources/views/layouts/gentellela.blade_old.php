<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mecânica</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    {{-- Animate.css --}}
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">

    {{-- Css Customizado --}}

    <link rel="stylesheet" href="/css/styles.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>Mecânica</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_info">
                <span>Bem-vindo,</span>
                <h2>Administrador!!</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  
                  <li>
                    <a>
                      <i class="fa fa-home"></i>Home
                    </a>
                  </li>

                  <li>
                    
                    <a>
                      <i class="fa fa-car"></i> Carros 
                      <span class="fa fa-chevron-down"></span>
                    </a>

                    <ul class="nav child_menu">
                      <li><a href="form.html">Lista de Carros</a></li>
                      <li><a href="form_advanced.html">Cadastrar Carro</a></li>
                    </ul>

                  </li>

                  <li>
                    <a>
                      <i class="fa fa-wrench"></i> Atendimentos
                    </a>
                  </li>

                  <li>
                    
                    <a>
                      <i class="fa fa-users"></i> Usuários 
                      <span class="fa fa-chevron-down"></span>
                    </a>

                    <ul class="nav child_menu">
                      <li><a href="tables.html">Lista de Usuários</a></li>
                      <li><a href="tables_dynamic.html">Cadastrar Usuário</a></li>
                    </ul>

                  </li>

                  <li>
                    <a>
                      <i class="fa fa-bar-chart-o"></i> Opções 
                      <span class="fa fa-chevron-down"></span>
                    </a>

                    <ul class="nav child_menu">
                      <li><a href="tables.html">Configurações</a></li>
                      <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  Sair
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        
                      </li>
                    </ul>

                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              @section('menu-superior')

              @show
              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

          <div class="right_col" role="main" style="min-height: 930px">

            <div class="">

              <div class="row col-md-12 col-sm-12 col-xs-12">
                
                <img src="/img/gears.gif" id="img-loading" alt="">
            
                @yield('conteudo')              

              </div>

            </div>

          </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    {{-- Templates HandleBars --}}

    <script id="resultado-busca" type="text/x-handlebars-template">

      {{-- Essa tag permite que as chaves sejam usadas pelo Handlebars e não pelo Blade --}}

      @verbatim
        
        <div class="col-md-12 x_panel">

          <!-- Título -->
          
          <div class="x_title">

            <h2>{{ modelo }} | {{ placa }}</h2>

            <div class="clearfix"></div>

          </div>

          <!-- Conteúdo  -->

          <div class="x_content">

            <!-- Informações do Carro -->

            <div class="col-md-4">
              <strong>Placa:</strong> {{ placa }}
              <br>
              <strong>Modelo:</strong> {{ modelo }}
              <br>
              <strong>Cor:</strong> {{ cor }}
              <br>
              <strong>Proprietário:</strong> {{ proprietario }}
              <br>

              <div class="content botoes">
                <button class="btn btn-success">Novo Atendimento</button>
              </div>
            </div>

            <!-- Histórico dos Atendimentos -->

            <div class="col-md-8">
              
              <ul class="list-unstyled timeline">

                {{#each atendimentos}}

                  <li>
                    <div class="block">
                      <div class="tags">
                        <a href="" class="tag">
                          <span>{{ criado }}</span>
                        </a>
                      </div>
                      <div class="block_content">
                        <h2 class="title">
                          <a href="javascript:void(0)">Serviços Prestados</a>
                        </h2>
                        <div class="byline">
                          Liberado em <span>{{ criado }}</span> por <a>João</a>
                        </div>
                        <p class="excerpt">{{ descricao }}</p>
                        <p><strong>Valor:</strong> R$ {{ valor }}</p>
                      </div>
                    </div>
                  </li>

                {{/each}}

              </ul>

            </div>

          </div>
          
        </div>

      @endverbatim

    </script>

    <script id="formulario-cadastro-atendimento" type="text/x-handlebars-template">



    </script>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
    {{-- Input Mask --}}
    <script src="{{ asset('vendors/jquery.inputmask/dist/jquery.inputmask.bundle.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('js/custom.min.js') }}"></script>

    {{-- HandleBars --}}
    <script type="text/javascript" src="/vendors/Handlebars/handlebars-latest.js"></script>

    {{-- Scripts Personalizados --}}
    <script src="/js/scripts.js"></script>
  </body>
</html>
