<row ng-controller="FilmController">
  <div class="row">
    <div class = "col-md-8">
      <form class="form-horizontal" role="form">
          <div class="col-md-10"><input type="url" class="form-control input-lg" style="margin:15px 0;" ng-model="tag"/></div>
          <div class="col-md-2"><button type="submit" class = "btn btn-lg btn-primary pull-right" style=" margin: 15px 0;" ng-click="loadAd()">Load Ad</button></div>
      </form>

      <div class="container-fluid">
        <div id="film-player"></div>
        <div id="companion-ad"></div>
      </div>

    </div>
    <div class = "col-md-4" style="margin:10px 0">
      <div>
        <pre><% adStatus %></pre>
      </div>
    </div>
  </div>
</row>