<div class="col-md-4">
    <div class="card mb-4 box-shadow">
    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{ $postItem->img_url}}" data-holder-rendered="true">
      <div class="card-body">
        <p class="card-text"> {{ $postItem->excerpt }} </p>
        <div class="d-flex justify-content-between align-items-center">

        <a class="btn" href="/blog/{{ $postItem->id }}">Read</a>

          <small class="text-muted">9 mins</small>
        </div>
      </div>
    </div>
  </div>