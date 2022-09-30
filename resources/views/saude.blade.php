<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação Saúde</title>
</head>
<body>
    <main>
        <div>
            <h1>Aplicação Saúde - Cálculo do IMC</h1>
            <p>Esta Aplicação realiza o cálculo do IMC de uma pessoa, informando sua classificação com relação a este cálculo.</p>
            <div>
                <form action="{{url('/imc')}}" method="get">
                    <label id="lnome" for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Informe seu nome"required>
                    <br/>
                    <label id="ldatanascimento" for="datanascimento">Data de Nascimento</label>
                    <input type="date" name="datanascimento" placeholder="Informe sua data de nascimento"required>
                    <br/>
                    <label id="lpeso" for="peso">Peso</label>
                    <input type="number" step="0.01" name="peso" placeholder="Informe seu peso"required>
                    <br/>
                    <label id="latura" for="altura">Altura</label>
                    <input type="number" step="0.01" name="altura" placeholder="Informe sua altura"required>
                    
                   <br/>
                   <br/>
                   <button type="submit" >Enviar</button>

                </form>
            </div>
        </div>
    </main>
    
</body>
</html>