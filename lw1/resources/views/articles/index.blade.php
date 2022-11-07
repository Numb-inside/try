@extends('articles.layout')

@section('content')
<div class="container">
    <div class="main">
        <div class="main__row">
            <div class="main__title">Песни Валентина Стрыкало</div>
            <div class="main__btn">
                <a href="{{ route('articles.create') }}">Добавить новую песню</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="table">
            <div class="first__row">
                <div class="row__item">Название</div>
                <div class="row__item">Описание</div>
                <div class="row__item">Цена</div>
                <div class="row__item">Действие</div>
            </div>
            @foreach ($articles as $article)
            <div class="second__row">

                <div class="row__item">{{ $article->title }}</div>
                <div class="row__item">{{ $article->description }}</div>
                <div class="row__item">{{ $article->price }}</div>
                <div class="row__item">
                    <div class="item__show item">
                        <a href="{{ route('articles.show', $article->id) }}">Show</a>
                    </div>
                    <div class="item__edit item">
                        <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
                    </div>
                    <div class="item__form item">
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection