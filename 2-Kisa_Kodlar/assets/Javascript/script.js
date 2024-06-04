var userAgent = navigator.userAgent;

var browserInfo = "Tarayıcı: " + navigator.appName;

var osInfo = "İşletim Sistemi: " + navigator.platform;

var browserElements = document.querySelectorAll(".userBrowser");
browserElements.forEach(function (element) {
  element.innerHTML = browserInfo;
});

var osElements = document.querySelectorAll(".operatingSystem");
osElements.forEach(function (element) {
  element.innerHTML = osInfo;
});
