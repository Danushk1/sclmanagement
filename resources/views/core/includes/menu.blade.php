<!DOCTYPE html>

<html>

<head>


    <link rel="stylesheet" href="bootstrap.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />



</head>

<body>


    

    <div class="col-12 bg-primary">
        <div class="row">

        @role('super_admin')


<div class="container-fluid">
    <div class="row">

        <div class="col-12 bg-light text-center">
            <label class="form-label text-primary fw-bold fs-1"> All Student</label>
        </div>

        <div class="col-12 mt-3">
            <div class="row">
                <div class="offset-0 offset-lg-3 col-12 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-3 d-grid">
                            <button class="btn btn-warning">Search User</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-3 mb-3">
            <div class="row">
                <div class="col-2 col-lg-1 bg-primary py-2 text-end">
                    <span class="fs-2 fw-bold text-white">ID</span>
                </div>
                <div class="col-2 d-none d-lg-block bg-light py-2">
                    <span class="fs-4 fw-bold">Profile Image</span>
                </div>
                <div class="col-4 col-lg-2 bg-primary py-2">
                    <span class="fs-4 fw-bold text-white">User Name</span>
                </div>
                <div class="col-4 col-lg-2 d-lg-block bg-light py-2">
                    <span class="fs-4 fw-bold">Email</span>
                </div>
                <div class="col-2 d-none d-lg-block bg-primary py-2">
                    <span class="fs-4 fw-bold text-white">Mobile</span>
                </div>
                <div class="col-2 d-none d-lg-block bg-light py-2">
                    <span class="fs-4 fw-bold">Registered Date</span>
                </div>
                <div class="col-2 col-lg-1 bg-white"></div>
            </div>
        </div>

        @foreach ($data as $data)

        @if($data->id > 1)




        <div class="col-12 mt-3 mb-3">
            <div class="row">
                <div class="col-1 col-lg-1 bg-primary py-2 text-end">
                    <span class="fs-4 text-dark">{{ $data->id }}</span>
                </div>
                <div class="col-2 d-none d-lg-block bg-light py-2" onclick="viewMsgModal();">
                    <img src="resource/new_user.svg" style="height: 40px;margin-left: 80px;" />
                </div>
                <div class="col-5 col-lg-2 bg-primary py-2">
                    <span class="fs-4 text-dark">{{ $data->name }}</span>
                </div>
                <div class="col-5 col-lg-2 d-lg-block bg-light py-2">
                    <span class="fs-5 ">{{ $data->email }}</span>
                </div>
                <div class="col-2 d-none d-lg-block bg-primary py-2">
                    <span class="fs-4 text-dark">{{ $data->mobile }}</span>
                </div>
                <div class="col-2 d-none d-lg-block bg-light py-2">
                    <span class="fs-4 ">{{ $data->created_at }}</span>
                </div>
                <div class="col-2 col-lg-1 bg-white py-2 d-grid">

                    <a href="/edit/{{ $data->id }}" id="ub" class="btn btn-success">Update</a>





                    <a href="/delete/{{ $data->id }}" id="ub" class="btn btn-danger">Delete</a>



                </div>
            </div>
        </div>
        @endif
        @endforeach

    </div>
</div>

@endrole

@unlessrole('super_admin')
            <div class="col-12 bg-body rounded mt-4 mb-4">
                <div class="row g-2">

                    <div class="col-md-3 border-end">

                    </div>

                    <div class="col-md-5 border-end">
                        <div class="p-3 py-5">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="fw-bold">Examination Results</h4>
                            </div>

                            <div class="row mt-4">

                                <div class="col-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" readonly value="{{ Auth::user()->name }}" id="fname" />
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Grade</label>
                                    <input type="text" class="form-control" readonly value="{{ Auth::user()->grade }}" id="lname" />
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Mobile</label>
                                    <input type="text" class="form-control" readonly value="{{ Auth::user()->mobile }}" id="mobile" />
                                </div>



                                <div class="col-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" readonly value="{{ Auth::user()->email }}" />
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Rank</label>
                                    <input type="text" class="form-control" readonly value="{{ Auth::user()->rank }}" />
                                </div>
                                <div class="col-6">
                                    <label class="form-label">GPA</label>
                                    <input type="text" class="form-control" readonly value="2" />
                                </div>

                                <div>
                                    <br><br>
                                </div>

                                <div class="col-12">

                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Maks</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($userdate as $userdate)
                                            @if(Auth::user()->id == $userdate->users_email)
                                            <tr>

                                                <th scope="row"></th>
                                                <td>{{$userdate->subjects}}</td>
                                                <td>{{$userdate->marks}}</td>



                                            </tr>
                                            @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <br><br>
                                    <button type="button" class="btn btn-light">TOTAL</button> <button type="button" class="btn btn-light"><?php echo ("") ?></button>


                                    <br><br>


                                </div>



                            </div>

                        </div>
                    </div>


                </div>
            </div>

            @endunlessrole
        </div>
    </div>
   
    </div>


    </div>
    </div>



    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>