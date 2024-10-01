@include('admin/header')
<!-- jQuery CDN -->

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
         @include('admin/sidebar')
       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                 @include('admin/navbar')
              
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Product</h1>
                    </div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px;">
                        Add Product
                    </button>

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="dataCollectionForm" enctype="multipart/form-data">
                                        <h5>Supplier</h5>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" id="productId" value="">
                                                    <label for="supplierName">Name</label>
                                                    <input type="text" class="form-control" id="supplierName" name="supplierName" >
                                                    <small class="text-danger supplierName-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="supplierPhone">Phone</label>
                                                    <input type="text" class="form-control" id="supplierPhone" name="supplierPhone" >
                                                    <small class="text-danger supplierPhone-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="supplierAddress">Address</label>
                                                    <input type="text" class="form-control" id="supplierAddress" name="supplierAddress" >
                                                    <small class="text-danger supplierAddress-error"></small>
                                                </div>
                                            </div>
                                        </div>

                                           <!-- Transporter Section -->
                                        <h5>Transporter</h5>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="transporterName">Name</label>
                                                    <input type="text" class="form-control" id="transporterName" name="transporterName" >
                                                    <small class="text-danger transporterName-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="transporterPhone">Phone</label>
                                                    <input type="text" class="form-control" id="transporterPhone" name="transporterPhone" >
                                                    <small class="text-danger transporterPhone-error"></small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Vehicle Section -->
                                        <h5>Vehicle</h5>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="vehicleNumber">Vehicle Number</label>
                                                    <input type="text" class="form-control" id="vehicleNumber" name="vehicleNumber" >
                                                    <small class="text-danger vehicleNumber-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="vehicleType">Vehicle Type</label>
                                                    <input type="text" class="form-control" id="vehicleType" name="vehicleType" >
                                                    <small class="text-danger vehicleType-error"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Material Section -->
                                        <h5>Material</h5>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="materialType">Material Type</label>
                                                        <input type="text" class="form-control" id="materialType" name="materialType" >
                                                        <small class="text-danger materialType-error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="materialUnit">Unit</label>
                                                        <input type="text" class="form-control" id="materialUnit" name="materialUnit" >
                                                        <small class="text-danger materialUnit-error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                        <!-- Machinery Section -->
                                        <h5>Machinery</h5>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="machineType">Machine Type</label>
                                                    <input type="text" class="form-control" id="machineType" name="machineType" >
                                                    <small class="text-danger machineType-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="machineNumber">Machine Number</label>
                                                    <input type="text" class="form-control" id="machineNumber" name="machineNumber" >
                                                    <small class="text-danger machineNumber-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="dieselCapacity">Diesel Capacity</label>
                                                    <input type="text" class="form-control" id="dieselCapacity" name="dieselCapacity" >
                                                    <small class="text-danger dieselCapacity-error"></small>
                                                </div>
                                            </div>    
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="ownedOrRental">Owned or Rental</label>
                                                    <select class="form-control" id="ownedOrRental" name="ownedOrRental" >
                                                        <option value="owned">Owned</option>
                                                        <option value="rental">Rental</option>
                                                    </select>
                                                    <small class="text-danger ownedOrRental-error"></small>
                                                </div>
                                            </div> 
                                        </div> 


                                        <!-- Sites Section -->
                                        <h5>Sites</h5>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="siteAddress">Site Address</label>
                                                    <input type="text" class="form-control" id="siteAddress" name="siteAddress" >
                                                    <small class="text-danger siteAddress-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="siteName">Site Name</label>
                                                    <input type="text" class="form-control" id="siteName" name="siteName" >
                                                    <small class="text-danger siteName-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="siteID">Site ID</label>
                                                    <input type="text" class="form-control" id="siteID" name="siteID" >
                                                    <small class="text-danger siteID-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="siteManager">Site Manager</label>
                                                    <input type="text" class="form-control" id="siteManager" name="siteManager" >
                                                    <small class="text-danger siteManager-error"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="siteLoginPassword">Site Login Password</label>
                                                    <input type="password" class="form-control" id="siteLoginPassword" name="siteLoginPassword" >
                                                    <small class="text-danger siteLoginPassword-error"></small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Estimated Assets For Site Section -->
                                        <h5>Estimated Assets For Site</h5>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="productSelect">Select Product</label>
                                                    <input type="text" class="form-control" id="productSelect" name="productSelect" >
                                                    <small class="text-danger productSelect-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="productQuantity">Quantity</label>
                                                    <input type="number" class="form-control" id="productQuantity" name="productQuantity" >
                                                    <small class="text-danger productQuantity-error"></small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Employee Section -->
                                        <h5>Employee</h5>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="employeeName">Name</label>
                                                    <input type="text" class="form-control" id="employeeName" name="employeeName" >
                                                    <small class="text-danger employeeName-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="employeeDesignation">Designation</label>
                                                    <input type="text" class="form-control" id="employeeDesignation" name="employeeDesignation" >
                                                    <small class="text-danger employeeDesignation-error"></small>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="employeePhone">Phone Number</label>
                                                    <input type="text" class="form-control" id="employeePhone" name="employeePhone" >
                                                    <small class="text-danger employeePhone-error"></small>
                                                </div>
                                            </div> 
                                            <div class="col-3">   
                                                <div class="form-group">
                                                    <label for="assignSite">Assign Site</label>
                                                    <input type="text" class="form-control" id="assignSite" name="assignSite" >
                                                    <small class="text-danger assignSite-error"></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" id="submitFormButton" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <table id="productTable" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Supplier Name</th>
                                        <th>Supplier Phone</th>
                                        <th>Transporter Name</th>
                                        <th>Vehicle Number</th>
                                        <th>Material Type</th>
                                        <th>Machine Type</th>
                                        <th>Site Address</th>
                                        <th>Product Select</th>
                                        <th>Employee Name</th>
                                        <th>Action</th> 
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          
            <!-- Footer -->
            @include('admin/footer')
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

            

            <script>
                $(document).ready(function() {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $('#dataCollectionForm').on('submit', function(event) {
                        event.preventDefault(); 

                        var formData = new FormData(this);  // Handle file uploads with FormData

                        $.ajax({
                            url: "{{ route('product-data') }}",  // Ensure the route is correct
                            type: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                alert('Data submitted successfully!');
                                location.reload();
                                //$('#dataCollectionForm')[0].reset(); 
                                $('.text-danger').text('');  
                            },
                            error: function(xhr) {
                                $('.text-danger').text('');  // Clear previous errors

                                if (xhr.status === 422) {
                                    let errors = xhr.responseJSON.errors;
                                    $.each(errors, function(key, value) {
                                        $('.' + key + '-error').text(value[0]);  // Display validation error messages
                                    });
                                } else {
                                    alert('An error occurred: ' + xhr.responseText);
                                }
                            }
                        });
                    });
                    $('#productTable').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('product') }}", 
                        columns: [
                           
                            {data: 'supplier_name', name: 'supplier_name'},
                            {data: 'supplier_phone', name: 'supplier_phone'},
                            {data: 'transporter_name', name: 'transporter_name'},
                            {data: 'vehicle_number', name: 'vehicle_number'},
                            {data: 'material_type', name: 'material_type'},
                            {data: 'machine_type', name: 'machine_type'},
                            {data: 'site_address', name: 'site_address'},
                            {data: 'product_select', name: 'product_select'},
                            {data: 'employee_name', name: 'employee_name'},
                            {data: 'action', name: 'action', orderable: false, searchable: false}, 
                        ]
                    });
                });

                $('body').on('click', '.delete', function () {
                    var id = $(this).data("id");
                    console.log(id);
                    var url = '{{ route("products-delete", ":id") }}';
                    url = url.replace(':id', id);
                    
                    if(confirm("Are you sure you want to delete this record?")) {
                        $.ajax({
                            type: "DELETE",
                            url: url,
                            success: function (data) {
                                alert('Record deleted successfully');
                                $('#productTable').DataTable().ajax.reload();
                            },
                            error: function (data) {
                                alert('Error occurred while deleting the record');
                            }
                        });
                    }
                });

                $('body').on('click', '.edit', function () {
                    var id = $(this).data("id");
                    console.log(id);
                    var url = '{{ route("products-edit", ":id") }}';
                    url = url.replace(':id', id);
                   
                    $.ajax({
                        type: "GET",
                        url: url,
                        success: function (data) {
                            console.log(data.data.id);
                            $('#productId').val(data.data.id);
                            $('#supplierName').val(data.data.supplier_name);
                            $('#supplierPhone').val(data.data.supplier_phone);
                            $('#supplierAddress').val(data.data.supplier_address);
                            $('#transporterName').val(data.data.transporter_name);
                            $('#transporterPhone').val(data.data.transporter_phone);
                            $('#vehicleNumber').val(data.data.vehicle_number);
                            $('#vehicleType').val(data.data.vehicle_type);
                            $('#materialType').val(data.data.material_type);
                            $('#materialUnit').val(data.data.material_unit);
                            $('#machineType').val(data.data.machine_type);
                            $('#machineNumber').val(data.data.machine_number);
                            $('#dieselCapacity').val(data.data.diesel_capacity);
                            $('#ownedOrRental').val(data.data.owned_or_rental);
                            $('#siteAddress').val(data.data.site_address);
                            $('#siteName').val(data.data.site_name);
                            $('#siteID').val(data.data.site_id);
                            $('#siteManager').val(data.data.site_manager);
                            $('#siteLoginPassword').val(data.data.site_login_password); // Handle this carefully due to security
                            $('#productSelect').val(data.data.product_select);
                            $('#productQuantity').val(data.data.product_quantity);
                            $('#employeeName').val(data.data.employee_name);
                            $('#employeeDesignation').val(data.data.employee_designation);
                            $('#employeePhone').val(data.data.employee_phone);
                            $('#assignSite').val(data.data.assign_site);
                        },
                    });
                    
                });
              

                function resetForm()
                {
                    $("#dataCollectionForm").trigger("reset");
                }

            </script>
          
</body>

</html>