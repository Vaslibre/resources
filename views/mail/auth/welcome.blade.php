@component('mail.message')

## ¡Hola {{ $user->name }}!

<br>

Bienvenido a **{{ config('app.name') }}**, gracias por registrarte en nuestro sitio web.

Hay una gran variedad de temas que sería genial leer en **{{ config('app.name') }}** y para eso necesitamos de tu ayuda. 

Podemos tener publicaciones sobre tu opinion personal acerca de cualquier tema relacionado a la tecnología, pero estos temas:

* No deben violar ningun derecho de `copyright`.
* No deben ser sobre racismo.
* Ni hablar de **POLITICA**.
* Pornografía.
* Piratería.

Cualquier publicación que viole estas normativas no será publicado.

### Ya envíe mi post, ¿cuando será publicado?

El post pasa a estar publicado luego que sea aceptado por el equipo siempre y cuando cumpla con las reglas.

### Licencia

Todos los post estan disponible bajo <a href="http://creativecommons.org/licenses/by-nc-sa/4.0" target="_blank">CC 4.0 (by-nc-sa)</a> a menos que decidas incluir una licencia diferente.

@endcomponent