@extends('layouts.app')

@section('title', 'Admin Index')

@section('custom-stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="m-3">
                    Admin Comics Indexed View
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comicList as $comic)
                            <tr>
                                <th scope="row">
                                    {{ $comic->id }}
                                </th>
                                <td>
                                    {{ $comic->title }}
                                </td>
                                <td>
                                    {{ $comic->series }}
                                </td>
                                <td>
                                    {{ $comic->sale_date }}
                                </td>
                                <td class="text-center">
                                    <form action="{{route('admin.comics.restore', $comic->id)}}" class="d-inline form-terminator" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-warning btn-sm">
                                            <i class="fa-solid fa-trash-arrow-up"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-block">
            {!! $comicList->links() !!}
        </div>
    </div>
@endsection

@section('custom-scripts-tail')
    <script>
        // intercettare un evento
        // individuare l'elemento che faccia triggerare il nostro evento
        // bloccare il comportamento naturale del nostro bottone/form
        // chiedere all'utente cosa vuole fare
        // se l'utente conferma allora cancellare, altrimenti non fare nulla
        const deleteFormElements = document.querySelectorAll('form.form-terminator');
        deleteFormElements.forEach(formElement => {
            formElement.addEventListener('submit', function(event) {
                event.preventDefault();
                const userConfirm = window.confirm('Are you sure you want to restore this Comic?');
                if (userConfirm){
                    this.submit();
                }
            });
        });
    </script>
@endsection