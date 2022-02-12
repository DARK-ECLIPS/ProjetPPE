// Afficher / masquer le menu de navigation
function toggleMenu() {
  let toggle = document.querySelector('.toggle');
  let navigation = document.querySelector('.navigation');
  let main = document.querySelector('.main');
  toggle.classList.toggle('active')
  navigation.classList.toggle('active')
  main.classList.toggle('active')
}

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

// Verifie si l'utilisateur est une administrateur
function adminMenu() {
  // Récupère au lien suivant les data de session de l'utilisateur
  fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/userInfo.php').then(res => {
    res.json().then(data => {
      // Vérifie les data reçus n'est pas un Professeur ou Receptioniste
      if (data.matter != 'Professeur' && data.matter != 'Receptionniste') {
        document.querySelector('.creneau').innerHTML += `
          <a href="http://localhost/ProjetPPE/view/admin/adminMenu">
            <span class="icon"><i class="fas fa-user-lock"></i></span>
            <span class="title">Paramètre Admin</span>
          </a>`;
      } else return;
    })
  })
}

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

// Complete le formulaire de creneau (<option>, [param])
function creanauMenu(option, param) {
  if (option == "prof") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/creneau/prof.php').then(res => {
      res.json().then(data => {
        for (i = 0; i < data.response.length; i++) {
          // On ajoute pour chaque objet de data à la class <select>, où l'id de la balise select est egale à prof
          document.querySelector('.select select[id=prof]').innerHTML += `<option value="${data.response[i].pseudo}">${data.response[i].nom}.${data.response[i].prenom[0]} | ${data.response[i].pseudo}</option>`
        }
      })
    })
  } else if (option == "checkbox") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/classe.php').then(res => {
      res.json().then(data => {
        const classOption = document.querySelector('.select select[id=classe] option');
        const classSelect = document.querySelector('.select select[id=classe]');

        // Si il y a pas d'id dans la balise option dans le classe <select>, alors on supprime la balise option
        if (!classOption.id) classSelect.innerHTML -= classOption
        
        // Sinon si le contenue de l'id de la balise option dans la div de classe <select> ne correspond pas à data, alors on surpprime le contenue (on supprime la balise option)
        else if (classOption.id != data.response[i].type_classe) classSelect.innerHTML -= classOption

        // On ajoute la balise option une valeur par défaut
        classSelect.innerHTML += `<option value="">Selectionner une classe</option>`
        if (document.querySelector('.select select[id=matiere] option').id) {
          document.querySelector('.select select[id=matiere]').innerHTML -= document.querySelector('.select select[id=matiere] option');
          document.querySelector('.select select[id=matiere]').innerHTML += `<option value="">Selectionner une matiere</option>`
        }

        for (i = 0; i < data.response.length; i++) {
          // Si le type_classe de data correspond à la valeur de param, alors on ajoute à la classe <select> l'id de la classe ainsi que la balise option avec les bonne data
          if (data.response[i].type_classe == param.value) classSelect.innerHTML += `<option value="${data.response[i].libelle_classe}" id="${data.response[i].type_classe}">${data.response[i].type_classe}.${data.response[i].libelle_classe}</option>`
        }

        classSelect.addEventListener('change', function() {creanauMenu('matiere', this)})
      })
    })
  } else if (option == "matiere") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/creneau/matiere.php').then(res => {
      res.json().then(data => {

        const selector = document.querySelector('.select select[id=classe] option[id=COLLEGE]') || document.querySelector('.select select[id=classe] option[id=LYCEE]') || document.querySelector('.select select[id=classe] option[id=BTS]')

        if (!selector) return;
          
          document.querySelector('.select select[id=matiere]').innerHTML -= document.querySelector('.select select[id=matiere] option')
          
          let value = ""
          for (i = 0; i < data.response.length; i++) {
            
            if (data.response[i].id_enseignement == 1) value = "COLLEGE"
            else if (data.response[i].id_enseignement == 2) value = "LYCEE"
            else if (data.response[i].id_enseignement == 3) value = "BTS"

            if (value == selector.id) {
              console.log(value, selector.id)
              if (data.response[i].libelle_classe == param.value ) {
                console.log(param.value, data.response[i].libelle_classe)
                document.querySelector('.select select[id=matiere]').innerHTML += `<option value="${data.response[i].libelle_matiere}" id="${data.response[i].libelle_classe}">${data.response[i].libelle_matiere}</option>`
              }
            }
            
          }

        console.log(data)
        console.log(param)
      })
    })
  } else return
}

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

// Complete le formulaire de matiere (<option>, [param])
function matiereMenu(option, param) {
  if (option == "checkbox") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/classe.php').then(res => {
      res.json().then(data => {
        const classOption = document.querySelector('.select select[id=classe] option');
        const classSelect = document.querySelector('.select select[id=classe]');

        // Si il y a pas d'id dans la balise option dans le classe <select>, alors on supprime la balise option
        if (!classOption.id) classSelect.innerHTML -= classOption
        
        // Sinon si le contenue de l'id de la balise option dans la div de classe <select> ne correspond pas à data, alors on surpprime le contenue (on supprime la balise option)
        else if (classOption.id != data.response[i].type_classe) classSelect.innerHTML -= classOption

        // On ajoute la balise option une valeur par défaut
        classSelect.innerHTML += `<option value="">Selectionner une classe</option>`

        for (i = 0; i < data.response.length; i++) {
          // Si le type_classe de data correspond à la valeur de param, alors on ajoute à la classe <select> l'id de la classe ainsi que la balise option avec les bonne data
          if (data.response[i].type_classe == param.value) classSelect.innerHTML += `<option value="${data.response[i].libelle_classe}" id="${data.response[i].type_classe}">${data.response[i].type_classe}.${data.response[i].libelle_classe}</option>`
        }
      })
    })
  } else return
}

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 

function reservationMenu(option, param) {
  if (option == "cours") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/reservation/cours.php').then(res => {
      res.json().then(data => {
        for (i = 0; i < data.response.length; i++) {
          // On ajoute pour chaque objet de data à la class <select>, où l'id de la balise select est egale à prof
          document.querySelector('.select select[id=prof]').innerHTML += `<option value="${data.response[i].pseudo}">${data.response[i].nom}.${data.response[i].prenom[0]} | ${data.response[i].pseudo}</option>`
        }
      })
    })
  } else if (option == "checkbox") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/classe.php').then(res => {
      res.json().then(data => {
        const classOption = document.querySelector('.select select[id=classe] option');
        const classSelect = document.querySelector('.select select[id=classe]');

        // Si il y a pas d'id dans la balise option dans le classe <select>, alors on supprime la balise option
        if (!classOption.id) classSelect.innerHTML -= classOption
        
        // Sinon si le contenue de l'id de la balise option dans la div de classe <select> ne correspond pas à data, alors on surpprime le contenue (on supprime la balise option)
        else if (classOption.id != data.response[i].type_classe) classSelect.innerHTML -= classOption

        // On ajoute la balise option une valeur par défaut
        classSelect.innerHTML += `<option value="">Selectionner une classe</option>`
        if (document.querySelector('.select select[id=matiere] option').id) {
          document.querySelector('.select select[id=matiere]').innerHTML -= document.querySelector('.select select[id=matiere] option');
          document.querySelector('.select select[id=matiere]').innerHTML += `<option value="">Selectionner une matiere</option>`
        }

        for (i = 0; i < data.response.length; i++) {
          // Si le type_classe de data correspond à la valeur de param, alors on ajoute à la classe <select> l'id de la classe ainsi que la balise option avec les bonne data
          if (data.response[i].type_classe == param.value) classSelect.innerHTML += `<option value="${data.response[i].libelle_classe}" id="${data.response[i].type_classe}">${data.response[i].type_classe}.${data.response[i].libelle_classe}</option>`
        }

        classSelect.addEventListener('change', function() {creanauMenu('matiere', this)})
      })
    })
  } else if (option == "matiere") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/matiere.php').then(res => {
      res.json().then(data => {

        const selector = document.querySelector('.select select[id=classe] option[id=COLLEGE]') || document.querySelector('.select select[id=classe] option[id=LYCEE]') || document.querySelector('.select select[id=classe] option[id=BTS]')

        if (!selector) return;
          
          document.querySelector('.select select[id=matiere]').innerHTML -= document.querySelector('.select select[id=matiere] option')
          
          let value = ""
          for (i = 0; i < data.response.length; i++) {
            
            if (data.response[i].id_enseignement == 1) value = "COLLEGE"
            else if (data.response[i].id_enseignement == 2) value = "LYCEE"
            else if (data.response[i].id_enseignement == 3) value = "BTS"

            if (value == selector.id) {
              console.log(value, selector.id)
              if (data.response[i].libelle_classe == param.value ) {
                console.log(param.value, data.response[i].libelle_classe)
                document.querySelector('.select select[id=matiere]').innerHTML += `<option value="${data.response[i].libelle_matiere}" id="${data.response[i].libelle_classe}">${data.response[i].libelle_matiere}</option>`
              }
            }
            
          }

        console.log(data)
        console.log(param)
      })
    })
  } else return
}

// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // 