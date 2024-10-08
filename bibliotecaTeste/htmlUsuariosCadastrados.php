<style>
        html, body {
            height: 100%; /* Garante que o HTML e o corpo ocupem toda a altura da janela */
            margin: 0; /* Remove margens padrão */
            background: url('img/fundo2-login.jpg') no-repeat center center;
            background-size: cover; /* A imagem vai cobrir toda a área da página */
        }
        
        /* Adicione as media queries aqui */
        @media (max-width: 600px) {
            body {
                background-size: contain;
            }
            h1 {
                font-size: 20px;
            }
            p {
                font-size: 14px;
            }
        }
        @media (min-width: 601px) and (max-width: 1024px) {
            body {
                background-size: cover;
            }
            h1 {
                font-size: 24px;
            }
            p {
                font-size: 16px;
            }
        }
        @media (min-width: 1025px) {
            body {
                background-size: cover;
            }
            h1 {
                font-size: 28px;
            }
            p {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    
</body>
</html>

