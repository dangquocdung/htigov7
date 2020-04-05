@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ __('installer_messages.final.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
    {{ __('installer_messages.final.title') }}
@endsection

@section('container')

	@if(session('message')['dbOutputLog'])
		<p><strong><small>{{ __('installer_messages.final.migration') }}</small></strong></p>
		<pre><code>{{ session('message')['dbOutputLog'] }}</code></pre>
	@endif

	<p><strong><small>{{ __('installer_messages.final.console') }}</small></strong></p>
	<pre><code>{{ $finalMessages }}</code></pre>

	<p><strong><small>{{ __('installer_messages.final.log') }}</small></strong></p>
	<pre><code>{{ $finalStatusMessage }}</code></pre>

	<p><strong><small>{{ __('installer_messages.final.env') }}</small></strong></p>
	<pre><code>{{ $finalEnvFile }}</code></pre>

    <div class="buttons">
        <strong>Default Administrator User:</strong>
        <div style="padding: 10px;border: 1px dashed red">
            Email : <strong style="color: red">admin@site.com</strong><br>
            Password: <strong style="color: red">admin</strong>
        </div>
        <br>
        <a href="{{ route('adminHome') }}" class="button">{{ __('installer_messages.final.exit') }}</a>
    </div>

@endsection
