<div class="media">
	<a class="pull-left" href="{{ route('profile.index', ['username' => $user->username]) }}">
		<img class="media-object" alt="{{ $user->getName() }}" src="{{ $user->getAvatarURL() }}">
	</a>
	<div class="media-body">
		<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $user->username]) }}">{{ $user->getName() }}</a></h4>
		@if($user->location)
			<p>{{ $user->location }}</p>
		@endif
		@if($user->posts)
			<p>{{ $user->postCount() }}</p>
		@else
			<p>Posts: This user needs to try harder...</p>
		@endif
	</div>
</div>