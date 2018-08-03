var cacheName = 'melius-webcache';
var filesToCache = [
  '/',
  '/index.php',
  '/plus.php',
  '/programme.php',
  '/_navbar.php',
  '/_footer.php',
  '/_head.php',
  '/_form.php',
  '/_js.php',
  '/img/92.jpg',
  '/img/dating.png',
  '/img/promo85.png',
  '/img/strip-bg-01.jpg',
  '/img/strip-bg-02.jpg',
  '/img/strip-bg-03.jpg',
  '/img/strip-bg-04.jpg',
  '/img/strip-bg-05.jpg',
  '/img/strip-bg-06.jpg',
  '/img/fav_32.png',
  '/img/fav_128.png',
  '/img/fav_144.png',
  '/img/fav_152.png',
  '/img/fav_192.png',
  '/img/fav_512.png',
  '/css/bootstrap.min.css',
  '/js/bootstrap.min.js',
  '/js/jquery-1.11.3.min.js',
  '/canvas.js',
  '/mq.css',
  '/style.css'
];

self.addEventListener('install', function(e) {
  console.log('[ServiceWorker] Install');
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[ServiceWorker] Caching app shell');
      return cache.addAll(filesToCache);
    })
  );
});

self.addEventListener('activate',  event => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request, {ignoreSearch:true}).then(response => {
      return response || fetch(event.request);
    })
  );
});
