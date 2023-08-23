document.addEventListener('DOMContentLoaded', function() {
  var viewMoreButton = document.getElementById('view-more');
  if(viewMoreButton) {
      viewMoreButton.addEventListener('click', function() {
          var contentTopix = document.querySelector('.single-post-content-topix');
          if(contentTopix) {
              contentTopix.style.display = 'block';
          }
          viewMoreButton.style.display = 'none';
      });
  }
});
