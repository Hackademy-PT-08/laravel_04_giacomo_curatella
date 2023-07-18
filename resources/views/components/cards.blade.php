<div class="col-4 mb-5">
    <div class="card border-0 shadow rounded-4">
        <div class="cardPhoto rounded-4" style="background-image: url('{{ $photo }}');">
            <img src="{{ $photo }}" class="card-img-top d-none" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title text-truncate">{{ $name }}</h5>
          <p class="card-text py-3">{{ $price }}€</p>
          <a href="{{ route('dettaglio', ['id' => $id]) }}" class="btn btn-primary">Dettaglio prodotto</a>
        </div>
    </div>
</div>