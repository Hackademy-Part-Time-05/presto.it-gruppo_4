<x-main>
    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Ecco i nostri annunci</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($announcements as $announcement)
                        <div class="col-12 col-md-4 my-4">
                            <div class="card shadow" style="width: 18rem">
                                <img src="https://picsum.photos/200" alt="" class="card-img-top p-3 rounded">
                                <div class="card-body">
                                    <h5 class="card-title">{{$announcement->title}}</h5>
                                    <p class="card-text">{{$announcement->body}}</p>
                                    <p class="card-text">{{$announcement->price}}</p>
                                    <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-primary shadow">Visualizza</a>
                                    <a href="{{route('categoryShow',['category' => $announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria {{$announcement->category->name}}</a>
                                    <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore {{$announcement->user->name}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{$announcements->links()}}
                </div>
            </div>
        </div>
    </div>
</x-main>