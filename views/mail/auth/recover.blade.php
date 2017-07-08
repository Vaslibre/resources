@component('mail.message')

Alguien ha solicitado recuperar la contraseña.

Por favor, haga clic en el siguiente boton para realizar el proceso de cambio:

@component('mail.button', ['url' => $url, 'token' =>$token])
Recuepera tu password
@endcomponent

@endcomponent