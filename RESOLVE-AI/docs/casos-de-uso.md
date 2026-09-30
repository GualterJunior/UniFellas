# Resolve Aí — Casos de Uso

## Atores

- **Cliente:** pesquisa profissionais, consulta reputação, solicita orçamento, acompanha pedidos e avalia serviços.
- **Prestador:** mantém perfil e portfólio, publica serviços, recebe solicitações, envia orçamentos e solicita verificações.
- **Administrador:** acompanha usuários, prestadores, categorias, verificações pendentes e denúncias.

```mermaid
flowchart LR
C((Cliente)) --> B[Buscar serviços]
C --> P[Ver perfil profissional]
C --> O[Solicitar orçamento]
C --> A[Acompanhar pedido]
C --> V[Avaliar profissional]

R((Prestador)) --> RP[Gerenciar perfil]
R --> S[Publicar serviços]
R --> SR[Receber solicitações]
R --> OR[Enviar orçamento]
R --> PF[Gerenciar portfólio]
R --> VE[Solicitar verificações]

AD((Administrador)) --> U[Gerenciar usuários]
AD --> PR[Gerenciar prestadores]
AD --> CA[Gerenciar categorias]
AD --> VP[Analisar verificações]
AD --> DE[Analisar denúncias]
```

## Escopo do protótipo

As ações principais são navegáveis, porém usam dados simulados. Backend de marketplace, pagamentos, chat e validações externas ficam fora desta primeira entrega.
