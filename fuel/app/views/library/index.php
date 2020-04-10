<div class="row">
	<div class="col-md-3 col-sm-4 col-xs-6" ng-repeat="book in $ctrl.booklist.books"> 
		<div class="card" style="width: 18rem;">
			<a href="{{book.url}}" >
				<img class="card-img-top img-responsive" ng-src="{{book.image}}" alt="Card image cap">
				</a>
			<div class="card-body">
			<h5 class="card-title">{{book.title}}</h5>
			<p class="card-text  img-responsive">{{book.subtitle.substring(0,400)}}</p>
			
			</div>
			<div class="card-footer">
			<a href="{{book.url}}" class="btn btn-primary">read more</a>
			</div>
		</div>
	</div>
</div>
