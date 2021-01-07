
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Users</h1>
                        <div class="float-sm-right text-zero">
                            <a href="<?php echo URL.'users/add_user_form' ?>" class="btn btn-primary btn-lg">Add new</a>
                            
                        </div>
                        
                    </div>

                    
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 list" data-check-all="checkAll">
                    <?php foreach($users as $u) { ?>
                    <div class="card d-flex flex-row mb-3">
                        <div class="d-flex flex-grow-1 min-width-zero">
                            <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                <a class="list-item-heading mb-1 truncate w-40 w-xs-100">
                                    <?php echo $u['name']; ?>
                                </a>
                                
                                <div class="w-15 w-xs-100">
                                    <span class="badge badge-<?php if($u['type']=='business') echo 'secondary'; 
                                    else if($u['type']=='marketing') echo 'danger'; 
                                    else if($u['type']=='production') echo 'primary'; 
                                    else if($u['type']=='management') echo 'info'; 
                                    else if($u['type']=='procurement') echo 'dark'; ?>">
                                    
                                    <?php echo $u['type']; ?></span>
                                </div>
                                <p class="mb-1 text-muted text-small w-50 w-xs-100"><?php echo $u['email']; ?></p>
                            </div>
                            <div class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                                    <a href="<?php echo URL.'users/delete/'.$u['id']; ?>" class="btn btn-outline-primary mb-1">Delete</a>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                   
                    
                   


                    
                </div>
            </div>
        </div>
    </main>
