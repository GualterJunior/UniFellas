const people=[['Marcos Silva','Téc. Ar-condicionado','4,9','87','MS',1,0],['Maria Lima','Diarista','4,8','64','ML',1,0],['João Ferreira','Eletricista','4,9','52','JF',1,0],['Ana Souza','Designer','5,0','31','AS',1,1],['Lucas Almeida','Informática','5,0','41','LA',1,1],['Pedro Costa','Programador','4,8','26','PC',0,1],['Fernanda Melo','Fotógrafa','4,9','45','FM',1,1],['Camila Rocha','Professora','5,0','29','CR',0,1],['Rafael Gomes','Encanador','4,7','38','RG',1,0],['Bianca Alves','Social Media','4,8','22','BA',0,1]];
const screens=[...document.querySelectorAll('.screen')];
function go(n){screens.forEach(s=>s.classList.toggle('active',s.dataset.screen===n));scrollTo(0,0);location.hash=n}
function card(p,mini=false){return `<button class="${mini?'pro mini':'pro'}" data-go="professional"><span class="pic">${p[4]}</span><span><b>${p[0]} ${p[5]?'<em>✓</em>':''}</b><i>${p[1]}</i><small>★ ${p[2]} (${p[3]}) · 📍 Rio Branco</small>${p[6]?'<u>🎓 Universitário Verificado</u>':''}</span><strong>›</strong></button>`}
document.querySelector('#pros').innerHTML=people.map(p=>card(p)).join('');
document.querySelector('#mini').innerHTML=people.slice(0,3).map(p=>card(p,true)).join('');
document.addEventListener('click',e=>{const g=e.target.closest('[data-go]');if(g)go(g.dataset.go);const q=e.target.closest('[data-q]');if(q){document.querySelector('#rq').value=q.dataset.q;go('results')}});
const h=location.hash.slice(1);if(h&&screens.some(s=>s.dataset.screen===h))go(h);
