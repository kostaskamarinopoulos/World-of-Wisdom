<div id="container">
    <ul id="nav">
        <li><a href="{{ url('/') }}/#trips">Ταξίδια</a></li>
        <li><a href="{{ url('/') }}/#recipies">Συνταγές</a></li>
        <li><a href="{{ url('/') }}/#beauty">Ομορφιά</a></li>
        <li class="right-1"><a href="{{ url('/') }}/#sofia">Σοφία</a></li>
        <li class="right-2"><a href="{{ url('/') }}/#contact">Επικοινωνία</a></li>
        <li class="more"><a href="#">More<i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <ul>
            <li><a href="{{ url('/') }}/#sofia">Σοφία</a></li>
            <li><a href="{{ url('/') }}/#contact">Επικοινωνία</a></li>
          </ul>
        </li>
        @if (Auth::check())
        <li><a href="/cms">CMS</a></li>
        <li><a href="/logout">Logout</a></li>
        @endif
    </ul>
</div>