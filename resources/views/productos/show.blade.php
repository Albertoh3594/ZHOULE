@extends('layouts.layout')

@section('titulo', 'ZHOULE')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/product.js')}}"></script>
    <script src="{{asset('js/NavDrop.js')}}" defer></script>

@endsection

@section('contenido')

<!-- Boton hacia arriba -->
<a href="#" class="ir-arriba"title="Volver arriba">
    <span class="fa-stack">
        <span class="fa fa-circle fa-stack-2x"></span>
        <span class="fa fa-arrow-up fa-stack-1x fa-inverse"></span>
    </span>
</a>

<div class="container-product">

    <div class="images-container">
        <div class="images-content">
			<img id=principal src="{{ asset($product->images[0]->route) }}" alt="principal_{{$product->name}}">

			<div id="slide-wrapper" >
                <img id="slideLeft" class="arrow" src="{{asset('images/products/arrow-left.webp')}}" alt="flecha_slider_izquierda">
				<div id="slider">
					<img class="image active" src="{{ asset($product->images[0]->route) }}" alt="image_slider_{{$product->name}}_1" >
					<img class="image" src="{{ asset($product->images[1]->route) }}" alt="image_slider_{{$product->name}}_2">
					<img class="image" src="{{ asset($product->images[2]->route) }}" alt="image_slider_{{$product->name}}_3">
                    <img class="image" src="{{ asset($product->images[3]->route) }}" alt="image_slider_{{$product->name}}_4">
				</div>
                <img id="slideRight" class="arrow" src="{{asset('images/products/arrow-right.webp')}}" alt="flecha_slider_derecha">
			</div>
		</div>
    </div>

    <div class="info-container">

      <div class="product-description">
        <span> {{ $product->category }}</span>
        <h1>{{ $product->name }}</h1>
        <p> {{ $product->description }}</p>
      </div>



       <div class="product-configuration">

            <div class="product-color">
                @if (count($uniqueColors) == 1 && $uniqueColors[0]['name'] == 'Unico')
                    <span>Color: {{$uniqueColors[0]['name']}}</span>
                @else
                    <p>Color:</p>
                    @foreach ($uniqueColors as $key => $color)
                        <div class="color-choose">
                            <div>
                                <input data-image="{{$color['name']}}" type="radio" id="color_{{$color['id']}}" name="color_id" value="{{$color['id']}}" {{($color['selected'] || $key === 0) ? 'checked' : ''}}>
                                <label for="color_{{$color['id']}}" class="color-label color-label-{{$color['id']}}"><span></span></label>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

            <div class="product-size">
                @if (count($uniqueSizes) == 1 && $uniqueSizes[0]['name'] == 'Unica')
                    <span>Talla: {{$uniqueSizes[0]['name']}}</span>
                @else
                    <p>Talla:</p>
                    @foreach ($uniqueSizes as $key => $size)
                        <div class="size-choose">
                            <div>
                                <input data-image="{{$size['name']}}" type="radio" id="size_{{$size['id']}}" name="size_id" value="{{$size['id']}}" {{($size['selected'] || $key === 0) ? 'checked' : ''}}>
                                <label for="size_{{$size['id']}}" class="size-label size-label-{{$size['id']}}"><span>{{$size['name']}}</span></label>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
      </div>

      <div class="product-price">
        <span> {{$product->price}} €</span>
        <a href="#" class="cart-btn">Añadir al carrito</a>
      </div>
    </div>
</div>


</section>
