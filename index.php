<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Ajax CRUD</title>
</head>
<body>
<div class="container pt-5 " id="page1">

        <!-- form  -->
        <form id="dform" enctype='multipart/form-data' method="POST" class="pt-5">

            <!-- doctor name   -->
            <div class="col-lg-12">
                <div class=" row form-group ">
                    <div class="col-lg-2">
                        <label for="name">Name :</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" id="name">
                        <input type="hidden" id="id" name="id" value="">
                    </div>
                    <div>
                        <span class="error">*</span>
                    </div>
                </div>
            </div>


                      <!-- mo no.. -->
            <!-- <div class="col-lg-12">
                <div class="row form-group">

                    <div>
                        <span class="error">* </span>
                    </div>
                </div>
            </div> -->
            <!-- Speciality checkbox  -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-2">
                        <p>Speciality :</p>
                    </div>
                    <div class="col-sm-10">
                        <input type="checkbox" class="spec" id="expertise1" name="expertise[]" value="Ayurvedic">
                        <label for="expertise1">Ayurvedic </label><br>
                        <input type="checkbox" class="spec" id="expertise2" name="expertise[]" value="Dental">
                        <label for="expertise2">Dental</label><br>
                        <input type="checkbox" class="spec" id="expertise3" name="expertise[]" value="neurologist">
                        <label for="expertise3"> Neurologist</label><br>
                    </div>
                </div>
            </div>
            <!-- upload file -->
            <div class="col-lg-12">
                <div class="form-group row">
                    <label for="number" class="col-sm-2">Upload your File :</label>
                    <input type="file" name="file" id="file" class="col-sm-10">
                    <input type="hidden" id="filecount" value='0'>
                    <!-- <img src=" $_FILES['file']" height="50" width="50"> -->
                </div>
            </div>

            <!-- past histry -->
            <div class="col-lg-12">
                <div class="form-group row ">
                    <div class="col-lg-2">
                        <label for="name" class="">Any Past History ? : </label>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input radio2" type="radio" name="history" id="pastyes" value="Yes">
                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input radio2" type="radio" name="history" id="pastno" value="No">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                        <!-- past historyv tell as -->
                        <div class=" row form-group col-lg-12 " id="pasthistory">
                            <div class="">
                                <label for="pwd">Tell Past History:</label>
                            </div>
                            <div class="col-lg-6">
                                <textarea name="pasthistory" id="history" cols="40" rows="3" placeholder="Enter Past History"></textarea>
                            </div>
                            <div>
                                <span class="error">* </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- submit butten -->

            <div class="col-lg-12  ">
                <div class="row">
                    <div class="col-lg-2">
                        <button type="submit" id="submit" class="btn btn-primary">Add Info</button>
                    </div>
                    <div class="col-lg-4">
                        <button type="" id="" class="btn btn-primary">Clear</button>
                    </div>

                </div>

            </div>

        </form>
    </div>

    
</body>
</html>