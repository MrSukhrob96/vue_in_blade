<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/theme.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/fonts.css')}}" />
    </head>
    <body>
      <nav class="uk-container uk-container-expand uk-box-shadow-small" uk-navbar>
      <div class="uk-navbar-right">
      <ul class="uk-navbar-nav">
          <li><a href="{{url('/')}}">Таблица отправителей</a></li>
          <li class="uk-active"><a href="#">Стоплист</a></li>
      </ul>
      </div>
      </nav>

      <div class="uk-container uk-container-expand uk-margin-medium-top" id="stoplist">

        <div class="uk-grid-small" uk-grid>
        <div>
        <button class="uk-button uk-button-primary uk-border-rounded" v-on:click="toexcel()">Сохранить в EXCEL</button>
       </div>

     </div>

          <table class="uk-table uk-table-divider " ref="table">
    <thead>
        <tr>
            <th>Ф.И.О</th>
            <th>Дата перевода</th>
        </tr>
    </thead>
    <tbody>
    <tr v-for="sender in stoplist" >
    <td>@{{sender.fio}}</td>
    <td>@{{sender.data}}</td>
    </tr>
    </tbody>
</table>

      </div>




    </body>
    <script src="{{asset('js/uikit.min.js')}}"></script>
    <script src="{{asset('js/vue.min.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/tableToExcel.js')}}"></script>
    <script src="{{asset('js/stoplist.js')}}"></script>
</html>
