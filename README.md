# Formulario Estudiante
Este formulario consiste en solicitar el nombre, apellido, genero, idiomas que habla el estudiante, fecha y ciudad de nacimiento, un correo y una clave
## Requisitos
[X] Validar que ningun campo este vacio
[X] El nombre y apellido no tengan ni números ni caracteres especiales
[X] El genero debe ser la seleccion de un elemento `<input type='radio'>`
[X] Los idiomas que habla el estudiante deben ser minimo 3, y lanzar mensaje cuando no se selecciona ninguno
[X] La ciudad de nacimiento debe ser elegida de un `<select>`
[X] La fecha de nacimiento debe recogerse de un `<input type='date'>`
[X] Se debe validar que el correo este en formato adecuado, realizando la comprobacion en PHP
[X] La clave debe tener una cierta complejidad: al menos 10 caracteres, al menos 1 mayuscula, al menos 1 digito y al menos 1 caracter especial
[X] Al momento de enviar los datos, tanto si son correctos como no, los datos escritos deben mantenerse en el formulario
