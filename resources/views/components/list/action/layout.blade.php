<form action={{$routeToDelete}} method="POST">
    @csrf
    @method('DELETE')
    <div class="flex flex-col space-y-1">
        {{$slot}}
    </div>
</form>