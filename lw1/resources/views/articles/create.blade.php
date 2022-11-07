@extends('articles.layout')

@section('content')
<div class="container">
	<div class="main">
		<div class="main__row">
			<div class="main__title">Добавить новую песню</div>
			<div class="main__btn">
				<a href="{{ route('articles.index') }}">Назад</a>
			</div>
		</div>
	</div>
	@if ($errors->any())
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif
	<form action="{{ route('articles.store') }}" method="POST">
		<div class="table">
			@csrf
			<div class="first__row">
				<div class="row__item">Название</div>
				<div class="row__item">Описание</div>
				<div class="row__item">Цена</div>
				<div class="row__item">Добавить</div>
			</div>
			<div class="second__row">
				<div class="row__item">
					<input type="text" name="title" placeholder="введите название">
				</div>

				<div class="row__item">
					<input type="text" name="description" placeholder="введите описание">
				</div>

				<div class="row__item">
					<input type="text" name="price" placeholder="введите цену">
				</div>

				<div class="row__item">
					<button type="submit" style="background: none">Submit</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection