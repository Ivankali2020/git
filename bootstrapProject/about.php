<?php include 'template/header.php'; ?>

<div class="col-12 bg-white-50 vh-100 about">
                            <div class="col-12">
                                <div class="card my-3">
                                    <div class="card-body py-3 d-flex align-items-center">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb mb-0">
                                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                                              <li class="breadcrumb-item"><a href="#">Library</a></li>
                                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                                            </ol>
                                          </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-8 col-xl-8">
                                   <div class="card card-items " id="inputcard">
                                        <div class="card-title col-12 text-uppercase px-3 mb-0 mt-3 d-flex justify-content-between align-items-center">
                                   
                                                <div class="fw-bolder"> Order List Today </div>
                                                <div class="fw-bolder " id="inputbtn"><i class="fa fa-window-maximize nav" id=''></i> </div>
                                       
                                        </div>
                                        
                                       <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <form action="get" class="form-group"> 
                                                    <label for="" class=""><span class="">Photo Upload</span> <i class=" fa fa-id-card"></i></label>
                                                    <input type="file" class="form-control p-1 mb-3">

                                                    <label for="" class="">Item Name</label>
                                                    <input type="text" class="form-control p-1 mb-3">

                                                    <label for="" class="">Item Name</label>
                                                    <input type="text" class="form-control p-1 mb-3">

                                                    <label for="" class="">Item Type</label>
                                                    <select class="form-select  p-1 mb-3 " aria-label="Default select example">
                                                        <option selected>Select Items</option>
                                                        <option value="1">Book </option>
                                                        <option value="2">Pencil</option>
                                                        <option value="3">Blackboard</option>
                                                        <option value="4">Marker</option>
                                                    </select>

                                                    <label for="" class="">Category</label>
                                                    <select class="form-select  p-1 mb-3 " aria-label="Default select example">
                                                        <option selected>Select Category</option>
                                                        <option value="1">Book </option>
                                                        <option value="2">Pencil</option>
                                                        <option value="3">Blackboard</option>
                                                        <option value="4">Marker</option>
                                                    </select>

                                                    <label for="" class="">Sub Category</label>
                                                    <select class="form-select  p-1 mb-3 " aria-label="Default select example">
                                                        <option selected>Select Sub Category</option>
                                                        <option value="1">Book </option>
                                                        <option value="2">Pencil</option>
                                                        <option value="3">Blackboard</option>
                                                        <option value="4">Marker</option>
                                                    </select>



                                                </form>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="" class="">Unit</label>
                                                        <input type="text" class="form-control p-1 mb-3">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="" class="">Sub Category</label>
                                                        <select class="form-select  p-1 mb-3 " aria-label="Default select example">
                                                            <option selected>Select Unit</option>
                                                            <option value="1">Book </option>
                                                            <option value="2">Pencil</option>
                                                            <option value="3">Blackboard</option>
                                                            <option value="4">Marker</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <label for="" class="">Unit</label>
                                                <input type="text" class="form-control p-1 mb-3">

                                                <label for="" class="">Description</label>
                                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-secondary float-end">Upload Item</button>
                                       </div>
                                   </div>
                                </div>
                            </div>

                        </div>
<?php include 'template/footer.php'; ?>

