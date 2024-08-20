@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Riguardo me {{ $name }}
                    {{ isset($partner) ? 'ed il mio partner ' . $partner : '' }}</h1>
                @if (count($videogames) > 0)
                    <ul>
                        @foreach ($videogames as $videogame)
                            @if ($loop->first)
                                <li class="text-success">{{ $videogame }}</li>
                            @elseif($loop->last)
                                <li class="text-danger">{{ $videogame }}</li>
                            @else
                                <li>{{ $videogame }}</li>
                            @endif
                        @endforeach
                    </ul>
                @else
                    <h3>Non ci sono videogames</h3>
                @endif
            </div>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, tempora, consequatur repudiandae
                delectus odio voluptates cumque consectetur ea illo inventore asperiores doloribus voluptatem quae,
                porro fugit omnis vitae quam eveniet. Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>

                Doloremque, dolor consequatur ratione quas, modi officiis quam itaque voluptas nobis aperiam eum
                dolorum? Eaque veniam dignissimos incidunt vitae voluptate reiciendis unde? Lorem ipsum, dolor sit amet
                consectetur adipisicing elit. Illo fugit, error quos necessitatibus vel consequatur explicabo! Minima
                aliquam, deleniti dolor temporibus fugiat obcaecati ipsa? Id aliquam sequi quo! Consequatur, tenetur!

                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum illo quibusdam aliquid veniam nisi
                architecto vitae nostrum! Rem sunt dicta iure. Distinctio cum, necessitatibus numquam voluptas nemo a
                praesentium commodi?</p>
        </div>
    </div>
@endsection
