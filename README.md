# Formulario Estudiante
Este formulario consiste en solicitar el nombre, apellido, genero, idiomas que habla el estudiante, fecha y ciudad de nacimiento, un correo y una clave
## Requisitos
[] Validar que ningun campo este vacio
[] El nombre y apellido deben tener una longitud y ser solo texto
[] El genero debe ser la seleccion de un elemento `<input type='radio'>`
[] Los idiomas que habla el estudiante deben ser minimo 3
[] La ciudad de nacimiento debe ser elegida de un `<select>`
[] La fecha de nacimiento debe recogerse de un `<input type='date'>`
[] Se debe validar que el correo este en formato adecuado, realizando la comprobacion en PHP
[] La clave debe tener una cierta complejidad: al menos 10 caracteres, al menos 1 mayuscula, al menos 1 digito y al menos 1 caracter especial
[] Al momento de enviar los datos, tanto si son correctos como no, los datos escritos deben mantenerse en el formulario
