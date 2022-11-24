@extends( "layouts.master" )

@section ( "h1" )
    <h1>Szerkesztés</h1>
@endsection

@section( "content" )

@if( $errors->any() )
    <ul>
        @foreach( $errors->all() as $error )
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif

<form action="/update-perfume" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $perfume->id }}">
    <p>
        <label for="">Név</label>
        <input type="text" name="name" value="{{ $perfume->name }}">
    </p>
    <p>
        <label for="">Típus</label>
        <input type="text" name="type" value="{{ $perfume->type }}">
    </p>
    <p>
        <label for="">Ár</label>
        <input type="text" name="price" value="{{ $perfume->price }}">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>
@endsection