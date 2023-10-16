<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$oqAconteceu = $_POST["oq_aconteceu"];
$outrasVezes = $_POST["outras_vezes"];
$quantoTempo = $_POST["quanto_tempo"];
$problemaSaude = $_POST["problema_saude"];
$quaisProblemas = $_POST["quais_problemas"];
$medicacao = $_POST["medicacao"];
$horaMedicacao  = $_POST["hora_medicacao"];
$quaisMedicacoes = $_POST["quais_medicacoes"];
$alergico = $_POST["alergico"];
$alergia = $_POST["alergia"];
$ingeriu = $_POST["ingeriu"];
$ingeriuHorario = $_POST["ingeriu_horario"];

$data = $_POST["data"];
$sexoPaciente = $_POST["sexo_paciente"];
$nomeHospital = $_POST["nome_hospital"];
$nomePaciente = $_POST["nome_paciente"];
$idade = $_POST["idade"];
$telefonePaciente  = $_POST["telefone_paciente"];
$rgCpf = $_POST["rg_cpf"];
$nomeAcompanhante = $_POST["nome_acompanhante"];
$idadeAcompanhante = $_POST["idade_acompanhante"];
$localOcorrencia = $_POST["local_ocorrencia"];

$periodoGestacao = $_POST["periodo_gestacao"];
$medicacaoGestacao = $_POST["medicacao_gestacao"];
$nomeMedico = $_POST["nome_medico"];
$complicacoes = $_POST["complicacoes"];
$primeiro_filho = $_POST["primeiro"];
$quantosFilhos  = $_POST["quantos_filhos"];
$inicioContracao = $_POST["inicio_contracao"];
$tempoContracao = $_POST["tempo_contracao"];
$intervaloContracao = $_POST["intervalo_contracao"];
$sentePressao = $_POST["pressao_quadril"];
$rupturaBolsa = $_POST["ruptura"];
$inspecaoVisual = $_POST["inspecao"];
$partoRealizado = $_POST["parto"];
$horaNascimento = $_POST["hora_nascimento"];
$sexoBebe = $_POST["sexo_bebe"];
$nomeBebe = $_POST["nome_bebe"];

$causadoAnimais = $_POST["causado_animais"];
$meioTransporte = $_POST["meio_transporte"];
$desmoronamentoDeslizamento = $_POST["desmoronamento_deslizamento"];
$emergenciaMedica = $_POST["emergencia_medica"];
$queda2m = $_POST["queda_2m"];
$tentativaSuicidio  = $_POST["tentativa_suicidio"];
$quedaPropriaAltura = $_POST["queda_propriaAltura"];
$afogamento = $_POST["afogamento"];
$agressao = $_POST["agressao"];
$atropelamento = $_POST["atropelamento"];
$choqueEletrico = $_POST["choque_eletrico"];
$desabamento = $_POST["desabamento"];
$domestico = $_POST["domestico"];
$esportivo = $_POST["esportivo"];
$intoxicacao = $_POST["intoxicacao"];
$quedaBicicleta = $_POST["queda_bicicleta"];
$quedaMoto = $_POST["queda_moto"];
$quedaNivel = $_POST["queda_nivel"];
$trabalho = $_POST["trabalho"];
$transferencia = $_POST["transferencia"];
$outros = $_POST["outros"];
$outrosTexto = $_POST["outros_texto"];

$espontanea = $_POST["espontanea"];
$espontaneaMenor = $_POST["espontanea_menor"];
$comando = $_POST["comando"];
$comandoMenor = $_POST["comando_menor"];
$estimulo = $_POST["estimulo"];
$estimuloMenor = $_POST["estimulo_menor"];
$nenhuma = $_POST["nenhuma"];
$nenhumaMenor = $_POST["nenhuma_menor"];
$orientado = $_POST["orientado"];
$pfApropriadas = $_POST["pf_apropriadas"];
$confuso = $_POST["confuso"];
$palavrasInapropriadas = $_POST["palavras_inapropriadas"];
$inapropriadasMenor = $_POST["inapropriadas_menor"];
$choroGrito = $_POST["choro_grito"];
$pIncompreensiveis = $_POST["p_incompreensiveis"];
$sIncompreensiveis = $_POST["s_incompreensiveis"];
$nenhumaMenor2 = $_POST["nenhuma_menor2"];
$nenhumaResposta = $_POST["nenhuma_resposta"];
$oComandos = $_POST["o_comandos"];
$oProtamente = $_POST["o_protamente"];
$localizaMenor = $_POST["localiza_menor"];
$localiza = $_POST["localiza"];
$movimentoRetirada = $_POST["movimento_retirada"];
$retiradaEstimulado = $_POST["retirada_estimulado"];
$flexaoAnormal = $_POST["flexao_anormal"];
$flexaoMenor = $_POST["flexao_menor"];
$extensaoAnormal = $_POST["extensao_anormal"];
$extensaoMenor = $_POST["extensao_menor"];
$nenhuma3 = $_POST["nenhuma_3"];
$ausencia = $_POST["ausencia"];
$total = $_POST["total"];
$totalMenor = $_POST["total_menor"];

$pressao = $_POST["pressao"];
$pulso = $_POST["pulso"];
$respiracao = $_POST["respiracao"];
$saturacao = $_POST["saturacao"];
$temperatura = $_POST["temperatura"];
$perfusao = $_POST["perfusao"];
$anormalNormal = $_POST["anormal_normal"];

$psiquiatrico = $_POST["psiquiatrico"];
$respiratorio = $_POST["respiratorio"];
$diabetes = $_POST["diabetes"];
$obstetrico = $_POST["obstetrico"];
$transporte = $_POST["transporte"];
$outrosProblemas = $_POST["outros_problemas"];
$outrosText = $_POST["outros_text"];

$numeroCorpo = $_POST["numerocorpo"];
$fratura = $_POST["fratura"];
$ferimento = $_POST["ferimento"];
$hemorragias = $_POST["hemorragias"];
$esviceracao = $_POST["esviceracao"];
$fab = $_POST["fab"];
$amputacao = $_POST["amputacao"];
$queimadura1 = $_POST["queimadura1"];
$queimadura2 = $_POST["queimadura2"];
$queimadura3 = $_POST["queimadura3"];

$ferimentos = $_POST["ferimentos"];
$ladoFerimento = $_POST["lado_ferimento"];
$faceFerimento = $_POST["face_ferimento"];
$tipoFerimento = $_POST["tipo_ferimento"];

$qcabeca1grau = $_POST["qcabeca_1grau"];
$qcabeca2grau = $_POST["qcabeca_2grau"];
$qcabeca3grau = $_POST["qcabeca_3grau"];
$qcabeca4grau = $_POST["qcabeca_4grau"];
$qpescoco1grau = $_POST["qpescoco_1grau"];
$qpescoco2grau = $_POST["qpescoco_2grau"];
$qpescoco3grau = $_POST["qpescoco_3grau"];
$qpescoco4grau = $_POST["qpescoco_4grau"];
$qtant1grau = $_POST["qtant_1grau"];
$qtant2grau = $_POST["qtant_2grau"];
$qtant3grau = $_POST["qtant_3grau"];
$qtant4grau = $_POST["qtant_4grau"];
$qtpos1grau = $_POST["qtpos_1grau"];
$qtpos2grau = $_POST["qtpos_2grau"];
$qtpos3grau = $_POST["qtpos_3grau"];
$qtpos4grau = $_POST["qtpos_4grau"];
$qgenital1grau = $_POST["qgenital_1grau"];
$qgenital2grau = $_POST["qgenital_2grau"];
$qgenital3grau = $_POST["qgenital_3grau"];
$qgenital4grau = $_POST["qgenital_4grau"];
$qmembroid1grau = $_POST["qmembroid_1grau"];
$qmembroid2grau = $_POST["qmembroid_2grau"];
$qmembroid3grau = $_POST["qmembroid_3grau"];
$qmembroid4grau = $_POST["qmembroid_4grau"];
$qmembroie1grau = $_POST["qmembroie_1grau"];
$qmembroie2grau = $_POST["qmembroie_2grau"];
$qmembroie3grau = $_POST["qmembroie_3grau"];
$qmembroie4grau = $_POST["qmembroie_4grau"];
$qmembrosd1grau = $_POST["qmembrosd_1grau"];
$qmembrosd2grau = $_POST["qmembrosd_2grau"];
$qmembrosd3grau = $_POST["qmembrosd_3grau"];
$qmembrosd4grau = $_POST["qmembrosd_4grau"];
$qmembrose1grau = $_POST["qmembrose_1grau"];
$qmembrose2grau = $_POST["qmembrose_2grau"];
$qmembrose3grau = $_POST["qmembrose_3grau"];
$qmembrose4grau = $_POST["qmembrose_4grau"];

$objetosRecolhidos = $_POST["objetos_recolhidos"];

$abdomen = $_POST["abdomen"];
$afundamentoCranio = $_POST["afundamento_cranio"];
$agitacao = $_POST["agitacao"];
$apineia = $_POST["apineia"];
$bradicardia = $_POST["bradicardia"];
$bradipneia = $_POST["bradipneia"];
$cefaleia = $_POST["cefaleia"];
$cianoseLabios = $_POST["cianose_labios"];
$cianoseExtremidade = $_POST["cianose_extremidade"];
$convulsao = $_POST["convulsao"];
$decorticacao = $_POST["decorticacao"];
$deformidade = $_POST["deformidade"];
$descerebracao = $_POST["descerebracao"];
$desmaio = $_POST["desmaio"];
$desvioTraqueia = $_POST["desvio_traqueia"];
$dispineia = $_POST["dispneia"];
$dorLocal = $_POST["dor_local"];
$edemaGeneralizados = $_POST["edema_generalizados"];
$edemaLocalizados = $_POST["edema_localizados"];
$enfisemaSubcutaneo = $_POST["enfisema_subcutaneo"];
$entaseJugular = $_POST["entase_jugular"];
$facePalida = $_POST["face_palida"];
$hipertensao = $_POST["hipertensao"];
$hipotensao = $_POST["hipotensao"];
$hemorragiaInterna = $_POST["hemorragia_interna"];
$hemorragiaExterna = $_POST["hemorragia_externa"];
$nauseaVomito = $_POST["nausea_vomito"];
$nasoragia = $_POST["nasoragia"];
$obito = $_POST["obito"];
$otorreia = $_POST["otorreia"];
$ovace = $_POST["ovace"];
$paradaCardiaca = $_POST["parada_cardiaca"];
$paradaRespiratoria = $_POST["parada_respiratoria"];
$priapismo = $_POST["priapismo"];
$pruridoPele = $_POST["prurido_pele"];
$pupilasAnisocoria = $_POST["pupilas_anisocoria"];
$pupilasIsocoria = $_POST["pupilas_isocoria"];
$pupilasMidriase = $_POST["pupilas_midriase"];
$pupilasMiose = $_POST["pupilas_miose"];
$pupilasReagente = $_POST["pupilas_reagente"];
$pupilasNreagente = $_POST["pupilas_nreagente"];
$sede = $_POST["sede"];
$sinalBattle = $_POST["sinal_battle"];
$sinalGuaxinim = $_POST["sinal_guaxinim"];
$sudorese = $_POST["sudorese"];
$taquipneia = $_POST["taquipneia"];
$taquicardia = $_POST["taquicardia"];
$tontura = $_POST["tontura"];
$outrosSintomas = $_POST["outros_sintomas"];
$osintomasTexto = $_POST["osintomas_texto"];

$ciclista = $_POST["ciclista"];
$condutorMoto = $_POST["condutor_moto"];
$gestante = $_POST["gestante"];
$passageiroBancofrente = $_POST["passageiro_bancofrente"];
$passageiroMoto = $_POST["passageiro_moto"];
$condutorCarro = $_POST["condutor_carro"];
$clinico = $_POST["clinico"];
$trauma = $_POST["trauma"];
$passageiroBtras = $_POST["passageiro_btras"];
$pedestre = $_POST["pedestre"];

$conducao = $_POST["conducao"];

$decisao = $_POST["decisao"];

$aspiracao = $_POST["aspiracao"];
$avaliacao = $_POST["avaliacao_inicial"];
$avaliacaoDirigida = $_POST["avaliacao_dirigida"];
$avaliacaoContinuada = $_POST["avaliacao_continuada"];
$chaveRautek = $_POST["chave_rautek"];
$canudaGuedel = $_POST["canula_guedel"];
$desobstrucaoVa = $_POST["desobstrucao_va"];
$empregoDea = $_POST["emprego_dea"];
$gerenciamentoRiscos = $_POST["gerenciamento_riscos"];
$limpezaFerimento = $_POST["limpeza_ferimento"];
$curativos = $_POST["curativos"];
$compressivo = $_POST["compressivo"];
$encravamento = $_POST["encravamento"];
$ocular = $_POST["ocular"];
$queimadura = $_POST["queimadura"];
$simples = $_POST["simples"];
$trespontas = $_POST["3_pontas"];
$imobilizacoes = $_POST["imobilizacoes"];
$membroInfd = $_POST["membro_infd"];
$membroInfe = $_POST["membro_infe"];
$membroSupd = $_POST["membro_supd"];
$membroSupe = $_POST["membro_supe"];
$quadril = $_POST["quadril"];
$cervical = $_POST["cervical"];
$macaRodas = $_POST["maca_rodas"];
$macaRigida = $_POST["maca_rigida"];
$ponte = $_POST["ponte"];
$retiradoCapacete = $_POST["retirado_capacete"];
$rcp = $_POST["rcp"];
$rolamento90 = $_POST["rolamento_90"];
$rolamento180 = $_POST["rolamento_180"];
$tomadaDecisao = $_POST["tomada_decisao"];
$tratadoChoque = $_POST["tratado_choque"];
$usoCanula = $_POST["uso_canula"];
$usoColar = $_POST["uso_colar"];
$tamanhoUsocolar = $_POST["tamanho_usocolar"];
$usoKed = $_POST["uso_ked"];
$usoTtf = $_POST["uso_ttf"];
$ventilacaoSuporte = $_POST["ventilacao_suporte"];
$oxigenioTerapia = $_POST["oxigenioterapia"];
$oxigenioterapiaTexto = $_POST["oxigenioterapia_texto"];
$reanimador = $_POST["reanimador"];
$reanimadorTexto = $_POST["reanimador_texto"];
$meioa = $_POST["meioa"];
$meioaCelesc = $_POST["meioa_celesc"];
$meioaDefesacivil = $_POST["meioa_defesacivil"];
$meioaCivil = $_POST["meioa_civil"];
$meioaMilitar = $_POST["meioa_militar"];
$meioaPre = $_POST["meioa_pre"];
$meioaPrf = $_POST["meioa_prf"];
$meioaUsa = $_POST["meioa_usa"];
$meioaUsb = $_POST["meioa_usb"];
$meioaCit = $_POST["meioa_cit"];
$outrosProcedimentos = $_POST["outros_procedimentos"];
$outrospTexto = $_POST["outrosp_texto"];

$ataduras8 = $_POST["ataduras_8"];
$ataduras12 = $_POST["ataduras_12"];
$ataduras20 = $_POST["ataduras_20"];
$ataduraQuantidade = $_POST["atadura_quantidade"];
$mantaAluminizada = $_POST["manta_aluminizada"];
$mantaQuantidade = $_POST["manta_quantidade"];
$cateterOculos = $_POST["cateter_oculos"];
$cateterQuantidade = $_POST["cateter_quantidade"];
$pasDea = $_POST["pas_dea"];
$pasQuantidade = $_POST["pas_quantidade"];
$compressaComum = $_POST["compressa_comum"];
$compressaQuantidade = $_POST["compressa_quantidade"];
$sondaAspiracao = $_POST["sonda_aspiracao"];
$sondaQuantidade = $_POST["sonda_quantidade"];
$kitsH = $_POST["kits_h"];
$kitsP = $_POST["kits_p"];
$kitsQ = $_POST["kits_q"];
$kitsQuantidade = $_POST["kits_quantidade"];
$soroFisiologico = $_POST["soro_fisiologico"];
$soroQuantidade = $_POST["soro_quantidade"];
$luvasDescartaveis = $_POST["luvas_descartaveis"];
$luvasQuantidade = $_POST["luvas_quantidade"];
$talasPapp = $_POST["talas_papp"];
$talasPapg = $_POST["talas_papg"];
$talasQuantidade = $_POST["talas_quantidade"];
$mascarasDescartaveis = $_POST["mascaras_descartaveis"];
$mascarasQuantidade = $_POST["mascara_quantidade"];
$outroMaterial = $_POST["outro_material"];
$outroM = $_POST["outrom"];
$outrosmQuantidade = $_POST["outrom_quantidade"];

$baseEstabiliza = $_POST["base_estabiliza"];
$baseQuantidade = $_POST["base_quantidade"];
$ttfAdulto = $_POST["ttf_adulto"];
$ttfInfantil = $_POST["ttf_infantil"];
$ttfQuantidade = $_POST["ttf_quantidade"];
$colarN = $_POST["colar_n"];
$colarPP = $_POST["colar_pp"];
$colarP = $_POST["colar_p"];
$colarQuantidade = $_POST["colar_quantidade"];
$tiranteAranha = $_POST["tirante_aranha"];
$tiranteQuantidade = $_POST["tirante_quantidade"];
$colarM = $_POST["colar_m"];
$colarG = $_POST["colar_g"];
$colarTam = $_POST["colar_tam"];
$colarTamm = $_POST["colar_tamm"];
$colar2quantidade = $_POST["colar_2quantidade"];
$tiranteCabeca = $_POST["tirante_cabeca"];
$tirantecQuantidade = $_POST["tirantec_quantidade"];
$coxinsEstabiliza = $_POST["coxins_estabiliza"];
$coxinsQuantidade = $_POST["coxins_quantidade"];
$canula = $_POST["canula"];
$canulaQuantidade = $_POST["canula_quantidade"];
$kedAdulto = $_POST["ked_adulto"];
$kedInfantil = $_POST["ked_infantil"];
$kedQuantidade = $_POST["ked_quantidade"];
$outroMaterial2 = $_POST["outro_material2"];
$outrom2 = $_POST["outrom2"];
$outrom2Quantidade = $_POST["outrom2_quantidade"];
$maca = $_POST["maca"];
$macaQuantidade = $_POST["maca_quantidade"];
$outroMaterial3 = $_POST["outro_material3"];
$outrom3 = $_POST["outrom3"];
$outrom3Quantidade = $_POST["outrom3_quantidade"];

$objetosRecolhidos = $_POST["objetos_recolhidos"];

$disturbioComportamento = $_POST["disturbio_comportamento"];
$encontradoCapacete = $_POST["encontrado_capacete"];
$encontradoCinto = $_POST["encontrado_cinto"];
$parabrisasAvariado = $_POST["parabrisas_avariado"];
$caminhandoCena = $_POST["caminhando_cena"];
$painelAvariado = $_POST["painel_avariado"];
$volanteTorcido = $_POST["volante_torcido"];

$nUsd = $_POST["n_usd"];
$nOcorrencia = $_POST["n_ocorrencia"];
$desp = $_POST["desp"];
$kmFinal = $_POST["km_final"];
$codIr = $_POST["cod_ir"];
$codPs = $_POST["cod_ps"];
$hCh = $_POST["h_ch"];
$siaSus = $_POST["sia_sus"];

$eu = $_POST["eu"];
$rgNumero = $_POST["rg_numero"];
$cpfNumero = $_POST["cpf_numero"];
$testemunha = $_POST["testemunha"];
$docTestemunha = $_POST["doc_testemunha"];
$testemunha2 = $_POST["testemunha2"];
$docTestemunha2 = $_POST["doc_testemunha2"];

$medicoAtendimento = $_POST["medico_atendimento"];
$socorrista1 = $_POST["socorrista1"];
$socorrista2 = $_POST["socorrista2"];
$socorrista3 = $_POST["socorrista3"];
$demandante = $_POST["demandante"];
$equipe = $_POST["equipe"];

$ficha = $_POST["ficha"];
$fibra = $_POST["fibra"];

$mensagemErro = "";

if ($oqAconteceu == null) {
  $mensagemErro = "O campo Outro campo é obrigatório \n";
}

if ($outrasVezes == null) {
    $mensagemErro = "O campo aconteceu outras vezes é obrigatório \n";
}


if ($mensagemErro != "") {
  $data = array("erro" => true, "mensagem" => "Dados inválidos: " + $mensagemErro);
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

    $sql = "INSERT INTO usuario (CAMPO DA TABELA QUE EU QUERO, cpf, senha) VALUES ('$VARIAVEL_QUE_EU_QUISER', '$cpf', '$senha')";
    $run_query = mysqli_query($con, $sql);

}

?>