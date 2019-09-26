@extends ('layouts.master')
<br /><br /><hr />

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-4">
			<a href="/">
				<button class="btn btn-link btn-danger">
					Return Back
				</button>
			</a>
			<form method="post" action="/store">
				{{ csrf_field() }}
				<br />
				<input type="text" name="todo" class="form-control"
				placeholder="Create A New Todo" />
				<br />
				<input type="submit" name="submit" class="btn btn-sm btn-block btn-primary" />
			</form>
		</div>
	</div>
</div>