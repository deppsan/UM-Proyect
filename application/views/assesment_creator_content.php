<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<div class="page-content" style="min-height:1194px">


<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Create Assessment
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Create Assessment</a>
            <i class="fa fa-angle-right"></i>
        </li>

    </ul>
</div>
<!-- END PAGE HEADER-->


<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue" id="form_wizard_1">

            <div class="portlet-title">
                <div class="caption">
                    Assessment Wizard - <span class="step-title">
								Step 1 of 4 </span>
                </div>

            </div>

            <div class="portlet-body form">
                <form role="form" class="form-horizontal" name="frmAssessment" id="submit_form" method="post" action="<?php echo base_url() ?>index.php/assesment_creator_controller/createAssessment">
                    <div class="form-wizard">
                        <div class="form-body" id="formBody">
                            <ul class="nav nav-pills nav-justified steps">
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab" class="step inactiveLink">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Category  </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab" class="step inactiveLink">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Skill </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab" class="step inactiveLink">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Setup </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab4" data-toggle="tab" class="step inactiveLink">
												<span class="number">
												4 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Create </span>
                                    </a>
                                </li>

                            </ul>

                            <div id="bar" class="progress progress-striped" role="progressbar">
                                <div class="progress-bar progress-bar-success" style="width: 25%;">
                                </div>
                            </div>

                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                        You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                        Your form validation is successful!
                                </div>



                                <div class="tab-pane active" id="tab1">



                                    <div class="form-group">
                                        <div class="col-md-5">
                                            <label id="" style="font-size: 30px; margin-left: 4% "><b>Math</b></label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-5" style="margin-left: 4%">
                                            <label id="lCategory"><b>Select a Category</b></label>
                                            <select class="form-control" name="cmbCategory" id="cmbCategory">
                                                <option value="0">Select..</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" style="display:none;">
                                        <div class="col-md-5" style="margin-left: 4%">
                                            <label name="lSubCategory" id="lSubCategory"><b>Select a Subcategory</b></label>
                                            <select class="form-control"  name="cmbSubCategory" id="cmbSubCategory">
                                                <option value="0">Select...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" style="display:none;">
                                        <div class="col-md-5" style="margin-left: 4%">
                                            <button type="button" class="btn btn-default" name="btnResetCategory" id="btnResetCategory"><i class="fa fa-history"></i> Reset</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane" id="tab2">

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label id="" style="font-size: 30px; margin-left: 4%;"><b>Math > Addition</b></label>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-offset-1 col-md-5" style="margin-left: 4%;">
                                            <div id="Skill" class="form-group">
                                                <div class="col-md-12">
                                                    <label id="lSkill"><b>Select a Skill</b></label>
                                                    <select class="form-control" name="cmbSkill" id="cmbSkill">
                                                        <option value="0">Select...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="SpeSkill" class="form-group" style="display:none;">
                                                <div class="col-md-offset-1 col-md-11">
                                                    <label id="lSpeSkill"><b>Select Specific Skill</b></label>
                                                    <select class="form-control" name="cmbSpeSkill" id="cmbSpeSkill">
                                                        <option value="0">Select...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group" style="display:none;">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-default" name="btnResetSkill" id="btnResetSkill"><i class="fa fa-history"></i> Select Another Skill</button>
                                                </div>
                                            </div>
                                            <div id="ExType" class="form-group" style="display:none;">
                                                <div class="col-md-12">
                                                    <label id="lExType"><b>Exam Type</b></label>
                                                    <select class="form-control" name="cmbExType" id="cmbExType">
                                                        <option value="0">Select...</option>
                                                        <option value="1">Fill in the Blank</option>
                                                        <option value="2">Multiple Choice</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-5" style="margin-left: 10%">
                                            <div id="Example" class="form-group">
                                                <div class="col-md-11">
                                                    <label style="float:right;"><b>Example</b></label>
                                                    <textarea class="form-control" rows="3" readonly=""  name="txtExample" id="txtExample"> --- </textarea >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="tab-pane" id="tab3">

                                    <div class="form-group">

                                        <div class="col-md-5">
                                            <label class="col-md-offset-2" style="margin-bottom: 30px; font-size:18px;"><b>Assessment Setup</b></label>

                                            <div class="form-group">
                                                <label class="col-md-6 control-label">Num. Exercises</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="cmbNumExercises" id="cmbNumExercises">
                                                        <option>5</option>
                                                        <option>10</option>
                                                        <option>15</option>
                                                        <option>20</option>
                                                        <option>25</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label">Num. Digits</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" name="cmbNumDigits" id="cmbNumDigits">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label">Set Num. Limit</label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="txtSetLimit" id="txtSetLimit"placeholder="99">
                                                    <span class="help-block">
										            Hover for Details </span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-7">
                                            <label class="col-md-offset-1" style="margin-bottom: 30px; font-size:18px;"><b>Time Options</b></label>


                                            <div class="form-group" style="margin-bottom: 0;">
                                                <div class="col-md-offset-1 col-md-3">
                                                    <label class="control-label" style="margin-bottom: 10px; font-weight: bold; float:right;">Time Limit</label>
                                                </div>

                                                <div class="checkbox-list col-md-3" style="width: 24%;">
                                                    <label style="margin-bottom: 20px; margin-top: 7px;">
                                                        <div class="checker"><span><input type="checkbox"></span>
                                                        </div>
                                                        Global
                                                    </label>
                                                </div>

                                                <div class="input-group col-md-3" style="width:14%; margin-left: 20px;">
                                                    <input type="text" class="form-control" id="txtTimeLimitGlobal" style="min-width:60px;" placeholder="min">
                                                        <span class="input-group-addon" style="min-width:50px;">
                                                            min
												        </span>
                                                </div>


                                            </div>



                                            <div class="form-group">
                                                <div class="checkbox-list col-md-offset-4 col-md-3" style="width: 24%;">
                                                    <label style="margin-bottom: 20px; margin-top: 7px;">
                                                        <div class="checker "><span><input type="checkbox"></span>
                                                        </div>
                                                        Per Exercise
                                                    </label>
                                                </div>

                                                <div class="input-group col-md-3" style="width:14%; margin-left: 20px;">
                                                    <input type="text" class="form-control" id="txtTimeLimitPerExercise" style="min-width:60px;" placeholder="sec">
                                                    <span class="input-group-addon" style="min-width:50px;">
                                                            sec
												    </span>

                                                </div>

                                            </div>


                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label class="col-md-offset-2" style="margin-bottom: 15px; font-size:18px;"><b>Feedback</b></label>


                                            <div class="form-group">


                                                <div class="checkbox-list col-md-offset-3 col-md-8">
                                                    <label style="margin-top: 7px;">
                                                        <div class="checker "><span><input type="checkbox"></span>
                                                        </div>
                                                        Show Correct Answer
                                                    </label>
                                                    <label style="margin-top: 7px;">
                                                        <div class="checker "><span><input type="checkbox"></span>
                                                        </div>
                                                        Show Total Score
                                                    </label>
                                                    <label style="margin-top: 7px;">
                                                        <div class="checker "><span><input type="checkbox"></span>
                                                        </div>
                                                        Allow Review
                                                    </label>
                                                    <label style="margin-top: 7px;">
                                                        <div class="checker "><span><input type="checkbox"></span>
                                                        </div>
                                                        Allow Retake
                                                    </label>
                                                </div>


                                            </div>

                                        </div>



                                    </div>


                                </div>

                                <div class="tab-pane" id="tab4">

                                    <div class="form-group">

                                        <div class="col-md-4">
                                            <label class="col-md-offset-2" style="margin-bottom: 15px; font-size:18px;"><b>Copies</b></label>
                                            <div class="form-group">
                                                <div class="checkbox-list col-md-offset-2 col-md-8">
                                                    <label style="margin-top: 7px;">
                                                        <div class="checker "><span><input type="checkbox"></span>
                                                        </div>
                                                        Different Copies
                                                    </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-6 col-md-offset-1 control-label" >Num. Copies</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" id="tNumCopies" placeholder="3">
                                                </div>

                                            </div>
                                        </div>
                                    </div>






                                </div>

                            </div>



                        <div class="form-actions" id="divActions">
                            <div class="row">
                                <div class="col-md-offset-5 col-md-7">
                                    <a href="javascript:;" class="btn blue button-next" name="btnContinue" id="btnContinue" >
                                        Continue <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                    <a href="javascript:;" class="btn green button-submit" name="btnCreate" id="btnCreate">
                                        Create <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                    <a href="javascript:;" class="btn default button-previous disabled" name="btnBack" id="btnBack">
                                        <i class="m-icon-swapleft"></i> Back </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var urlBase = "<?php echo base_url()?>";
</script>



        </div>

    </div>
</div>
</div>
<!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->
