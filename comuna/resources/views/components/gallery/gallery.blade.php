

@section('content')
<div class="container">
    <h1>Nossa Galeria</h1>
    
    <div class="gallery-grid">
        <!-- Exemplo com imagens estáticas -->
        @foreach([1,2,3,4,5,6] as $image)
            <div class="gallery-item">
                <img src="/comuna/public/img/imgs/{{ $image }}.jpg" alt="Imagem {{ $image }}">
            </div>
        @endforeach
        
        <!-- Ou com imagens do banco de dados -->
        {{-- @foreach($images as $image)
            <div class="gallery-item">
                <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->title }}">
            </div>
        @endforeach --}}
    </div>
</div>
@endsection