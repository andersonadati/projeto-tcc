<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        My Book
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ URL::asset('./css/nucleo-icons.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS Files -->
    <link href="{{ URL::asset('./css/black-dashboard.css?v=1.0.0') }}" rel="stylesheet" type="text/css">
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text logo-normal">
                        {{ $agenda->name }}
                    </a>
                </div>
                <ul class="nav">
                    <li class="active ">
                        <a href="{{ route('dashboard') }}">
                            <i class="tim-icons icon-bank"></i>
                            <h5>Dashboard</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.show', $user->id) }}">
                            <i class="tim-icons icon-single-02"></i>
                            <h5>Minha conta</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('caderno.index') }}">
                            <i class="tim-icons icon-notes"></i>
                            <h5>Meus Cadernos</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog"
                aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h2 class="card-title">Segunda</h2>
                                <hr class="bg-white">
                                @foreach ($tarefas as $tarefa)
                                    @if ($tarefa->dias_semana_id === 1)
                                        <h3 class="card-title">
                                            <i class="tim-icons icon-pin text-info"></i>
                                            {{ $tarefa->titulo }}
                                        </h3>
                                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                        <hr class="bg-white">
                                    @endif
                                @endforeach
                                @if (!isset($tarefa))
                                    <h4 class="card-title">
                                        <i class="tim-icons icon-pin text-info"></i>
                                        Sem Tarefas
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h2 class="card-title">Ter??a</h2>
                                <hr class="bg-white">
                                @foreach ($tarefas as $tarefa)
                                    @if ($tarefa->dias_semana_id === 2)
                                        <h3 class="dispplay-inline">
                                            <i class="tim-icons icon-pin text-info"></i>
                                            {{ $tarefa->titulo }}
                                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                        </h3>
                                        <hr class="bg-white">
                                    @endif
                                @endforeach
                                @if (!isset($tarefa))
                                    <h4 class="card-title">
                                        <i class="tim-icons icon-pin text-info"></i>
                                        Sem Tarefas
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h2 class="card-title">Quarta</h2>
                                <hr class="bg-white">
                                @foreach ($tarefas as $tarefa)
                                    @if ($tarefa->dias_semana_id === 3)
                                        <h3 class="card-title">
                                            <i class="tim-icons icon-pin text-info"></i>
                                            {{ $tarefa->titulo }}
                                        </h3>
                                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                        <hr class="bg-white">
                                    @endif
                                @endforeach
                                @if (!isset($tarefa))
                                    <h4 class="card-title">
                                        <i class="tim-icons icon-pin text-info"></i>
                                        Sem Tarefas
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h2 class="card-title">Quinta</h2>
                                <hr class="bg-white">
                                @foreach ($tarefas as $tarefa)
                                    @if ($tarefa->dias_semana_id === 4)
                                        <h3 class="card-title">
                                            <i class="tim-icons icon-pin text-info"></i>
                                            {{ $tarefa->titulo }}
                                        </h3>
                                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                        <hr class="bg-white">
                                    @endif
                                @endforeach
                                @if (!isset($tarefa))
                                    <h4 class="card-title">
                                        <i class="tim-icons icon-pin text-info"></i>
                                        Sem Tarefas
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h2 class="card-title">Sexta</h2>
                                <hr class="bg-white">
                                @foreach ($tarefas as $tarefa)
                                    @if ($tarefa->dias_semana_id === 5)
                                        <h3 class="card-title">
                                            <i class="tim-icons icon-pin text-info"></i>
                                            {{ $tarefa->titulo }}
                                        </h3>
                                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                        <hr class="bg-white">
                                    @endif
                                @endforeach
                                @if (!isset($tarefa))
                                    <h4 class="card-title">
                                        <i class="tim-icons icon-pin text-info"></i>
                                        Sem Tarefas
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h2 class="card-title">S??bado</h2>
                                <hr class="bg-white">
                                @foreach ($tarefas as $tarefa)
                                    @if ($tarefa->dias_semana_id === 6)
                                        <h3 class="card-title">
                                            <i class="tim-icons icon-pin text-info"></i>
                                            {{ $tarefa->titulo }}
                                        </h3>
                                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                        <hr class="bg-white">
                                    @endif
                                @endforeach
                                @if (!isset($tarefa))
                                    <h4 class="card-title">
                                        <i class="tim-icons icon-pin text-info"></i>
                                        Sem Tarefas
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h2 class="card-title">Domingo</h2>
                                <hr class="bg-white">
                                @foreach ($tarefas as $tarefa)
                                    @if ($tarefa->dias_semana_id === 7)
                                        <h3 class="card-title">
                                            <i class="tim-icons icon-pin text-info"></i>
                                            {{ $tarefa->titulo }}
                                        </h3>
                                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                        <hr class="bg-white">
                                    @endif
                                @endforeach
                                @if (!isset($tarefa))
                                    <h4 class="card-title">
                                        <i class="tim-icons icon-pin text-info"></i>
                                        Sem Tarefas
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h2 class="card-title">Editar sua agenda</h2>
                                    <hr class="bg-white">
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Name:</strong>
                                                        <input type="text" name="name"
                                                            value="{{ $agenda->name }}" class="form-control"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card card-chart">
                                <div class="card-header">
                                    <h2 class="card-title">Nova tarefa</h2>
                                    <hr class="bg-white">
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <form action="{{ route('tarefas.store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Tarefa:</strong>
                                                        <input type="text" name="titulo" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Dia:</strong>
                                                        <select name="dia">
                                                            @foreach ($dias as $dia)
                                                                <option value="{!! $dia->id !!}">
                                                                    {!! $dia->dia !!}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fixed-plugin">
                        <div class="dropdown show-dropdown">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-cog fa-2x"> </i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header-title"> Mudar tema</li>
                                <li class="adjustments-line">
                                    <a href="javascript:void(0)" class="switch-trigger background-color">
                                        <div class="badge-colors text-center">
                                            <span class="badge filter badge-info active"
                                                data-color="info"></span>
                                            <span class="badge filter badge-info" data-color="blue"></span>
                                            <span class="badge filter badge-success" data-color="green"></span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li class="adjustments-line text-center color-change">
                                    <span class="color-label">LIGHT MODE</span>
                                    <span class="badge light-badge mr-2"></span>
                                    <span class="badge dark-badge ml-2"></span>
                                    <span class="color-label">DARK MODE</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    <script src="{{ URL::asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
                    <script src="{{ URL::asset('js/core/popper.min.js') }}" type="text/javascript"></script>
                    <script src="{{ URL::asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
                    <script src="{{ URL::asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

                    <script src="{{ URL::asset('js/plugins/chartjs.min.js') }}"></script>

                    <script src="{{ URL::asset('js/plugins/bootstrap-notify.js') }}"></script>

                    <script src="{{ URL::asset('js/black-dashboard.js?v=1.0.0') }}" type="text/javascript"></script>

                    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
                    <script>
                        $(document).ready(function() {
                            $().ready(function() {
                                $sidebar = $('.sidebar');
                                $navbar = $('.navbar');
                                $main_panel = $('.main-panel');

                                $full_page = $('.full-page');

                                $sidebar_responsive = $('body > .navbar-collapse');
                                sidebar_mini_active = true;
                                white_color = false;

                                window_width = $(window).width();

                                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                                $('.fixed-plugin a').click(function(event) {
                                    if ($(this).hasClass('switch-trigger')) {
                                        if (event.stopPropagation) {
                                            event.stopPropagation();
                                        } else if (window.event) {
                                            window.event.cancelBubble = true;
                                        }
                                    }
                                });

                                $('.fixed-plugin .background-color span').click(function() {
                                    $(this).siblings().removeClass('active');
                                    $(this).addClass('active');

                                    var new_color = $(this).data('color');

                                    if ($sidebar.length != 0) {
                                        $sidebar.attr('data', new_color);
                                    }

                                    if ($main_panel.length != 0) {
                                        $main_panel.attr('data', new_color);
                                    }

                                    if ($full_page.length != 0) {
                                        $full_page.attr('filter-color', new_color);
                                    }

                                    if ($sidebar_responsive.length != 0) {
                                        $sidebar_responsive.attr('data', new_color);
                                    }
                                });

                                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                                    var $btn = $(this);

                                    if (sidebar_mini_active == true) {
                                        $('body').removeClass('sidebar-mini');
                                        sidebar_mini_active = false;
                                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                                    } else {
                                        $('body').addClass('sidebar-mini');
                                        sidebar_mini_active = true;
                                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                                    }

                                    // we simulate the window Resize so the charts will get updated in realtime.
                                    var simulateWindowResize = setInterval(function() {
                                        window.dispatchEvent(new Event('resize'));
                                    }, 180);

                                    // we stop the simulation of Window Resize after the animations are completed
                                    setTimeout(function() {
                                        clearInterval(simulateWindowResize);
                                    }, 1000);
                                });

                                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                                    var $btn = $(this);

                                    if (white_color == true) {

                                        $('body').addClass('change-background');
                                        setTimeout(function() {
                                            $('body').removeClass('change-background');
                                            $('body').removeClass('white-content');
                                        }, 900);
                                        white_color = false;
                                    } else {

                                        $('body').addClass('change-background');
                                        setTimeout(function() {
                                            $('body').removeClass('change-background');
                                            $('body').addClass('white-content');
                                        }, 900);

                                        white_color = true;
                                    }


                                });

                                $('.light-badge').click(function() {
                                    $('body').addClass('white-content');
                                });

                                $('.dark-badge').click(function() {
                                    $('body').removeClass('white-content');
                                });
                            });
                        });
                    </script>
                    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
                    <script>
                        window.TrackJS &&
                            TrackJS.install({
                                token: "{TOKEN}",
                                application: "black-dashboard-free"
                            });
                    </script>
</body>

</html>
