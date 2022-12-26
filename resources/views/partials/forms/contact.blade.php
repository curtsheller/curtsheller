<div id="form-contact" v-on="submit onSubmitForm">

	{{-- 
		Disabling HTML5 Form Validation Using the Laravel Form Builder 
			http://www.easylaravelbook.com/blog/2015/02/18/disabling-html5-form-validation/

		http://davidwalsh.name/novalidate
			Adding a novalidate attribute to the form element prevents native validation on form elements (if applied), allowing your JavaScript unobstructed ability to manage all validation.
	--}}
	{!! Form::open(['route' => 'contact.store', 'class' => 'form', 'novalidate' => 'novalidate']) !!}

		<div class="form-group form-group-lg">
			<label for="name">Your Name: <span class='form-required'>*</span></label>
		    {!! Form::text('name', null, 
		        ['required', 
		              'class'=>'form-control', 
		              'placeholder'=>'Your name']) !!}
		</div>

		<div class="form-group form-group-lg">
			<label for="name">Your E-mail Address: <span class='form-required'>*</span></label>
		    {!! Form::text('email', null, 
		        ['required', 
		              'class'=>'form-control', 
		              'placeholder'=>'Your e-mail address']) !!}
		</div>

		<div class="form-group form-group-lg">
			<label for="name">Your Message or comment: <span class='form-required'>*</span></label>
		    {!! Form::textarea('message', null, 
		        ['required', 'class'=>'form-control', 'placeholder'=>'Enter your message or comment' ] ) !!}
		</div>

		<div class="form-group form-group-lg">
		    {!! Form::submit('Contact Us!', 
		      ['class'=>'btn btn-primary']) !!}
		</div>
	
	{!! Form::close() !!}
</div>
