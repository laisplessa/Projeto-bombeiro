<?php

include "db.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {


  $idFicha = $_GET['idFicha'];
  
  $sql = "SELECT * FROM ficha WHERE id_ficha = $idFicha;";

  $run_query = mysqli_query($con, $sql);

  // Retorno todas as fichas daquela data
  $ficha = (object)[];

  while ($row = mysqli_fetch_assoc($run_query)) {
    $ficha = $row;
  }

  header("Content-Type: application/json");
  echo json_encode($ficha);
  exit();

}

$oqAconteceu = $_POST["oq_aconteceu"];
$outrasVezes = $_POST["outras_vezes"];
$quantoTempo = $_POST["quanto_tempo"];
$problemaSaude = $_POST["problema_saude"];
$quais = $_POST["quais_problemas"];
$medicacao = $_POST["medicacao"];
$horaMedicacao = $_POST["hora_medicacao"];
$quaisMedicacoes = $_POST["quais_medicacoes"];
$alergico = $_POST["alergico"];
$alergia = $_POST["alergia"];
$ingeriu = $_POST["ingeriu"];
$ingeriuHorario = $_POST["ingeriu_horario"];

$data = $_POST["data"];
$sexoPaciente = $_POST["sexo_paciente"];
$nomeHospital = $_POST["nome_hospital"];
$nomePaciente = $_POST["nome_paciente"];
$idade = $_POST["idade_paciente"] != null ? $_POST["idade_paciente"] : 'NULL';
$telefonePaciente = $_POST["telefone_paciente"] != null ? $_POST["telefone_paciente"] : 'NULL';
$rgCpf = $_POST["rg_cpf"]  != null ? $_POST["rg_cpf"] : 'NULL';
$nomeAcompanhante = $_POST["nome_acompanhante"];
$idadeAcompanhante = $_POST["idade_acompanhante"]  != null ? $_POST["idade_acompanhante"] : 'NULL';
$localOcorrencia = $_POST["local_ocorrencia"];

$periodoGestacao = $_POST["periodo_gestacao"];
$preNatal = $_POST["pre_natal"];
$nomeMedico = $_POST["nome_medico"];
$complicacoes = $_POST["complicacoes"];
$primeiroFilho = $_POST["primeiro"];
$quantosFilhos = $_POST["quantos_filhos"];
$inicioContracao = $_POST["inicio_contracao"];
$duracaoContracao = $_POST["duracao_contracao"];
$intervaloContracao = $_POST["intervalo_contracao"];
$sentePressao = $_POST["pressao_quadril"];
$rupturaBolsa = $_POST["ruptura"];
$inspecaoVisual = $_POST["inspecao"];
$partoRealizado = $_POST["parto"];
$horaNascimento = $_POST["hora_nascimento"];
$bebe = isset($_POST["bebe"]) ? $_POST["bebe"] : 'NULL';
$nomeBebe = $_POST["nome_bebe"];

$causadoAnimais = $_POST["causado_animais"];
$meioTransporte = $_POST["meio_transporte"];
$desmoronamentoDeslizamento = $_POST["desmoronamento_deslizamento"];
$emergenciaMedica = $_POST["emergencia_medica"];
$queda2m = $_POST["queda_2m"];
$tentativaSuicidio = $_POST["tentativa_suicidio"];
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

$espontanea = $_POST["espontanea"] ;
$espontaneaMenor = $_POST["espontanea_menor"] ;
$comando = $_POST["comando"] ;
$comandoMenor = $_POST["comando_menor"] ;
$estimulo = $_POST["estimulo"] ;
$estimuloMenor = $_POST["estimulo_menor"] ;
$nenhuma = $_POST["nenhuma"] ;
$nenhumaMenor = $_POST["nenhuma_menor"] ;
$orientado = $_POST["orientado"] ;
$pfApropriadas = $_POST["pf_apropriadas"] ;
$confuso = $_POST["confuso"] ;
$palavrasInapropriadas = $_POST["palavras_inapropriadas"] ;
$inapropriadasMenor = $_POST["inapropriadas_menor"] ;
$choroGrito = $_POST["choro_grito"] ;
$pIncompreensiveis = $_POST["p_incompreensiveis"] ;
$sIncompreensiveis = $_POST["s_incompreensiveis"] ;
$nenhumaMenor2 = $_POST["nenhuma_menor2"] ;
$nenhumaResposta = $_POST["nenhuma_resposta"] ;
$oComandos = $_POST["o_comandos"] ;
$oProntamente = $_POST["o_prontamente"] ;
$localizaMenor = $_POST["localiza_menor"] ;
$localiza = $_POST["localiza"] ;
$movimentoRetirada = $_POST["movimento_retirada"] ;
$retiradaEstimulado = $_POST["retirada_estimulado"] ;
$flexaoAnormal = $_POST["flexao_anormal"] ;
$flexaoMenor = $_POST["flexao_menor"] ;
$extensaoAnormal = $_POST["extensao_anormal"] ;
$extensaoMenor = $_POST["extensao_menor"] ;
$nenhuma3 = $_POST["nenhuma_3"] ;
$ausencia = $_POST["ausencia"] ;
$total = $_POST["total"];
$totalMenor = $_POST["total_menor"];

$pressao = $_POST["pressao"];
$pulso = $_POST["pulso"];
$respiracao = $_POST["respiracao"];
$saturacao = $_POST["saturacao"];
$hgt = $_POST["hgt"];
$temperatura = $_POST["temperatura"];
$perfusao =  isset($_POST["perfusao"]) ? $_POST["perfusao"] : 'NULL';
$anormalNormal = $_POST["anormal_normal"];

$psiquiatrico = $_POST["psiquiatrico"] ;
$respiratorio = $_POST["respiratorio"] ;
$respiratorioOpcoes = $_POST["respiratorio_opcoes"];
$diabetes = $_POST["diabetes"] ;
$diabetesOpcoes = $_POST["diabetes_opcoes"];
$obstetrico = $_POST["obstetrico"] ;
$obstetricoOpcoes = $_POST["obstetrico_opcoes"];
$transporte = $_POST["transporte"] ;
$transporteOpcoes = $_POST["transporte_opcoes"];
$outrosProblemas = $_POST["outros_problemas"] ;
$outrosText = $_POST["outros_text"];

$numeroCorpo = $_POST["numerocorpo"];
$fratura = $_POST["fratura"] ;
$ferimento = $_POST["ferimento"] ;
$hemorragias = $_POST["hemorragias"] ;
$esviceracao = $_POST["esviceracao"] ;
$fab = $_POST["fab"] ;
$amputacao = $_POST["amputacao"] ;
$queimadura1 = $_POST["queimadura1"] ;
$queimadura2 = $_POST["queimadura2"] ;
$queimadura3 = $_POST["queimadura3"] ;
$numeroCorpo2 = $_POST["numeroCorpo2"];
$fratura2 = $_POST["fratura2"] ;
$ferimento2 = $_POST["ferimento2"] ;
$hemorragias2 = $_POST["hemorragias2"] ;
$esviceracao2 = $_POST["esviceracao2"] ;
$fab2 = $_POST["fab2"] ;
$amputacao2 = $_POST["amputacao2"] ;
$queimadura12 = $_POST["queimadura1_2"] ;
$queimadura22 = $_POST["queimadura2_2"] ;
$queimadura32 = $_POST["queimadura3_2"] ;
$numeroCorpo3 = $_POST["numeroCorpo3"];
$fratura3 = $_POST["fratura3"] ;
$ferimento3 = $_POST["ferimento3"] ;
$hemorragias3 = $_POST["hemorragias3"] ;
$esviceracao3 = $_POST["esviceracao3"] ;
$fab3 = $_POST["fab3"] ;
$amputacao3 = $_POST["amputacao3"] ;
$queimadura13 = $_POST["queimadura1_3"] ;
$queimadura23 = $_POST["queimadura2_3"] ;
$queimadura33 = $_POST["queimadura3_3"] ;


$Localferimento = $_POST["local_ferimento"];
$ladoFerimento = $_POST["lado_ferimento"];
$faceFerimento = $_POST["face_ferimento"];
$tipoFerimento = $_POST["tipo_ferimento"];
$Localferimento2 = $_POST["local_ferimento2"];
$lado = $_POST["lado"];
$face = $_POST["face"];
$tipo = $_POST["tipo"];
$Localferimento3 = $_POST["local_ferimento3"];
$lado3 = $_POST["lado3"];
$face3 = $_POST["face3"];
$tipo3 = $_POST["tipo3"];
$Localferimento4 = $_POST["local_ferimento4"];
$lado4 = $_POST["lado4"];
$face4 = $_POST["face4"];
$tipo4 = $_POST["tipo4"];
$Localferimento5 = $_POST["local_ferimento5"];
$lado5 = $_POST["lado5"];
$face5 = $_POST["face5"];
$tipo5 = $_POST["tipo5"];

$qcabeca1grau = $_POST["qcabeca_1grau"] ;
$qcabeca2grau = $_POST["qcabeca_2grau"] ;
$qcabeca3grau = $_POST["qcabeca_3grau"] ;
$qcabeca4grau = $_POST["qcabeca_4grau"] ;
$qpescoco1grau = $_POST["qpescoco_1grau"] ;
$qpescoco2grau = $_POST["qpescoco_2grau"] ;
$qpescoco3grau = $_POST["qpescoco_3grau"] ;
$qpescoco4grau = $_POST["qpescoco_4grau"] ;
$qtant1grau = $_POST["qtant_1grau"] ;
$qtant2grau = $_POST["qtant_2grau"] ;
$qtant3grau = $_POST["qtant_3grau"] ;
$qtant4grau = $_POST["qtant_4grau"] ;
$qtpos1grau = $_POST["qtpos_1grau"] ;
$qtpos2grau = $_POST["qtpos_2grau"] ;
$qtpos3grau = $_POST["qtpos_3grau"] ;
$qtpos4grau = $_POST["qtpos_4grau"] ;
$qgenital1grau = $_POST["qgenital_1grau"] ;
$qgenital2grau = $_POST["qgenital_2grau"] ;
$qgenital3grau = $_POST["qgenital_3grau"] ;
$qgenital4grau = $_POST["qgenital_4grau"] ;
$qmembroid1grau = $_POST["qmembroid_1grau"] ;
$qmembroid2grau = $_POST["qmembroid_2grau"] ;
$qmembroid3grau = $_POST["qmembroid_3grau"] ;
$qmembroid4grau = $_POST["qmembroid_4grau"] ;
$qmembroie1grau = $_POST["qmembroie_1grau"] ;
$qmembroie2grau = $_POST["qmembroie_2grau"] ;
$qmembroie3grau = $_POST["qmembroie_3grau"] ;
$qmembroie4grau = $_POST["qmembroie_4grau"] ;
$qmembrosd1grau = $_POST["qmembrosd_1grau"] ;
$qmembrosd2grau = $_POST["qmembrosd_2grau"] ;
$qmembrosd3grau = $_POST["qmembrosd_3grau"] ;
$qmembrosd4grau = $_POST["qmembrosd_4grau"] ;
$qmembrose1grau = $_POST["qmembrose_1grau"] ;
$qmembrose2grau = $_POST["qmembrose_2grau"] ;
$qmembrose3grau = $_POST["qmembrose_3grau"] ;
$qmembrose4grau = $_POST["qmembrose_4grau"] ;

$objetosRecolhidos = $_POST["objetos_recolhidos"];

$abdomen = $_POST["abdomen"] ;
$afundamentoCranio = $_POST["afundamento_cranio"] ;
$agitacao = $_POST["agitacao"] ;
$amnesia = $_POST["amnesia"] ;
$anginaPeito = $_POST["angina_peito"] ;
$apineia = $_POST["apineia"] ;
$bradicardia = $_POST["bradicardia"] ;
$bradipneia = $_POST["bradipneia"] ;
$broncoAspirando = $_POST["bronco_aspirando"] ;
$cefaleia = $_POST["cefaleia"] ;
$cianoseLabios = $_POST["cianoseLabios"] ;
$cianoseExtremidade = $_POST["cianoseExtremidade"] ;
$convulsao = $_POST["convulsao"] ;
$decorticacao = $_POST["decorticacao"] ;
$deformidade = $_POST["deformidade"] ;
$descerebracao = $_POST["descerebracao"] ;
$desmaio = $_POST["desmaio"] ;
$desvioTraqueia = $_POST["desvioTraqueia"] ;
$dispineia = $_POST["dispneia"] ;
$dorLocal = $_POST["dorLocal"] ;
$edemaGeneralizados = $_POST["edemaGeneralizados"] ;
$edemaLocalizados = $_POST["edemaLocalizados"] ;
$enfisemaSubcutaneo = $_POST["enfisemaSubcutaneo"] ;
$entaseJugular = $_POST["entaseJugular"] ;
$facePalida = $_POST["facePalida"] ;
$hipertensao = $_POST["hipertensao"] ;
$hipotensao = $_POST["hipotensao"] ;
$hemorragiaInterna = $_POST["hemorragiaInterna"] ;
$hemorragiaExterna = $_POST["hemorragiaExterna"] ;
$nauseaVomito = $_POST["nauseaVomito"] ;
$nasoragia = $_POST["nasoragia"] ;
$obito = $_POST["obito"] ;
$otorreia = $_POST["otorreia"] ;
$otorragia = $_POST["otorragia"] ;
$ovace = $_POST["ovace"] ;
$paradaCardiaca = $_POST["paradaCardiaca"] ;
$paradaRespiratoria = $_POST["paradaRespiratoria"] ;
$priapismo = $_POST["priapismo"] ;
$pruridoPele = $_POST["pruridoPele"] ;
$pupilasAnisocoria = $_POST["pupilasAnisocoria"] ;
$pupilasIsocoria = $_POST["pupilasIsocoria"] ;
$pupilasMidriase = $_POST["pupilasMidriase"] ;
$pupilasMiose = $_POST["pupilasMiose"] ;
$pupilasReagente = $_POST["pupilasReagente"] ;
$pupilasNreagente = $_POST["pupilasNreagente"] ;
$sede = $_POST["sede"] ;
$sinalBattle = $_POST["sinalBattle"] ;
$sinalGuaxinim = $_POST["sinalGuaxinim"] ;
$sudorese = $_POST["sudorese"] ;
$taquipneia = $_POST["taquipneia"] ;
$taquicardia = $_POST["taquicardia"] ;
$tontura = $_POST["tontura"] ;
$outrosSintomas = $_POST["outrosSintomas"] ;
$osintomasTexto = $_POST["osintomas_texto"];

$ciclista = $_POST["ciclista"] ;
$condutorMoto = $_POST["condutorMoto"] ;
$gestante = $_POST["gestante"] ;
$passageiroBancofrente = $_POST["passageiroBancofrente"] ;
$passageiroMoto = $_POST["passageiroMoto"] ;
$condutorCarro = $_POST["condutorCarro"] ;
$clinico = $_POST["clinico"] ;
$trauma = $_POST["trauma"] ;
$passageiroBtras = $_POST["passageiroBtras"] ;
$pedestre = $_POST["pedestre"] ;

$conducao = isset($_POST["conducao"]) ? $_POST["conducao"] : 'NULL';

$decisao = isset($_POST["decisao"]) ? $_POST["decisao"] : 'NULL';

$aspiracao = $_POST["aspiracao"] ;
$avaliacao = $_POST["avaliacao_inicial"] ;
$avaliacaoDirigida = $_POST["avaliacao_dirigida"] ;
$avaliacaoContinuada = $_POST["avaliacao_continuada"] ;
$chaveRautek = $_POST["chave_rautek"] ;
$canulaGuedel = $_POST["canula_guedel"] ;
$desobstrucaoVa = $_POST["desobstrucao_va"] ;
$empregoDea = $_POST["emprego_dea"] ;
$gerenciamentoRiscos = $_POST["gerenciamento_riscos"] ;
$limpezaFerimento = $_POST["limpeza_ferimento"] ;
$curativos = $_POST["curativos"] ;
$compressivo = $_POST["compressivo"] ;
$encravamento = $_POST["encravamento"] ;
$ocular = $_POST["ocular"] ;
$queimadura = $_POST["queimadura"] ;
$simples = $_POST["simples"] ;
$trespontas = $_POST["3_pontas"] ;
$imobilizacoes = $_POST["imobilizacoes"] ;
$membroInfd = $_POST["membro_infd"] ;
$membroInfe = $_POST["membro_infe"] ;
$membroSupd = $_POST["membro_supd"] ;
$membroSupe = $_POST["membro_supe"] ;
$quadril = $_POST["quadril"] ;
$cervical = $_POST["cervical"] ;
$macaRodas = $_POST["maca_rodas"] ;
$macaRigida = $_POST["maca_rigida"] ;
$ponte = $_POST["ponte"] ;
$retiradoCapacete = $_POST["retirado_capacete"] ;
$rcp = $_POST["rcp"] ;
$rolamento90 = $_POST["rolamento_90"] ;
$rolamento180 = $_POST["rolamento_180"] ;
$tomadaDecisao = $_POST["tomada_decisao"] ;
$tratadoChoque = $_POST["tratado_choque"] ;
$usoCanula = $_POST["uso_canula"] ;
$usoColar = $_POST["uso_colar"] ;
$tamanhoUsoColar = $_POST["tamanho_usocolar"];
$usoKed = $_POST["uso_ked"] ;
$usoTtf = $_POST["uso_ttf"] ;
$ventilacaoSuporte = $_POST["ventilacao_suporte"] ;
$oxigenioTerapia = $_POST["oxigenioterapia"] ;
$oxigenioterapiaTexto = $_POST["oxigenioterapia_texto"];
$reanimador = $_POST["reanimador"] ;
$reanimadorTexto = $_POST["reanimador_texto"];
$meioa = $_POST["meioa"] ;
$meioaCelesc = $_POST["meioa_celesc"] ;
$meioaDefesacivil = $_POST["meioa_defesacivil"] ;
$meioaCivil = $_POST["meioa_civil"] ;
$meioaMilitar = $_POST["meioa_militar"] ;
$meioaPre = $_POST["meioa_pre"] ;
$meioaPrf = $_POST["meioa_prf"] ;
$meioaUsa = $_POST["meioa_usa"] ;
$meioaUsb = $_POST["meioa_usb"] ;
$meioaCit = $_POST["meioa_cit"] ;
$outrosProcedimentos = $_POST["outros_procedimentos"] ;
$outrospTexto = $_POST["outrosp_texto"];

$ataduras8 = $_POST["ataduras8"] ;
$ataduras12 = $_POST["ataduras12"] ;
$ataduras20 = $_POST["ataduras20"] ;
$ataduraQuantidade = $_POST["atadura_quantidade"];
$mantaAluminizada = $_POST["manta_aluminizada"] ;
$mantaQuantidade = $_POST["manta_quantidade"];
$cateterOculos = $_POST["cateter_oculos"] ;
$cateterQuantidade = $_POST["cateter_quantidade"];
$pasDea = $_POST["pas_dea"] ;
$pasQuantidade = $_POST["pas_quantidade"];
$compressaComum = $_POST["compressa_comum"] ;
$compressaQuantidade = $_POST["compressa_quantidade"];
$sondaAspiracao = $_POST["sonda_aspiracao"] ;
$sondaQuantidade = $_POST["sonda_quantidade"];
$kitsH = $_POST["kitsH"] ;
$kitsP = $_POST["kitsP"] ;
$kitsQ = $_POST["kitsQ"] ;
$kitsQuantidade = $_POST["kits_quantidade"];
$soroFisiologico = $_POST["soro_fisiologico"] ;
$soroQuantidade = $_POST["soro_quantidade"];
$luvasDescartaveis = $_POST["luvas_descartaveis"] ;
$luvasQuantidade = $_POST["luvas_quantidade"];
$talasPapp = $_POST["talas_papp"] ;
$talasPapg = $_POST["talas_papg"] ;
$talasQuantidade = $_POST["talas_quantidade"];
$mascarasDescartaveis = $_POST["mascaras_descartaveis"] ;
$mascaraQuantidade = $_POST["mascara_quantidade"];
$outroMaterial = $_POST["outro_material"] ;
$outroM = $_POST["outrom"];
$outromQuantidade = $_POST["outrom_quantidade"];

$baseEstabiliza = $_POST["base_estabiliza"]  ;
$baseQuantidade = $_POST["base_quantidade"];
$ttfAdulto = $_POST["ttf_adulto"]  ;
$ttfInfantil = $_POST["ttf_infantil"]  ;
$ttfQuantidade = $_POST["ttf_quantidade"];
$colarN = $_POST["colar_nd"]  ;
$colarPP = $_POST["colar_pp"]  ;
$colarP = $_POST["colar_p"]  ;
$colarQuantidade = $_POST["colar_quantidade"];
$tiranteAranha = $_POST["tirante_aranha"]  ;
$tiranteQuantidade = $_POST["tirante_quantidade"];
$colarM = $_POST["colar_m"];
$colarG = $_POST["colar_g"];
$colar_n = $_POST["colar_n"];
$tamanhoColar = $_POST["tamanho_colar"];
$colar2quantidade = $_POST["colar_2quantidade"];
$tiranteCabeca = $_POST["tirante_cabeca"]  ;
$tirantecQuantidade = $_POST["tirantec_quantidade"];
$coxinsEstabiliza = $_POST["coxins_estabiliza"]  ;
$coxinsQuantidade = $_POST["coxins_quantidade"];
$canula = $_POST["canula"]  ;
$canulaQuantidade = $_POST["canula_quantidade"];
$kedAdulto = $_POST["ked_adulto"]  ;
$kedInfantil = $_POST["ked_infantil"]  ;
$kedQuantidade = $_POST["ked_quantidade"];
$outroMaterial2 = isset($_POST["outro_material2"]) ? $_POST["outro_material2"] : 'NULL';
$outrom2 = $_POST["outrom2"]  != null ? $_POST["outrom2"] : 'NULL';
$outrom2Quantidade = isset($_POST["outrom2_quantidade"]) ? $_POST["outrom2_quantidade"] : 'NULL';
$maca = $_POST["maca_rigida"]  ;
$macaQuantidade = $_POST["maca_quantidade"];
$outroMaterial3 = $_POST["outro_material3"]  ;
$outrom3 = $_POST["outrom3"];
$outrom3Quantidade = $_POST["outrom3_quantidade"];

$observacoesImportantes = $_POST["observacoes_importantes"];

$disturbioComportamento = $_POST["disturbio_comportamento"] ;
$encontradoCapacete = $_POST["encontrado_capacete"] ;
$encontradoCinto = $_POST["encontrado_cinto"] ;
$parabrisasAvariado = $_POST["parabrisas_avariado"] ;
$caminhandoCena = $_POST["caminhando_cena"] ;
$painelAvariado = $_POST["painel_avariado"] ;
$volanteTorcido = $_POST["volante_torcido"] ;

$nUsd = $_POST["n_usd"];
$nOcorrencia = $_POST["n_ocorrencia"];
$desp = $_POST["desp"];
$kmFinal = $_POST["km_final"];
$codIr = $_POST["codigo_ir"];
$codPs = $_POST["codigo_ps"];
$hCh = $_POST["h_ch"];
$siaSus = $_POST["sia_sus"];

$eu = $_POST["eu"];
$rgNumero = $_POST["rg_numero"];
$cpfNumero = $_POST["cpf_numero"];
$assinatura = $_POST["assinatura"];
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

$id = $_SESSION["id"];



    $sqlFicha = "INSERT INTO ficha (id_usuario, oq_aconteceu, outras_vezes, quanto_tempo, problema_saude, quais, medicacao, ultima_medicacao, quais_medicacao, alergico, especifique, ingeriu, horario_ingeriu,
    data, sexo_paciente, nome_hospital, nome_paciente, idade_paciente, telefone, rg_cpf, nome_acompanhante, idade_acompanhante, local,
    periodo_gestacao, pre_natal, nome_medico, complicacoes, primeiro_filho, quantos_filhos, inicio_contracao, duracao_contracao, intervalo_contracao, sente_pressao, ruptura_bolsa, inspecao_visual, parto_realizado, hora_nascimento, sexo_bebe, nome_bebe,
    causado_animais, meio_transporte, desmoronamento_deslizamento, emergencia_medica, queda_2m, tentativa_suicidio, queda_propriaAltura, afogamento, agressao, atropelamento, choque_eletrico, desabamento, domestico, esportivo, intoxicacao, queda_bicicleta, queda_moto, queda_nivel, trabalho, transferencia, outros, outros_texto,
    espontanea_menor, espontanea, comando_menor, comando, estimulo_menor,  estimulo, nenhuma_menor, nenhuma, orientado, pf_apropriadas, confuso, palavras_inapropriadas, inapropriadas_menor, choro_grito, p_incompreensiveis, s_incompreensiveis, nenhuma_menor2, nenhuma_resposta, o_comandos, o_prontamente, localiza_menor, localiza, movimento_retirada, retirada_estimulado, flexao_menor, flexao_anormal,  extensao_menor, extensao_anormal, nenhuma_3, ausencia, total_menor, total,
    pressao, pulso, respiracao, saturacao, hgt, temperatura, perfusao, anormal_normal,
    psiquiatrico, respiratorio, respiratorio_opcoes, diabetes, diabetes_opcoes, obstetrico, obstetrico_opcoes, transporte, transporte_opcoes, outros_problemas, outros_text,
    numero_corpo, fratura, ferimento, hemorragias, esviceracao, fab, amputacao, queimadura1, queimadura2, queimadura3, numero_corpo2, fratura2, ferimento2, hemorragias2, esviceracao2, fab2, amputacao2, queimadura1_2, queimadura2_2, queimadura3_2, numero_corpo3, fratura3, ferimento3, hemorragias3, esviceracao3, fab3, amputacao3, queimadura1_3, queimadura2_3, queimadura3_3,
    local_ferimento, lado_ferimento, face_ferimento, tipo_ferimento, local_ferimento2, lado, face, tipo, local_ferimento3, lado3, face3, tipo3, local_ferimento4, lado4, face4, tipo4, local_ferimento5, lado5, face5, tipo5,
    qcabeca_1grau, qcabeca_2grau, qcabeca_3grau, qcabeca_4grau, qpescoco_1grau, qpescoco_2grau, qpescoco_3grau, qpescoco_4grau, qtant_1grau, qtant_2grau, qtant_3grau, qtant_4grau, qtpos_1grau, qtpos_2grau, qtpos_3grau, qtpos_4grau, qgenital_1grau, qgenital_2grau, qgenital_3grau, qgenital_4grau, qmembroid_1grau, qmembroid_2grau, qmembroid_3grau, qmembroid_4grau, qmembroie_1grau, qmembroie_2grau, qmembroie_3grau, qmembroie_4grau, qmembrosd_1grau, qmembrosd_2grau, qmembrosd_3grau, qmembrosd_4grau, qmembrose_1grau, qmembrose_2grau, qmembrose_3grau, qmembrose_4grau,
    objetos_recolhidos,
    abdomen, afundamento_cranio, agitacao, amnesia, angina_peito, apineia, bradicardia, bradipneia, bronco_aspirando, cefaleia, cianose_labios, cianose_extremidade, convulsao, decorticacao, deformidade, descerebracao, desmaio, desvio_traqueia, dispineia, dor_local, edema_generalizados, edema_localizados, enfisema_subcutaneo, entase_jugular, face_palida, hipertensao, hipotensao, hemorragia_interna, hemorragia_externa, nausea_vomito, nasoragia, obito, otorreia, otorragia, ovace, parada_cardiaca, parada_respiratoria, priapismo, prurido_pele, pupilas_anisocoria, pupilas_isocoria, pupilas_midriase, pupilas_miose, pupilas_reagente, pupilas_nreagente, sede, sinal_battle, sinal_guaxinim, sudorese, taquipneia, taquicardia, tontura, outros_sintomas, osintomas_texto,
    ciclista, condutor_moto, gestante, passageiro_bancofrente, passageiro_moto, condutor_carro, clinico, trauma, passageiro_btras, pedestre,
    conducao, decisao,
    aspiracao, avaliacao_inicial, avaliacao_dirigida, avaliacao_continuada, chave_rautek, canula_guedel, desobstrucao_va, emprego_dea, gerenciamento_riscos, limpeza_ferimento, curativos, compressivo, encravamento, ocular, queimadura, simples, 3_pontas, imobilizacoes, membro_infd, membro_infe, membro_supd, membro_supe, quadril, cervical, maca_rodas, maca_rigida, ponte, retirado_capacete, rcp, rolamento_90, rolamento_180, tomada_decisao, tratado_choque, uso_canula, uso_colar,tamanho_usocolar,  uso_ked, uso_ttf, ventilacao_suporte, oxigenioterapia, oxigenioterapia_texto, reanimador, reanimador_texto, meioa, meioa_celesc, meioa_defesacivil, meioa_civil, meioa_pre, meioa_prf, meioa_militar, meioa_usa, meioa_usb, meioa_cit, outros_procedimentos, outrosp_texto,
    ataduras_8, ataduras_12, ataduras_20, atadura_quantidade, manta_aluminizada, manta_quantidade, cateter_oculos, cateter_quantidade, pas_dea, pas_quantidade, compressa_comum, compressa_quantidade, sonda_aspiracao, sonda_quantidade, kits_h, kits_p, kits_q, kits_quantidade, soro_fisiologico, soro_quantidade, luvas_descartaveis, luvas_quantidade, talas_papp, talas_papg, talas_quantidade, mascaras_descartaveis, mascara_quantidade, outro_material, outrom, outrom_quantidade,
    base_estabiliza, base_quantidade, ttf_adulto, ttf_infantil, ttf_quantidade, colar_n, colar_pp, colar_p, colar_quantidade, tirante_aranha, tirante_quantidade, colar_m, colar_g, colar_nd, colar_tamm, colar_2quantidade, tirante_cabeca, 	tirantec_quantidade, coxins_estabiliza, coxins_quantidade, canula, canula_quantidade, ked_adulto, ked_infantil, ked_quantidade, outro_material2, outrom2, outrom2_quantidade, maca, maca_quantidade, outro_material3, outrom3, outrom3_quantidade,
    observacoes_importantes, disturbio_comportamento, encontrado_capacete, encontrado_cinto, parabrisas_avariado, caminhando_cena, painel_avariado, volante_torcido,n_usd, n_ocorrencia, desp, km_final, codigo_ir, codigo_ps, h_ch, sia_sus,
    eu, rg_numero, cpf_numero, assinatura, testemunha, doc_testemunha, testemunha2, doc_testemunha2, medico_atendimento, socorrista1, socorrista2, socorrista3, demandante, equipe, respon_ficha, respon_fibra)
    
    VALUES ($id, '$oqAconteceu', $outrasVezes, '$quantoTempo', $problemaSaude, '$quais', $medicacao, '$horaMedicacao', '$quaisMedicacoes', $alergico, '$alergia', $ingeriu, '$ingeriuHorario',
    '$data', $sexoPaciente, '$nomeHospital', '$nomePaciente', $idade, $telefonePaciente, $rgCpf, '$nomeAcompanhante', $idadeAcompanhante, '$localOcorrencia',
    '$periodoGestacao', $preNatal, '$nomeMedico', $complicacoes, $primeiroFilho, '$quantosFilhos', '$inicioContracao', '$duracaoContracao', '$intervaloContracao', $sentePressao, $rupturaBolsa, $inspecaoVisual, $partoRealizado, '$horaNascimento', $bebe, '$nomeBebe',
    $causadoAnimais, $meioTransporte, $desmoronamentoDeslizamento, $emergenciaMedica, $queda2m, $tentativaSuicidio, $quedaPropriaAltura, $afogamento, $agressao, $atropelamento, $choqueEletrico, $desabamento, $domestico, $esportivo, $intoxicacao, $quedaBicicleta, $quedaMoto, $quedaNivel, $trabalho, $transferencia, $outros, '$outrosTexto',
    $espontaneaMenor, $espontanea, $comandoMenor, $comando,$estimuloMenor, $estimulo, $nenhumaMenor, $nenhuma, $orientado, $pfApropriadas, $confuso, $palavrasInapropriadas, $inapropriadasMenor, $choroGrito, $pIncompreensiveis, $sIncompreensiveis, $nenhumaMenor2, $nenhumaResposta, $oComandos, $oProntamente, $localizaMenor, $localiza, $movimentoRetirada, $retiradaEstimulado,$flexaoMenor, $flexaoAnormal, $extensaoMenor, $extensaoAnormal, $nenhuma3, $ausencia, '$totalMenor', '$total',
    '$pressao', '$pulso', '$respiracao', '$saturacao', '$hgt', '$temperatura', $perfusao, $anormalNormal,
    $psiquiatrico, $respiratorio, '$respiratorioOpcoes', $diabetes, '$diabetesOpcoes', $obstetrico, '$obstetricoOpcoes', $transporte, '$transporteOpcoes', '$outrosProblemas', '$outrosTexto',
    '$numeroCorpo', $fratura, $ferimento, $hemorragias, $esviceracao, $fab, $amputacao, $queimadura1, $queimadura2, $queimadura3, '$numeroCorpo2', $fratura2, $ferimento2, $hemorragias2, $esviceracao2, $fab2, $amputacao2, $queimadura12, $queimadura22, $queimadura32,  '$numeroCorpo3', $fratura3, $ferimento3, $hemorragias3, $esviceracao3, $fab3, $amputacao3, $queimadura13, $queimadura23, $queimadura33,
    '$Localferimento', '$ladoFerimento', '$faceFerimento', '$tipoFerimento', '$Localferimento2', '$lado', '$face', '$tipo', '$Localferimento3', '$lado3', '$face3', '$tipo3', '$Localferimento4', '$lado4', '$face4', '$tipo4', '$Localferimento5', '$lado5', '$face5', '$tipo5',
    $qcabeca1grau, $qcabeca2grau, $qcabeca3grau, $qcabeca4grau, $qpescoco1grau, $qpescoco2grau, $qpescoco3grau, $qpescoco4grau, $qtant1grau, $qtant2grau, $qtant3grau, $qtant4grau, $qtpos1grau, $qtpos2grau, $qtpos3grau, $qtpos4grau, $qgenital1grau, $qgenital2grau, $qgenital3grau, $qgenital4grau, $qmembroid1grau, $qmembroid2grau, $qmembroid3grau, $qmembroid4grau, $qmembroie1grau, $qmembroie2grau, $qmembroie3grau, $qmembroie4grau, $qmembrosd1grau, $qmembrosd2grau, $qmembrosd3grau, $qmembrosd4grau, $qmembrose1grau, $qmembrose2grau, $qmembrose3grau, $qmembrose4grau,
    '$objetosRecolhidos',
    $abdomen, $afundamentoCranio, $agitacao, $amnesia, $anginaPeito,$apineia, $bradicardia, $bradipneia, $broncoAspirando, $cefaleia, $cianoseLabios, $cianoseExtremidade, $convulsao, $decorticacao, $deformidade, $descerebracao, $desmaio, $desvioTraqueia, $dispineia, $dorLocal, $edemaGeneralizados, $edemaLocalizados, $enfisemaSubcutaneo, $entaseJugular, $facePalida, $hipertensao, $hipotensao, $hemorragiaInterna, $hemorragiaExterna, $nauseaVomito, $nasoragia, $obito, $otorreia, $otorragia, $ovace, $paradaCardiaca, $paradaRespiratoria, $priapismo, $pruridoPele, $pupilasAnisocoria, $pupilasIsocoria, $pupilasMidriase, $pupilasMiose, $pupilasReagente, $pupilasNreagente, $sede, $sinalBattle, $sinalGuaxinim, $sudorese, $taquipneia, $taquicardia, $tontura, $outrosSintomas, '$osintomasTexto',
    $ciclista, $condutorMoto, $gestante, $passageiroBancofrente, $passageiroMoto, $condutorCarro, $clinico, $trauma, $passageiroBtras, $pedestre,
    $conducao, $decisao,
    $aspiracao, $avaliacao, $avaliacaoDirigida, $avaliacaoContinuada, $chaveRautek, $canulaGuedel, $desobstrucaoVa, $empregoDea, $gerenciamentoRiscos, $limpezaFerimento, $curativos, $compressivo, $encravamento, $ocular, $queimadura, $simples, $trespontas, $imobilizacoes, $membroInfd, $membroInfe, $membroSupd, $membroSupe, $quadril, $cervical, $macaRodas, $macaRigida, $ponte, $retiradoCapacete, $rcp, $rolamento90, $rolamento180, $tomadaDecisao, $tratadoChoque, $usoCanula, $usoColar, '$tamanhoUsoColar', $usoKed, $usoTtf, $ventilacaoSuporte, $oxigenioTerapia, '$oxigenioterapiaTexto', $reanimador, '$reanimadorTexto', $meioa, $meioaCelesc, $meioaDefesacivil, $meioaCivil, $meioaPre, $meioaPrf,  $meioaMilitar,$meioaUsa, $meioaUsb, $meioaCit, $outrosProcedimentos, '$outrospTexto',
    $ataduras8, $ataduras12, $ataduras20, '$ataduraQuantidade', $mantaAluminizada, '$mantaQuantidade', $cateterOculos, '$cateterQuantidade', $pasDea, '$pasQuantidade', $compressaComum, '$compressaQuantidade', $sondaAspiracao, '$sondaQuantidade', $kitsH, $kitsP, $kitsQ, '$kitsQuantidade', $soroFisiologico, '$soroQuantidade', $luvasDescartaveis, '$luvasQuantidade', $talasPapp, $talasPapg, '$talasQuantidade', $mascarasDescartaveis, '$mascaraQuantidade', $outroMaterial, '$outroM', '$outromQuantidade',
    $baseEstabiliza, '$baseQuantidade', $ttfAdulto, $ttfInfantil, '$ttfQuantidade', $colarN, $colarPP, $colarP, '$colarQuantidade', $tiranteAranha, '$tiranteQuantidade', $colarM, $colarG, $colar_nd, '$tamanhoColar', '$colar2quantidade', $tiranteCabeca, '$tirantecQuantidade', $coxinsEstabiliza, '$coxinsQuantidade', $canula, '$canulaQuantidade', $kedAdulto, $kedInfantil, '$kedQuantidade', '$outroMaterial2', $outrom2, '$outrom2Quantidade', $maca, '$macaQuantidade', $outroMaterial3, '$outrom3', '$outrom3Quantidade',
    '$observacoesImportantes', $disturbioComportamento, $encontradoCapacete, $encontradoCinto, $parabrisasAvariado, $caminhandoCena, $painelAvariado, $volanteTorcido, '$nUsd', '$nOcorrencia', '$desp', '$kmFinal', $codIr, $codPs, '$hCh', '$siaSus',
    '$eu', '$rgNumero', '$cpfNumero', '$assinatura', '$testemunha', '$docTestemunha', '$testemunha2', '$docTestemunha2', '$medicoAtendimento', '$socorrista1', '$socorrista2', '$socorrista3', '$demandante', '$equipe', '$ficha', '$fibra')";


$execucao = mysqli_query($con, $sqlFicha);

if($execucao){
  $data = array("erro" => false, "mensagem" => "Ficha registrada com sucesso");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  $data = array("erro" => true, "mensagem" => "Erro ao realizar cadastro de ficah");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();
}
// Fechar a conexão com o banco de dados
$conn->close();
?>