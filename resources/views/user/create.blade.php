@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Добавить пользователя') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="required mb-0" for="email">
                            {{ __('Email') }}
                        </label>
                        <input type="text" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="example@gmail.com">
                    </div>

                    <div class="form-group">
                        <label class="required mb-0" for="password">
                            {{ __('Пароль') }}
                        </label>
                        <input type="password" name="password" value="{{ old('password') }}" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="required mb-0" for="password_confirmation">{{ __('Повторите пароль') }}
                        </label>
                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="required mb-0" for="name">
                            {{ __('Имя') }}
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Адам">
                    </div>

                    <div class="form-group">
                        <label class="mb-0" for="surname">
                            {{ __('Фамилия') }}
                        </label>
                        <input type="text" name="surname" value="{{ old('surname') }}" id="surname" class="form-control" placeholder="Абубакаров">
                    </div>

                    <div class="form-group">
                        <label class="mb-0" for="patronymic">
                            {{ __('Отчество') }}
                        </label>
                        <input type="text" name="patronymic" value="{{ old('patronymic') }}" id="patronymic" class="form-control" placeholder="Вахаевич">
                    </div>

                    <div class="form-group">
                        <label class="mb-0" for="age">
                            {{ __('Возраст') }}
                        </label>
                        <input type="text" name="age" value="{{ old('age') }}" id="age" class="form-control" placeholder="24">
                    </div>

                    <div class="form-group">
                        <label for="gender">
                            {{ __('Пол') }}
                        </label>
                        <select name="gender" class="form-control" id="gender">
                            <option value="1" {{ old('gender') == 1 ? ' selected' : '' }}>
                                {{ __('Мужской') }}
                            </option>
                            <option value="2" {{ old('gender') == 2 ? ' selected' : '' }}>
                                {{ __('Женский') }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="mb-0" for="address">
                            {{ __('Адрес') }}
                        </label>
                        <input type="text" name="address" value="{{ old('address') }}" id="address" class="form-control" placeholder="Кухаренко 16">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Добавить') }}
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
