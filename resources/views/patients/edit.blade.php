@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="border-top: #0a53be 1px solid">
                    <div class="card-header">{{ __('Create/Edit Patient') }}</div>

                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-6">
                                <div class=" form-group">
                                    <label for="selectInitialFacility">Initial Facility</label>
                                    <select class="form-control select2-primary" name="initial_facility" id="selectInitialFacility">
                                        <option value="" selected hidden>Select Initial Facility</option>
                                    </select>
                                </div>
                            </div>

                            <p>Basic Information</p>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 p-2">
                                    <div class="form-group">
                                        <label for="inputSurname">Surname</label>
                                        <input type="text" name="surname" id="inputSurname" autocomplete="family-name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 p-2">
                                    <div class="form-group">
                                        <label for="inputFirstName">First Name</label>
                                        <input type="text" name="first_name" id="inputFirstName" autocomplete="first_name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 p-2">
                                    <div class="form-group">
                                        <label for="inputMiddleName">Middle Name</label>
                                        <input type="text" name="middle_name" id="inputMiddleName" autocomplete="additional-name">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
