@extends('backend.dashboard')

@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
        <h2 class="mb-2 page-title">Education Details</h2>
        <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name Of University/school/institute </th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Education</th>
                        <th>Field/positon</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($educations as $education)
                        <tr>
                            <td>{{ $education->id }}</td>
                            <td>{{ $education->eduName }}</td>
                            <td>{{ $education->startDate }}</td>
                            <td>{{ $education->endDate }}</td>
                            <td>{{ $education->level }}</td>
                            <td>{{ $education->field }}</td>
                            <td>{{ $education->description }}</td>
                            <td>
                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('education.edit', $education->id) }}">Edit</a>
                                    <form action="{{ route('education.destroy', $education->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" id="delete" type="submit">Remove</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('education.create', Auth::user()->id) }}"><button type="button" class="btn mb-2 btn-primary">ِAdd Education</button></a>
                </div>
            </div>
            </div> <!-- simple table -->
        </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="list-group list-group-flush my-n3">
            <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                <div class="col-auto">
                    <span class="fe fe-box fe-24"></span>
                </div>
                <div class="col">
                    <small><strong>Package has uploaded successfull</strong></small>
                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                </div>
                </div>
            </div>
            <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                <div class="col-auto">
                    <span class="fe fe-download fe-24"></span>
                </div>
                <div class="col">
                    <small><strong>Widgets are updated successfull</strong></small>
                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                </div>
                </div>
            </div>
            <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                <div class="col-auto">
                    <span class="fe fe-inbox fe-24"></span>
                </div>
                <div class="col">
                    <small><strong>Notifications have been sent</strong></small>
                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                </div>
                </div> <!-- / .row -->
            </div>
            <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                <div class="col-auto">
                    <span class="fe fe-link fe-24"></span>
                </div>
                <div class="col">
                    <small><strong>Link was attached to menu</strong></small>
                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                </div>
                </div>
            </div> <!-- / .row -->
            </div> <!-- / .list-group -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
        </div>
        </div>
    </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body px-5">
            <div class="row align-items-center">
            <div class="col-6 text-center">
                <div class="squircle bg-success justify-content-center">
                <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                </div>
                <p>Control area</p>
            </div>
            <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                </div>
                <p>Activity</p>
            </div>
            </div>
            <div class="row align-items-center">
            <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                </div>
                <p>Droplet</p>
            </div>
            <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                </div>
                <p>Upload</p>
            </div>
            </div>
            <div class="row align-items-center">
            <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                <i class="fe fe-users fe-32 align-self-center text-white"></i>
                </div>
                <p>Users</p>
            </div>
            <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                </div>
                <p>Settings</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</main> <!-- main -->
@endsection


@push('css')
<link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap4.css') }}">
@endpush

@push('js')
<script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>
@endpush
