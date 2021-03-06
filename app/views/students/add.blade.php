@extends('layouts.default')

@section('content')
	<div class="col-md-12">
		<div class="page-header">
			<h3>
				{{ $title }}
				<a href="{{ URL::route('admin.students') }}" class='btn btn-primary btn-sm pull-right' style="vertical-align: middle;">
					<span class="glyphicon glyphicon-chevron-left"></span> View All Students
				</a>
			</h3>
		</div>
		
		{{ Form::open(array('route' => 'admin.students.add', 'files' => true)) }}

			@include('includes.alert')
			<div class="row">
				<div class="col-md-6">
					<!-- personal information -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Personal Information</legend>
					    
					    <div class="form-group">
				          	{{ Form::label('full_name', 'Full Name *') }}
				          	{{ Form::text('full_name', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'full_name') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('nick_name', 'Nick Name') }}
				          	{{ Form::text('nick_name', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'nick_name') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('fathers_name', 'Father Name') }}
				          	{{ Form::text('fathers_name', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'fathers_name') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('mothers_name', 'Mother Name') }}
				          	{{ Form::text('mothers_name', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'mothers_name') }}
				        </div>

						<div class="form-group">
				          	{{ Form::label('email', 'Email Address') }}
				          	{{ Form::text('email', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'email') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('alternate_email', 'Alternate Email') }}
				          	{{ Form::text('alternate_email', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'alternate_email') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('phone', 'Phone') }}
				          	{{ Form::text('phone', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'phone') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('mobile', 'Mobile') }}
				          	{{ Form::text('mobile', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'mobile') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('gender', 'Gender') }}
				          	{{ Form::select('gender', User::$genders, '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'gender') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('website', 'Website') }}
				          	{{ Form::text('website', '', array('class' => 'form-control', 'placeholder' => 'http://www.example.com')) }}
				          	{{ Form::error($errors, 'website') }}
				        </div>
						
				        <div class="form-group">
				          	{{ Form::label('date_of_birth', 'Date of Birth') }}
				          	{{ Form::text('date_of_birth', '', array('class' => 'form-control', 'datepicker',  'autocomplete' => 'off')) }}
				          	{{ Form::error($errors, 'date_of_birth') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('place_of_birth', 'Place of Birth') }}
				          	{{ Form::text('place_of_birth', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'place_of_birth') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('marital_status', 'Marital Status') }}
				          	{{ Form::select('marital_status', User::$marital_statuses, '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'marital_status') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('blood_group', 'Blood Group') }}
				          	<div class="row">
					          	<div class="col-md-6">
					          		{{ Form::select('blood_group', User::$blood_groups, '', array('class' => 'form-control')) }}
					          		{{ Form::error($errors, 'blood_group') }}
					          	</div>
					          	<div class="col-md-6">
					          		{{ Form::select('blood_type', User::$blood_types, '', array('class' => 'form-control')) }}
					          		{{ Form::error($errors, 'blood_type') }}
					          	</div>
					        </div>
				        </div>
						<div class="form-group">
				          	{{ Form::label('permanent_address', 'Permanent Address') }}
				          	{{ Form::text('permanent_address', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'permanent_address') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('present_address', 'Present Address') }}
				          	{{ Form::text('present_address', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'present_address') }}
				        </div>
						
				        <div class="form-group">
				          	{{ Form::label('religion', 'Religion') }}
				          	{{ Form::text('religion', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'religion') }}
				        </div>
				        <div class="form-group">
				          	{{ Form::label('nationality', 'Nationality') }}
				          	{{ Form::text('nationality', 'Bangladeshi', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'nationality') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('about', 'About') }}
				          	{{ Form::textarea('about', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'about') }}
				        </div>
					</fieldset>

					<!-- Upload Picture -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Upload Picture</legend>

						<div class="form-group">
						    {{ Form::label('picture', 'Upload Picture') }}
						    {{ Form::file('picture', array('class' => 'form-control')) }}
						    {{ Form::error($errors, 'picture') }}
						</div>
					</fieldset>
			    </div>
			    <div class="col-md-6">
					<!-- academic information -->			    	
			    	<fieldset class="scheduler-border">
						<legend class="scheduler-border">Academic Information</legend>
						
						<div class="form-group">
				          	{{ Form::label('reg', 'Registration No *') }}
				          	{{ Form::text('reg', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'reg') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('batch', 'Batch *') }}
				          	{{ Form::select('batch', $batches, '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'batch') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('thesis', 'Thesis') }}
				          	{{ Form::textarea('thesis', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'thesis') }}
				        </div>
					</fieldset>

					<!-- information about college-->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Information About College</legend>
					    
					    <div class="form-group">
				          	{{ Form::label('college_name', 'College Name') }}
				          	{{ Form::text('college_name', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'college_name') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('college_exam_name', 'College Exam Name') }}
				          	{{ Form::text('college_exam_name', '', array('class' => 'form-control', 'placeholder' => 'HSC/Alim/A Level')) }}
				          	{{ Form::error($errors, 'college_exam_name') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('college_passing_year', 'College Passing Year') }}
				          	{{ Form::text('college_passing_year', '', array('class' => 'form-control', 'placeholder' => '2010')) }}
				          	{{ Form::error($errors, 'college_passing_year') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('college_board_name', 'College Board Name') }}
				          	{{ Form::text('college_board_name', '', array('class' => 'form-control', 'placeholder' => 'Dhaka')) }}
				          	{{ Form::error($errors, 'college_board_name') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('college_result', 'College Result') }}
				          	{{ Form::text('college_result', '', array('class' => 'form-control', 'placeholder' => 'GPA 5.00')) }}
				          	{{ Form::error($errors, 'college_result') }}
				        </div>
					</fieldset>

					<!-- information about school-->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Information About School</legend>
					    
						<div class="form-group">
				          	{{ Form::label('school_name', 'School Name') }}
				          	{{ Form::text('school_name', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'school_name') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('school_exam_name', 'School Exam Name') }}
				          	{{ Form::text('school_exam_name', '', array('class' => 'form-control', 'placeholder' => 'SSC/Dakhil/O Level')) }}
				          	{{ Form::error($errors, 'school_exam_name') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('school_passing_year', 'School Passing Year') }}
				          	{{ Form::text('school_passing_year', '', array('class' => 'form-control', 'placeholder' => '2008')) }}
				          	{{ Form::error($errors, 'school_passing_year') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('school_board_name', 'School Board Name') }}
				          	{{ Form::text('school_board_name', '', array('class' => 'form-control', 'placeholder' => 'Sylhet')) }}
				          	{{ Form::error($errors, 'school_board_name') }}
				        </div>

						<div class="form-group">
				          	{{ Form::label('school_result', 'School Result') }}
				          	{{ Form::text('school_result', '', array('class' => 'form-control', 'placeholder' => 'GPA 4.88')) }}
				          	{{ Form::error($errors, 'college_result') }}
				        </div>
					</fieldset>

					<!-- Other -->
					<!-- Other information -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Other Information</legend>

						<div class="form-group">
				          	{{ Form::label('current_employment', 'Current Employment') }}
				          	{{ Form::text('current_employment', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'current_employment') }}
				        </div>

				        <div class="form-group">
				          	{{ Form::label('employment_history', 'Employment History') }}
				          	{{ Form::textarea('employment_history', '', array('class' => 'form-control')) }}
				          	{{ Form::error($errors, 'employment_history') }}
				        </div>
					</fieldset>

			    </div>
			</div>

	        {{ Form::submit('Add Student', array('class' => 'btn btn-primary', 'data-loading-text' => 'Adding...', 'type' => 'button')) }}

	    {{ Form::close() }}
	</div>
@stop