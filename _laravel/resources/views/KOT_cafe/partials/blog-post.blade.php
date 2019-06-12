<div class="col-md-4 col-sm-12">
    <div class="card mb-4 box-shadow">
    <img class="card-img-top" src="{{ $postItem->img_url}}" data-holder-rendered="true">
      <div class="card-body">
        <p class="card-text"> {{ $postItem->excerpt }} </p>
        <div class="d-flex justify-content-between align-items-center">

        <a class="card-footer-link" href="/blog/{{ $postItem->id }}">Read</a>

          <small class="text-muted"> {{ date_format($postItem->created_at, 'd/m/y') }} </small>
        </div>
      </div>
    </div>
  </div>