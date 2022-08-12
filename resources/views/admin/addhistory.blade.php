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
									<form class="form-horizontal" autocomplete="off"  action="{{ url('author/history/add') }}" method='POST' onsubmit=" return valid(); " enctype="multipart/form-data" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Full Name :<span style="color:red"> *</span></label>
                                                    <select name="user_id" id="user_id" class="form-control">
                                                        <option value="">Select</option>
                                                        @foreach($userdata as $val)
                                                        <option value="{{ $val -> id }}">{{ $val -> name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Document :</label>
                                                    <input type="file" name="image" id="image" class="form-control" placeholder="Document" value="{{ old('document') }}") />
                                                    @if ($errors->has('mobile_no'))
                                                    <span class="text-danger">{{ $errors->first('document') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Records :<span style="color:red"> *</span></label>
                                                    <textarea name="records" id="records" class="form-control" placeholder="Records"></textarea>
                                                    @if ($errors->has('records'))
                                                    <span class="text-danger">{{ $errors->first('records') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Date :<span style="color:red"> *</span></label>
                                                    <input type="date" name="date" id="date" class="form-control" value="{{ old('document') }}") />
                                                    @if ($errors->has('date'))
                                                    <span class="text-danger">{{ $errors->first('date') }}</span>
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
    function valid1() {
            if ($("#user_id").val() == '') {
                $("#errmsg").html("Full name is a required filed!");
                $("#user_id").focus();
                return false;
            } else if ($("#records").val() == '') {
                $("#errmsg").html("Records is a required field");
                $("#records").focus();
                return false;
            } else if ($("#date").val() == '') {
                $("#errmsg").html("Date is a required field!!");
                $("#date").focus();
                return false;
            }
    }
</script>
<x-footer-component/>