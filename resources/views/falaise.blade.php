@extends ('layout')

@section ('content')
    <div class="bg_f">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Falaise
                </div>
                

                <div class="links">
                    <a href="/">Accueil</a>
                    <a href="/voies/create">Ajouter une voie</a>
                    <a href="/psicoblocs">Psicobloc</a>
                    <a href="/blocs">Bloc</a>
                    
                </div>

                @foreach($liste_falaises as $key => $data)
                <br>
                    <tr>    
                        <th><a href="/falaises/{{$data->id}}" style="text-decoration:none;color:#636b6f;font-weight:600;">{{$data->nom}}</a></th><br> 
                                     
                    </tr>
                @endforeach

                
            </div>
        </div>
    </div>
        
@endsection
