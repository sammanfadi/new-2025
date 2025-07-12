(function(){
  const toggleBtn = document.querySelector('.toggle-theme');
  if(toggleBtn){
    toggleBtn.addEventListener('click', () => {
      const current = document.documentElement.getAttribute('data-theme');
      const next = current === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', next);
      document.cookie = `theme=${next}; path=/`;
    });
  }
  if('serviceWorker' in navigator){
    navigator.serviceWorker.register(mhtwa.themeUri + '/sw.js');
  }
})();
