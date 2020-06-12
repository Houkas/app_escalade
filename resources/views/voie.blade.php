@extends ('layout')

@section('bulma_form')
    <!-- Font awesome icons -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@endsection

@section ('content')
    <div class="bg_v">
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
                    My climbing app
                </div>
                

                <div class="links">
                    <a href="/">Accueil</a>
                    <a href="/voies/create">Ajouter une voie</a>
                    <a href="/falaises">Falaise</a>
                    <a href="/psicoblocs">Psicobloc</a>
                    <a href="/blocs">Bloc</a>
                    
                </div>

                @if(session()->get('success'))
                    <div class="alert alert-success" style="margin-top:25px;">
                        {{ session()->get('success') }}  
                    </div>
                @endif

                
                @foreach($liste_voies as $key => $data)
                <br>
                    <tr>    
                        <th><a href="/voies/{{$data->id}}" style="text-decoration:none;color:#636b6f;font-weight:600;">{{$data->nom}}</a></th><br> 
                                     
                    </tr>
                @endforeach

                
            </div>
           
        </div>
    </div>
        
@endsection
