@component('mail::message')
<h1>
	Confirm your account 
</h1>
<p>
        Hi {{ $user->name }}!
</p>
<p>
        Click to confirm your account!
</p>

@component('mail::button', ['url' => 'http://localhost:8080/'])
	Confirm my account
@endcomponent
@endcomponent

