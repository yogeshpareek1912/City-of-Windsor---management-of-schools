<div class="content">
            <div class="container-fluid">
                <?php include("libs/alerts.php"); ?>
                <div class="row"><!--row begins-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Students</strong></p>
                                            <?php countrecords("students"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="students_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p> <strong>Staff Profile</strong></p>
                                            <?php countrecords("feescollection"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="feescollection_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-credit-card"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p> <strong>Schools</strong></p>
                                            <?php countrecords("branch"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="branch_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-id-badge"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Student Performance</strong></p>
                                           <?php countrecords("teachers"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="teachers_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div><!--row ends-->
                <!--row begins-->
                    <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-harddrives"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Staff Performance</strong></p>
                                           <?php countrecords("subjects"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="subjects_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-crown"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>School Performance</strong></p>
                                            <?php countrecords("classes"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="classes_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-blackboard"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Staff Performance</strong></p>
                                            <?php countrecords("streams"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="streams_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>View
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--row begins-->
                
                    <!--row begins-->
            


<!--cards and widgets above here-->
        <footer class="footer">
          <!--   <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="#">
                               <strong>School</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                              <strong>Management</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <strong>System</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <strong>Admin</strong>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>,Brought &nbsp;<i class="ti-heart heart"></i> &nbsp;To You By <a href="http://code-projects.org/">Code-Projects</a>
                </div>
            </div> -->
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b> City of Windsor Management Of Schools admin</b> - a beautiful system for managing your school."

            },{
                type: 'success',
                timer: 3000
            });

    	});
	</script>

</html>