const people=[
['Marcos Silva','Téc. Ar-condicionado','4,9','87','MS',1,0],
['Maria Lima','Diarista','4,8','64','ML',1,0],
['João Ferreira','Eletricista','4,9','52','JF',1,0],
['Ana Souza','Designer','5,0','31','AS',1,1],
['Lucas Almeida','Informática','5,0','41','LA',1,1],
['Pedro Costa','Programador','4,8','26','PC',0,1],
['Fernanda Melo','Fotógrafa','4,9','45','FM',1,1],
['Camila Rocha','Professora','5,0','29','CR',0,1],
['Rafael Gomes','Encanador','4,7','38','RG',1,0],
['Bianca Alves','Social Media','4,8','22','BA',0,1]
];

const screens=[...document.querySelectorAll('.screen')];

function go(name){
  const target=screens.find(screen=>screen.dataset.screen===name);
  if(!target)return;
  screens.forEach(screen=>screen.classList.toggle('active',screen===target));
  window.scrollTo({top:0,behavior:'instant'});
  history.replaceState(null,'','#'+name);
}

function card(p){
  return `<button class="pro" data-go="professional">
    <span class="pic">${p[4]}</span>
    <span>
      <b>${p[0]} ${p[5]?'<em>✓</em>':''}</b>
      <i>${p[1]}</i>
      <small>★ ${p[2]} (${p[3]}) · 📍 Rio Branco</small>
      ${p[6]?'<u>🎓 Universitário Verificado</u>':''}
    </span>
    <strong>›</strong>
  </button>`;
}

const professionals=document.querySelector('#professionals');
if(professionals)professionals.innerHTML=people.map(card).join('');

document.addEventListener('click',event=>{
  const goButton=event.target.closest('[data-go]');
  if(goButton){
    event.preventDefault();
    go(goButton.dataset.go);
    return;
  }

  const searchButton=event.target.closest('[data-search]');
  if(searchButton){
    event.preventDefault();
    const query=searchButton.dataset.search;
    const resultInput=document.querySelector('#results-query');
    if(resultInput)resultInput.value=query;
    go('results');
    return;
  }

  const toastButton=event.target.closest('[data-toast]');
  if(toastButton){
    const toast=document.querySelector('#toast');
    if(toast){
      toast.textContent=toastButton.dataset.toast;
      toast.classList.add('show');
      setTimeout(()=>toast.classList.remove('show'),2200);
    }
  }
});

document.querySelectorAll('form[data-submit]').forEach(form=>{
  form.addEventListener('submit',event=>{
    event.preventDefault();
    go(form.dataset.submit);
  });
});

document.querySelectorAll('[data-stars] button').forEach((button,index,buttons)=>{
  button.addEventListener('click',()=>{
    buttons.forEach((item,i)=>item.style.opacity=i<=index?'1':'.28');
  });
});

const initial=location.hash.slice(1);
if(initial&&screens.some(screen=>screen.dataset.screen===initial))go(initial);
else go('splash');
