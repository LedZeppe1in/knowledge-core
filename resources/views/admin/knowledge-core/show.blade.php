@extends('admin.layouts.main')

@section('content')
    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Ядро знаний: {{ $knowledgeCore->id }}</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Ядро знаний
                            </li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">

                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-inline-flex gap-1">
                                <a class="btn btn-primary" href="{{ route('admin.knowledge-core.index') }}" role="button">
                                    Назад
                                </a>
                                <a class="btn btn-success" href="{{ route('admin.knowledge-core.edit', $knowledgeCore->id) }}" role="button">
                                    Редактировать
                                </a>
                                <form action="{{ route('admin.knowledge-core.destroy', $knowledgeCore->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Удалить" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $knowledgeCore->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>description</td>
                                        <td>{{ $knowledgeCore->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>phone</td>
                                        <td>{{ $knowledgeCore->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>email</td>
                                        <td>{{ $knowledgeCore->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>address</td>
                                        <td>{{ $knowledgeCore->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>references</td>
                                        <td>{{ $knowledgeCore->references }}</td>
                                    </tr>
                                    <tr>
                                        <td>lab_link</td>
                                        <td>{{ $knowledgeCore->lab_link }}</td>
                                    </tr>
                                    <tr>
                                        <td>github_link</td>
                                        <td>{{ $knowledgeCore->github_link }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                    </div>

                </div>
                <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection
