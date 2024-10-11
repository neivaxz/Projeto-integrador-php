function search() {
  const searchInput = document.getElementById("pesquisa").value.toLowerCase();

  // Redirecionamentos baseados na pesquisa
  switch (searchInput) {
    case "home":
      window.location.href = "site.php";
      break;
    case "banoffe":
    case "banoffe & bombom aberto":
    case "bombom aberto":
      window.location.href = "banoffeEbombomaberto.php";
      break;
    case "coxinhas de morango":
    case "coxinha de ninho":
    case "coxinha de amendoim":
      window.location.href = "coxinhaDemorango.php";
      break;
    case "torta de kitkat":
    case "torta de limão":
      window.location.href = "tortas.php";
      break;
    case "palha italiana":
    case "palha italiana ninho com oreo":
    case "palha italiana chocolate com ninho":
    case "palha italiana de oreo":
      window.location.href = "palhaItaliana.php";
      break;
    case "copo da felicidade":
      window.location.href = "copoDfel.php";
      break;
    case "sobre nós":
    case "sobre a empresa":
    case "biografia da empresa":
      window.location.href = "sobrenos.php";
      break;
    case "contato":
    case "sobre dúvidas":
    case "feedback":
      window.location.href = "editar.php";
      break;
    default:
      alert("Doce não encontrado.");
  }
}


/* Formulário */
function enviarMensagem() {
  var mensagem = document.getElementById("mensagemConfirmacao");
  if (mensagem) {
      mensagem.style.display = "block";
      document.getElementById("contactForm").reset();

      setTimeout(function () {
          mensagem.style.display = "none";
      }, 5000);
  }
}

function limparFormulario() {
  document.getElementById("contactForm").reset();
}

function validarNome(input) {
  var regex = /^[A-Za-zÀ-ÿ\s]*$/;
  if (!regex.test(input.value)) {
      alert("O nome deve conter apenas letras.");
      input.value = input.value.replace(/[^A-Za-zÀ-ÿ\s]/g, "");
  }
}

function sugerirEmail() {
  var emailInput = document.getElementById("email");
  var valor = emailInput.value;

  if (valor.indexOf("@") === -1 && valor.length > 0) {
      var sugestoes = ["@gmail.com", "@hotmail.com", "@outlook.com"];
      var listaSugestoes = sugestoes
          .map(function (dominio) {
              return valor + dominio;
          })
          .join("\n");

      emailInput.setAttribute("list", "emailSuggestions");

      var dataList = document.getElementById("emailSuggestions");
      if (!dataList) {
          dataList = document.createElement("datalist");
          dataList.id = "emailSuggestions";
          document.body.appendChild(dataList);
      }

      dataList.innerHTML = "";

      sugestoes.forEach(function (dominio) {
          var option = document.createElement("option");
          option.value = valor + dominio;
          dataList.appendChild(option);
      });
  }
}

let cart = JSON.parse(localStorage.getItem("cart")) || [];
