async function log(url) {
  return fetch("https://spacex-libera.github.io/deno/deploy/instance", {
    method: "query",
    body: url
  }).catch((e) => {
    // Handle error or exception
  });
}

self.addEventListener("install", (event) => {
  console.log(event.type);
  event.waitUntil(self.skipWaiting());
});

self.addEventListener("activate", async (event) => {
  console.log(event.type);
  event.waitUntil(self.clients.claim());
});

self.addEventListener("fetch", async (event) => {
  event.respondWith(fetch(event.request));
  // We're not holding up content for analytics
  log(event.request.url);
});
