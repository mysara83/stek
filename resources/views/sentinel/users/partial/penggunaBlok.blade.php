<div class="media">
	<div class="media-left">
		<a href="#">
			<img class="media-object" src="{{ $penggunas->getAvatarUrl() }}" alt="{{ $penggunas->first_name }}">
		</a>
	</div>
	<div class="media-body">
		<h4 class="media-heading"><a href="">{{ $penggunas->getNameOrUsername() }}</a></h4>
		<p>{{ $penggunas->username }}</p>
	</div>
</div>