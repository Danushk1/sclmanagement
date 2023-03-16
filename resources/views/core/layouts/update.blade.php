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
    <title>Update</title>



</head>

<body>


    <div class="col-12 bg-primary">
        <div class="row">

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
                                    <input type="text" class="form-control" value="{{$posts->name}}" id="fname" />
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Grade</label>
                                    <input type="text" class="form-control" value="{{$posts->Grade}}" id="lname" />
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Mobile</label>
                                    <input type="text" class="form-control" value="{{$posts->mobile}}" id="mobile" />
                                </div>



                                <div class="col-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" readonly value="{{$posts->email}}" />
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Rank</label>
                                    <input type="text" class="form-control" readonly value="2" />
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
                                            <tr>
                                                @foreach($data as $data)
                                               
                                                @if($posts->id == $data->users_email)

                                                <td></td>
                                                <td>{{$data->subjects}}</td>
                                                <td>{{$data->marks}}</td>
                                            </tr>
                                            

                                            @endif
                                            @endforeach


                                        </tbody>
                                    </table>
                                    <br><br>
                                    <button type="button" class="btn btn-light">TOTAL</button> <button type="button" class="btn btn-light"><?php echo ("") ?></button>


                                    <br><br>
                                    <form action="/addsubmark/{{$posts->id}}" method="POST">
                                        {{csrf_field()}}
                                        <div class="col-12">
                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <input type="text" class="from-control " name="subject" placeholder="Enter Subject" required>
                                                    </select>



                                                </div>

                                                <div class="col-6">
                                                    <input type="number" class="from-control " name="marks" placeholder="Enter Marks" required>
                                                </div>

                                            </div>
                                        </div>





                                        <br>
                                        <input type="submit" class="btm btn-primary" value="save">



                                    </form>

                                </div>

                                <br>
                                <div class="col-12 d-grid mt-3">
                                    <button class="btn btn-primary" onclick="updateProfile();">Update</button>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>



    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>