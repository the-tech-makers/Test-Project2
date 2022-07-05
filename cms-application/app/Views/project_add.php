
<?php
require_once ('common/header.php');
 include ('common/left_menu.php');?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Add</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="message text-center text-green">
            <?php 
                if( isset( $_SESSION["message"] ) ) {
                    echo "<p>". $_SESSION["message"] . "</p>";
                    unset($_SESSION["message"]);
                   }
                 ?> 
        </div>
      <form method="post" action="<?php echo base_url('/project_add'); ?>" onsubmit="return(validateForm())">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Project Name</label>
                            <input type="text" name="project_name" id="projectName" class="form-control" placeholder="Enter your project name">
                            <span class="error_msg" id="project-name-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Project Description</label>
                            <textarea id="projectDesc" name="project_desc" class="form-control" rows="4" placeholder="Write your desc"></textarea>
                            <span class="error_msg" id="desc-error"></span>

                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <select id="status" class="form-control custom-select" placeholder="Select your status" name="project_status">
                                <option selected disabled>Select one</option>
                                <option value="1">On Hold</option>
                                <option value="2">Canceled</option>
                                <option value="3">Success</option>
                            <span class="error_msg" id="status-error"></span>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Client Company</label>
                            <input type="text" name="client_company" id="clientCompany" class="form-control" placeholder="Enter your client company">
                            <span class="error_msg" id="client-company-error"></span>

                        </div>
                        <div class="form-group">
                            <label for="inputProjectLeader">Project Leader</label>
                            <input type="text" name="project_leader" id="projectLeader" class="form-control" placeholder="Enter your project leader">
                            <span class="error_msg" id="project-leader-error"></span>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Budget</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Estimated budget</label>
                            <input type="number" name="estimated_budget" id="estimatedBudget" class="form-control" placeholder="Enter your estimated budget">
                            <span class="error_msg" id="estimated-budget-error"></span>

                        </div>
                        <div class="form-group">
                            <label for="inputSpentBudget">Total amount spent</label>
                            <input type="number" name="total_amount" id="totalAmount" class="form-control" placeholder="Enter your total amount">
                            <span class="error_msg" id="total-amount-error"></span>

                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedDuration">Estimated project duration</label>
                            <input type="number" name="estimated_project_duration" id="estimatedDuration" class="form-control" placeholder="Enter your project duration">
                            <span class="error_msg" id="project-duration-error"></span>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="project.php" class="btn btn-secondary">Cancel</a>
                <button class="btn btn-success float-right" type="submit" name="create_user" value="Create new Project">
                Create new Project
                </button>
            </div>
        </div>
     </form>
    </section>
    <!-- Control Sidebar -->
    <?php include ('common/right_menu.php');?> 
</div>
<?php
require_once ('common/footer.php');
?>
