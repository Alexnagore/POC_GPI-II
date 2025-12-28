import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { AppModule } from './app/app.module';
import * as Sentry from '@sentry/angular';

// 1. Inicialización de Sentry antes del bootstrap
Sentry.init({
  dsn: 'https://9d685141dd6b7779c5ea9288748b0fe7@o4510612667760640.ingest.de.sentry.io/4510613234188368',
  integrations: [
    // Rastra automáticamente el rendimiento de carga y navegación entre páginas
    Sentry.browserTracingIntegration(),
    // Permite ver grabaciones de la sesión del usuario para depurar fallos visuales
    Sentry.replayIntegration(),
  ],
  // Captura el 100% de las métricas de rendimiento (Web Vitals para tu OKR 5)
  tracesSampleRate: 1.0,
  // Configuración de Replays (0.1 captura el 10% de sesiones normales)
  replaysSessionSampleRate: 0.1,
  replaysOnErrorSampleRate: 1.0,
});

platformBrowserDynamic()
  .bootstrapModule(AppModule)
  .catch((err: unknown) => {
    // También enviamos a Sentry los errores que ocurran durante el arranque
    Sentry.captureException(err);
    console.error(err);
  });
