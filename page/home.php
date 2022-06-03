<?php require_once 'components/head.php'; ?>
<div class="col">
    <div class="p-5 shadow bg-white">
       <div class="row">
           <div class="col-4"> 
                <div class="card">
                    <a href="<?= $BASE_DIR ?>/crud.create" class="text-decoration-none text-light bg-primary rounded-3">
                    <div class="card-header">
                        CREATE
                        </div>
                        <div class="card-body">
                            <span class="me-2 fs-2">
                                <i class="bi bi-search"> Create Data</i>
                            </span>
                        </div>
                        </div>
                    </a>
                </div>
           <div class="col-4"> 
                <div class="card">
                            <a href="<?= $BASE_DIR ?>/crud.read" class="text-decoration-none text-light bg-success rounded-3">
                            <div class="card-header">
                                READ
                                </div>
                                <div class="card-body">
                                    <span class="me-2 fs-2">
                                    <i class="bi bi-box-arrow-down-left">Read Data</i>
                                    </span>
                                </div>
                                </div>
                            </a>
                        </div>
           <div class="col-4">   
               <div class="card">
                            <a href="<?= $BASE_DIR ?>/crud.update" class="text-decoration-none text-light bg-warning rounded-3">
                            <div class="card-header">
                                UPDATE
                                </div>
                                <div class="card-body">
                                    <span class="me-2 fs-2">
                                    <i class="bi bi-box-arrow-up-right">Update Data</i>
                                    </span>
                                </div>
                                </div>
                            </a>
                        </div>

            </div>
       </div>
      
    </div>

<?php
require_once 'components/foot.php';

/* EoF */