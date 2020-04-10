<div class="row" ng-controller="NewsListController as newsCtrl">
<h1 class="title hero">>>> News <<<</h1>

	<div class="col-md-3 col-sm-4 col-xs-6" ng-repeat="article in newslist.articles"> 
    <div class="card" style="width: 18rem;">
        <a href="{{article.url}}" >
            <img class="card-img-top img-responsive" ng-src="{{article.urlToImage}}" alt="Card image cap">
            </a>
        <div class="card-body">
        <h5 class="card-title">{{article.title}}</h5>
        <p class="card-text  img-responsive">{{article.description.substring(0,400)}}</p>
        
        </div>
        <div class="card-footer">
        <a href="{{article.url}}" class="btn btn-primary">read more</a>
        </div>
    </div>
    </div>
</div>
