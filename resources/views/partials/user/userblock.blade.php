<div class="media">
	<a class="pull-left" href="{{ route('profile.index', ['username' => $user->username]) }}">
		<img class="media-object" alt="{{ $user->getName() }}" src="{{ $user->getAvatarURL() }}">
	</a>
	<div class="media-body">
		<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $user->username]) }}">{{ $user->getName() }}</a></h4>
		<p>{{ $user->getTitle() }}</p>
		<p>Posts: {{ $user->getPostCount() }}</p>
	</div>
</div>
<br />