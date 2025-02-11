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
                <strong class="card-title">Edit education details</strong>
                </div>
                <div class="card-body">
                <form class="needs-validation" method="post" action="{{ route('education.update', Auth::user()->id) }}" novalidate>
                    @csrf
                    @method('PUT')

                    {{-- User id input --}}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">University/School/Institute</label>
                        <input type="text" name="eduName" id="address-wpalaceholder" class="form-control"
                            value="{{ $educations->eduName }}">
                    </div>

                    <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="exampleInputEmail2">Start Date</label>
                        <input value="{{ $educations->startDate }}" name="startDate" type="text" class="form-control drgpicker" id="date-input1" aria-describedby="button-addon2">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="custom-phone">End date</label>
                        <input value="{{ $educations->endDate }}" name="endDate" type="text" class="form-control drgpicker" id="date-input1" aria-describedby="button-addon2">

                    </div>
                    </div> <!-- /.form-row -->

                    <div class="form-group mb-3">
                        <label for="example-select">Educaion</label>
                        <select name="level" class="form-control" id="example-select">

                            <option @selected($educations->level == 'Education') value="Education">Education</option>
                            <option @selected($educations->level == 'Award') value="Award">Award</option>
                            <option @selected($educations->level == 'Certificate') value="Certificate">Certificate</option>
                            <option @selected($educations->level == 'Work experience') value="Work experience">Work experience</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="example-textarea">Describe what you have got</label>
                        <textarea name="description" class="form-control" id="example-textarea" rows="4">{{ $educations->description }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="address-wpalaceholder">Field/Position</label>
                        <input type="text" name="field" id="address-wpalaceholder" class="form-control"
                        value="{{ $educations->field }}">
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
