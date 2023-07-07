<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anexar Arquivos *</title>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <label for="Anexo">Anexar Arquivos*</label>
        <form class="dropzone" id="my-great-dropzone" action="{{ route('conteudos.store') }}" method="POST">
            <input type="hidden" name="uploads" id="uploads" value="">
            <input type="text" name="titulo" id="titulo">titulos*
            <div class="card-footer">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary fas fa-save start" id="actions"> Salvar</button>
                 </div>
            </div>
    </form>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
</body>
</html>
sss
sss
