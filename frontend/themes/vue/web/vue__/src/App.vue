<template>
  <div class="back">

    <div class="container-fluid wrap">
      <div class="row">
        <div class="col-md-12 top">
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand!</a>
              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                </ul>


                <ul class="nav navbar-nav navbar-right">

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Войти <span class="caret"></span></a>
                    <ul class="dropdown-menu enter_sandman">
                      <li>
                        <div class="input-group login_div">


                          <div class="alert alert-danger">
                            Ошибки
                          </div>
                          Форма авторизации
                          <button type="submit" class="btn btn-default btn_submit">Войти</button>

                        </div>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Регистрация</a></li>
                </ul>

              </div>
            </div>



          </nav>
        </div>
      </div>

      <div class="row" id="main">

        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Library</a></li>
              <li class="active">Data</li>
            </ol>
          </div>
        </div>

        <div class="row" id="central">
          <div class="col-md-9 theme forum-list">



            <div class="row">
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Имя категории</div>
                <!-- List group -->
                <ul class="list-group">

                  <li class="list-group-item">Имя сабкатегории</li>

                </ul>
              </div>
            </div>

          </div>

          <div class="col-md-3 theme side">
            <div class="row">
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Panel heading</div>
                <!-- List group -->
                <ul class="list-group">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Collapsible panel</a>
                  </h4>
                </div>
                <!-- List group -->
                <div id="collapse1" class="panel-collapse collapse">
                  <ul class="list-group " >
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse2">Collapsible panel</a>
                  </h4>
                </div>
                <!-- List group -->
                <div id="collapse2" class="panel-collapse collapse">
                  <ul class="list-group " >
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-12 gfooter">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
          </ol>
        </div>
      </div>



    </div>
  </div>

</template>

<script>
  export default {
    name: 'app',
    data () {
      return {
        msg: 'Welcome to Your Vue Vuikit App!',
        isvisible: true
      }
    }
  }
</script>
