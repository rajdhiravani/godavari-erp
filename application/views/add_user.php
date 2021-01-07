<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Add User</h1>
                    
                    <div class="separator mb-5"></div>


                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <!-- <h5 class="mb-4">Horizontal</h5> -->

                            <form method="post" action="<?php echo URL.'users/add_user'; ?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Type</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2-single" name="type">
                                                <option selected>business</option>
                                                <option>marketing</option>
                                                <option>production</option>
                                                <option>procurement</option>
                                                <option>management</option>
                                            </select> 
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                   

                    


                </div>
            </div>
        </div>
    </main>