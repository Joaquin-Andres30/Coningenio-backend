# ConIngenio Backend

Este repositorio contiene el backend del proyecto **ConIngenio**, una página web de consultoría y desarrollo de software. El backend está desarrollado en PHP y estructurado como una API RESTful que entrega contenido dinámico al frontend mediante solicitudes HTTP.

---

## Estructura del proyecto


---

## 🚀 Endpoints disponibles

### Servicios

- **Ruta:** `/index.php/servicios`
- **Método:** `GET`
- **Descripción:** Devuelve un listado de servicios ofrecidos por la empresa en formato JSON.

### Nosotros

- **Ruta:** `/index.php/nosotros`
- **Método:** `GET`
- **Descripción:** Devuelve misión y visión institucional.

### Contacto

- **Ruta:** `/index.php/contacto`
- **Método:** `POST`
- **Descripción:** Recibe datos del formulario de contacto (`nombre`, `correo`, `mensaje`) y responde con confirmación.

---

## Cómo probar el backend

### Requisitos

- Servidor local (XAMPP)
- PHP 7.4 o superior

### Pasos

1. Copia la carpeta `coningenio-backend` dentro de `htdocs/`
2. Inicia Apache desde XAMPP
3. Accede a los endpoints desde el navegador o desde el frontend usando `fetch()`
4. Para probar el formulario de contacto, usa Postman o el formulario HTML con método `POST`

---

## Simulación de base de datos

- Los datos están definidos como arreglos en los archivos PHP.
- No se utiliza una base de datos real, pero se simula la lógica de negocio esperada.

---

## Escalabilidad

- El router permite agregar nuevos endpoints fácilmente.
- La arquitectura modular facilita el mantenimiento y futuras integraciones con bases de datos o autenticación.

---

## Autor

- **Joaquín Vargas**
- Proyecto académico – Desarrollo Backend
- CIISA – Unidad 1
- Año: 2025

---

## Repositorio privado

Este repositorio es parte de una entrega académica. El docente Sebastián Cabezas Ríos (`@scabezasciisa`) ha sido agregado como colaborador.
