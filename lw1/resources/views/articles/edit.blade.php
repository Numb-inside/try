@extends('articles.layout')

@section('content')
<div class="container">
	<div class="main">
		<div class="main__row">
			<div class="main__title">Редактировать</div>
			<div class="main__btn">
				<a href="{{ route('articles.index') }}">Назад</a>
			</div>
		</div>
		@if ($errors->any())
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
		@endif
		<form action="{{ route('articles.update', $article->id) }}" method="POST">
			@method('PUT')
			@csrf
			<div class="table">
				<div class="first__row">
					<div class="row__item">Название</div>
					<div class="row__item">Описание</div>
					<div class="row__item">Цена</div>
					<div class="row__item">Действие</div>
				</div>
				<div class="second__row">
					<div class="row__item">
						<input type="text" name="title" value="{{ $article->title }}">
					</div>

					<div class="row__item">
						<input type="text" name="description" value="{{ $article->description }}">
					</div>

					<div class="row__item">
						<input type="text" name="price" value="{{ $article->price }}">
					</div>

					<div class="row__item">
						<button type="submit" style="background: none">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection