// Afficher / masquer le menu de navigation
function toggleMenu() {
  let toggle = document.querySelector('.toggle');
  let navigation = document.querySelector('.navigation');
  let main = document.querySelector('.main');
  toggle.classList.toggle('active')
  navigation.classList.toggle('active')
  main.classList.toggle('active')
}

// Verifie si l'utilisateur est une administrateur
function adminMenu() {
  // Récupère au lien suivant les data de session de l'utilisateur
  fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/userInfo.php').then(res => {
    res.json().then(data => {
      // Vérifie les data reçus n'est pas un Professeur ou Receptioniste
      if (data.matter != 'Professeur' && data.matter != 'Receptionniste') {
        document.querySelector('.creneau').innerHTML += `
          <a href="http://localhost/ProjetPPE/view/creneau">
            <span class="icon"><i class="fas fa-clock"></i></span>
            <span class="title">Créneaux</span>
          </a>`;
      } else return;
    })
  })
}

// Complete le formulaire de creneau (<option>, [param])
function creanauMenu(option, param) {
  if (option == "prof") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/prof.php').then(res => {
      res.json().then(data => {
        for (i = 0; i < data.response.length; i++) {
          // On ajoute pour chaque objet de data à la class <select>, où l'id de la balise select est egale à prof
          document.querySelector('.select select[id=prof]').innerHTML += `<option value="prof">${data.response[i].nom}.${data.response[i].prenom[0]} | ${data.response[i].pseudo}</option>`
        }
      })
    })
  } else if (option == "checkbox") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/classe.php').then(res => {
      res.json().then(data => {
        // Si il y a pas d'id dans la balise option dans le classe <select>, alors on supprime la balise option
        if (!document.querySelector('.select select[id=classe] option').id) document.querySelector('.select select[id=classe]').innerHTML -= document.querySelector('.select select[id=classe] option')
        
        // Sinon si le contenue de l'id de la balise option dans la div de classe <select> ne correspond pas à data, alors on surpprime le contenue (on supprime la balise option)
        else if (document.querySelector('.select select[id=classe] option').id != data.response[i].type_classe) document.querySelector('.select select[id=classe]').innerHTML -= document.querySelector('.select select[id=classe] option')

        // On ajoute la balise option une valeur par défaut
        document.querySelector('.select select[id=classe]').innerHTML += `<option>Selectionner une classe</option>`

        for (i = 0; i < data.response.length; i++) {
          // Si le type_classe de data correspond à la valeur de param, alors on ajoute à la classe <select> l'id de la classe ainsi que la balise option avec les bonne data
          if (data.response[i].type_classe == param.value) document.querySelector('.select select[id=classe]').innerHTML += `<option value="classe" id="${data.response[i].type_classe}">${data.response[i].type_classe}.${data.response[i].libelle_classe}</option>`
        }
      })
    })
  } else if (option == "matiere") {
    fetch('http://localhost/ProjetPPE/model/controllers/jsonRequest/matiere.php').then(res => {
      res.json().then(data => {
        
        const selector = document.querySelector('.select select[id=classe] option[id=COLLEGE]') || document.querySelector('.select select[id=classe] option[id=LYCEE]') || document.querySelector('.select select[id=classe] option[id=BTS]')

        if (!selector) return;
        if (selector.id == 'COLLEGE') {
          console.log("college")
          
          let value = ""
          for (i = 0; i < data.response.length; i++) {
            if (data.response[i].id_enseignement == 1) value = "COLLEGE"
            else if (data.response[i].id_enseignement == 2) value = "LYCEE"
            else if (data.response[i].id_enseignement == 3) value = "BTS"

            if (value == selector.id) {
              if (data.response[i].libelle_classe == ?????? ) 
                document.querySelector('.select select[id=matiere]').innerHTML += `<option value="matiere" id="${data.response[i].libelle_classe}">${data.response[i].libelle_matiere}</option>`
            }
            
          }

          // document.querySelector('.select select[id=matiere]').innerHTML += `<option value="matiere" id="${data.response[i].libelle_classe}">${data.response[i].libelle_matiere}</option>`

        } else if (selector.id == 'LYCEE') {

        } else {

        }
        console.log(data)
        console.log(param)
      })
    })
    
    console.log('nop')
  }
}