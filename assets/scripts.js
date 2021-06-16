document.getElementById("inscription").addEventListener("submit", function (e) {
  // calsse permettant de recuperer toute les entrée du formulaire
  console.log("appel script.js");
  e.preventDefault(); // evite rechargement de page
  $("#loader").show(); // gestion du loader visible a l'ecran
  var data = new FormData(this);
  console.log(data);
  var xhr = new XMLHttpRequest();

  // verification ecoute changement d'etat requete
  xhr.onreadystatechange = function () {
    let ret = "En cours de traitement";

    if (this.readyState == 4 && this.status == 200) {
      // Cas ou la requete est correctement effectué
      $("#loader").hide();
      try {
        res = this.response;
        console.log(res);
      } catch (error) {}

      $("#retour").show();

      ret = resultFormat(res);

      //ON se redirige vers la construction de page result.php
      if (res.success != null && res.success) {
        console.log("remplacement data");
        console.log(res);
        //on supprime ecran gauche
         $(".left").replaceWith("");
        $(".right").replaceWith(`<div class="result">${res.ecran} </div>`);
      }
    } else if (this.readyState == 4) {
      ret = "une erreur est survenue....";
    }
    $("#retour").html(`<p>${ret}</p>`);
  };

  // la requete envoie les parametre si tout s'est bien deroulé coté serveur pour generer la page

  xhr.open("POST", "inc/process-form.php", true);
  xhr.responseType = "json";

  xhr.send(data);
  return false;
});

/**
 * Formatage et concatenation  des données de retour
 * @param {*} res
 * @returns
 */
const resultFormat = (res) => {
  let dataF;
  if (res.success != null && res.success) {
    // alert(res.msg);
    dataF = "Vous avez été connecté avec succès !";
    // console.log("data Ok--->", res.msg);
  }
  if (res.success != null && !res.success) {
    dataF = res.msg;
    let concat = "";
    res.msg.forEach((element) => {
      concat += "- " + element + " <br>";
    });
    dataF = concat;
    // console.log("data KO");
  }
  return dataF;
};
