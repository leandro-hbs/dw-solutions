const qtd = document.querySelector('#qtd')
const ip = document.querySelector('#ip')
const submit = document.querySelector('input[type=submit]')
const ping = document.querySelector('#ping')

submit.addEventListener('click', function(event) {
  event.preventDefault()
  const url = `../api/ping.php?qtd=${qtd.value}&ip=${ip.value}`
  fetch(url)
    .then(res => res.json())
    .then(json => loadPing(json))
})

function loadPing(ping) {
  ping.innerHTML = ping.response
}