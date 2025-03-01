<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Dashboard</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?= base_url('assets/dist/css/style.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/morris.js/morris.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<a href="index2.html" class="logo">
				<span class="logo-mini"><b>A</b>LT</span>
				<span class="logo-lg"><b>Admin</b>LTE</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">

						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="hidden-xs">Alexander Pierce</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div class="pull-right">
										<a href="<?= base_url('user/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?= base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Alexander Pierce</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
			</section>
		</aside>

		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Ticket Management
					<small>Manage and respond to tickets</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Tickets</li>
				</ol>
			</section>

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">List of Tickets</h3>
					<div class="filters">
						<!-- Filter by status -->
						<select id="status-filter" class="form-control" style="width: 200px; display: inline-block;">
							<option value="">All Statuses</option>
							<option value="open">Open</option>
							<option value="closed">Closed</option>
							<!-- Add more status options as needed -->
						</select>

						<!-- Search by title -->
						<input type="text" id="title-search" class="form-control" placeholder="Search by Title" style="width: 200px; display: inline-block;" />
					</div>
				</div>
				<div class="box-body">
					<table id="ticketTable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Title</th>
								<th>Description</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<!-- Data will be populated via AJAX -->
						</tbody>
					</table>
				</div>
			</div>



		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.18
			</div>
			<strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
			reserved.
		</footer>

		<aside class="control-sidebar control-sidebar-dark" style="display: none;">
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
				<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane" id="control-sidebar-home-tab">
					<h3 class="control-sidebar-heading">Recent Activity</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-birthday-cake bg-red"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

									<p>Will be 23 on April 24th</p>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-user bg-yellow"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

									<p>New phone +1(800)555-1234</p>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

									<p>nora@example.com</p>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-file-code-o bg-green"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

									<p>Execution time 5 seconds</p>
								</div>
							</a>
						</li>
					</ul>

					<h3 class="control-sidebar-heading">Tasks Progress</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Custom Template Design
									<span class="label label-danger pull-right">70%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Update Resume
									<span class="label label-success pull-right">95%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-success" style="width: 95%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Laravel Integration
									<span class="label label-warning pull-right">50%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Back End Framework
									<span class="label label-primary pull-right">68%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
								</div>
							</a>
						</li>
					</ul>

				</div>
				<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<form method="post">
						<h3 class="control-sidebar-heading">General Settings</h3>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Report panel usage
								<input type="checkbox" class="pull-right" checked>
							</label>

							<p>
								Some information about this general settings option
							</p>
						</div>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Allow mail redirect
								<input type="checkbox" class="pull-right" checked>
							</label>

							<p>
								Other sets of options are available
							</p>
						</div>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Expose author name in posts
								<input type="checkbox" class="pull-right" checked>
							</label>

							<p>
								Allow the user to show his name in blog posts
							</p>
						</div>

						<h3 class="control-sidebar-heading">Chat Settings</h3>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Show me as online
								<input type="checkbox" class="pull-right" checked>
							</label>
						</div>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Turn off notifications
								<input type="checkbox" class="pull-right">
							</label>
						</div>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Delete chat history
								<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
							</label>
						</div>
					</form>
				</div>
			</div>
		</aside>

		<div class="control-sidebar-bg"></div>

	</div>

	<!-- jQuery -->
	<script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>

	<!-- jQuery UI (required for some UI components) -->
	<script src="<?= base_url('assets/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>

	<!-- Bootstrap (depends on jQuery) -->
	<script src="<?= base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

	<!-- Morris.js (optional, depends on Raphael.js) -->
	<script src="<?= base_url('assets/bower_components/raphael/raphael.min.js'); ?>"></script>
	<script src="<?= base_url('assets/bower_components/morris.js/morris.min.js'); ?>"></script>

	<!-- Sparkline (requires jQuery) -->
	<script src="<?= base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>

	<!-- jVectorMap (requires jQuery) -->
	<script src="<?= base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
	<script src="<?= base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>

	<!-- Knob (requires jQuery) -->
	<script src="<?= base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>

	<!-- Moment.js (optional, for date/time manipulation) -->
	<script src="<?= base_url('assets/bower_components/moment/min/moment.min.js'); ?>"></script>

	<!-- Bootstrap Daterangepicker (requires Moment.js and Bootstrap) -->
	<script src="<?= base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>

	<!-- Bootstrap Datepicker (requires Bootstrap) -->
	<script src="<?= base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>

	<!-- Bootstrap WYSIWYG (requires jQuery and Bootstrap) -->
	<script src="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>

	<!-- Slimscroll (for custom scrollbars) -->
	<script src="<?= base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>

	<!-- FastClick (for faster touch events) -->
	<script src="<?= base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>

	<!-- AdminLTE (your theme framework) -->
	<script src="<?= base_url('assets/dist/js/adminlte.min.js'); ?>"></script>

	<!-- Dashboard script (your custom page script) -->
	<script src="<?= base_url('assets/dist/js/pages/dashboard.js'); ?>"></script>

	<!-- Demo script (optional, for demo pages) -->
	<script src="<?= base_url('assets/dist/js/demo.js'); ?>"></script>

	<!-- DataTables -->
	<script src="<?= base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?= base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>

	<!-- Custom widget bridge (required for DataTables) -->
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>

	<script>
		$(document).ready(function() {
			// Initialize DataTable
			var table = $('#ticketTable').DataTable({
				'paging': true,
				'lengthChange': true,
				'searching': false, // Disable the default search, we will handle custom search
				'ordering': false,
				'info': true,
				'autoWidth': true,
				'columns': [
					{ 'data': 'id' }, // column 0
					{ 'data': 'title' }, // column 1
					{ 'data': 'description' }, // column 2
					{ 'data': 'status' }, // column 3
					{ 'data': null, 'defaultContent': '' } // column 4 (action buttons)
				]
			});

			// Fetch All Tickets and populate the table
			function fetchAllTickets() {
				$.ajax({
					url: "<?= base_url('ticket/getAllTickets') ?>",
					type: "GET",
					dataType: "json",
					success: function(data) {
						let tableBody = '';

						$.each(data, function(index, ticket) {
							tableBody += `
                            <tr>
                                <td>${ticket.id}</td>
                                <td>${ticket.title}</td>
                                <td>${ticket.description}</td>
                                <td>${ticket.status}</td>
                                <td>
                                    <button class="btn btn-info btn-sm">View</button>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-respond" data-ticket-id="${ticket.id}">Respond</button>
                                    <button class="btn btn-danger btn-sm" onclick="closeTicket(${ticket.id})">Close</button>
                                </td>
                            </tr>`;
						});

						table.clear().draw(); // Clear current table data
						table.rows.add($(tableBody)).draw(); // Add new rows and redraw
					},
					error: function(xhr, status, error) {
						console.error("Error fetching tickets:", error);
						alert("An error occurred while fetching tickets.");
					}
				});
			}

			// Filter tickets based on status
			$('#status-filter').change(function() {
				var selectedStatus = $(this).val();
				table.columns(3).search(selectedStatus).draw(); // Column 3 is the "Status" column (zero-indexed)
			});

			// Filter tickets based on title search
			$('#title-search').keyup(function() {
				var searchTerm = $(this).val();
				table.columns(1).search(searchTerm).draw(); // Column 1 is the "Title" column (zero-indexed)
			});

			// Fetch Ticket Status
			function fetchTicketStatus() {
				$.ajax({
					url: "<?= base_url('ticket/getTicketStatus') ?>",
					type: "GET",
					dataType: "json",
					success: function(data) {
						let statusOptions = '';
						$.each(data, function(index, status) {
							statusOptions += `<option value="${status.id}">${status.name}</option>`;
						});
						$("#ticket-status").html(statusOptions);
					},
					error: function(xhr, status, error) {
						console.error("Error fetching ticket status:", error);
						alert("An error occurred while fetching ticket statuses.");
					}
				});
			}

			// Close Ticket
			function closeTicket(ticketId) {
				$.ajax({
					url: "<?= base_url('ticket/closeTicket') ?>/" + ticketId, // Ensure the ticket ID is passed in the URL
					type: "POST",
					dataType: "json",
					success: function(response) {
						if (response.status === 'success') {
							alert("Ticket closed successfully!");
							fetchAllTickets(); // Reload tickets without refreshing the page
						} else {
							alert("Failed to close ticket.");
						}
					},
					error: function(xhr, status, error) {
						console.error("Error closing ticket:", error);
						alert("An error occurred while closing the ticket.");
					}
				});
			}

			// Respond to Ticket
			$(document).on('click', '.btn-warning', function() {
				// Get the ticket ID from the data attribute of the button
				let ticketId = $(this).data('ticket-id');

				// Set the ticket ID in a hidden input field or elsewhere in the modal
				$('#ticket-id-input').val(ticketId); // assuming there's an input field with id "ticket-id-input" in the modal
			});

			// Respond to Ticket
			$(document).on('click', '#submit-response', function() {
				let ticketId = $('#ticket-id-input').val(); // Get the ticket ID from the hidden input
				let response = $('#response').val();

				// Perform AJAX to send the response
				$.ajax({
					url: "<?= base_url('ticket/respondToTicket') ?>",
					type: "POST",
					data: {
						ticketId: ticketId,
						response: response
					},
					dataType: "json",
					success: function(response) {
						if (response.status === 'success') {
							alert("Response submitted successfully!");
							$('#modal-respond').modal('hide');
							fetchAllTickets(); // Reload tickets to update the status
						} else {
							alert("Failed to submit response.");
						}
					},
					error: function() {
						alert("Something went wrong. Try again!");
					}
				});
			});

			// Add a click event listener to the "Sign out" button
			$(".btn-flat").click(function() {
				// Send an AJAX request to log the user out
				$.ajax({
					url: "<?= base_url('logout') ?>", // Adjust the URL to your logout route
					type: "GET",
					success: function(response) {
						// Redirect the user to the login page or home after successful logout
						window.location.href = "<?= base_url('login') ?>"; // or wherever you want to redirect
					},
					error: function(xhr, status, error) {
						console.error("Error during logout:", error);
						alert("An error occurred during logout.");
					}
				});
			});

			// Load tickets and statuses
			fetchAllTickets(); // Load tickets
			fetchTicketStatus(); // Load ticket statuses
		});
	</script>


</body>

</html>
