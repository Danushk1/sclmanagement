<!DOCTYPE html>

<html>

<head>


    <link rel="stylesheet" href="bootstrap.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />



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
                                        @foreach($mark as $mark)
                                            @if(Auth::user()->id == $mark->users_email)
                                            <tr>

                                                <th scope="row"></th>
                                                <td>{{$mark->subjects}}</td>
                                                <td>{{$mark->marks}}</td>



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
        </div>


    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

</body>

</html>