@extends('backend.dashboard')

@section('main')

<main role="main" class="main-content">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">

        <div class="row">

            <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">
                <strong class="card-title">Edit Languages</strong>
                </div>
                <div class="card-body">
                <form class="needs-validation" method="post" action="{{ route('languages.update', Auth::user()->id) }}" novalidate>
                    @csrf
                    @method('put')
                    {{-- User id input --}}
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">Edit your Languages</label>
                        <input type="text" name="name" id="address-wpalaceholder" class="form-control"
                            value="{{ $language->name }}" data-role="tagsinput" placeholder="Enter your Skills">
                    </div>

                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
                </div> <!-- /.card-body -->
            </div> <!-- /.card -->
            </div> <!-- /.col -->
        </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
    </div> <!-- .row -->
    </div> <!-- .container-fluid -->

</main> <!-- main -->
@endsection
