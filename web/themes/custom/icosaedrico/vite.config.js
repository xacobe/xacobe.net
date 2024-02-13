import { defineConfig } from 'vite';
import glob from 'vite-plugin-glob';

export default defineConfig({
  plugins: [
    glob({
      // Configura tus patrones globales para que coincidan con tus archivos SCSS de componentes
      // y procesarlos individualmente.
    }),
    // Otros plugins como Vue/React según sea necesario
  ],
  css: {
    preprocessorOptions: {
      scss: {
        // Opciones para SCSS
      }
    }
  },
  build: {
    rollupOptions: {
      // Configuraciones específicas para asegurar que los outputs vayan a las carpetas correctas
      output: {
        // Configuración para manejar los outputs de CSS
        assetFileNames: assetInfo => {
          if (assetInfo.name.endsWith('.css')) {
            return '[name].[ext]';
          }
          return 'assets/[name]-[hash][extname]';
        }
      }
    }
  }
});
