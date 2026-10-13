# Guía de contribución

Gracias por tu interés en mejorar **Práctica 1 — Fundamentos de PHP**.

## Preparar el entorno

1. Instala PHP y un editor de código.
2. Clona el repositorio o descarga su contenido.
3. Accede al directorio `Practica1`.
4. Inicia el servidor local:

   ```bash
   php -S localhost:8000
   ```

5. Abre los ejercicios desde `http://localhost:8000/`.

## Proponer cambios

1. Abre una incidencia (*issue*) donde describas el error o mejora.
2. Crea una rama desde la rama principal, por ejemplo:

   ```bash
   git checkout -b fix/validacion-registro
   ```

3. Realiza cambios pequeños y claros; evita incluir datos personales reales.
4. Comprueba manualmente los ejercicios afectados y describe el resultado.
5. Utiliza mensajes de *commit* descriptivos, por ejemplo:

   ```bash
   git commit -m "fix: corregir validación del formulario"
   ```

6. Abre una *pull request* explicando qué cambias y cómo lo probaste.

## Estilo y documentación

- Mantén la indentación y los nombres de variables coherentes con el proyecto.
- Valida los datos del formulario y escapa los valores antes de mostrarlos en HTML.
- Actualiza `README.md` cuando cambie el uso o la estructura del proyecto.
- Registra los cambios relevantes en `CHANGELOG.md`.
- Comprueba los archivos Markdown con:

  ```bash
  npx markdownlint-cli2 "**/*.md"
  ```

## Código de conducta

Mantén una comunicación respetuosa y aporta explicaciones concretas para que
las sugerencias se puedan revisar fácilmente.
