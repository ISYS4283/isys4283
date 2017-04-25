<ul id="list-teams">
@foreach ( App\Team::with('users')->get() as $team )
    <li>
        <div class="panel panel-default">
            <div class="panel-heading">
                Team {{ $team->id }}
            </div>
            <div class="panel-body">
                <ul>
                    @foreach ( $team->users as $user )
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </li>
@endforeach
</ul>
