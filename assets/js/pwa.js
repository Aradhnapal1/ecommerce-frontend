/**
 * Progressive Web App (PWA) Install Prompt & Service Worker Registration
 */

let deferredPrompt = window.deferredPwaPrompt || null;
let userClickedInstall = false;

// Register Service Worker
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('./sw.js', { scope: './' })
    .then((reg) => {
      console.log('PWA Service Worker registered:', reg.scope);
    })
    .catch((err) => {
      console.warn('PWA Service Worker registration error:', err);
    });
}

// Check if app is already running as installed PWA
function isPWAInstalled() {
  return window.matchMedia('(display-mode: standalone)').matches ||
         window.navigator.standalone === true ||
         document.referrer.includes('android-app://');
}

// Capture beforeinstallprompt event at any time
window.addEventListener('beforeinstallprompt', (e) => {
  e.preventDefault();
  window.deferredPwaPrompt = e;
  deferredPrompt = e;
  console.log('PWA beforeinstallprompt captured!');

  // If user clicked Install button while waiting, trigger prompt immediately
  if (userClickedInstall && deferredPrompt) {
    triggerInstallPrompt();
  }
});

async function triggerInstallPrompt() {
  const promptEvent = deferredPrompt || window.deferredPwaPrompt;
  if (!promptEvent) return false;

  try {
    promptEvent.prompt();
    const choiceResult = await promptEvent.userChoice;
    console.log('PWA install choice outcome:', choiceResult.outcome);
    window.deferredPwaPrompt = null;
    deferredPrompt = null;
    
    const banner = document.getElementById('pwaInstallBanner');
    if (banner) {
      banner.classList.remove('show');
      setTimeout(() => { banner.style.display = 'none'; }, 400);
    }
    return true;
  } catch (err) {
    console.warn('Error triggering install prompt:', err);
    return false;
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const pwaBanner = document.getElementById('pwaInstallBanner');
  const installBtn = document.getElementById('pwaInstallBtn');
  const closeBtn = document.getElementById('pwaCloseBtn');
  const bannerDesc = pwaBanner ? pwaBanner.querySelector('.pwa-banner-desc') : null;

  if (isPWAInstalled()) {
    if (pwaBanner) pwaBanner.style.display = 'none';
    return;
  }

  function showPwaBanner() {
    if (!pwaBanner) return;
    pwaBanner.style.display = 'flex';
    requestAnimationFrame(() => {
      pwaBanner.classList.add('show');
    });
  }

  function hidePwaBanner() {
    if (!pwaBanner) return;
    pwaBanner.classList.remove('show');
    setTimeout(() => {
      pwaBanner.style.display = 'none';
    }, 400);
  }

  // Show bottom banner on page load
  setTimeout(showPwaBanner, 300);

  // Handle Install Button Click
  if (installBtn) {
    installBtn.addEventListener('click', async () => {
      userClickedInstall = true;
      
      const success = await triggerInstallPrompt();
      if (!success) {
        installBtn.textContent = 'Installing...';
        
        // Wait 500ms for browser to fire beforeinstallprompt after user gesture
        setTimeout(async () => {
          const retrySuccess = await triggerInstallPrompt();
          if (!retrySuccess) {
            installBtn.textContent = 'Install';
            if (bannerDesc) {
              bannerDesc.textContent = "Click 'Install' (⊕) in browser top bar to add app";
              bannerDesc.style.color = "#bd8657";
              bannerDesc.style.fontWeight = "600";
            }
          }
        }, 500);
      }
    });
  }

  // Handle Close Button Click
  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      hidePwaBanner();
    });
  }

  // Hide on successful installation
  window.addEventListener('appinstalled', () => {
    console.log('PWA appinstalled event triggered');
    window.deferredPwaPrompt = null;
    deferredPrompt = null;
    hidePwaBanner();
  });
});
