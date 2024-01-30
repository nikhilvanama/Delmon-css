
<div class="card">
    <div class="card-body">
        <h5 class="card-title text-center mb-4">TRAVEL EXPENSE CLAIM</h5>

        <!-- Multi Columns Form -->
        <form class="needs-validation row g-3" id="expenses_form">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <label for="emplno" class="form-label text-primary">Employee Number</label><span class="text-danger">
                        *</span>
                    <input type="text" class="form-control" id="emplno" name="employee_number" required/>
                    <div class="invalid-feedback">
                        Please enter your Employee Number.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="emplname" class="form-label text-primary">Employee Name</label><span class="text-danger">
                        *</span>
                    <input type="text" class="form-control" id="emplno" name="employee_name" required>
                    <div class="invalid-feedback">
                        Please enter your Employee Name.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="date" class="form-label text-primary">Date</label><span class="text-danger"> *</span>
                    <input type="date" class="form-control" id="date" name="date" value="{{date('Y-m-d')}}" required>
                    <div class="invalid-feedback">
                        Please enter Date.
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-3">
                    <label for="depdate" class="form-label text-primary">Departure Date</label><span class="text-danger">
                        *</span>
                    <input type="datetime-local" class="form-control" id="depdate" name="departure_date" required>
                    <div class="invalid-feedback">
                        Please enter Departure Date.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="arrdate" class="form-label text-primary">Arrival Date</label><span class="text-danger">
                        *</span>
                    <input type="datetime-local" class="form-control" id="arrdate" name="arrival_date" required>
                    <div class="invalid-feedback">
                        Please enter Arrival Date.
                    </div>
                </div>
                
                
            </div>

            <div class="row ">
                <div class="col-12">
                    <label for="description" class="form-label text-primary">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="20" rows="2"></textarea>
                </div>
            </div>

            <h5 class="card-title mb-2">1. Ticket(TOTAL COSTS OF TICKETS NOT PROVIDED BY COMPANY)</h5>


            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="tikCurrency" class="form-label text-primary">Currency</label>
                    <input type="text" class="form-control" id="tikCurrency" name="ticket_currency">
                </div>
                <div class="col-md-4">
                    <label for="tikAmount" class="form-label text-primary">Amount</label>
                    <input type="text" class="form-control" id="tikAmount" name="ticket_amount">
                </div>
                <div class="col-md-4">
                    <label for="tikexcrate" class="form-label text-primary">Exchange Rate</label>
                    <input type="text" class="form-control" id="tikexcrate" name="ticket_exrate">
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                <div class="col-sm-4">
                    <label for="tikvat" class="form-label text-primary">VAT</label>
                    <input type="text" class="form-control" id="tikvat" name="ticket_vat">
                </div>
                <div class="col-sm-4">
                    <label for="tiktotal" class="form-label text-primary">Total (Including VAT)</label>
                    <input type="text" class="form-control" id="ticket_total" name="ticket_total">
                </div>
            </div>

            <h5 class="card-title mb-2 col-sm-3">2. Allowances</h5>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <label for="days" class="form-label text-primary">Days</label>
                    <input type="text" class="form-control" id="days" name="allowance_days">
                </div>
                <div class="col-sm-3">
                    <label for="daysrate" class="form-label text-primary">Days Rate</label>
                    <input type="text" class="form-control" id="daysrate" name="daily_rate">
                </div>
                <div class="col-sm-3">
                    <label for="Hours" class="form-label text-primary">Hours</label>
                    <input type="text" class="form-control" id="Hours" name="allowance_hours">
                </div>
                <div class="col-sm-3">
                    <label for="hoursrate" class="form-label text-primary">Hours Rate</label>
                    <input type="text" class="form-control" id="hoursrate" name="hours_rate">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="allurrency" class="form-label text-primary">Currency</label>
                    <input type="text" class="form-control" id="allurrency" name="allowance_currency">
                </div>
                <div class="col-md-4">
                    <label for="allamount" class="form-label text-primary">Amount</label>
                    <input type="text" class="form-control" id="allamount" name="allowance_amount">
                </div>
                <div class="col-md-4">
                    <label for="allexcrate" class="form-label text-primary">Exchange Rate</label>
                    <input type="text" class="form-control" id="allexcrate" name="allowance_exrate">
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                <div class="col-sm-4">
                    <label for="allvat" class="form-label text-primary">VAT</label>
                    <input type="text" class="form-control" id="allvat" name="allowance_vat">
                </div>
                <div class="col-sm-4">
                    <label for="alltotal" class="form-label text-primary">Total (Including VAT)</label>
                    <input type="text" class="form-control" id="alltotal" name="allowance_total">
                </div>
            </div>


            <h5 class="card-title mb-2 col-sm-3">3. Hotel</h5>
            <div class="row mb-1">
                <div class="col-12">
                  <!-- <label for="description" class="form-label">Description</label><span class="required"> *</span> -->
                    <textarea name="hotel_description" class="form-control" id="hotdescription" cols="20" rows="1"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="hotcurrency" class="form-label text-primary">Currency</label>
                    <input type="text" class="form-control" id="hotcurrency" name="hotel_currency">
                </div>
                <div class="col-md-4">
                    <label for="hotamount" class="form-label text-primary">Amount</label>
                    <input type="text" class="form-control" id="hotamount" name="hotel_amount">
                </div>
                <div class="col-md-4">
                    <label for="hotexcrate" class="form-label text-primary">Exchange Rate</label>
                    <input type="text" class="form-control" id="hotexcrate" name="hotel_exrate">
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-sm-4">
                    <label for="hotvat" class="form-label text-primary">VAT</label>
                    <input type="text" class="form-control" id="hotvat" name="hotel_vat">
                </div>
                <div class="col-sm-4">
                    <label for="hottotal" class="form-label text-primary">Total (Including VAT)</label>
                    <input type="text" class="form-control" id="hottotal" name="hotel_total">
                </div>
            </div>

            <h5 class="card-title mb-2 col-sm-3">4. Other Expenses</h5>
            <div class="row mb-1">
                <div class="col-12">
                  <!-- <label for="description" class="form-label">Description</label><span class="required"> *</span> -->
                    <textarea name="other_expenses_description" class="form-control" id="description" cols="20" rows="1"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="oecurrency" class="form-label text-primary">Currency</label>
                    <input type="text" class="form-control" id="oecurrency" name="other_expenses_currency">
                </div>
                <div class="col-md-4">
                    <label for="oeamount" class="form-label text-primary">Amount</label>
                    <input type="text" class="form-control" id="oeamount" name="other_expenses_amount">
                </div>
                <div class="col-md-4">
                    <label for="oeexcrate" class="form-label text-primary">Exchange Rate</label>
                    <input type="text" class="form-control" id="oeexcrate" name="other_expenses_exrate">
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                <div class="col-sm-4">
                    <label for="oevat" class="form-label text-primary">VAT</label>
                    <input type="text" class="form-control" id="oevat" name="other_expenses_vat">
                </div>
                <div class="col-sm-4">
                    <label for="oetotal" class="form-label text-primary">Total (Including VAT)</label>
                    <input type="text" class="form-control" id="oetotal" name="other_expenses_total">
                </div>
            </div>

            <h5 class="card-title mb-1 col-sm-3">5. Notes</h5>
            <div class="row mb-3">
                <div class="col-12">
                  <!-- <label for="description" class="form-label">Description</label><span class="required"> *</span> -->
                    <textarea name="notes" class="form-control" id="notes" cols="20" rows="1"></textarea>
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
               
                
                <div class="col-sm-6">
                    <label for="lessadvances" class="form-label text-primary">LESS ADVANCES</label>
                    <input type="text" class="form-control" id="lessadvances" name="less_advances">
                </div>
                
            </div>

            <div class="text-center">
                <button type="submit" id="btn_submit_expenses" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>

        </form><!-- End Multi Columns Form -->
    </div>
</div>

<script>
    $('#expenses_form').on('submit', function (e) {
        e.preventDefault();
        var data = $('#expenses_form').serializeArray();
        
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{Route('insert-expenses')}}",
                    method: "POST",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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