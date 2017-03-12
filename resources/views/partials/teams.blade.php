<style>
#list-teams>li { border-style: solid; }
</style>
<ol id="list-teams">
@foreach ( App\Team::with('users')->get() as $team )
    <li>
        <ul>
            @foreach ( $team->users as $user )
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    </li>
@endforeach
</ol>
