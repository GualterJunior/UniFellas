# Resolve Aí — Fluxo do Protótipo

Protótipo mobile-first concebido para 390 × 844 px.

## Cliente

```mermaid
flowchart TD
A[Splash] --> B[Onboarding]
B --> C[Login / Cadastro]
C --> D[Home]
D --> E[Busca]
E --> F[Resultados]
F --> G[Perfil do profissional]
G --> H[Solicitar orçamento]
H --> I[Solicitação enviada]
I --> J[Pedidos]
J --> K[Detalhe do pedido]
K --> L[Serviço concluído]
L --> M[Avaliação]
```

## Prestador

```mermaid
flowchart TD
A[Cadastro] --> B[Quero prestar serviços]
B --> C[Perfil profissional]
C --> D[Dashboard]
D --> E[Solicitações recebidas]
E --> F[Detalhe da solicitação]
F --> G[Enviar orçamento]
D --> H[Meus serviços]
H --> I[Novo serviço]
D --> J[Portfólio]
D --> K[Verificações]
K --> L[Universitário Verificado]
```

## Navegação

Os fluxos são simulados com dados mockados. Não há pagamentos, validação documental real ou persistência nesta etapa. O objetivo é demonstrar experiência, lógica e caminho do usuário.
