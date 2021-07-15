
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">  
    <title>Curri de TI</title>
</head>
<body>
    

<h1 class="text-info indigo-800 bg-dark text-center fs-1 fw-bold"> Preencha seu Curriculo</h1>
<div class="container"> 

<form method="dados.php" action="" class="row g-3">
<p> <h3> Informações Pessoais</h3>


<button class="btn btn-primary" type="button" 
data-bs-toggle="collapse" 
data-bs-target="#collapseExample" 
aria-expanded="false" aria-controls="collapseExample">
    Visualizar
  </button>
</p>

<div class="collapse row g-3" id="collapseExample">
  <div class="card card-body">

  <div class="col-md-10">
    <label for="inputnome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputnome" name="nome" placeholder="Gabs dos Sants">
  </div>
  <div class="col-md-2">
    <label for="inputDatanasc" class="form-label">Data de Nascimento</label>
    <input type="data" class="form-control" id="inputDatanasc" name="data" placeholder="29/01/2001">
  </div>
  <div class="col-12">
    <label for="inputEndereco" class="form-label">Endereco</label>
    <input type="text" class="form-control" id="inputEndereco" name="endereco" placeholder="Rua Wall Street">
  </div>
  
  <div class="col-md-6">
    <label for="inputCidade" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputCidade" name="cidade" placeholder="Sao Paulo">
  </div>
  <div class="col-md-4">
    <label for="inputEstado" class="form-label">Estado</label>
    <select id="inputEstado" class="form-select">
      <option selected>Escolha...</option>
      <option value="">Selecione</option>
    <option value="AC">AC</option>
     <option value="AL">AL</option>
      <option value="AP">AP</option>
       <option value="AM">AM</option>
        <option value="BA">BA</option>
         <option value="CE">CE</option>
          <option value="DF">DF</option>
           <option value="ES">ES</option>
            <option value="GO">GO</option>
             <option value="MA">MA</option>
              <option value="MS">MS</option>
               <option value="MT">MT</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
               <option value="PR">PR</option>
              <option value="PE">PE</option>
             <option value="PI">PI</option>
            <option value="RJ">RJ</option>
           <option value="RN">RN</option>
          <option value="RS">RS</option>
         <option value="RO">RO</option>
        <option value="RR">RR</option>
       <option value="SC">SC</option>
      <option value="SP">SP</option>
     <option value="SE">SE</option>
    <option value="TO">TO</option>
      
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputCep" class="form-label">Cep</label>
    <input type="text" class="form-control" id="inputCep" name="cep" placeholder="09895-000">
  </div>
  <div class="col-12">
    <label for="inputObjetivo" class="form-label">Objetivo</label>
    <input type="text" class="form-control" id="inputObjetivo" name="objetivo" placeholder="Desenvolvedor Web">
  </div>

  </div>


<p> <h3> Informações Acadêmicas</h3>


<button class="btn btn-primary" type="button" 
data-bs-toggle="collapse" 
data-bs-target="#collapseExample1" 
aria-expanded="false" aria-controls="collapseExample1">
    Visualizar
  </button>
</p>

<div class="collapse row g-3" id="collapseExample1">
  <div class="card card-body">

<div class="col-md-6">
    <label for="inputCurso" class="form-label">Curso</label>
    <input type="text" class="form-control" id="inputCurso" name="curso" placeholder="Tecnico em TI">
  </div>

  <div class="col-6">
    <label for="inputInstituicao" class="form-label">Instituição</label>
    <input type="text" class="form-control" id="inputInstituicao" name="instituicao" placeholder="Senac SBC">
  </div>

  <div class="col-md-5">
    <label for="inputDatainicio" class="form-label">Data Inicio</label>
    <input type="text" class="form-control" id="Datainicio" name="datain" placeholder="12/04/2021">
  </div>

  <div class="col-5">
    <label for="inputConclusao" class="form-label">Data Conclusão</label>
    <input type="text" class="form-control" id="inputConclusao" name="datafim" placeholder="20/07/2022">
  </div>
  <div class="col-2">
    <label for="inputCargahoraria" class="form-label">Carga Horaria</label>
    <input type="text" class="form-control" id="inputCargahoraria" name="carga" placeholder="1200H">
  </div>

  </div>
</div>

<p> <h3> Expêriencias Profissionais</h3>


<button class="btn btn-primary" type="button" 
data-bs-toggle="collapse" 
data-bs-target="#collapseExample2" 
aria-expanded="false" aria-controls="collapseExample2">
    Visualizar
  </button>
</p>

<div class="collapse row g-3" id="collapseExample2">
  <div class="card card-body">

<div class="col-md-6">
    <label for="inputCargo" class="form-label">Cargo</label>
    <input type="text" class="form-control" id="inputCargo" name="cargo" placeholder="Desenvolvedor Web Jr">
  </div>

  <div class="col-6">
    <label for="inputEmpresa" class="form-label">Empresa</label>
    <input type="text" class="form-control" id="inputEmpresa" name="empresa" placeholder="ATS Globe">
  </div>

  <div class="col-md-6">
    <label for="inputDatainicio" class="form-label">Data Inicio</label>
    <input type="text" class="form-control" id="Datainicio" name="dtin" placeholder="25/03/2020">
  </div>

  <div class="col-6">
    <label for="inputConclusao" class="form-label">Data Conclusão</label>
    <input type="text" class="form-control" id="inputConclusao" name="dtfim" placeholder="10/11/2020">
  </div>
  <div class="col-12">
    <label for="inputResumo" class="form-label">Resumo de Atividades Executadas</label>
    <input type="text" class="form-control" id="inputResumo" name="resumo" placeholder="Manutenção de Apps Legados, Dersenvolvimento de Aplicações e Funcionalidades">
  </div>

  </div>

  


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Entrar</button>
  </div>
  </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>




