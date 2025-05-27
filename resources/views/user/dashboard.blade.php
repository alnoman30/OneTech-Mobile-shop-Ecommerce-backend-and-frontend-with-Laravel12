<h1>user dash</h1>
<form action="{{ route('logout')}}" method="POST">
    @csrf
    <button type="submit"> logout</button>
</form>