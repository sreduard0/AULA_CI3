 	<div class="container-fostrap">
 		<div class="container-header">
 			<h1 class="heading">
 				Bem-vindo, Ninja!
 			</h1>
 			<p>Documentação de Onboarding do núcleo de desenvolvimento.</p>
 			<p>Seja muito bem vindo a Lead Force, nos próximos dias passaremos por um processo de integração/onboarding dentro do setor de desenvolvimento.</p>
 			<p>Salientamos que é de extrema importância a absorção de todos os conteúdos apresentados, pois serão muito utilizados em sua jornada de trabalho.</p>
 			<p>As ferramentas e os frameworks mais utilizados contém o ícone <i class="important fa-solid fa-star"></i> ao lado do seu nome.</p>
 		</div>
 		<div class="content">
 			<div class="container-fluid">
 				<div class="mb-4">
 					<ul class="nav justify-content-center">
 						<li class="ms-3 text-primary">
 							<button id="all" onclick="filter_cards('*')" class="btn rounded-pill active">Todos</button>
 						</li>
 						<li class="ms-3 text-primary">
 							<button id="tools" onclick="filter_cards('tools')" class="btn rounded-pill">Ferramentas</button>
 						</li>
 						<li class="ms-3 text-danger">
 							<button id="framework" onclick="filter_cards('framework')" class="btn rounded-pill">Frameworks</button>
 						</li>
 					</ul>
 				</div>

 				<div class="row grid animate__animated animate__backInLeft">

 					<!-- Cmder -->
 					<div class="grid-item col-xs-12 col-md-4 tools">
 						<div class="card">
 							<div class="img-card">
 								<img src="https://cmder.app/img/main.png" />
 							</div>
 							<div class="card-content">
 								<h4 class="card-title">
 									Cmdr <i class="fa-solid fa-star"></i>
 								</h4>
 								<p class="text-muted card-text">
 									Cmder é um pacote de software criado por pura frustração com a ausência de bons emuladores de console no Windows.
 								</p>
 							</div>
 							<div class="card-read-more">
 								<a href="https://cmder.app/" class="btn btn-default rounded-pill">
 									ver
 								</a>
 							</div>
 						</div>
 					</div>

 					<!-- WAMP -->
 					<div class="grid-item col-xs-12 col-md-4 tools">
 						<div class="card">
 							<div class="img-card">
 								<img src="https://rommeter.weebly.com/uploads/1/2/7/2/127239549/550031365_orig.jpg" />
 							</div>
 							<div class="card-content">
 								<h4 class="card-title">
 									WAMP SERVER <i class="fa-solid fa-star"></i>
 								</h4>
 								<p class="text-muted card-text">
 									WampServer é um ambiente de desenvolvimento web. Permitindo criar aplicações com Apache2, PHP e MySQL.
 								</p>
 							</div>
 							<div class="card-read-more">
 								<a href="https://www.wampserver.com/en/" class="btn btn-default rounded-pill">
 									ver
 								</a>
 							</div>
 						</div>
 					</div>

 					<!-- TortoiseGIT -->
 					<div class="grid-item col-xs-12 col-md-4 framework">
 						<div class="card">
 							<div class="img-card">
 								<img src="https://i.ytimg.com/vi/1d06Z3YC8d4/maxresdefault.jpg" />
 							</div>
 							<div class="card-content">
 								<h4 class="card-title">
 									TortoiseGit <i class="fa-solid fa-star"></i>
 								</h4>
 								<p class="text-muted card-text">
 									TortoiseGit é um cliente gráfico para o sistema de controle de versão Git. Ele fornece uma interface para gerenciar repositórios Git locais e remotos.
 								</p>
 							</div>
 							<div class="card-read-more">
 								<a href="https://tortoisegit.org/download/" class="btn btn-default rounded-pill">
 									ver
 								</a>
 							</div>
 						</div>
 					</div>

 				</div>
 			</div>
 		</div>
 	</div>
 	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
 	<script>
 		$('.grid').isotope();

 		function filter_cards(prop) {
 			$('#all').removeClass('active')
 			$('#tools').removeClass('active')
 			$('#framework').removeClass('active')

 			if (prop == 'tools') {
 				$('.grid').isotope({
 					filter: '.tools'
 				})
 				$('#tools').addClass('active')
 			} else if (prop == 'framework') {
 				$('.grid').isotope({
 					filter: '.framework'
 				})
 				$('#framework').addClass('active')
 			} else {
 				$('.grid').isotope({
 					filter: '*'
 				})
 				$('#all').addClass('active')
 			}
 		}
 	</script>