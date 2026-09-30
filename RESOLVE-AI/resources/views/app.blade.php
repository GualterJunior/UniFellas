<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
<meta name="theme-color" content="#062f4f"><title>Resolve Aí</title>
@vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class="phone-shell">
<div id="app" class="mobile-app">
<section class="screen splash active" data-screen="splash">
  <div class="logo-mark">✓<i>⌃</i></div>
  <h1>Resolve Aí</h1><p>Quem precisa encontra.<br>Quem sabe fazer, resolve.</p>
  <button class="btn primary" data-go="onboarding">Começar</button>
</section>

<section class="screen" data-screen="onboarding">
  <div class="skip" data-go="home">Pular</div>
  <div class="onboard-art">✓</div><span class="step">01 / 03</span>
  <h1>Encontre quem resolve</h1><p>Descubra profissionais próximos para serviços do dia a dia, tecnologia, criação e muito mais.</p>
  <div class="dots"><b></b><i></i><i></i></div><button class="btn primary" data-go="login">Continuar</button>
</section>

<section class="screen" data-screen="login">
  <header class="simple-head"><button data-go="onboarding">‹</button><b class="brand">Resolve <em>Aí</em></b></header>
  <div class="content"><h1>Bem-vindo de volta</h1><p class="muted">Entre para continuar.</p>
  <label>E-mail<input type="email" placeholder="voce@email.com"></label><label>Senha<input type="password" placeholder="••••••••"></label>
  <a class="link">Esqueci minha senha</a><button class="btn primary" data-go="home">Entrar</button>
  <div class="divider">ou</div><button class="btn outline" data-go="register">Criar uma conta</button></div>
</section>

<section class="screen" data-screen="register">
 <header class="simple-head"><button data-go="login">‹</button><strong>Criar conta</strong></header>
 <div class="content"><span class="eyebrow">COMECE AGORA</span><h1>Como você quer usar o Resolve Aí?</h1><p class="muted">Escolha sua experiência inicial.</p>
 <button class="choice" data-go="home"><span>🔎</span><div><b>Quero contratar serviços</b><small>Encontre profissionais e acompanhe pedidos.</small></div><em>›</em></button>
 <button class="choice" data-go="provider-setup"><span>🧰</span><div><b>Quero prestar serviços</b><small>Crie seu perfil e receba oportunidades.</small></div><em>›</em></button></div>
</section>

<section class="screen" data-screen="home">
 <header class="app-head"><b class="brand">Resolve <em>Aí</em></b><button class="avatar">AR</button></header>
 <div class="content home-content"><p class="location">📍 Rio Branco, AC⌄</p><h1>O que você precisa<br><span>resolver hoje?</span></h1>
 <button class="searchbar" data-go="search">⌕ <span>O que você precisa resolver?</span></button>
 <div class="section-title"><h2>Categorias</h2><button data-go="search">Ver todas</button></div>
 <div class="categories">
  <button data-search="Limpeza">🧹<span>Limpeza</span></button><button data-search="Ar-condicionado">❄️<span>Ar-cond.</span></button><button data-search="Elétrica">⚡<span>Elétrica</span></button><button data-search="Informática">💻<span>Informática</span></button>
  <button data-search="Manutenção">🔧<span>Manutenção</span></button><button data-search="Design">✦<span>Design</span></button><button data-search="Fotografia">📷<span>Fotografia</span></button><button data-search="Aulas">📚<span>Aulas</span></button>
 </div>
 <div class="trust-banner"><div><b>Mais confiança para contratar</b><p>Perfis, avaliações, histórico e verificações em um só lugar.</p></div><span>✓</span></div>
 <div class="section-title"><h2>Profissionais próximos</h2><button data-go="results">Ver todos</button></div>
 <div class="h-cards">
  <button class="pro-mini" data-go="professional"><div class="photo p1">MS</div><div><b>Marcos Silva</b><small>Téc. Ar-condicionado</small><span>★ 4,9 <i>(87)</i></span><em>✓ Verificado</em></div></button>
  <button class="pro-mini" data-go="professional"><div class="photo p2">ML</div><div><b>Maria Lima</b><small>Diarista</small><span>★ 4,8 <i>(64)</i></span><em>✓ Verificado</em></div></button>
 </div></div>
 <nav class="bottom"><button class="active" data-go="home">⌂<span>Início</span></button><button data-go="search">⌕<span>Buscar</span></button><button data-go="orders">▣<span>Pedidos</span></button><button data-go="profile">○<span>Perfil</span></button></nav>
</section>

<section class="screen" data-screen="search">
 <header class="simple-head"><button data-go="home">‹</button><strong>Buscar</strong></header>
 <div class="content"><h1>O que você precisa resolver?</h1><div class="search-input">⌕<input id="service-search" placeholder="Buscar serviço ou profissional"><button data-go="results">Buscar</button></div>
 <h2 class="subhead">Buscas populares</h2><div class="chips"><button data-search="Diarista">Diarista</button><button data-search="Ar-condicionado">Ar-condicionado</button><button data-search="Eletricista">Eletricista</button><button data-search="Informática">Informática</button><button data-search="Designer">Designer</button><button data-search="Fotógrafo">Fotógrafo</button></div>
 <h2 class="subhead">Explore por categoria</h2><div class="list-links"><button data-search="Casa e manutenção">🔧 Casa e manutenção <b>›</b></button><button data-search="Tecnologia">💻 Tecnologia <b>›</b></button><button data-search="Limpeza">🧹 Limpeza <b>›</b></button><button data-search="Criativos">✦ Criativos <b>›</b></button><button data-search="Educação">📚 Educação <b>›</b></button></div></div>
 <nav class="bottom"><button data-go="home">⌂<span>Início</span></button><button class="active" data-go="search">⌕<span>Buscar</span></button><button data-go="orders">▣<span>Pedidos</span></button><button data-go="profile">○<span>Perfil</span></button></nav>
</section>

<section class="screen" data-screen="results">
 <header class="simple-head"><button data-go="search">‹</button><strong>Resultados</strong><button>⋮</button></header>
 <div class="content"><div class="search-input compact">⌕<input id="results-query" value="Ar-condicionado"></div>
 <div class="filter-row"><button>☷ Filtros</button><button>★ Avaliação</button><button>⌖ Distância</button><button>✓ Verificados</button></div>
 <p class="result-label"><b>12 profissionais</b> próximos de você</p>
 <div id="professionals"></div></div>
</section>

<section class="screen" data-screen="professional">
 <header class="simple-head overlay"><button data-go="results">‹</button><strong>Perfil</strong><button>♡</button></header>
 <div class="profile-cover"></div><div class="content profile-content"><div class="profile-photo">MS</div>
 <div class="verified-row"><span class="badge verified">✓ Verificado</span><span class="badge university">🎓 Universitário Verificado</span></div>
 <h1>Marcos Silva</h1><p class="profession">Técnico de Ar-condicionado</p><p class="muted">📍 Rio Branco, AC · 2,1 km</p>
 <div class="metrics"><div><b>4,9 ★</b><small>87 avaliações</small></div><div><b>126</b><small>serviços</small></div><div><b>5 anos</b><small>experiência</small></div></div>
 <h2 class="subhead">Sobre</h2><p>Instalação, higienização e manutenção de ar-condicionado residencial e comercial. Atendimento com hora marcada e orçamento transparente.</p>
 <h2 class="subhead">Serviços</h2><div class="service-line"><div><b>Higienização completa</b><small>A partir de</small></div><strong>R$ 120</strong></div><div class="service-line"><div><b>Instalação</b><small>Visita e orçamento</small></div><strong>A combinar</strong></div>
 <div class="section-title"><h2>Portfólio</h2><button>Ver tudo</button></div><div class="portfolio"><div>Trabalho 01</div><div>Trabalho 02</div><div>Trabalho 03</div></div>
 <h2 class="subhead">Avaliações</h2><div class="review"><b>Ana P. <span>★★★★★</span></b><p>Ótimo atendimento, chegou no horário e explicou tudo antes do serviço.</p></div>
 </div><div class="sticky-action"><button class="btn primary" data-go="quote">Solicitar orçamento</button></div>
</section>

<section class="screen" data-screen="quote">
 <header class="simple-head"><button data-go="professional">‹</button><strong>Solicitar orçamento</strong></header>
 <form class="content form" data-submit="sent"><label>Qual serviço você precisa?<select><option>Higienização de ar-condicionado</option><option>Instalação</option><option>Manutenção</option></select></label><label>Descreva o que precisa ser feito<textarea placeholder="Conte os detalhes do serviço..."></textarea></label><label>Localização<input value="Rio Branco, AC"></label><label>Data desejada<input type="date"></label><label class="upload">＋<b>Adicionar foto</b><small>Ajuda o profissional a entender melhor</small><input type="file" accept="image/*"></label><button class="btn primary" type="submit">Enviar solicitação</button></form>
</section>

<section class="screen success-screen" data-screen="sent"><div class="success-icon">✓</div><h1>Solicitação enviada!</h1><p>O profissional recebeu seu pedido e poderá responder em breve.</p><button class="btn primary" data-go="orders">Acompanhar solicitação</button><button class="btn ghost" data-go="home">Voltar ao início</button></section>

<section class="screen" data-screen="orders">
 <header class="app-head"><strong>Meus pedidos</strong><button>⋮</button></header><div class="content"><div class="tabs"><button class="active">Aguardando</button><button>Em andamento</button><button>Concluídos</button></div>
 <div class="request-card"><div class="request-top"><span class="status waiting">Aguardando resposta</span><small>Hoje, 11:42</small></div><h3>Higienização de ar-condicionado</h3><p>Marcos Silva · Técnico de Ar-condicionado</p><div class="request-bottom"><span>📍 Rio Branco</span><button data-go="request-detail">Ver pedido</button></div></div>
 <div class="request-card"><div class="request-top"><span class="status progress">Em andamento</span><small>28 set.</small></div><h3>Manutenção de notebook</h3><p>Lucas Almeida · Informática</p><div class="request-bottom"><span>📍 Bosque</span><button data-go="request-detail">Ver pedido</button></div></div></div>
 <nav class="bottom"><button data-go="home">⌂<span>Início</span></button><button data-go="search">⌕<span>Buscar</span></button><button class="active" data-go="orders">▣<span>Pedidos</span></button><button data-go="profile">○<span>Perfil</span></button></nav>
</section>

<section class="screen" data-screen="request-detail"><header class="simple-head"><button data-go="orders">‹</button><strong>Detalhes do pedido</strong></header><div class="content"><span class="status waiting">Aguardando resposta</span><h1>Higienização de ar-condicionado</h1><div class="timeline"><div class="done"><b>✓</b><p><strong>Solicitação enviada</strong><small>Hoje, 11:42</small></p></div><div><b>2</b><p><strong>Orçamento do profissional</strong><small>Aguardando resposta</small></p></div><div><b>3</b><p><strong>Serviço</strong><small>Após aprovação</small></p></div></div><div class="info-card"><b>Marcos Silva</b><span>Técnico de Ar-condicionado · ★ 4,9</span></div><button class="btn outline" data-go="review">Simular serviço concluído</button></div></section>

<section class="screen" data-screen="review"><header class="simple-head"><button data-go="orders">‹</button><strong>Avaliar serviço</strong></header><div class="content center-content"><div class="profile-photo standalone">MS</div><h1>Como foi sua experiência?</h1><p class="muted">Sua avaliação ajuda outras pessoas a contratar com mais confiança.</p><div class="stars" data-stars><button>★</button><button>★</button><button>★</button><button>★</button><button>★</button></div><textarea placeholder="Conte como foi o serviço..."></textarea><button class="btn primary" data-go="orders" data-toast="Avaliação enviada. Obrigado!">Enviar avaliação</button></div></section>

<section class="screen" data-screen="profile"><header class="app-head"><strong>Meu perfil</strong><button>⚙</button></header><div class="content"><div class="user-profile"><div class="avatar big">AR</div><div><h2>Arthur Rangel</h2><p>Cliente · Rio Branco, AC</p></div></div><div class="menu-list"><button>○ Meus dados <b>›</b></button><button data-go="orders">▣ Histórico de pedidos <b>›</b></button><button>★ Minhas avaliações <b>›</b></button><button>⚙ Configurações <b>›</b></button><button class="orange" data-go="provider-dashboard">🧰 Acessar área do prestador <b>›</b></button><button data-go="login">↪ Sair <b>›</b></button></div></div><nav class="bottom"><button data-go="home">⌂<span>Início</span></button><button data-go="search">⌕<span>Buscar</span></button><button data-go="orders">▣<span>Pedidos</span></button><button class="active" data-go="profile">○<span>Perfil</span></button></nav></section>

<section class="screen" data-screen="provider-setup"><header class="simple-head"><button data-go="register">‹</button><strong>Perfil profissional</strong></header><div class="content"><div class="progressbar"><i></i></div><span class="eyebrow">ETAPA 1 DE 3</span><h1>Apresente seu trabalho</h1><label>Profissão principal<input placeholder="Ex.: Eletricista"></label><label>Categoria<select><option>Casa e manutenção</option><option>Tecnologia</option><option>Limpeza</option><option>Criativos</option><option>Educação</option></select></label><label>Sobre você<textarea placeholder="Conte sua experiência e especialidades..."></textarea></label><label>Localização<input value="Rio Branco, AC"></label><button class="btn primary" data-go="provider-dashboard">Continuar</button></div></section>

<section class="screen provider" data-screen="provider-dashboard"><header class="app-head"><div><small>Bom dia,</small><strong>Marcos 👋</strong></div><button class="avatar">MS</button></header><div class="content"><div class="provider-status">✓ Seu perfil está ativo e verificado</div><div class="dashboard-cards"><button data-go="provider-requests"><span>4</span><small>Novas solicitações</small></button><button><span>2</span><small>Em andamento</small></button><button><span>4,9 ★</span><small>Avaliação média</small></button><button><span>128</span><small>Visualizações</small></button></div><div class="section-title"><h2>Novas solicitações</h2><button data-go="provider-requests">Ver todas</button></div><button class="incoming" data-go="provider-request-detail"><span class="status waiting">Nova</span><h3>Higienização de ar-condicionado</h3><p>Arthur R. · 📍 2,1 km</p><small>Recebido há 8 min</small></button><h2 class="subhead">Atalhos</h2><div class="quick"><button data-go="services">＋<span>Novo serviço</span></button><button data-go="portfolio">▧<span>Portfólio</span></button><button data-go="verification">✓<span>Verificações</span></button></div></div><nav class="bottom"><button class="active" data-go="provider-dashboard">⌂<span>Início</span></button><button data-go="provider-requests">▣<span>Solicitações</span></button><button data-go="services">⌑<span>Serviços</span></button><button data-go="provider-profile">○<span>Perfil</span></button></nav></section>

<section class="screen" data-screen="provider-requests"><header class="simple-head"><button data-go="provider-dashboard">‹</button><strong>Solicitações</strong></header><div class="content"><div class="tabs"><button class="active">Novas</button><button>Em andamento</button><button>Finalizadas</button></div><button class="incoming" data-go="provider-request-detail"><span class="status waiting">Nova</span><h3>Higienização de ar-condicionado</h3><p>Arthur R. · 📍 Bosque</p><small>Hoje · Preferência: amanhã</small></button><button class="incoming" data-go="provider-request-detail"><span class="status waiting">Nova</span><h3>Instalação de split 12.000 BTUs</h3><p>Carla M. · 📍 Floresta</p><small>Hoje · Data a combinar</small></button></div></section>

<section class="screen" data-screen="provider-request-detail"><header class="simple-head"><button data-go="provider-requests">‹</button><strong>Solicitação</strong></header><div class="content"><span class="status waiting">Nova solicitação</span><h1>Higienização de ar-condicionado</h1><div class="info-card"><b>Arthur R.</b><span>Cliente · Rio Branco, AC</span></div><h2 class="subhead">Descrição</h2><p>Preciso fazer higienização de um split de 12.000 BTUs. Está gelando pouco e faz cerca de um ano desde a última limpeza.</p><div class="detail-grid"><div><small>Localização</small><b>Bosque</b></div><div><small>Data desejada</small><b>01 out.</b></div></div><button class="btn primary" data-go="send-budget">Enviar orçamento</button><button class="btn ghost" data-toast="Solicitação recusada no protótipo">Recusar solicitação</button></div></section>

<section class="screen" data-screen="send-budget"><header class="simple-head"><button data-go="provider-request-detail">‹</button><strong>Enviar orçamento</strong></header><div class="content"><h1>Monte sua proposta</h1><label>Valor do serviço<div class="money"><span>R$</span><input value="120,00"></div></label><label>Mensagem<textarea>Olá! Consigo realizar a higienização completa amanhã. O valor inclui limpeza da evaporadora, filtros e revisão básica.</textarea></label><label>Previsão<input value="Amanhã, entre 14h e 16h"></label><button class="btn primary" data-go="provider-dashboard" data-toast="Orçamento enviado ao cliente!">Enviar orçamento</button></div></section>

<section class="screen" data-screen="services"><header class="simple-head"><button data-go="provider-dashboard">‹</button><strong>Meus serviços</strong><button data-go="new-service">＋</button></header><div class="content"><button class="service-manage"><div><b>Higienização completa</b><small>Ar-condicionado · R$ 120</small></div><span class="status verified">Ativo</span></button><button class="service-manage"><div><b>Instalação de split</b><small>Ar-condicionado · A combinar</small></div><span class="status verified">Ativo</span></button><button class="btn primary" data-go="new-service">＋ Novo serviço</button></div></section>

<section class="screen" data-screen="new-service"><header class="simple-head"><button data-go="services">‹</button><strong>Novo serviço</strong></header><div class="content"><label>Título<input placeholder="Ex.: Higienização de split"></label><label>Categoria<select><option>Ar-condicionado</option><option>Elétrica</option><option>Manutenção</option></select></label><label>Descrição<textarea placeholder="Descreva o que está incluso..."></textarea></label><label>Valor<input placeholder="R$ 0,00"></label><label class="check"><input type="checkbox"> Preço a combinar</label><button class="btn primary" data-go="services" data-toast="Serviço adicionado!">Publicar serviço</button></div></section>

<section class="screen" data-screen="portfolio"><header class="simple-head"><button data-go="provider-dashboard">‹</button><strong>Portfólio</strong><button>＋</button></header><div class="content"><div class="portfolio large"><div>Instalação</div><div>Higienização</div><div>Manutenção</div><div>Comercial</div></div><button class="btn primary" data-toast="Seleção de imagem simulada">＋ Adicionar trabalho</button></div></section>

<section class="screen" data-screen="verification"><header class="simple-head"><button data-go="provider-dashboard">‹</button><strong>Verificações</strong></header><div class="content"><h1>Verifique seu perfil</h1><p class="muted">Selos ajudam clientes a identificar perfis com informações validadas.</p><div class="verify-card"><span>🪪</span><div><b>Identidade</b><small>Documento e selfie validados</small></div><em class="status verified">Verificado</em></div><div class="verify-card"><span>🧰</span><div><b>Profissional</b><small>Informações profissionais</small></div><em class="status progress">Pendente</em></div><button class="verify-card" data-go="university"><span>🎓</span><div><b>Universitário</b><small>Comprove seu vínculo acadêmico</small></div><em>›</em></button></div></section>

<section class="screen" data-screen="university"><header class="simple-head"><button data-go="verification">‹</button><strong>Universitário Verificado</strong></header><div class="content"><div class="uni-hero">🎓<h1>Universitário Verificado</h1><p>Um diferencial para prestadores que possuem vínculo acadêmico ativo.</p></div><label>Instituição<input value="Universidade Federal do Acre"></label><label>Curso<input value="Sistemas de Informação"></label><div class="two"><label>Matrícula<input placeholder="000000"></label><label>Período<input placeholder="6º"></label></div><label class="upload">＋<b>Enviar comprovante</b><small>PDF, JPG ou PNG</small><input type="file"></label><button class="btn primary" data-go="verification" data-toast="Comprovação enviada para análise">Enviar para análise</button></div></section>

<section class="screen" data-screen="provider-profile"><header class="app-head"><strong>Perfil profissional</strong><button>⚙</button></header><div class="content"><div class="user-profile"><div class="avatar big">MS</div><div><h2>Marcos Silva</h2><p>Téc. Ar-condicionado · ★ 4,9</p></div></div><div class="verified-row"><span class="badge verified">✓ Verificado</span><span class="badge university">🎓 Universitário</span></div><div class="menu-list"><button>✎ Editar informações <b>›</b></button><button data-go="services">⌑ Meus serviços <b>›</b></button><button data-go="portfolio">▧ Portfólio <b>›</b></button><button data-go="verification">✓ Verificações <b>›</b></button><button data-go="admin">⚙ Administração (demo) <b>›</b></button><button data-go="home">⇄ Mudar para cliente <b>›</b></button></div></div><nav class="bottom"><button data-go="provider-dashboard">⌂<span>Início</span></button><button data-go="provider-requests">▣<span>Solicitações</span></button><button data-go="services">⌑<span>Serviços</span></button><button class="active" data-go="provider-profile">○<span>Perfil</span></button></nav></section>

<section class="screen" data-screen="admin"><header class="simple-head"><button data-go="provider-profile">‹</button><strong>Administração</strong></header><div class="content"><span class="eyebrow">VISÃO GERAL</span><h1>Painel administrativo</h1><div class="admin-stats"><div><b>248</b><small>Usuários</small></div><div><b>96</b><small>Prestadores</small></div><div><b>12</b><small>Pendências</small></div></div><div class="menu-list"><button>👥 Usuários <b>248 ›</b></button><button>🧰 Prestadores <b>96 ›</b></button><button>▦ Categorias <b>9 ›</b></button><button data-go="verification">✓ Verificações pendentes <b>12 ›</b></button><button>⚑ Denúncias <b>3 ›</b></button></div></div></section>

<div class="toast" id="toast"></div>
</div></div>
</body></html>