---
layout: doxygen
title: Referencias API - commotion-client
site_section: developers
categories: 
created: 2014-06-06 13:22:04.584366
changed: 2014-06-06 13:22:04.584366
post_author: Commotion
lang: es
---
##Cliente Commotion (INESTABLE)

El cliente Commotion Wireless de laptop/computadora de escritorio.

Para permitir a los clientes de computadoras de escritorio crear, conectarse y configurar redes mesh inalámbricas Commotion.

Este repositorio está en desarrollo activo. **¡NO FUNCIONA!** Por favor mira al mapa debajo para ver dónde está actualmente el proyecto.  

###Aplicaciones FUTURAS:

  * Una interfaz gráfica de usuario con:
	* Un "asistente de configuración" para crear/conectarse a redes mesh Commotion rápidamente.
    * Herramientas de configuración para ajustes avanzados de red mesh****Mesh network advances settings configuration tools
	* Personalizador de configuraciones mesh Commotion
	* Sistema de aplicaciones con:
	  * Visualizador de aplicaciones de redes mesh
	  * Publicidad de aplicaciones de cliente**********Client application advertisement
	* Múltiples cuentas de usuario con:
	  * "Serval Keychains" Separadas
	  * Red Personalizada & Configuración de Aplicaciones
  * Un ícono en la barra de estatus para seleccionar, conectarse a, y desconectarse de redes ad-hoc
  * Un sistema de extensión robusta que permite la personalización y extensión fácil del centro de la plataforma
  * Soporte completo de cuerda de traducción & internalización*******Full string translation & internationalization support
  * Construido en soporte accesible*******Built in accessability support
  
###Requerimientos: ( Para ejecutarse )

  * Python 3 o más alto

###Requerimientos: ( Para construir desde la fuente )

  * Python 3.3 o más alto
  * cx_freeze (Véase: construir/LEEME.md para instrucciones)
		
###Mapa actual:

#### Versión 1.0

  * Aplicación Central
    * Soporte de aplicación sola********Single application support
    * Mensajería instantánea de aplicaciones cruzadas**********Cross-application instance messaging
    * Reporte de caídas*******Crash reporting 
	  * Con cifrado PGP para el equipo Commotion 
      * Ventana de Reporte de Caída
  * Ventana Principal
  * Barra de Menú
    * Automáticamente despliega todas las extensiones centrales y cargadas por usuarios******Automatically displays all core and user loaded extensions 
  * Barra de Tareas
  * Administrador de Extensiones
  * Administrador de Mensajería
    * Permite extensiones para hablar al cliente IPC commotion*********Allow extensions to talk to commotion IPC client
      * Soporte CSM y Commotiond 
  * Extensiones Centrales
    * Editor de Archivos Commotion Config*********Commotion Config File Editor 
    * Asistente de Configuración (caminos de configuración básicos******basic config walkthough)
    * Visualizador de Aplicaciones
    * Anunciador de Aplicaciones******Application Advertiser
    * Página de Bienvenidas
	* Menú de Seguridad de la Red
	* Visión general del Estatus de la Red 
  * Menú de Configuraciones
	* Configuración de aplicaciones centrales
	* Menú de configuraciones de extensiones
	  * Configuraciones para cualquier extensión con páginas de configuraciones personalizadas
  * Menú de Configuraciones de Panel de Control
    * Una herramienta de panel de control de cliente agnóstico para configuraciones de redes-mesh en un panel de control de sistemas operativos genéricos*******A client agnostic control panel tool for mesh-network settings in an operating systems generic control panel. 
  * Soporte Linux
  * Interfaz compatible con las Directrices de interfaz humana Conmoción***********Commotion Human Interface Guidelines compliant interface 
  * Traducción de Documentación En-Línea a desarrollador API*******In-Line Documentation tranlation into developer API 
  * Administrador de Configuraciones de Usuario
    * Configuraciones de usuario sin-cifrado para configuración de redes

#### Versión 2.0

  * Menú de Configuraciones
	* Configuraciones de usuario
  * Extensiones centrales
    * Visualizador de Red 
    * Configuraciones de Usuario [aplicaciones
    * Configuraciones de Usuario [Serval & Seguridad] 
	* REMUEVE el Menú de Seguridad de Red ya que se reemplazará con configuraciones de usuario
  * Administrador de Configuraciones de Usuario
    * GPG Cifrado y configuraciones de usuario
	* soporte multi-usuario para iniciar sesión/cerrar sesión
  
### Version 3+.0
  * Soporte Windows 
  * Soporte OSX 
