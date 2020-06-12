@extends ('layout')

@section('bulma_form')
    <!-- Font awesome icons -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@endsection

@section ('content')
    <div class="bg_b">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                <span style="text-transform: capitalize;">{{$url_voie->type_voie}}</span>
                </div>
                

                <div class="links">
                    <a href="/">Accueil</a>
                    <a href="/voies/create">Ajouter une voie</a>
                    <a href="/falaises">Falaise</a>
                    <a href="/psicoblocs">Psicobloc</a>
                    <a href="/blocs">Bloc</a>
                    <a href="{{route('voies.edit', $url_voie->id)}}">Editer la voie</a>
                    
                </div>

              
                <br>
                <tr>    
                    <th><b>{{$url_voie->nom}}</b></th><br>
                    <th>{{$url_voie->difficulte}}</th>
                    <th>{{$url_voie->lieu}}</th><br>
                    <th>Réalisée : {{$url_voie->realisee}}</th><br>
                                     
                </tr>
                <?php if(!empty($url_voie->img_un) === true): ?>
                
                    <div class="container">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="{{$url_voie->img_un}}" alt="First slide" width="50%" style="margin:0 auto;max-height:400px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{$url_voie->img_deux}}" alt="First slide" width="50%" style="margin:0 auto;max-height:400px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{$url_voie->img_trois}}" alt="First slide" width="50%" style="margin:0 auto;max-height:400px;">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    </div>
                
                <?php endif ?>
                
                
                
            </div>
        </div>
    </div>
        
@endsection
