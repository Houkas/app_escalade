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
                    Ajouter une voie
                    <i class="fas fa-plus-circle"></i>
                </div>
                



                <div class="links">
                    <a href="/">Accueil</a><br>
                </div>

                
                <div id="wrapper">
                    <div id="page" class="container">
                        
                        <form method="POST" action="/voies">
                            @csrf
                            <div class="field">
                                <label class="label" for="nom">Nom</label>
                                <div class="control">
                                    <input type="text" class="
                                    input 
                                    @error('nom') is-danger @enderror"
                                    name="nom"
                                    id="nom"
                                    value="{{ old('nom') }}">
                                    @error('nom') 
                                        <p class="help is-danger">{{ $errors->first('nom') }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="type de voie">Type de voie</label>
                                <div class="control">
                                    <input type="text" class="
                                    input 
                                    @error('type_voie') is-danger @enderror"
                                    name="type_voie"
                                    id="type_voie"
                                    value="{{ old('type_voie') }}">
                                    @error('type_voie') 
                                        <p class="help is-danger">{{ $errors->first('type_voie') }}</p>
                                    @enderror 
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="difficulte">Cotation</label>
                                <div class="control">
                                    <input type="text" class="
                                    input 
                                    @error('difficulte') is-danger @enderror" 
                                    name="difficulte"
                                    id="difficulte"
                                    value="{{ old('difficulte') }}">
                                    @error('difficulte') 
                                        <p class="help is-danger">{{ $errors->first('difficulte') }}</p>
                                    @enderror  
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="lieu">Lieu</label>
                                <div class="control">
                                    <input type="text" class="
                                    input @error('lieu') 
                                    is-danger @enderror"
                                    name="lieu"
                                    id="lieu"
                                    value="{{ old('lieu') }}">
                                    @error('lieu') 
                                        <p class="help is-danger">{{ $errors->first('lieu') }}</p>
                                    @enderror  
                                </div>
                            </div>
                            <!--<div class="field">
                                <label class="label" for="img_un">Première image</label>
                                <div class="control">
                                    <input type="text" class="
                                    input @error('img_un') 
                                    is-danger @enderror"
                                    name="img_un"
                                    id="img_un"
                                    value="{{ old('img_un') }}"> 
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="img_deux">Deuxième image</label>
                                <div class="control">
                                    <input type="text" class="
                                    input @error('img_deux') 
                                    is-danger @enderror"
                                    name="img_deux"
                                    id="img_deux"
                                    value="{{ old('img_deux') }}">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="img_trois">Troisième image</label>
                                <div class="control">
                                    <input type="text" class="
                                    input @error('img_un') 
                                    is-danger @enderror"
                                    name="img_trois"
                                    id="img_trois"
                                    value="{{ old('img_trois') }}">
                                </div>
                            </div>-->
                            <div class="field">
                                <label class="label" for="lieu">Réalisée ?</label>
                                <div class="control">
                                    <input type="checkbox" name="realisee" value="1">Oui
                                    <input type="checkbox" name="realisee" value="0">Non
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
                    </div>
                </div>

                
            </div>
           
        </div>
    </div>
        
@endsection
