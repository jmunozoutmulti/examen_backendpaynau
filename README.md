### README para el Proyecto PHP

```markdown
# ExamenFrontEndPayNau - PHP Backend

Este es el backend del proyecto **ExamenFrontEndPayNau**, desarrollado en PHP. Este backend proporciona una API RESTful para gestionar personas (crear, leer, actualizar y eliminar).

## Requisitos previos

Antes de ejecutar esta aplicación, asegúrate de tener instalado lo siguiente:

- **PHP** (versión 7.4 o superior)
- **Composer**: [Descargar Composer](https://getcomposer.org/download/)
- **XAMPP** o un servidor web compatible con PHP

## Estructura del Proyecto

/ExamenFrontEndPayNau
├── /backend               # Código del backend
│   ├── /src               # Código fuente del backend
│   │   ├── /controllers    # Controladores de la API
│   │   ├── /models         # Modelos de datos
│   │   ├── /routes         # Rutas de la API
│   │   └── /config         # Configuración de la base de datos
│   ├── composer.json       # Dependencias del proyecto
│   └── .env                # Variables de entorno (configuración sensible)
├── /database               # Scripts de base de datos
└── README.md              # Documentación del proyecto

## Instalación

Paso 1:
git clone https://github.com/tu-usuario/ExamenFrontEndPayNau.git

Paso 2:
Navega al directorio del backend:

cd ExamenFrontEndPayNau/backend

Paso 3:
Instala las dependencias usando Composer:

composer install

Paso 4:
Configura el archivo .env con las credenciales de tu base de datos.

## Ejecución de la Aplicación
Asegúrate de que tu servidor web (XAMPP o similar) esté en funcionamiento.
Accede a la carpeta del proyecto en tu navegador:

http://localhost/ExamenFrontEndPayNau/backend


## Pruebas BDD

1. Se debe poder ver la lista de Personas
2. Se debe poder agregar persona
3. Se debe poder modificar una persona
4. Se debe poder eliminar una persona
5. se debe poder modificar una persona
6. Se debe poder ver en modo responsive
