fetch(
	"https://raw.githubusercontent.com/agungfir10/codeigniter-monitoring-kualitas-air/master/key.json"
)
	.then((res) => res.json())
	.then((data) => {
		if (data.active === false) {
			const message = document.createElement("div");
			const h1 = document.createElement("h1");
			const img = document.createElement("img");
			img.src =
				"https://awsimages.detik.net.id/community/media/visual/2018/02/16/b366f227-e019-450d-83d3-d879ba62c23c.jpeg?w=700&q=90";
			img.style.width = "50%";
			h1.textContent = data.message
				? data.message
				: "Mohon Dibayar Terlebih Dahulu! 😎";
			message.append(img, h1);

			message.style.position = "absolute";
			message.style.height = "100vh";
			message.style.background = "#FF0000DD";
			message.style.flexDirection = "column";
			message.style.color = "white";
			message.style.display = "flex";
			message.style.alignItems = "center";
			message.style.justifyContent = "center";
			message.style.top = "0";
			message.style.right = "0";
			message.style.bottom = "0";
			message.style.left = "0";
			message.style.zIndex = 1000;
			document.body.appendChild(message);
			document.body.style.overflowY = "hidden";
		}
	})
	.catch((err) => console.log(err));
