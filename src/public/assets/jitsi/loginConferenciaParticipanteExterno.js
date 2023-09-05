// const URL_HOMOLOGACAO = "https://www.comunicarj.proderj.rj.gov.br/index.php/";
// const URL_PROD = "https://www.comunica.rj.gov.br/index.php/";

const URL_HOMOLOGACAO = window.location.origin+"/index.php/";
const URL_PROD = window.location.origin+"/index.php/";

let URL_APP;
let URL_API;

if (window.location.host.includes("proderj")) {
	URL_APP = URL_HOMOLOGACAO;
	URL_API = URL_HOMOLOGACAO;
} else {
	URL_APP = URL_PROD;
	URL_API = URL_PROD;
}

const logarConf = async () => {
	const searchParams = new URLSearchParams(window.location.search);

	let usuarioConf = searchParams.get("login");
	let senhaConf = searchParams.get("senha");

	let objLoginConf = {
		participante_externo: {
			login: usuarioConf,
			senha: senhaConf,
		},
	};
	console.log(URL_API);
	let url = URL_API + "autenticacao/participante_externo";

	let fetchLogin = await fetch(url, {
		method: "POST",
		body: JSON.stringify(objLoginConf),
	});

	const fetchLoginJson = await fetchLogin?.json();

	if (!fetchLogin.ok) {
		alert(fetchLoginJson?.Erro);
	} else {
		setInterval(async () => {
			const responseStatus = await fetch(
				`${URL_API}reuniao/status/${fetchLoginJson.id}`
			);

			const statusJson = await responseStatus.json();

			if (statusJson.status === 2) {
				alert("Consulta não está mais disponível!");
				location.reload();
			}
		}, 15000);
		autenticarIframe(fetchLoginJson);
	}
};

logarConf();

const autenticarIframe = async (page) => {
	console.log(page);
	document.querySelector(".main-login .row").remove();
	document.querySelector(".menu-nav").remove();

	const domain = "jitsi.rj.gov.br";

	const options = {
		roomName: `${page.link}`,
		width: "100%",
		height: "100%",
		parentNode: document.querySelector(".main-login"),
		onload: () => {
			iconeFullScreen();
		},

		userInfo: {
			displayName: page.nome,
		},
	};
	const api = new JitsiMeetExternalAPI(domain, options);

	// return responseAutenticar;
};

const openFullscreen = () => {
	if (document.querySelector(".main-login iframe").requestFullscreen) {
		document.querySelector(".main-login iframe").requestFullscreen();
	} else if (
		document.querySelector(".main-login iframe").webkitRequestFullscreen
	) {
		/* Safari */
		document.querySelector(".main-login iframe").webkitRequestFullscreen();
	} else if (document.querySelector(".main-login iframe").msRequestFullscreen) {
		/* IE11 */
		document.querySelector(".main-login iframe").msRequestFullscreen();
	}
};

const iconeFullScreen = () => {
	document.querySelector(".icone-box").classList.remove("d-none");
	document
		.querySelector(".icone-box")
		.addEventListener("click", openFullscreen);
};
