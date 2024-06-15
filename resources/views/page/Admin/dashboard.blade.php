<h1>{{ auth()->user()->role }}</h1>

<form action="{{ route('loginFeatures.Logout.post') }}" method="POST">
    @csrf
    <button type="submit" class="text-red">logout</button>
</form>
