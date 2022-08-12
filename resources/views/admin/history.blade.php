<x-header-component/>
<x-nav-component/>
<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">{{$title}}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{$title}}
                            <a href="{{ URL('/author/history/add')  }}" 
                                class="btn btn-primary m-b-5 m-t-5 pull-right"><i class="fa fa-plus"
                                    aria-hidden="true"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div style="color:green; padding-left:5px ">{{ Session::get('successmsg') }}</div>
                        <div style="color:red; padding-left:5px ">{{ Session::get('errmsg') }}</div>
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th> 
                                    <th>Records</th>  
                                    <th>Date</th> 
                                    <th>Document</th>                                   
                                    <th>Action</th>
                                </tr>
                                <tbody>
                                @foreach($userdata as $item)
                                <tr>
                                    <td style="color: black;">{{ $loop -> index + 1 }}</td>
                                    <td style="color: black;">{{ $item -> user-> name  }}</td>
                                    <td style="color: black;">{{ $item -> records }}</td>
                                    <td style="color: black;">{{ date('d/m/Y', strtotime($item -> date)) }}</td> 
                                    <td style="color: black;">
                                    <img src="{{ asset('uploads/'.$item -> document) }}" height="60px" weigth="90px" />
                                    </td>                                                                     
                                    <td style="color: black;"><a
                                            href="{{ URL('/author/history/update?update_id='.$item -> id) }}"><i
                                                class="fa fa-pencil-square" aria-hidden="true"></i></a> | <a
                                            href="{{ URL('/author/history/delete?id='.$item -> id) }}"
                                            onclick="return confirm('Do you really want to delete this data?')"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->
    </div>
</div>
<x-footer-component/>