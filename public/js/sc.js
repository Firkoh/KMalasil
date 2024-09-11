$(document).ready(function() {
  $('a[href]').on('click', function(event) {
    // Prevent default link behavior (unless it's a hash link or same-page link)
    if (!$(this).attr('href').startsWith('#') && !$(this).attr('href').endsWith('#')) {
      var targetHref = $(this).attr('href'); // Store target href for later

      event.preventDefault();

      // Show the loading div
      $('#loading').fadeIn();

      // Simulate a delay to show the loading effect
      setTimeout(function() {
        // Check if target href points to the current page or its anchor
        if (!isInternalLinkSamePage(targetHref)) {
          // Redirect to the external link
          window.location.href = targetHref;
        } else {
          // Allow default behavior for hash or same-page links
          event.preventDefault = false; // Reset prevention if previously set
        }

        // Hide the loading div
        $('#loading').fadeOut();
      }, 1300); // Adjust the delay time as needed
    }
  });
});

// Helper function to check if link is internal and points to the current page (excluding anchors)
function isInternalLinkSamePage(href) {
  // Remove hash fragment (if any) for comparison
  href = href.split('#')[0];

  // Check if link points to the current URL (excluding hash)
  return href === window.location.href.split('#')[0];
}