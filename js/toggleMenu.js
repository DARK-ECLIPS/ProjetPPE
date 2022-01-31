function toggleMenu() {
  let toggle = document.querySelector('.toggle');
  let navigation = document.querySelector('.navigation');
  let main = document.querySelector('.main');
  toggle.classList.toggle('active')
  navigation.classList.toggle('active')
  main.classList.toggle('active')
}

function adminMenu() {
  fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/userInfo.php').then(res => {
    res.json().then(data => {

      if (data.matter != 'Professeur' && data.matter != 'Receptionniste') {
        document.querySelector('.slot').innerHTML += `
          <a href="http://localhost/ProjetPPE/view/slot">
            <span class="icon"><i class="fas fa-clock"></i></span>
            <span class="title">Créneaux</span>
          </a>`
      } else return;
    })
  })
}

function creanauMenu(option, param) {
  if (option == 'prof') {

    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/prof.php').then(res => {
      res.json().then(data => {
        for (i = 0; i < data.response.length; i++) {
          document.querySelector('.select select[id=prof]').innerHTML += `<option value="prof">${data.response[i].nom}.${data.response[i].prenom[0]} | ${data.response[i].pseudo}</option>`
        }
      })
    })
  } else if (option == "checkbox") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/classe.php').then(res => {
      res.json().then(data => {
        
        if (!document.querySelector('.select select[id=classe] option').id) document.querySelector('.select select[id=classe]').innerHTML -= document.querySelector('.select select[id=classe] option')
        else if (document.querySelector('.select select[id=classe] option').id != data.response[i].type_classe) document.querySelector('.select select[id=classe]').innerHTML -= document.querySelector('.select select[id=classe] option')

        document.querySelector('.select select[id=classe]').innerHTML += `<option>Selectionner une classe</option>`

        for (i = 0; i < data.response.length; i++) {
          if (data.response[i].type_classe == param.value) document.querySelector('.select select[id=classe]').innerHTML += `<option value="classe" id="${data.response[i].type_classe}">${data.response[i].type_classe}.${data.response[i].libelle_classe}</option>`
        }
      })
    })
  }
}