<div class="card">
    <div class="card-body" style="background-color: #fffdfa;">
        <h5 class="card-title text-center">TRAVEL ORDER LEAVE FORM</h5>
        <form class="needs-validation row g-3" id="travel_order_form">
            <div class="card">
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6 mb-6">
                            <label for="emplno" class="form-label text-primary">Employee Number</label><span
                                class="text-danger">
                                *</span>
                            <input type="text" class="form-control" id="emplno" name="employee_number" required>
                            <div class="invalid-feedback">
                                Please enter your Employee Number.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="emplname" class="form-label text-primary">Employee Name</label><span
                                class="text-danger">
                                *</span>
                            <input type="text" class="form-control" id="emplno" name="employee_name" required>
                            <div class="invalid-feedback">
                                Please enter your Employee Name.
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <label for="Ext" class="form-label text-primary">Ext.</label><span
                                class="text-danger">*</span>
                            <input type="text" class="form-control" id="Ext" name="ext" required>
                            <div class="invalid-feedback">
                                Please enter your Ext.
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="date" class="form-label text-primary">Date</label><span
                                class="text-danger">*</span>
                            <input type="date" class="form-control" id="date" name="date" value="{{date('Y-m-d')}}"
                                required>
                            <div class="invalid-feedback">
                                Please enter Date.
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="CC" class="form-label text-primary">CC</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" id="CC" name="cc" required>
                            <div class="invalid-feedback">
                                Please enter CC.
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="ordernumber" class="form-label text-primary">Order Number</label><span
                                class="text-danger">
                                *</span>
                            <input type="text" class="form-control" id="ordernumber" name="order_number" required>
                            <div class="invalid-feedback">
                                Please enter Order Number.
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4 mb-6">
                            <label for="departuredate" class="form-label text-primary">Departure Date</label><span
                                class="text-danger"> *</span>
                            <input type="date" class="form-control" id="departuredate" name="departure_date" required>
                            <div class="invalid-feedback">
                                Please enter Departure Date.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="arrivaldate" class="form-label text-primary">Arrival Date</label><span
                                class="text-danger">
                                *</span>
                            <input type="date" class="form-control" id="arrivaldate" name="arrival_date" required>
                            <div class="invalid-feedback">
                                Please enter Arrival Date.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="destination" class="form-label text-primary">Destination</label><span
                                class="text-danger">
                                *</span>
                            <input type="text" class="form-control" id="destination" name="destination" required>
                            <div class="invalid-feedback">
                                Please enter Destination.
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <input type="radio" class="form-check-input" id="bussiess" name="trip_type"
                                value="Business">
                            <label for="bussiess" class="form-label text-primary">Bussiess</label>
                        </div>
                        <div class="col-sm-4">

                            <input type="radio" class="form-check-input" id="leave" name="trip_type" value="Leave">
                            <label for="leave" class="form-label text-primary">Leave</label>
                        </div>
                        <div class="col-sm-4">

                            <input type="radio" class="form-check-input" id="other" name="trip_type" value="Other">
                            <label for="other" class="form-label text-primary">Other</label>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <input type="radio" class="form-check-input" id="first" name="trip_class" value="first">
                                <label for="first" class="form-label text-primary">First</label>
                            </div>
                            <div class="col-sm-3">

                                <input type="radio" class="form-check-input" id="economy" name="trip_class"
                                    value="economy">
                                <label for="economy" class="form-label text-primary">Economy</label>
                            </div>
                            <div class="col-sm-3">

                                <input type="radio" class="form-check-input" id="excursion" name="trip_class"
                                    value="excursion">
                                <label for="excursion" class="form-label text-primary">Excursion</label>
                            </div>
                            <div class="col-sm-3">

                                <input type="radio" class="form-check-input" id="car" name="trip_class" value="car">
                                <label for="car" class="form-label text-primary">Car</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Your existing form here -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="card-title">Purpose of Business Travel:
                                <button type="button" id="addFieldButton"
                                    class="btn btn-success btn-sm p-0.5">Add</button>
                                <button type="button" id="deleteFieldButton"
                                    class="btn btn-danger btn-sm p-0.5">Delete</button>
                            </h5>
                        </div>
                    </div>

                    <!-- Initial set of fields -->
                    <div class="fields-container">
                        <div class="fields-set">

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="carr" class="form-label text-primary">Carr</label>
                                    <input type="text" class="form-control" id="carr" name="carr[]">
                                </div>
                                <div class="col-sm-3">
                                    <label for="flt" class="form-label text-primary">Flt</label>
                                    <input type="text" class="form-control" id="flt" name="flt[]">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ci" class="form-label text-primary">CI</label>
                                    <input type="text" class="form-control" id="ci" name="ci[]">
                                </div>
                                <div class="col-sm-3">
                                    <label for="pobdate" class="form-label text-primary">Date</label>
                                    <input type="date" class="form-control" id="pobdate" name="flt_date[]">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="from" class="form-label text-primary">From</label>
                                    <input type="text" class="form-control" id="from" name="flt_from[]">
                                </div>
                                <div class="col-sm-3">
                                    <label for="to" class="form-label text-primary">To</label>
                                    <input type="text" class="form-control" id="to" name="flt_to[]">
                                </div>
                                <div class="col-sm-3">
                                    <label for="etd" class="form-label text-primary">Etd</label>
                                    <input type="datetime-local" class="form-control" id="etd" name="etd[]">
                                </div>
                                <div class="col-sm-3">
                                    <label for="eta" class="form-label text-primary">Eta</label>
                                    <input type="datetime-local" class="form-control" id="eta" name="eta[]">
                                </div>
                            </div>


                            <!-- ... your existing fields ... -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="card-title">Add Accompanying Family Members:
                                <button type="button" id="addFieldButton2"
                                    class="btn btn-success btn-sm p-0.5">Add</button>
                                <button type="button" id="deleteFieldButton2"
                                    class="btn btn-danger btn-sm p-0.5">Delete</button>
                            </h5>
                        </div>
                        <div class="row addFieldButton2">


                            <div class="col-md-4">
                                <label for="familymembers" class="form-label text-primary">Full Name</label>
                                <input type="text" class="form-control" id="familymembers" name="name[]">
                            </div>
                            <div class="col-md-4">
                                <label for="age" class="form-label text-primary">Age</label>
                                <input type="number" class="form-control" id="age" name="age[]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title ">Field For A-Dept. use only</h5>
                    <div class="row">
                        <div class="col-md-6 mb-6">
                            <label for="leaveentitlement" class="form-label text-primary">Leave Entitlement:</label>
                            <input type="text" class="form-control" id="leaveentitlement" name="leave_entitlement">
                        </div>
                        <div class="col-md-6">
                            <label for="wduptill" class="form-label text-primary">WD Uptill</label>
                            <input type="date" class="form-control" id="wduptill" name="entitlement_wd_uptill">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-6">
                            <label for="leaverequested" class="form-label text-primary">Leave Requested:</label>
                            <input type="text" class="form-control" id="leaverequested" name="leave_requested">
                        </div>
                        <div class="col-md-6">
                            <label for="wd" class="form-label text-primary">WD</label>
                            <input type="text" class="form-control" id="wd" name="requested_wd">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-6">
                            <label for="leaveearned" class="form-label text-primary">Leave Earned:</label>
                            <input type="text" class="form-control" id="leaveearned" name="leave_earned">
                        </div>
                        <div class="col-md-6">
                            <label for="wduptill" class="form-label text-primary">WD Uptill</label>
                            <input type="date" class="form-control" id="wduptill" name="earned_wd_uptill">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-6">
                            <label for="Approved" class="form-label text-primary">Approved A/W</label>
                            <input type="text" class="form-control" id="Approved" name="approved_status">
                        </div>
                        <div class="col-md-6">
                            <label for="days" class="form-label text-primary">Days</label>
                            <input type="number" class="form-control" id="days" name="leave_days">
                        </div>
                    </div>
                    <!-- <div class="row">
                <div class="col-md-6 mb-6">
                  <label for="names" class="form-label text-primary">Accompanying Family Members Names</label><span
                    class="text-danger"> *</span>
                  <input type="text" class="form-control" id="names" name="names" required>
                </div>
                <div class="col-md-6">
                  <label for="age" class="form-label text-primary">Age</label>
                  <input type="text" class="form-control" id="age" name="age">
                </div>
              </div> -->
                    <div class="row mt-3">
                        <div class="col-sm-4">
                            <input type="radio" class="form-check-input" id="employeeonly" name="accompany_type"
                                value="Employee Only">
                            <label for="employeeonly" class="form-label text-primary">Employee Only</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="radio" class="form-check-input" id="employeefamily" name="accompany_type"
                                value="Employee & Family">
                            <label for="employeefamily" class="form-label text-primary">Employee & Family</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="radio" class="form-check-input" id="familyonly" name="accompany_type"
                                value="Family Only">
                            <label for="familyonly" class="form-label text-primary">Family Only</label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12">
                            <label for="fa" class="form-label text-primary">F A</label>
                            <textarea name="fa" class="form-control" id="fa" cols="20" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-6">
                            <label for="action" class="form-label text-primary">For Action FG/FGA:</label>
                            <input type="text" class="form-control" id="action" name="fg_fga_action">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4">
                            <input type="radio" class="form-check-input" id="exitreentryisva" name="visa_type"
                                value="Exit & Re-entry Visa">
                            <label for="exitreentryisva" class="form-label text-primary">Exit & Re-entry Visa</label>
                        </div>
                        <div class="col-sm-4">

                            <input type="radio" class="form-check-input" id="exitvisa" name="visa_type"
                                value="Exit Visa">
                            <label for="exitvisa" class="form-label text-primary">Exit Visa</label>
                        </div>
                        <div class="col-sm-4">

                            <input type="checkbox" class="form-check-input" id="reservation" name="reservation"
                                value="1">
                            <label for="reservation" class="form-label text-primary">Reservation</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="checkbox" class="form-check-input" id="ticket" name="ticket" value="1">
                            <label for="ticket" class="form-label text-primary">Ticket</label>
                        </div>
                        <div class="col-sm-4">

                            <input type="checkbox" class="form-check-input" id="cash" name="cash" value="1">
                            <label for="cash" class="form-label text-primary">Cash</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
    </div>
    </form>
</div>
</div>
<script>
    $(document).ready(function () {
        // Add button click event
        $("#addFieldButton").on("click", function () {
            // Clone the entire set of fields
            var clonedFields = $(".fields-set:first").clone();

            // Clear input values in the cloned fields
            clonedFields.find(':input').val('');

            // Wrap the cloned fields in a container
            var clonedContainer = $('<div class="fields-set"> --------- </div>').append(clonedFields);

            // Add spacing (margin) between newly generated fieldsets
            clonedContainer.css('margin-top', '30px');

            // Append the cloned container after the last set of fields
            $(".fields-container").append(clonedContainer);
        });
        jQuery('#deleteFieldButton').click(function () {
            if (jQuery('.fields-container>.fields-set').length > 1) {
                jQuery('.fields-container>.fields-set:last').remove();
            }
        })
        jQuery('#deleteFieldButton2').click(function () {
            // if (jQuery('.addFieldButton2').length > 1) {
                var x= jQuery('.addFieldButton2 .clear-both').last();
                x.next('div').remove();
                x.next('div').remove();
                x.remove();
            // }
        })
        jQuery('#addFieldButton2').click(function () {
            jQuery('.addFieldButton2').append('<div class="clear-both"></div><div class="col-md-4"><label for="familymembers" class="form-label text-primary">Family Members</label><input type="text" class="form-control" id="familymembers" name="name[]"></div><div class="col-md-4"><label for="age" class="form-label text-primary">Age</label><input type="number" class="form-control" id="age" name="age[]"></div>');

        })
    });
    $('#travel_order_form').on('submit', function (e) {
        e.preventDefault();
        var data = $('#travel_order_form').serializeArray();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{Route('insert-travel-order')}}",
            method: "POST",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            async: true,
            dataType: 'text',
            data: data, //{Invoice_ID: $(this).data('invoice'), Transaction_Number: $(this).data('transaction')},
            success: function (data) {

                $('#app-modal-body').html('Form Submitted');
                //console.log(data);
                //ele.parent('div').parent('div').parent('td').siblings('.td-trans-' + target_lang).children('div').find('.txt_Description_' + target_lang.toUpperCase()).val(data);
            },
            error: function (data) {
                $('#app-modal-body').html('Could Not Connect the Server');
                console.log("Could Not Connect the Server");
            }
        });

    });
</script>