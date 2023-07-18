<!-- <div class="card border-0 shadow">
        <div class="cardPhoto" style="background-image: url('{{ $photo }}');">
            <img src="{{ $photo }}" class="card-img-top d-none" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title text-truncate">{{ $name }}</h5>
          <p class="card-text">{{ $price }}€</p>
          <a href="{{ route('dettaglio', ['id' => $id]) }}" class="btn btn-primary">Dettaglio prodotto</a>
        </div>
</div> -->

<div class="col-md-6 cardPhotoDetails" style="background-image: url('{{ $photo }}');">
    <img src="{{ $photo }}" alt="" class="img-fluid d-none">
</div>

<div class="col-md-6 d-flex flex-column justify-content-around align-items-start">
    <a href="/" class="btn btn-danger align-self-end"><i class="fa-solid fa-hand-point-left me-2"></i>Indietro</a>
    <h2>{{ $name }}</h2>
    <p>{{ $description }}</p>
    <p class="badge bg-success fs-4">{{ $price }}€</p>
</div>