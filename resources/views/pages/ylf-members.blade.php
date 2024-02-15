@extends('binshopsblog_admin::layouts.admin_layout')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

@section('content')
    <div>
        <h2>List of YLF Members</h2>
        <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Other Name</th>
                        <th scope="col">Email</th>
                        <th style="text-align: end" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($users as $key=>$user)
                        <tr data-bs-toggle="collapse" data-bs-target="#collapseOne-{{ $user->id }}" aria-expanded="true"
                            aria-controls="collapseOne">
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->other_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td style="text-align: end">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View
                                    Info</button>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="6" class="hiddenRow">
                                <div id="collapseOne-{{ $user->id }}"
                                    class=" accordion-collapse collapse accordion-body" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="photo">
                                        <img src="/storage/{{ $user->photo }}" alt="">
                                    </div>
                                    <div><strong> Madian Name:</strong> {{ $user->madian_name }}</div>
                                    <div><strong> Sex:</strong> {{ $user->sex }}</div>
                                    <div><strong> Marital Status:</strong> {{ $user->matital_status }}</div>
                                    <div><strong> Religon:</strong> {{ $user->religion }}</div>
                                    <div><strong> Date of birth:</strong> {{ $user->dob }}</div>
                                    <div><strong> Home Town:</strong> {{ $user->home_town }}</div>
                                    <div><strong> Local Governmernt Area:</strong> {{ $user->lga }}</div>
                                    <div><strong> Home Address:</strong> {{ $user->home_address }}</div>
                                    <div><strong> Telephone Number:</strong> {{ $user->tel_no }}</div>
                                    <div><strong> Eduation Qualification:</strong> {{ $user->education_qualification }}
                                    </div>
                                    <div><strong> Why Join:</strong> {{ $user->why_join }}</div>
                                    <div><strong> Next of kin Info:</strong> {{ $user->next_of_kin_details }}</div>
                                    <div><strong> Date Created:</strong> {{ $user->created_at }}</div>
                                </div>
                            </td>
                        </tr>


                    @empty
                        <div class="alert alert-info">
                            No Register member
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    .hiddenRow {
        padding: 0 !important;
    }

    .accordion-body {
        padding: 20px;
    }

    .accordion-body>div {
        margin: 10px 0px;
    }

    .accordion-body div.photo {
        height: 200px;
        width: 200px;
        border: 1px solid #cdcdcd
    }

    .accordion-body div.photo img {
        object-fit: contain;
        height: 100%;
        width: 100%;
    }
</style>
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $('.modal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script> --}}
