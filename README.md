# 🧱 POC_GPI-II

Proyecto de prueba para la configuración e integración continua con **Docker** y **GitHub Actions**.  
Este entorno actúa como **fuente de verdad** del sistema, garantizando coherencia, reproducibilidad y estabilidad entre los entornos de desarrollo, prueba y despliegue.

---

## 🚀 Ejecución local

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/tu-usuario/POC_GPI-II.git
   cd POC_GPI-II

2. **Construir y ejecutar el contenedor**
   ```bash
   docker-compose up --build


3. **Abrir el navegador en**
👉 [http://localhost:8080](http://localhost:8080)

Si todo está correcto, deberías ver el mensaje:

> **Proyecto POC_GPI-II funcionando en Docker 🚀**

---

## ⚙️ Estructura básica
  ```bash
  POC_GPI-II/
  ├── Dockerfile
  ├── docker-compose.yml
  ├── .env
  └── index.php
```

- **Dockerfile** → Define la imagen base (PHP + Apache).  
- **docker-compose.yml** → Orquesta los servicios y puertos.  
- **.env** → Centraliza las variables de entorno del sistema.  
- **index.php** → Página principal del contenedor.

---

## 🧩 Integración continua (CI/CD)

El proyecto incorpora un flujo de **Integración y Despliegue Continuo (CI/CD)** mediante **GitHub Actions**, que automatiza las siguientes fases:

- Construcción de la imagen Docker.  
- Ejecución de pruebas automáticas (simuladas).  
- Validación del proceso de despliegue.  

Esto garantiza un ciclo de entrega más rápido, controlado y alineado con los objetivos del proyecto definidos en el **OKR 2: Acelerar los ciclos de lanzamiento**.

---

## 🧠 Autoría

Desarrollado por **Alex**, estudiante de Ingeniería Informática.  
La redacción y estructuración del presente README se ha realizado con la colaboración de **ChatGPT**, utilizado como asistente técnico y de documentación.  

Este proyecto forma parte de las entregas prácticas de la asignatura **GPI-II**.

---
