document.getElementById('chat-form').addEventListener('submit', function(e) {
  e.preventDefault();
  const message = document.getElementById('message').value;

  fetch('chat.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: 'message=' + encodeURIComponent(message)
  }).then(() => {
    document.getElementById('message').value = '';
    loadMessages();
  });
});

function loadMessages() {
  fetch('fetch.php')
    .then(res => res.text())
    .then(data => {
      document.getElementById('chat-box').innerHTML = data;
    });
}

setInterval(loadMessages, 1000);
window.onload = loadMessages;