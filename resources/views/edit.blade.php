@extends ('layout')

@section('bulma_form')
    <!-- Font awesome icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
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
                    Modifier une voie
                    <i class="fas fa-edit"></i>
                </div>
                



                <div class="links"> 
                    <a href="/">Accueil</a> 
                    
                </div>

                
                <div id="wrapper">
                    <div id="page" class="container">
                        
                        <form method="POST" action="/voies/{{ $voie->id }}">
                            @csrf
                            @method('PUT')
                            <div class="field">
                                <label class="label" for="nom">Nom</label>
                                <div class="control">
                                    <input type="text" class="input" name="nom"id="nom" value="{{ $voie->nom }}"> 
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="type de voie">Type de voie</label>
                                <div class="control">
                                    <input type="text" class="input" name="type_voie"id="type_voie" value="{{ $voie->type_voie }}"> 
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="difficulte">Cotation</label>
                                <div class="control">
                                    <input type="text" class="input" name="difficulte"id="difficulte" value="{{ $voie->difficulte }}"> 
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="lieu">Lieu</label>
                                <div class="control">
                                    <input type="text" class="input" name="lieu"id="lieu" value="{{ $voie->lieu }}"> 
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="img_un">Première image</label>
                                <div class="control">
                                    <input type="text" class="input" name="img_un"id="img_un" value="{{ $voie->img_un }}"> 
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="img_deux">Deuxième image</label>
                                <div class="control">
                                    <input type="text" class="input" name="img_deux"id="img_deux" value="{{ $voie->img_deux }}"> 
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="img_trois">Troisième image</label>
                                <div class="control">
                                    <input type="text" class="input" name="img_trois"id="img_trois" value="{{ $voie->img_trois }}"> 
                                </div>
                            </div>

                            <!-- PROBLEME AVEC LES CHECKBOXS QUI NE RETOURNENT PAS DE COCHE OU NON COCHE -->
                            <div class="field">
                                <label class="label" for="lieu">Réalisée ?</label>
                                <div class="control">
                                    <input type="checkbox" name="realisee">Oui
                                    <input type="checkbox" name="realisee">Non
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link" type="submit">
                                        Envoyer
                                    </button>
                                </div>                          
                            </div>
                            
                        </form>

                        <!-- Fin du form edit -->

                        <!-- form delete -->
                        <form action="/voies/{{ $voie->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </div>
                </div>

                
            </div>
           
        </div>
    </div>
        

@endsection