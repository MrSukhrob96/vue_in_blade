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
          <li class="uk-active"><a href="#">Таблица отправителей</a></li>
          <li><a href="{{url('/stoplist')}}">Стоплист</a></li>
      </ul>
      </div>
      </nav>

      <div class="uk-container uk-container-expand uk-margin-medium-top" id="senders">


             <div class="uk-grid-small" uk-grid>
             <div>
             <input class="uk-input uk-border-rounded" id="form-stacked-text" type="date" ref="from">
             </div>
             <div>
             <input class="uk-input uk-border-rounded" id="form-stacked-text" type="date" ref="to">
             </div>
             <div>
             <input class="uk-input uk-border-rounded" id="form-stacked-text" type="text" v-model="amt" v-on:change="filter()">
             </div>
             <div>
             <button class="uk-button uk-button-primary uk-border-rounded" v-on:click="filtersenders()">ОК</button>
             <button class="uk-button uk-button-primary uk-border-rounded" v-on:click="loadsenders()">Сбросить</button>
             <button class="uk-button uk-button-primary uk-border-rounded" v-on:click="toexcel()">Сохранить в EXCEL</button>
            </div>

          </div>




          <table class="uk-table uk-table-divider " ref="table">
    <thead>
        <tr>
            <th>Ф.И.О</th>
            <th>Серия паспорта</th>
            <th>Дата рождения</th>
            <th>Получатель</th>
            <th><a v-on:click="sort()">Сумма(RUB)</a></th>
            <th>Дата перевода</th>
        </tr>
    </thead>
    <tbody>
    <tr v-for="sender in senders">
    <td>@{{sender.fio}}</td>
    <td>@{{sender.pass}}</td>
    <td>@{{sender.birthday}}</td>
    <td>@{{sender.account}}</td>
    <td>@{{sender.amt}}</td>
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
    <script src="{{asset('js/senders.js')}}"></script>
</html>
