@component('mail::message')
#Hola {{ $name }}, bienvenido a Syde

Espero que te gusten los cursos.

@component('mail::button', ['url' => ''])
Ver cursos
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
