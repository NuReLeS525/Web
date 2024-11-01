@extends('layouts.admin_layout')

@section('title', 'Все игры')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все игры</h1>
                </div>
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <h4> <i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">
                                id
                            </th>
                            <th style="width: 20%">
                                Название игры
                            </th>
                            <th>
                                <img src="">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @forEach ($games as $game)
                                <tr>
                                    <td>
                                        {{$game['id']}}
                                    </td>
                                    <td>
                                        <a>
                                            {{$game['name']}}
                                        </a>
                                    </td>
                                    <td>
                                        <img src="{{$game['img']}}" alt="">
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{route('game.edit', $game['id'])}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <form action="{{route('game.destroy', $game['id'])}}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
