@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Пользователь') }}</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <div class="mr-2">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                                    {{ __('Редактировать') }}
                                </a>
                            </div>

                            <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Удалить') }}
                                </button>
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>
                                            ID
                                        </td>
                                        <td>
                                            {{ $user->id }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{ __('Email') }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{ __('Имя') }}
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{ __('Фамилия') }}
                                        </td>
                                        <td>
                                            {{ $user->surname }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{ __('Отчество') }}
                                        </td>
                                        <td>
                                            {{ $user->patronymic }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{ __('Возраст') }}
                                        </td>
                                        <td>
                                            {{ $user->age }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{ __('Пол') }}
                                        </td>
                                        <td>
                                            {{ $user->genderTitle }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            {{ __('Адресс') }}
                                        </td>
                                        <td>
                                            {{ $user->address }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
