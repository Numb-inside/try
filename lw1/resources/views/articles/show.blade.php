@extends('articles.layout')

@section('content')
<div class="container">
	<div class="main">
		<div class="main__row">
			<div class="main__title">Просмотр</div>
			<div class="main__btn">
				<a href="{{ route('articles.index') }}">Назад</a>
			</div>
		</div>
		<div class="table">
			<div class="first__row">
				<div class="row__item">Название</div>
				<div class="row__item">Описание</div>
				<div class="row__item">Цена</div>
				<div class="row__item">Создано</div>
				<div class="row__item">Обновлено</div>
			</div>
			<div class="second__row">
				<div class="row__item">{{ $article->title }}</div>
				<div class="row__item">{{ $article->description }}</div>
				<div class="row__item">{{ $article->price }}</div>
				<div class="row__item">{{ $article->created_at }}</div>
				<div class="row__item">{{ $article->updated_at }}</div>
			</div>
		</div>
	</div>
</div>
@endsection