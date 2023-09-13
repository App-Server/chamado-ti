<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charsert="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <title>LDO Digital</Input></title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

            * {
                box-sizing: border-box;
            }

            body {
                background-color: steelblue;
                color: #fff;
                font-family: 'Muli', sans-serif;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                overflow: hidden;
                margin: 0;
            }

            .container {
                background-color: rgba(0, 0, 0, 0.4);
                padding: 20px 40px;
                border-radius: 5px;
            }

            .container h1 {
                text-align: center;
                margin-bottom: 30px;
            }

            .container a {
                text-decoration: none;
                color: lightblue;
            }

            .btn {
                cursor: pointer;
                display: inline-block;
                width: 100%;
                background: lightblue;
                padding: 15px;
                font-family: inherit;
                font-size: 16px;
                border: 0;
                border-radius: 5px;
            }

            .btn:focus {
                outline: 0;
            }

            .btn:active {
            transform: scale(0.98); 
            }

            .text {
                margin-top: 30px;
            }

            .form-control {
                position: relative;
                margin: 20px 0 40px;
                width: 300px;
            }

            .form-control input {
                background-color: transparent;
                border: 0;
                border-bottom: 2px #fff solid;
                display: block;
                width: 100%;
                padding: 18px 0;
                color: #fff;
            }

            .form-control input:focus,
            .form-control input:valid {
                outline: 0;
                border-bottom-color: lightblue;
            }

            .form-control label {
                position: absolute;
                top: 15px;
                left: 0;
            }

            .form-control label span {
                display: inline-block;
                font-size: 18px;
                min-width: 5px;
                transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }

            .form-control input:focus + label span,
            .form-control input:valid + label span {
                color: lightblue;
                transform: translateY(-30px);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>LDO Digital</h1>
            <form>
                <div class="form-control">
                    <input type="text">
                    <label>Usuario</label>
                    <!--<label>
                        <span style="transition-delay: 0ms">E</span>
                            <span style="transition-delay: 50ms">m</span>
                            <span style="transition-delay: 100ms">a</span>
                            <span style="transition-delay: 150ms">i</span>
                            <span style="transition-delay: 200ms">l</span>

                    </label>-->
                </div>

                <div class="form-control">
                    <input type="password" >
                    <label>Senha</label>
                </div>

                <!-- <a href="dashboard.php"><button class="btn">Login</button></a> -->

                
            </form>
            <a href="dashboard.php"><button class="btn">Clique Aqui</button></a>
            <p class="text">Loja de Dropshipping Oficial </a></p>
        </div>
        
        <script>
            const labels = document.querySelectorAll('.form-control label')

            labels.forEach(label => {
                label.innerHTML = label.innerText
                    .split('')
                    .map((letter, idx) => `<span style="transition-delay:${idx * 50}ms">${letter}</span>`)
                    .join('')
            })
        </script>
    </body>    
</html>