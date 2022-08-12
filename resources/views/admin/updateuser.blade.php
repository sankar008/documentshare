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
									<form class="form-horizontal" autocomplete="off"  action="{{ url('author/user/update') }}" method='POST' onsubmit=" return valid(); " enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" name="update_id" id="update_id" value="{{ $data -> id }}">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Full Name :<span style="color:red"> *</span></label>
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="{{ $data -> name }}" />
                                                    @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Mobile No :<span style="color:red"> *</span></label>
                                                    <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Mobile no" value="{{ $data -> mobile_no }}"/>
                                                    @if ($errors->has('mobile_no'))
                                                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Unique Identity Number :<span style="color:red"> *</span></label>
                                                    <input type="text" name="uid_no" id="uid_no" class="form-control" placeholder="Unique Identity Number" value="{{ $data -> uid_no }}" />
                                                    @if ($errors->has('uid_no'))
                                                    <span class="text-danger">{{ $errors->first('uid_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Address :<span style="color:red"> *</span></label>
                                                    <input type="text" name="address" id="address" class="form-control" placeholder="Address" value="{{ $data -> address }}"/>
                                                    @if ($errors->has('address'))
                                                    <span class="text-danger">{{ $errors->first('address') }}</span>
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