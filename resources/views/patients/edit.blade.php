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
                            <div class="col-md-6 col-sm-12">
                                <div class=" form-group">
                                    <label for="selectInitialFacility">Initial Facility</label>
                                    <select class="form-control select2-primary" name="initial_facility"
                                            id="selectInitialFacility">
                                        <option value="" selected hidden>Select Initial Facility</option>
                                    </select>
                                </div>
                            </div>

                            <p>Basic Information</p>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 p-2">
                                    <div class="form-group">
                                        <label for="inputSurname">Surname</label>
                                        <input class="form-control" type="text" name="surname" id="inputSurname"
                                               autocomplete="family-name" placeholder="Surname">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 p-2">
                                    <div class="form-group">
                                        <label for="inputFirstName">First Name</label>
                                        <input class="form-control" type="text" name="first_name" id="inputFirstName"
                                               autocomplete="first_name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 p-2">
                                    <div class="form-group">
                                        <label for="inputMiddleName">Middle Name</label>
                                        <input class="form-control" type="text" name="middle_name" id="inputMiddleName"
                                               autocomplete="additional-name" placeholder="Middle name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="selectGender">Gender</label>
                                        <select name="gender" id="selectGender" class="form-control">
                                            <option value="" selected hidden>Select gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputDob">{{__('Date of birth')}}</label>
                                        <input class="form-control" type="date" name="dob" id="inputDob">
                                    </div>
                                </div>
                            </div>
                            <p>Contact Information</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputPhoneNumber">{{__('Phone Number')}}</label>
                                        <input type="number" class="form-control" name="phone_number"
                                               id="inputPhoneNumber" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputPhoneNumberAlternate">{{__('Alternate Phone Number')}}</label>
                                        <input type="number" class="form-control" name="phone_number_alternate"
                                               id="inputPhoneNumberAlternate" placeholder="Alternate Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="selectCounty">{{__('County')}}</label>
                                        <select name="county" id="selectCounty" class="form-control">
                                            <option value="" selected hidden>Select County</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="selectSubCounty">{{__('SubCounty')}}</label>
                                        <select name="sub_county" id="selectSubCounty" class="form-control">
                                            <option value="" selected hidden>Select Sub County</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p>Health Information</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputDateConfirmedHivPositive">{{__('Date Confirmed HIV +')}}</label>
                                        <input class="form-control" type="date" name="date_confirmed_hiv"
                                               id="inputDateConfirmedHivPositive">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="selectstartRegimen">{{__('Start Regimen')}}</label>
                                        <select name="start_regimen" id="selectstartRegimen" class="form-control">
                                            <option value="" selected hidden>Select Regimen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputStartRegimenDate">{{__('Start Regimen Date')}}</label>
                                        <input type="date" class="form-control" id="inputStartRegimenDate" name="start_regimen_date">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="selectCurrentRegimen">{{__('Current Regimen')}}</label>
                                        <select name="current_regimen" id="selectCurrentRegimen" class="form-control">
                                            <option value="" selected hidden>Select Regimen</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p>Next Of Kin</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputNok">{{__('Next of kin')}}</label>
                                        <input type="text" class="form-control" id="inputNok" name="nok" placeholder="Next Of Kin">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputNokPhoneNumber">Next Of Kin Phone Number</label>
                                        <input type="number" name="nok_phone_number" class="form-control" id="inputNokPhoneNumber" placeholder="Phone Number">
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
