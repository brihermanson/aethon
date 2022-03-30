const         mix = require('laravel-mix')
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix
  //.copy( '_resources/scss/copy', 'web/dist/css', true)
  //.copy( '_resources/js/copy', 'web/dist/js', true)
  //.copy( '_resources/images', 'web/dist/images', true)
  //.copy( '_resources/fonts', 'web/dist/fonts', true)
  .setPublicPath('./web/dist')

  .js('_resources/js/app.js', 'js/')
  .sass('_resources/scss/app.scss', 'css/')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('tailwind.config.js')],
    autoprefixer: {
      options: {
        browsers: ['last 3 versions']
      },
    },
    terser: {
      extractComments: false,
    },
  })

  //.disableNotifications()

if (mix.inProduction()) {
  mix.version()
  mix.purgeCss({
    enabled: true,
    content: ['/templates/**/**/**/**/*.twig'],
    extensions: ['twig', 'html', 'js'],
  })
} else {
}
