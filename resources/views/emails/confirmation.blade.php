@component('mail::message')
# Hello from {{ config('app.name') }}'s team.

## Your data was submitted successfully. Here's the information from your form:

@foreach ($formData as $key => $value)
  @if ($key != '_token')
    {{$key}}: {{$value}}
  @endif
@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent
