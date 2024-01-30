<div class="card">
    <div class="card-body">
        <h5 class="card-title text-center mb-4">PAYMENT VOUCHER</h5>

        <!-- Multi Columns Form -->
        <form class="needs-validation row g-3" id="voucher_form">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <label for="paidto" class="form-label text-primary">Paid to</label><span class="text-danger"> *</span>
                    <input type="text" class="form-control" id="paidto" name="paid_to" required>
                    <div class="invalid-feedback">
                        Please enter your whom you Paid to
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="emplnumber" class="form-label text-primary">Employee Number</label><span class="text-danger">
                        *</span>
                    <input type="text" class="form-control" id="emplnumber" name="employee_number" required>
                    <div class="invalid-feedback">
                        Please enter your Employee Number
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

            <div class="container mt-3">
                <!-- Your existing form here -->
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="card-title">Enter Amount Details:
                            <button type="button" id="addFieldButton" class="btn btn-success btn-sm p-0.5">Add</button>
                        </h5>
                    </div>
                </div>

                <div class="fields-container">
                    <div class="fields-set">

                        <div class="row ">
                            <div class="col-12">
                                <label for="description" class="form-label text-primary">Description</label>
                                <textarea name="description" class="form-control" id="description" cols="20" rows="2" name="description[]"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <label for="AccountNumber" class="form-label text-primary">Account Number</label>
                                <input type="text" class="form-control" id="AccountNumber"  name="account_number[]">
                            </div>
                            <div class="col-sm-3">
                                <label for="BeforeVAT" class="form-label text-primary">Before VAT</label>
                                <input type="text" class="form-control" id="BeforeVAT" name="before_vat[]">
                            </div>
                            <div class="col-sm-3">
                                <label for="Vat" class="form-label text-primary">Vat 5%</label>
                                <input type="text" class="form-control" id="Vat"  name="vat[]">
                            </div>
                            <div class="col-sm-3">
                                <label for="Amount" class="form-label text-primary">Amount (SAR)</label>
                                <input type="text" class="form-control" id="Amount" name="amount[]">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>

        </form><!-- End Multi Columns Form -->
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
    });

    $('#voucher_form').on('submit', function (e) {
        e.preventDefault();
        var data = $('#voucher_form').serializeArray();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{Route('insert-voucher')}}",
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