<x-header-component/>
<x-nav-component/>
<div class="wave -three"></div>
<div class="app-content">
				<section class="section">
                    <div class="page-header">
                        <h4 class="page-title">{{ $title }}</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-light-color">Add</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }} Details</li>
                        </ol>
                    </div>					
				    <div class="row justify-content-center">						
					    <div class="col-12">
						    <div class="card" style="style">
									<div class="card-header">
										<h4>{{ $title }} Details</h4>
										<span id="errmsg" style="color:red"></span>
									</div>
								<div class="card-body">
									<form class="form-horizontal" autocomplete="off"  action="{{ url('author/user/add') }}" method='POST' onsubmit=" return valid(); " enctype="multipart/form-data" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Full Name :<span style="color:red"> *</span></label>
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}") />
                                                    @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Guidance name :</label>
                                                    <input type="text" name="guidance_name" id="guidance_name" class="form-control" placeholder="Guidance name" value="{{ old('guidance_name') }}") />
                                                    @if ($errors->has('guidance_name'))
                                                    <span class="text-danger">{{ $errors->first('guidance_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Mobile No :<span style="color:red"> *</span></label>
                                                    <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Mobile no" value="{{ old('mobile_no') }}") />
                                                    @if ($errors->has('mobile_no'))
                                                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                       
                                        <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Aadhaar no :</label>
                                                    <input type="text" name="aadhaar_no" id="aadhaar_no" class="form-control" placeholder="Aadhaar no" value="{{ old('aadhaar_no') }}") />
                                                    @if ($errors->has('aadhaar_no'))
                                                    <span class="text-danger">{{ $errors->first('aadhaar_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Voter no :</label>
                                                    <input type="text" name="voter_no" id="voter_no" class="form-control" placeholder="Voter no" value="{{ old('voter_no') }}") />
                                                    @if ($errors->has('voter_no'))
                                                    <span class="text-danger">{{ $errors->first('voter_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Address :<span style="color:red"> *</span></label>
                                                    <input type="text" name="address" id="address" class="form-control" placeholder="Address" />
                                                    @if ($errors->has('address'))
                                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Branch Name :</label>
                                                    <input type="text" name="branch_name" id="branch_name" class="form-control" placeholder="Branch Name" />
                                                    @if ($errors->has('branch_name'))
                                                    <span class="text-danger">{{ $errors->first('branch_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Bank account no :</label>
                                                    <input type="text" name="account_no" id="account_no" class="form-control" placeholder="Bank account no" />
                                                    @if ($errors->has('account_no'))
                                                    <span class="text-danger">{{ $errors->first('account_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>                                        

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>IFC Code :</label>
                                                    <input type="text" name="ifc_code" id="ifc_code" class="form-control" placeholder="IFC Code" />
                                                    @if ($errors->has('ifc_code'))
                                                    <span class="text-danger">{{ $errors->first('ifc_code') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                                                                   
                                        </div>
                                                                      
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <input type="Submit" class="btn btn-primary" 
                                                        value="Save" />
                                                </div>
                                            </div>
                                        </div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
				</section>
			</div>


<script>
    function valid() {
            if ($("#name").val() == '') {
                $("#errmsg").html("Please enter user name!");
                $("#name").focus();
                return false;
            } else if ($("#mobile_no").val() == '') {
                $("#errmsg").html("Please enter mobile no!!");
                $("#mobile_no").focus();
                return false;
            } else if ($("#uid_no").val() == '') {
                $("#errmsg").html("Please enter unique identity number!!");
                $("#uid_no").focus();
                return false;
            } else if ($("#address").val() == '') {
                $("#errmsg").html("Please enter user address!!");
                $("#address").focus();
                return false;
            }
    }
</script>
<x-footer-component/>