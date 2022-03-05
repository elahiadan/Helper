@extends('master')

@section('content')
<div>
<div class="container">
        <div class="row">
            <h1>Modal</h1>
            @include('includes.contact-form')
        </div>
        <div>
            <!-- Receiving the hello function that is -->
            <!-- comming from helper file see helper file-->
            {{hello()}}
            <p><b>{{hello()->name}} -- {{hello()->email}}</b></p>
            <!-- we can use hello function as a variable -->
        </div>
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($data as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <th><button class="btn btn-dark delete" data="{{$item->id}}">Delete</button></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('js')

@include('modals/modal-include')

@endpush