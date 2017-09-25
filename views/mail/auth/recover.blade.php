@component('mail.message')
## ¡Hola!
<br>

Estas recibiendo este correo electrónico porque hemos recibido una solicitud de restablecimiento de contraseña de su cuenta.

<br>

@component('mail.button', ['url' => $url, 'color' => $color, 'token' => $token])
Reestablecer contraseña
@endcomponent

<br>

@component('mail.subcopy')
Si presentas problemas con el boton anterior por favor copia y pega el siguiente enlace en tu navegador:

```
{{ $url }}/{{ $token }}
```

@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
