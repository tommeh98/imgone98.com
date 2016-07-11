@extends('master')
@section('title', 'Archive')

@section('content')

	<div>
			<section>
            	<label>Search Options</label>
            	<input id="filter" type="hidden" value="{!!$filter!!}">
				<select id="filter-by" onchange="updateFilters();"></select>
			</section>
			<section id="orderSection">
				<label> Order By </label>
				<input id="order" type="hidden" value="{!!$order!!}">
				<select id="order-by" onchange="updateOrder();"></select>
			</section>

			<section id="search-bar">
                <input id="searchInput" onClick="this.setSelectionRange(0, this.value.length)" type="text" value="{!!$order!!}">
	            <button id="search" type="submit" onclick="updateOrder();">Search</button>
			</section>
	</div>

	<div>
		@if ($posts->isEmpty())
		    <p> There are no posts. </p>
		@else
			<table>
		     		<tr>
		     			<th>Title</th>
		     			<th>Date</th>
		     			<th>Tags</th>
		     			<th>Popularity</th>
		     		</tr>
				     @foreach($posts as $post)
				     	<tr>
				     		<td>{!!$post->title!!}</td>
				     		<td>{{ date('F d, Y    g:i:s a', strtotime($post->created_at)) }}</td>
				     		<td>{!!$post->tags!!}</td>
				     		<td>{!!$post->popularity!!}</td>
				     	</tr>
		     @endforeach
		    </table>
		@endif
     	
	</div>


	<script>
		var filter_hidden = document.getElementById("filter");
		var order_hidden = document.getElementById("order");
		var search = document.getElementById('searchInput');

		setupForm(filter_hidden.value, order_hidden.value);

		function updateFilters() {
			var filter_by = document.getElementById("filter-by");
			var order_by = document.getElementById("order-by");

			if(filter_by.value == "date") {

				window.location = "/archive/date/newest_oldest";
			} else if(filter_by.value == "tags" || filter_by.value == "title") {
				if(filter_by.value == "tags") {
					window.location = "/archive/tags/search" ;
				} else if(filter_by.value == "title") {
					window.location = "/archive/title/search";
				}
			} else if(filter_by.value == "popularity") {
				window.location = "/archive/popularity/most";
			}
		}

		function updateOrder() {
			var order_by = document.getElementById("order-by");
			var filter_by = document.getElementById("filter-by");
			if(order_by.value == "oldest_newest") {
				window.location = "/archive/date/oldest_newest";
			} else if(order_by.value == "newest_oldest") {
				window.location = "/archive/date/newest_oldest";
			}  else if(order_by.value == "most") {
				window.location = "/archive/popularity/most";
			} else if(order_by.value == "least") {
				window.location = "/archive/popularity/least";
			}
			var order = document.getElementById("order");
					
			if(filter.value == "title") {
				var search = document.getElementById('searchInput');
				window.location = "/archive/title/" + search.value;
			} else if(filter.value == "tags") {
				var search = document.getElementById('searchInput');
				window.location = "/archive/tags/" + search.value;
			}
		}

		function setupForm(filter, order, search) {
			var filter_by = document.getElementById("filter-by");
			var order_by = document.getElementById("order-by");

			while (filter_by.length != 0) {
			    filter_by.remove(0);
			} 

			while (order_by.length != 0) {
			    order_by.remove(0);
			} 

			var date = document.createElement("option");
				date.text = "date";
				date.value = "date";
				filter_by.add(date);
			var title = document.createElement("option");
				title.text = "title";
				title.value = "title";
				filter_by.add(title);
			var tags = document.createElement("option");
				tags.text = "tags";
				tags.value = "tags";
				filter_by.add(tags);
			var popularity = document.createElement("option");
				popularity.text = "popularity";
				popularity.value = "popularity";
				filter_by.add(popularity);

			filter_by.value = filter;
			if(filter == "date") {
				var oldest_newest = document.createElement("option");
				oldest_newest.text = "oldest->newest";
				oldest_newest.value = "oldest_newest";
				order_by.add(oldest_newest);

				var newest_oldest = document.createElement("option");
				newest_oldest.text = "newest->oldest";
				newest_oldest.value = "newest_oldest";
				order_by.add(newest_oldest);
			} else if(filter == "popularity") {
				var most = document.createElement("option");
				most.text = "most";
				most.value = "most";
				order_by.add(most);

				var least = document.createElement("option");
				least.text = "least";
				least.value = "least";
				order_by.add(least);
			}

			order_by.value = order;
			
			var orderSection = document.getElementById("orderSection");
			var filter_bar = document.getElementById("search-bar");
			if(order != "oldest_newest" && order != "newest_oldest" && order != "most" && order != "least") {
				filter_bar.style.display = "block";
				orderSection.style.display = "none";
			} else {
				orderSection.style.display = "block";
				filter_bar.style.display = "none";
			}
		}

		</script>
@endsection