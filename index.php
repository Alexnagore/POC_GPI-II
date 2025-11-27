<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POC_GPI-II - Docker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container-main {
            width: 100%;
            padding: 20px;
        }

        .card-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 60px 40px;
            max-width: 600px;
            margin: 0 auto;
            backdrop-filter: blur(10px);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        h1 {
            color: #667eea;
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 2.5rem;
        }

        .subtitle {
            color: #764ba2;
            font-size: 1.1rem;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .info-box {
            background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
            border-left: 5px solid #667eea;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .info-box i {
            font-size: 2rem;
            color: #667eea;
        }

        .info-content h3 {
            color: #667eea;
            font-size: 1rem;
            margin: 0 0 5px 0;
        }

        .info-content p {
            color: #764ba2;
            margin: 0;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .status-badge {
            display: inline-block;
            background: #28a745;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin: 15px 0;
        }

        .features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 30px 0;
        }

        .feature-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background: #667eea;
            color: white;
            transform: translateY(-5px);
        }

        .feature-item i {
            font-size: 1.8rem;
            margin-bottom: 10px;
            display: block;
        }

        .feature-item span {
            font-weight: 600;
            display: block;
            font-size: 0.95rem;
        }

        .footer-text {
            text-align: center;
            color: #999;
            margin-top: 30px;
            font-size: 0.9rem;
        }

        .separator {
            height: 2px;
            background: linear-gradient(90deg, transparent, #667eea, transparent);
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <div class="container-main">
        <div class="card-container">
            <div style="text-align: center;">
                <div class="header-icon">
                    <i class="fas fa-docker"></i>
                </div>
                <h1>POC_GPI-II</h1>
                <p class="subtitle">Proyecto de Prueba de Concepto</p>
                
                <div class="status-badge">
                    <i class="fas fa-check-circle"></i> Sistema en Ejecución
                </div>

                <div class="separator"></div>

                <div class="info-box">
                    <i class="fas fa-cogs"></i>
                    <div class="info-content">
                        <h3>Entorno Activo</h3>
                        <p><?php echo getenv('APP_ENV') ?: 'Producción'; ?></p>
                    </div>
                </div>

                <div class="info-box">
                    <i class="fas fa-server"></i>
                    <div class="info-content">
                        <h3>Plataforma</h3>
                        <p>Docker Container</p>
                    </div>
                </div>

                <div class="separator"></div>

                <h3 style="color: #667eea; margin-top: 30px; margin-bottom: 15px;">
                    <i class="fas fa-star"></i> Características
                </h3>

                <div class="features">
                    <div class="feature-item">
                        <i class="fas fa-rocket"></i>
                        <span>Rápido</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Seguro</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-sync"></i>
                        <span>Escalable</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-code"></i>
                        <span>Moderno</span>
                    </div>
                </div>

                <div class="separator"></div>

                <p class="footer-text">
                    <i class="fas fa-info-circle"></i><br>
                    Proyecto desarrollado con Docker<br>
                    GPI - II - Universidad
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
