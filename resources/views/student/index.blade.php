<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>



	<div class="wrap-table ">
        <a id="student_add_modal_btn" class="btn btn-sm btn-info" href="">Add new student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Gender</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="data_show">









					</tbody>
				</table>
			</div>
		</div>
	</div>

{{--     student add modal--}}

    <div id="student_add_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="msg"></div>
                <div class="modal-header">
                    <h2>Add new Student</h2>

                </div>
                <div class="modal-body">
                    <form id="modal_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input name="username" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <input name="gender" value="male" type="radio" id="male"><label for="male">Male</label>
                            <input name="gender" value="female" type="radio" id="female"><label for="female">Female</label>
                        </div>
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input name="photo" class="form-control-file" type="file">
                        </div>
                        <div class="form-group">

                            <input class="btn btn-sm btn-info" name="submit"  type="submit" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

{{--           student show modal--}}
    <div id="student_show_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="msg"></div>
                <div class="modal-body">
                    <div class="single-student">
                        <img style="max-width: 100%;" src="" alt="">
                        <h2>Shahnewaj Sajib</h2>
                        <table class="table table-striped">
                            <tr>
                                <td>name</td>
                                <td id="name">name</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td id="email">name</td>
                            </tr>
                            <tr>
                                <td>Cell</td>
                                <td id="cell">name</td>
                            </tr>
                            <tr>
                                <td>username</td>
                                <td id="username">name</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    student edit modal--}}

    <div id="student_edit_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="msg"></div>
                <div class="modal-header">
                    <h2>Edit Student</h2>


                </div>
                <div class="modal-body">
                    <form id="modal_edit_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input name="username" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <input name="gender" value="male" type="radio" id="male"><label for="male">Male</label>
                            <input name="gender" value="female" type="radio" id="female"><label for="female">Female</label>
                        </div>
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input name="photo" class="form-control-file" type="file">
                        </div>
                        <div class="form-group">

                            <input class="btn btn-sm btn-info" name="submit"  type="submit" value="update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
