<?php

include "db.php";

session_start();

$oqAconteceu = $_POST["oq_aconteceu"];
$outrasVezes = ($_POST['outrasVezes'] === 'sim') ? 1 : 0;
$quantoTempo = $_POST["quanto_tempo"];
$problemaSaude = ($_POST['problemaSaude'] === 'sim') ? 1 : 0;
$quaisProblemas = $_POST["quais_problemas"];
$medicacao = ($_POST['medicacao'] === 'sim') ? 1 : 0;
$horaMedicacao = $_POST["hora_medicacao"];
$quaisMedicacoes = $_POST["quais_medicacoes"];
$alergico = ($_POST['alergico'] === 'sim') ? 1 : 0;
$alergia = $_POST["alergia"];
$ingeriu = ($_POST["ingeriu"] === 'sim') ? 1 : 0;
$ingeriuHorario = $_POST["ingeriu_horario"];

$data = $_POST["data"];
$sexoPaciente = $_POST["sexo_paciente"];
$nomeHospital = $_POST["nome_hospital"];
$nomePaciente = $_POST["nome_paciente"];
$idade = $_POST["idade"];
$telefonePaciente = $_POST["telefone_paciente"];
$rgCpf = $_POST["rg_cpf"];
$nomeAcompanhante = $_POST["nome_acompanhante"];
$idadeAcompanhante = $_POST["idade_acompanhante"];
$localOcorrencia = $_POST["local_ocorrencia"];

$periodoGestacao = $_POST["periodo_gestacao"];
$preNatal = ($_POST['pre_natal'] === 'sim') ? 1 : 0;
$nomeMedico = $_POST["nome_medico"];
$complicacoes = ($_POST['complicacoes'] === 'sim') ? 1 : 0;
$primeiroFilho = ($_POST['primeiroFilho'] === 'sim') ? 1 : 0;
$quantosFilhos = $_POST["quantos_filhos"];
$inicioContracao = $_POST["inicio_contracao"];
$duracaoContracao = $_POST["duracao_contracao"];
$intervaloContracao = $_POST["intervalo_contracao"];
$sentePressao = ($_POST['pressao_quadril'] === 'sim') ? 1 : 0;
$rupturaBolsa = ($_POST['ruptura'] === 'sim') ? 1 : 0;
$inspecaoVisual = ($_POST['inspecao'] === 'sim') ? 1 : 0;
$partoRealizado = ($_POST['parto'] === 'sim') ? 1 : 0;
$horaNascimento = $_POST["hora_nascimento"];
$sexoBebe = $_POST['sexo_bebe'];
$nomeBebe = $_POST["nome_bebe"];

$causadoAnimais = ($_POST['causado_animais'] === 'sim') ? 1 : 0;
$meioTransporte = ($_POST['meio_transporte'] === 'sim') ? 1 : 0;
$desmoronamentoDeslizamento = ($_POST['desmoronamento_deslizamento'] === 'sim') ? 1 : 0;
$emergenciaMedica = ($_POST['emergencia_medica'] === 'sim') ? 1 : 0;
$queda2m = ($_POST['queda_2m'] === 'sim') ? 1 : 0;
$tentativaSuicidio = ($_POST['tentativa_suicidio'] === 'sim') ? 1 : 0;
$quedaPropriaAltura = ($_POST['queda_propriaAltura'] === 'sim') ? 1 : 0;
$afogamento = ($_POST['afogamento'] === 'sim') ? 1 : 0;
$agressao = ($_POST['agressao'] === 'sim') ? 1 : 0;
$atropelamento = ($_POST['atropelamento'] === 'sim') ? 1 : 0;
$choqueEletrico = ($_POST['choque_eletrico'] === 'sim') ? 1 : 0;
$desabamento = ($_POST['desabamento'] === 'sim') ? 1 : 0;
$domestico = ($_POST['domestico'] === 'sim') ? 1 : 0;
$esportivo = ($_POST['esportivo'] === 'sim') ? 1 : 0;
$intoxicacao = ($_POST['intoxicacao'] === 'sim') ? 1 : 0;
$quedaBicicleta = ($_POST['queda_bicicleta'] === 'sim') ? 1 : 0;
$quedaMoto = ($_POST['queda_moto'] === 'sim') ? 1 : 0;
$quedaNivel = ($_POST['queda_nivel'] === 'sim') ? 1 : 0;
$trabalho = ($_POST['trabalho'] === 'sim') ? 1 : 0;
$transferencia = ($_POST['transferencia'] === 'sim') ? 1 : 0;
$outros = ($_POST['outros'] === 'sim') ? 1 : 0;
$outrosTexto = $_POST["outros_texto"];

$espontanea = ($_POST['espontanea'] === 'sim') ? 1 : 0;
$espontaneaMenor = ($_POST['espontanea_menor'] === 'sim') ? 1 : 0;
$comando = ($_POST['comando'] === 'sim') ? 1 : 0;
$comandoMenor = ($_POST['comando_menor'] === 'sim') ? 1 : 0;
$estimulo = ($_POST['estimulo'] === 'sim') ? 1 : 0;
$estimuloMenor = ($_POST['estimulo_menor'] === 'sim') ? 1 : 0;
$nenhuma = ($_POST['nenhuma'] === 'sim') ? 1 : 0;
$nenhumaMenor = ($_POST['nenhuma_menor'] === 'sim') ? 1 : 0;
$orientado = ($_POST['orientado'] === 'sim') ? 1 : 0;
$pfApropriadas = ($_POST['pf_apropriadas'] === 'sim') ? 1 : 0;
$confuso = ($_POST['confuso'] === 'sim') ? 1 : 0;
$palavrasInapropriadas = ($_POST['palavras_inapropriadas'] === 'sim') ? 1 : 0;
$inapropriadasMenor = ($_POST['inapropriadas_menor'] === 'sim') ? 1 : 0;
$choroGrito = ($_POST['choro_grito'] === 'sim') ? 1 : 0;
$pIncompreensiveis = ($_POST['p_incompreensiveis'] === 'sim') ? 1 : 0;
$sIncompreensiveis = ($_POST['s_incompreensiveis'] === 'sim') ? 1 : 0;
$nenhumaMenor2 = ($_POST['nenhuma_menor2'] === 'sim') ? 1 : 0;
$nenhumaResposta = ($_POST['nenhuma_resposta'] === 'sim') ? 1 : 0;
$oComandos = ($_POST['o_comandos'] === 'sim') ? 1 : 0;
$oProtamente = ($_POST['o_protamente'] === 'sim') ? 1 : 0;
$localizaMenor = ($_POST['localiza_menor'] === 'sim') ? 1 : 0;
$localiza = ($_POST['localiza'] === 'sim') ? 1 : 0;
$movimentoRetirada = ($_POST['movimento_retirada'] === 'sim') ? 1 : 0;
$retiradaEstimulado = ($_POST['retirada_estimulado'] === 'sim') ? 1 : 0;
$flexaoAnormal = ($_POST['flexao_anormal'] === 'sim') ? 1 : 0;
$flexaoMenor = ($_POST['flexao_menor'] === 'sim') ? 1 : 0;
$extensaoAnormal = ($_POST['extensao_anormal'] === 'sim') ? 1 : 0;
$extensaoMenor = ($_POST['extensao_menor'] === 'sim') ? 1 : 0;
$nenhuma3 = ($_POST['nenhuma_3'] === 'sim') ? 1 : 0;
$ausencia = ($_POST['ausencia'] === 'sim') ? 1 : 0;
$total = $_POST["total"];
$totalMenor = $_POST["total_menor"];

$pressao = $_POST["pressao"];
$pulso = $_POST["pulso"];
$respiracao = $_POST["respiracao"];
$saturacao = $_POST["saturacao"];
$temperatura = $_POST["temperatura"];
$perfusao = $_POST["perfusao"];
$anormalNormal = $_POST["anormal_normal"];

$psiquiatrico = ($_POST['psiquiatrico'] === 'sim') ? 1 : 0;
$respiratorio = ($_POST['respiratorio'] === 'sim') ? 1 : 0;
$respiratorioOpcoes = $_POST['respiratorio_opcoes'];
$diabetes = ($_POST['diabetes'] === 'sim') ? 1 : 0;
$diabetesOpcoes = $_POST['diabetes_opcoes'];
$obstetrico = ($_POST['obstetrico'] === 'sim') ? 1 : 0;
$obstetricoOpcoes = $_POST['obstetrico_opcoes'];
$transporte = ($_POST['transporte'] === 'sim') ? 1 : 0;
$transporteOpcoes = $_POST['transporte_opcoes'];
$outrosProblemas = ($_POST['outros_problemas'] === 'sim') ? 1 : 0;
$outrosText = $_POST['outros_text'];

$numeroCorpo = $_POST["numerocorpo"];
$fratura = ($_POST['fratura'] === 'sim') ? 1 : 0;
$ferimento = ($_POST['ferimento'] === 'sim') ? 1 : 0;
$hemorragias = ($_POST['hemorragias'] === 'sim') ? 1 : 0;
$esviceracao = ($_POST['esviceracao'] === 'sim') ? 1 : 0;
$fab = ($_POST['fab'] === 'sim') ? 1 : 0;
$amputacao = ($_POST['amputacao'] === 'sim') ? 1 : 0;
$queimadura1 = ($_POST['queimadura1'] === 'sim') ? 1 : 0;
$queimadura2 = ($_POST['queimadura2'] === 'sim') ? 1 : 0;
$queimadura3 = ($_POST['queimadura3'] === 'sim') ? 1 : 0;

$ferimentos = $_POST["ferimentos"];
$ladoFerimento = $_POST["lado_ferimento"];
$faceFerimento = $_POST["face_ferimento"];
$tipoFerimento = $_POST["tipo_ferimento"];

$qcabeca1grau = ($_POST['qcabeca_1grau'] === 'sim') ? 1 : 0;
$qcabeca2grau = ($_POST['qcabeca_2grau'] === 'sim') ? 1 : 0;
$qcabeca3grau = ($_POST['qcabeca_3grau'] === 'sim') ? 1 : 0;
$qcabeca4grau = ($_POST['qcabeca_4grau'] === 'sim') ? 1 : 0;
$qpescoco1grau = ($_POST['qpescoco_1grau'] === 'sim') ? 1 : 0;
$qpescoco2grau = ($_POST['qpescoco_2grau'] === 'sim') ? 1 : 0;
$qpescoco3grau = ($_POST['qpescoco_3grau'] === 'sim') ? 1 : 0;
$qpescoco4grau = ($_POST['qpescoco_4grau'] === 'sim') ? 1 : 0;
$qtant1grau = ($_POST['qtant_1grau'] === 'sim') ? 1 : 0;
$qtant2grau = ($_POST['qtant_2grau'] === 'sim') ? 1 : 0;
$qtant3grau = ($_POST['qtant_3grau'] === 'sim') ? 1 : 0;
$qtant4grau = ($_POST['qtant_4grau'] === 'sim') ? 1 : 0;
$qtpos1grau = ($_POST['qtpos_1grau'] === 'sim') ? 1 : 0;
$qtpos2grau = ($_POST['qtpos_2grau'] === 'sim') ? 1 : 0;
$qtpos3grau = ($_POST['qtpos_3grau'] === 'sim') ? 1 : 0;
$qtpos4grau = ($_POST['qtpos_4grau'] === 'sim') ? 1 : 0;
$qgenital1grau = ($_POST['qgenital_1grau'] === 'sim') ? 1 : 0;
$qgenital2grau = ($_POST['qgenital_2grau'] === 'sim') ? 1 : 0;
$qgenital3grau = ($_POST['qgenital_3grau'] === 'sim') ? 1 : 0;
$qgenital4grau = ($_POST['qgenital_4grau'] === 'sim') ? 1 : 0;
$qmembroid1grau = ($_POST['qmembroid_1grau'] === 'sim') ? 1 : 0;
$qmembroid2grau = ($_POST['qmembroid_2grau'] === 'sim') ? 1 : 0;
$qmembroid3grau = ($_POST['qmembroid_3grau'] === 'sim') ? 1 : 0;
$qmembroid4grau = ($_POST['qmembroid_4grau'] === 'sim') ? 1 : 0;
$qmembroie1grau = ($_POST['qmembroie_1grau'] === 'sim') ? 1 : 0;
$qmembroie2grau = ($_POST['qmembroie_2grau'] === 'sim') ? 1 : 0;
$qmembroie3grau = ($_POST['qmembroie_3grau'] === 'sim') ? 1 : 0;
$qmembroie4grau = ($_POST['qmembroie_4grau'] === 'sim') ? 1 : 0;
$qmembrosd1grau = ($_POST['qmembrosd_1grau'] === 'sim') ? 1 : 0;
$qmembrosd2grau = ($_POST['qmembrosd_2grau'] === 'sim') ? 1 : 0;
$qmembrosd3grau = ($_POST['qmembrosd_3grau'] === 'sim') ? 1 : 0;
$qmembrosd4grau = ($_POST['qmembrosd_4grau'] === 'sim') ? 1 : 0;
$qmembrose1grau = ($_POST['qmembrose_1grau'] === 'sim') ? 1 : 0;
$qmembrose2grau = ($_POST['qmembrose_2grau'] === 'sim') ? 1 : 0;
$qmembrose3grau = ($_POST['qmembrose_3grau'] === 'sim') ? 1 : 0;
$qmembrose4grau = ($_POST['qmembrose_4grau'] === 'sim') ? 1 : 0;

$objetosRecolhidos = $_POST["objetos_recolhidos"];

$abdomen = ($_POST['abdomen'] === 'sim') ? 1 : 0;
$afundamentoCranio = ($_POST['afundamento_cranio'] === 'sim') ? 1 : 0;
$agitacao = ($_POST['agitacao'] === 'sim') ? 1 : 0;
$amnesia = ($_POST['amnesia'] === 'sim') ? 1 : 0;
$anginaPeito = ($_POST['angina_peito'] === 'sim') ? 1 : 0;
$apineia = ($_POST['apineia'] === 'sim') ? 1 : 0;
$bradicardia = ($_POST['bradicardia'] === 'sim') ? 1 : 0;
$bradipneia = ($_POST['bradipneia'] === 'sim') ? 1 : 0;
$broncoAspirando = ($_POST['bronco_aspirando'] === 'sim') ? 1 : 0;
$cefaleia = ($_POST['cefaleia'] === 'sim') ? 1 : 0;
$cianose = ($_POST['cianose'] === 'sim') ? 1 : 0;
$cianoseLabios = ($_POST['cianoseLabios'] === 'sim') ? 1 :;
$cianoseExtremidade = ($_POST['cianoseExtremidade'] === 'sim') ? 1 :;
$convulsao = ($_POST['convulsao'] === 'sim') ? 1 : 0;
$decorticacao = ($_POST['decorticacao'] === 'sim') ? 1 : 0;
$deformidade = ($_POST['deformidade'] === 'sim') ? 1 : 0;
$descerebracao = ($_POST['descerebracao'] === 'sim') ? 1 : 0;
$desmaio = ($_POST['desmaio'] === 'sim') ? 1 : 0;
$desvioTraqueia = ($_POST['desvioTraqueia'] === 'sim') ? 1 : 0;
$dispineia = ($_POST['dispneia'] === 'sim') ? 1 : 0;
$dorLocal = ($_POST['dorLocal'] === 'sim') ? 1 : 0;
$edemaGeneralizados = ($_POST['edemaGeneralizados'] === 'sim') ? 1 :;
$edemaLocalizados = ($_POST['edemaLocalizados'] === 'sim') ? 1 : ;
$enfisemaSubcutaneo = ($_POST['enfisemaSubcutaneo'] === 'sim') ? 1 : 0;
$entaseJugular = ($_POST['entaseJugular'] === 'sim') ? 1 : 0;
$facePalida = ($_POST['facePalida'] === 'sim') ? 1 : 0;
$hipertensao = ($_POST['hipertensao'] === 'sim') ? 1 : 0;
$hipotensao = ($_POST['hipotensao'] === 'sim') ? 1 : 0;
$hemorragiaInterna = ($_POST['hemorragiaInterna'] === 'sim') ? 1 : ;
$hemorragiaExterna = ($_POST['hemorragiaExterna'] === 'sim') ? 1 : ;
$nauseaVomito = ($_POST['nauseaVomito'] === 'sim') ? 1 : 0;
$nasoragia = ($_POST['nasoragia'] === 'sim') ? 1 : 0;
$obito = ($_POST['obito'] === 'sim') ? 1 : 0;
$otorreia = ($_POST['otorreia'] === 'sim') ? 1 : 0;
$otorragia = ($_POST['otorragia'] === 'sim') ? 1 : 0;
$ovace = ($_POST['ovace'] === 'sim') ? 1 : 0;
$paradaCardiaca = ($_POST['paradaCardiaca'] === 'sim') ? 1 : 0;
$paradaRespiratoria = ($_POST['paradaRespiratoria'] === 'sim') ? 1 : ;
$priapismo = ($_POST['priapismo'] === 'sim') ? 1 : 0;
$pruridoPele = ($_POST['pruridoPele'] === 'sim') ? 1 : 0;
$pupilasAnisocoria = ($_POST['pupilasAnisocoria'] === 'sim') ? 1 : ;
$pupilasIsocoria = ($_POST['pupilasIsocoria'] === 'sim') ? 1 : ;
$pupilasMidriase = ($_POST['pupilasMidriase'] === 'sim') ? 1 : ;
$pupilasMiose = ($_POST['pupilasMiose'] === 'sim') ? 1 : ;
$pupilasReagente = ($_POST['pupilasReagente'] === 'sim') ? 1 : ;
$pupilasNreagente = ($_POST['pupilasNreagente'] === 'sim') ? 1 :;
$sede = ($_POST['sede'] === 'sim') ? 1 : 0;
$sinalBattle = ($_POST['sinalBattle'] === 'sim') ? 1 : 0;
$sinalGuaxinim = ($_POST['sinalGuaxinim'] === 'sim') ? 1 : 0;
$sudorese = ($_POST['sudorese'] === 'sim') ? 1 : 0;
$taquipneia = ($_POST['taquipneia'] === 'sim') ? 1 : 0;
$taquicardia = ($_POST['taquicardia'] === 'sim') ? 1 : 0;
$tontura = ($_POST['tontura'] === 'sim') ? 1 : 0;
$outrosSintomas = ($_POST['outrosSintomas'] === 'sim') ? 1 : 0;
$osintomasTexto = $_POST["osintomas_texto"];

$ciclista = ($_POST["ciclista"] === 'sim') ? 1 : 0;
$condutorMoto = ($_POST["condutorMoto"] === 'sim') ? 1 : 0;
$gestante = ($_POST["gestante"] === 'sim') ? 1 : 0;
$passageiroBancofrente = ($_POST["passageiroBancofrente"] === 'sim') ? 1 : 0;
$passageiroMoto = ($_POST["passageiroMoto"] === 'sim') ? 1 : 0;
$condutorCarro = ($_POST["condutorCarro"] === 'sim') ? 1 : 0;
$clinico = ($_POST["clinico"] === 'sim') ? 1 : 0;
$trauma = ($_POST["trauma"] === 'sim') ? 1 : 0;
$passageiroBtras = ($_POST["passageiroBtras"] === 'sim') ? 1 : 0;
$pedestre = ($_POST["pedestre"] === 'sim') ? 1 : 0;

$conducao = $_POST["conducao"];

$decisao = $_POST["decisao"];

$aspiracao = ($_POST['aspiracao'] === 'sim') ? 1 : 0;
$avaliacao = ($_POST['avaliacao_inicial'] === 'sim') ? 1 : 0;
$avaliacaoDirigida = ($_POST['avaliacao_dirigida'] === 'sim') ? 1 : 0;
$avaliacaoContinuada = ($_POST['avaliacao_continuada'] === 'sim') ? 1 : 0;
$chaveRautek = ($_POST['chave_rautek'] === 'sim') ? 1 : 0;
$canulaGuedel = ($_POST['canula_guedel'] === 'sim') ? 1 : 0;
$desobstrucaoVa = ($_POST['desobstrucao_va'] === 'sim') ? 1 : 0;
$empregoDea = ($_POST['emprego_dea'] === 'sim') ? 1 : 0;
$gerenciamentoRiscos = ($_POST['gerenciamento_riscos'] === 'sim') ? 1 : 0;
$limpezaFerimento = ($_POST['limpeza_ferimento'] === 'sim') ? 1 : 0;
$curativos = ($_POST['curativos'] === 'sim') ? 1 : 0;
$compressivo = ($_POST['compressivo'] === 'sim') ? 1 : 0;
$encravamento = ($_POST['encravamento'] === 'sim') ? 1 : 0;
$ocular = ($_POST['ocular'] === 'sim') ? 1 : 0;
$queimadura = ($_POST['queimadura'] === 'sim') ? 1 : 0;
$simples = ($_POST['simples'] === 'sim') ? 1 : 0;
$trespontas = ($_POST['3_pontas'] === 'sim') ? 1 : 0;
$imobilizacoes = ($_POST['imobilizacoes'] === 'sim') ? 1 : 0;
$membroInfd = ($_POST['membro_infd'] === 'sim') ? 1 : 0;
$membroInfe = ($_POST['membro_infe'] === 'sim') ? 1 : 0;
$membroSupd = ($_POST['membro_supd'] === 'sim') ? 1 : 0;
$membroSupe = ($_POST['membro_supe'] === 'sim') ? 1 : 0;
$quadril = ($_POST['quadril'] === 'sim') ? 1 : 0;
$cervical = ($_POST['cervical'] === 'sim') ? 1 : 0;
$macaRodas = ($_POST['maca_rodas'] === 'sim') ? 1 : 0;
$macaRigida = ($_POST['maca_rigida'] === 'sim') ? 1 : 0;
$ponte = ($_POST['ponte'] === 'sim') ? 1 : 0;
$retiradoCapacete = ($_POST['retirado_capacete'] === 'sim') ? 1 : 0;
$rcp = ($_POST['rcp'] === 'sim') ? 1 : 0;
$rolamento90 = ($_POST['rolamento_90'] === 'sim') ? 1 : 0;
$rolamento180 = ($_POST['rolamento_180'] === 'sim') ? 1 : 0;
$tomadaDecisao = ($_POST['tomada_decisao'] === 'sim') ? 1 : 0;
$tratadoChoque = ($_POST['tratado_choque'] === 'sim') ? 1 : 0;
$usoCanula = ($_POST['uso_canula'] === 'sim') ? 1 : 0;
$usoColar = ($_POST['uso_colar'] === 'sim') ? 1 : 0;
$tamanhoUsoColar = $_POST['tamanho_usocolar'];
$usoKed = ($_POST['uso_ked'] === 'sim') ? 1 : 0;
$usoTtf = ($_POST['uso_ttf'] === 'sim') ? 1 : 0;
$ventilacaoSuporte = ($_POST['ventilacao_suporte'] === 'sim') ? 1 : 0;
$oxigenioTerapia = ($_POST['oxigenioterapia'] === 'sim') ? 1 : 0;
$oxigenioterapiaTexto = $_POST['oxigenioterapia_texto'];
$reanimador = ($_POST['reanimador'] === 'sim') ? 1 : 0;
$reanimadorTexto = $_POST['reanimador_texto'];
$meioa = ($_POST['meioa'] === 'sim') ? 1 : 0;
$meioaCelesc = ($_POST['meioa_celesc'] === 'sim') ? 1 : 0;
$meioaDefesacivil = ($_POST['meioa_defesacivil'] === 'sim') ? 1 : 0;
$meioaPolicia = ($_POST['meioa_policia'] === 'sim') ? 1 : 0;
$meioaCivil = ($_POST['meioa_civil'] === 'sim') ? 1 : 0 $meioaPolicia;
$meioaMilitar = ($_POST['meioa_militar'] === 'sim') ? 1 : 0 $meioaPolicia;
$meioaPre = ($_POST['meioa_pre'] === 'sim') ? 1 : 0 $meioaPolicia;
$meioaPrf = ($_POST['meioa_prf'] === 'sim') ? 1 : 0 $meioaPolicia;
$meioaSamu = ($_POST['meioa_samu'] === 'sim') ? 1 : 0;
$meioaUsa = ($_POST['meioa_usa'] === 'sim') ? 1 : 0 $meioaSamu;
$meioaUsb = ($_POST['meioa_usb'] === 'sim') ? 1 : 0 $meioaSamu;
$meioaCit = ($_POST['meioa_cit'] === 'sim') ? 1 : 0;
$outrosProcedimentos = ($_POST["outros_procedimentos"] === 'sim') ? 1 : 0;
$outrospTexto = $_POST["outrosp_texto"];

$ataduras = ($_POST['ataduras'] === 'sim') ? 1 : 0;
$ataduras8 = ($_POST['ataduras8'] === 'sim') ? 1 : 0 $ataduras;
$ataduras12 = ($_POST['ataduras12'] === 'sim') ? 1 : 0 $ataduras;
$ataduras20 = ($_POST['ataduras20'] === 'sim') ? 1 : 0 $ataduras;
$ataduraQuantidade = $_POST["atadura_quantidade"];
$mantaAluminizada = ($_POST['manta_aluminizada'] === 'sim') ? 1 : 0;
$mantaQuantidade = $_POST["manta_quantidade"];
$cateterOculos = ($_POST['cateter_oculos'] === 'sim') ? 1 : 0;
$cateterQuantidade = $_POST["cateter_quantidade"];
$pasDea = ($_POST['pas_dea'] === 'sim') ? 1 : 0;
$pasQuantidade = $_POST["pas_quantidade"];
$compressaComum = ($_POST['compressa_comum'] === 'sim') ? 1 : 0;
$compressaQuantidade = $_POST["compressa_quantidade"];
$sondaAspiracao = ($_POST['sonda_aspiracao'] === 'sim') ? 1 : 0;
$sondaQuantidade = $_POST["sonda_quantidade"];
$kitsH = ($_POST['kitsH'] === 'sim') ? 1 : 0 $kits;
$kitsP = ($_POST['kitsP'] === 'sim') ? 1 : 0 $kits;
$kitsQ = ($_POST['kitsQ'] === 'sim') ? 1 : 0 $kits;
$kitsQuantidade = $_POST["kits_quantidade"];
$soroFisiologico = ($_POST['soro_fisiologico'] === 'sim') ? 1 : 0;
$soroQuantidade = $_POST["soro_quantidade"];
$luvasDescartaveis = ($_POST['luvas_descartaveis'] === 'sim') ? 1 : 0;
$luvasQuantidade = $_POST["luvas_quantidade"];
$talasPapp = ($_POST['talas_papp'] === 'sim') ? 1 : 0 $talasPap;
$talasPapg = ($_POST['talas_papg'] === 'sim') ? 1 : 0 $talasPap;
$talasQuantidade = $_POST["talas_quantidade"];
$mascarasDescartaveis = ($_POST['mascaras_descartaveis'] === 'sim') ? 1 : 0;
$mascarasQuantidade = $_POST["mascara_quantidade"];
$outroMaterial = ($_POST["outro_material"] === 'sim') ? 1 : 0;
$outroM = $_POST["outrom"];
$outrosmQuantidade = $_POST["outrom_quantidade"];

$baseEstabiliza = ($_POST["base_estabiliza"]  === 'sim') ? 1 : 0;
$baseQuantidade = $_POST["base_quantidade"];
$ttfAdulto = ($_POST["ttf_adulto"]  === 'sim') ? 1 : 0 $ttf;
$ttfInfantil = ($_POST["ttf_infantil"]  === 'sim') ? 1 : 0;
$ttfQuantidade = $_POST["ttf_quantidade"];
$colarN = ($_POST["colar_n"]  === 'sim') ? 1 : 0 $colar;
$colarPP = ($_POST["colar_pp"]  === 'sim') ? 1 : 0 $colar;
$colarP = ($_POST["colar_p"]  === 'sim') ? 1 : 0 $colar;
$colarQuantidade = $_POST["colar_quantidade"];
$tiranteAranha = ($_POST["tirante_aranha"]  === 'sim') ? 1 : 0;
$tiranteQuantidade = $_POST["tirante_quantidade"];
$colarM = ($_POST["colar_m"]  === 'sim') ? 1 : 0 $colar2;
$colarG = ($_POST["colar_g"]   === 'sim') ? 1 : 0 $colar2;
$colarTam = ($_POST["colar_tam"]  === 'sim') ? 1 : 0 $colar2;
$colarTamm = $_POST["colar_tamm"];
$colar2quantidade = $_POST["colar_2quantidade"];
$tiranteCabeca = ($_POST["tirante_cabeca"]  === 'sim') ? 1 : 0;
$tirantecQuantidade = $_POST["tirantec_quantidade"];
$coxinsEstabiliza = ($_POST["coxins_estabiliza"]  === 'sim') ? 1 : 0;
$coxinsQuantidade = $_POST["coxins_quantidade"];
$canula = ($_POST["canula"]  === 'sim') ? 1 : 0;
$canulaQuantidade = $_POST["canula_quantidade"];
$ked = ($_POST["ked"]  === 'sim') ? 1 : 0;
$kedAdulto = ($_POST["ked_adulto"]  === 'sim') ? 1 : 0 $ked;
$kedInfantil = ($_POST["ked_infantil"]  === 'sim') ? 1 : 0 $ked;
$kedQuantidade = $_POST["ked_quantidade"];
$outroMaterial2 = ($_POST["outro_material2"]  === 'sim') ? 1 : 0;
$outrom2 = $_POST["outrom2"];
$outrom2Quantidade = $_POST["outrom2_quantidade"];
$maca = ($_POST["maca"]  === 'sim') ? 1 : 0;
$macaQuantidade = $_POST["maca_quantidade"];
$outroMaterial3 = ($_POST["outro_material3"]  === 'sim') ? 1 : 0;
$outrom3 = $_POST["outrom3"];
$outrom3Quantidade = $_POST["outrom3_quantidade"];

$observacoesImportantes = $_POST["observacoes_importantes"];

$disturbioComportamento = ($_POST['disturbio_comportamento'] === 'sim') ? 1 : 0;
$encontradoCapacete = ($_POST['encontrado_capacete'] === 'sim') ? 1 : 0;
$encontradoCinto = ($_POST['encontrado_cinto'] === 'sim') ? 1 : 0;
$parabrisasAvariado = ($_POST['parabrisas_avariado'] === 'sim') ? 1 : 0;
$caminhandoCena = ($_POST['caminhando_cena'] === 'sim') ? 1 : 0;
$painelAvariado = ($_POST['painel_avariado'] === 'sim') ? 1 : 0;
$volanteTorcido = ($_POST['volante_torcido'] === 'sim') ? 1 : 0;

$nUsd = $_POST["n_usd"];
$nOcorrencia = $_POST["n_ocorrencia"];
$desp = $_POST["desp"];
$kmFinal = $_POST["km_final"];
$codIr = ($_POST['cod_ir'] === 'sim') ? 1 : 0;
$codPs = ($_POST['cod_ps'] === 'sim') ? 1 : 0;
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


    $sqlFicha = "INSERT INTO ficha (id_ficha, oq_aconteceu, outras_vezes, quanto_tempo, problema_saude, quais, medicacao, ultima_medicacao, quais_medicacao, alergico, especifique, ingeriu, horario_ingeriu,
    data_ocorrencia, sexo_paciente, nome_hospital, nome_paciente, idade_paciente, telefone, rg_cpf, nome_acompanhante, idade_acompanhante, local_ocorrencia,
    periodo_gestacao, pre_natal, nome_medico, complicacoes, primeiro_filho, quantos_filhos, inicio_contracao, duracao_contracao, intervalo_contracao, sente_pressao, ruptura_bolsa, inspecao_visual, parto_realizado, hora_nascimento, sexo_bebe, nome_bebe,
    causado_animais, meio_transporte, desmoronamento_deslizamento, emergencia_medica, queda_2m, tentativa_suicidio, queda_propriaAltura, afogamento, agressao, atropelamento, choque_eletrico, desabamento, domestico, esportivo, intoxicacao, queda_bicicleta, queda_moto, queda_nivel, trabalho, transferencia, outros, outros_texto,
    espontanea, espontanea_menor, comando, comando_menor, estimulo, estimulo_menor, nenhuma, nenhuma_menor, orientado, pf_apropriadas, confuso, palavras_inapropriadas, inapropriadas_menor, choro_grito, p_incompreensiveis, s_incompreensiveis, nenhuma_menor2, nenhuma_resposta, o_comandos, o_protamente, localiza_menor, localiza, movimento_retirada, retirada_estimulado, flexao_anormal, flexao_menor, extensao_anormal, extensao_menor, nenhuma_3, ausencia, total_menor, total,
    pressao, pulso, respiracao, saturacao, temperatura, perfusao, anormal_normal,
    psiquiatrico, respiratorio, respiratorio_opcoes, diabetes, diabetes_opcoes, obstetrico, obstetrico_opcoes, transporte, transporte_opcoes, outros_problemas, outros_text,
    numero_corpo, fratura, ferimento, hemorragias, esviceracao, fab, amputacao, queimadura1, queimadura2, queimadura3,
    local_ferimento, lado_ferimento, face_ferimento, tipo_ferimento,
    qcabeca_1grau, qcabeca_2grau, qcabeca_3grau, qcabeca_4grau, qpescoco_1grau, qpescoco_2grau, qpescoco_3grau, qpescoco_4grau, qtant_1grau, qtant_2grau, qtant_3grau, qtant_4grau, qtpos_1grau, qtpos_2grau, qtpos_3grau, qtpos_4grau, qgenital_1grau, qgenital_2grau, qgenital_3grau, qgenital_4grau, qmembroid_1grau, qmembroid_2grau, qmembroid_3grau, qmembroid_4grau, qmembroie_1grau, qmembroie_2grau, qmembroie_3grau, qmembroie_4grau, qmembrosd_1grau, qmembrosd_2grau, qmembrosd_3grau, qmembrosd_4grau, qmembrose_1grau, qmembrose_2grau, qmembrose_3grau, qmembrose_4grau,
    objetos_recolhidos,
    abdomen, afundamento_cranio, agitacao,amnesia, angina_peito, apineia, bradicardia, bradipneia, bronco_aspirando, cefaleia, cianose, cianose_labios, cianose_extremidade, convulsao, decorticacao, deformidade, descerebracao, desmaio, desvio_traqueia, dispineia, dor_local, edema_generalizados, edema_localizados, enfisema_subcutaneo, entase_jugular, face_palida, hipertensao, hipotensao, hemorragia_interna, hemorragia_externa, nausea_vomito, nasoragia, obito, otorreia, otorragia, ovace, parada_cardiaca, parada_respiratoria, priapismo, prurido_pele, pupilas_anisocoria, pupilas_isocoria, pupilas_midriase, pupilas_miose, pupilas_reagente, pupilas_nreagente, sede, sinal_battle, sinal_guaxinim, sudorese, taquipneia, taquicardia, tontura, outros_sintomas, osintomas_texto,
    ciclista, condutor_moto, gestante, passageiro_bancofrente, passageiro_moto, condutor_carro, clinico, trauma, passageiro_btras, pedestre,
    conducao, decisao,
    aspiracao, avaliacao_inicial, avaliacao_dirigida, avaliacao_continuada, chave_rautek, canula_guedel, desobstrucao_va, emprego_dea, gerenciamento_riscos, limpeza_ferimento, curativos, compressivo, encravamento, ocular, queimadura, simples, 3_pontas, imobilizacoes, membro_infd, membro_infe, membro_supd, membro_supe, quadril, cervical, maca_rodas, maca_rigida, ponte, retirado_capacete, rcp, rolamento_90, rolamento_180, tomada_decisao, tratado_choque, uso_canula, uso_colar,tamanho_usocolar,  uso_ked, uso_ttf, ventilacao_suporte, oxigenioterapia, oxigenioterapia_texto, reanimador, reanimador_texto, meioa, meioa_celesc, meioa_defesacivil, meioa_policia, meioa_civil, meioa_militar, meioa_pre, meioa_prf, meioa_samu, meioa_usa, meioa_usb, meioa_cit, outros_procedimentos, outrosp_texto,
    ataduras_8, ataduras_12, ataduras_20, atadura_quantidade, manta_aluminizada, manta_quantidade, cateter_oculos, cateter_quantidade, pas_dea, pas_quantidade, compressa_comum, compressa_quantidade, sonda_aspiracao, sonda_quantidade, kits_h, kits_p, kits_q, kits_quantidade, soro_fisiologico, soro_quantidade, luvas_descartaveis, luvas_quantidade, talas_papp, talas_papg, talas_quantidade, mascaras_descartaveis, mascara_quantidade, outro_material, outrom, outrom_quantidade,
    base_estabiliza, base_quantidade, ttf, ttf_adulto, ttf_infantil, ttf_quantidade, colar_n, colar_pp, colar_p, colar_quantidade, tirante_aranha, tirante_quantidade, colar_m, colar_g, 	colar_tam, 	colar_tamm, colar_2quantidade, tirante_cabeca, 	tirantec_quantidade, coxins_estabiliza, coxins_quantidade, canula, canula_quantidade, ked, ked_adulto, ked_infantil, ked_quantidade, outro_material2, outrom2, outrom2_quantidade, maca, maca_quantidade, outro_material3, outrom3, outrom3_quantidade
    observacoes_importantes, disturbio_comportamento, encontrado_capacete, encontrado_cinto, parabrisas_avariado, caminhando_cena, painel_avariado, volante_torcido,n_usd, n_ocorrencia, desp, km_final, cod_ir, cod_ps, h_ch, sia_sus,
    eu, rg_numero, cpf_numero, testemunha, doc_testemunha, testemunha2, doc_testemunha2, medico_atendimento, socorrista1, socorrista2, socorrista3, demandante, equipe, respon_ficha, respon_fibra) 
    
    VALUES (null, '$oqAconteceu', '$outrasVezes', '$quantoTempo', '$problemaSaude', '$quaisProblemas', '$medicacao', '$horaMedicacao', '$quaisMedicacoes', '$alergico', '$alergia', '$ingeriu', '$ingeriuHorario',
    '$data', '$sexoPaciente', '$nomeHospital', '$nomePaciente', '$idade', '$telefonePaciente', '$rgCpf', '$nomeAcompanhante', '$idadeAcompanhante', '$localOcorrencia',
    '$periodoGestacao', '$preNatal', '$nomeMedico', '$complicacoes', '$primeiroFilho', '$quantosFilhos', '$inicioContracao', '$duracaoContracao', '$intervaloContracao', '$sentePressao', '$rupturaBolsa', '$inspecaoVisual', '$partoRealizado', '$horaNascimento', '$sexoBebe', '$nomeBebe',
    '$causadoAnimais', '$meioTransporte', '$desmoronamentoDeslizamento', '$emergenciaMedica', '$queda2m', '$tentativaSuicidio', '$quedaPropriaAltura', '$afogamento', '$agressao', '$atropelamento', '$choqueEletrico', '$desabamento', '$domestico', '$esportivo', '$intoxicacao', '$quedaBicicleta', '$quedaMoto', '$quedaNivel', '$trabalho', '$transferencia', '$outros', '$outrosTexto',
    '$espontanea', '$espontaneaMenor', '$comando', '$comandoMenor', '$estimulo', '$estimuloMenor', '$nenhuma', '$nenhumaMenor', '$orientado', '$pfApropriadas', '$confuso', '$palavrasInapropriadas', '$inapropriadasMenor', '$choroGrito', '$pIncompreensiveis', '$sIncompreensiveis', '$nenhumaMenor2', '$nenhumaResposta', '$oComandos', '$oProtamente', '$localizaMenor', '$localiza', '$movimento_retirada', '$retiradaEstimulado', '$flexaoAnormal', '$flexaoMenor', '$extensaoAnormal', '$extensaoMenor', '$nenhuma3', '$ausencia', '$totalMenor', $total',
    '$pressao', '$pulso', '$respiracao', '$saturacao', '$temperatura', '$perfusao', '$anormalNormal',
    '$psiquiatrico', '$respiratorio', '$respiratorioOpcoes', '$diabetes', '$diabetesOpcoes', '$obstetrico', '$obstetricoOpcoes', '$transporte', '$transporteOpcoes', '$outrosProblemas', '$outrosTexto',
    '$numeroCorpo', '$fratura', '$ferimento', '$hemorragias', '$esviceracao', '$fab', '$amputacao', '$queimadura1', '$queimadura2', '$queimadura3',
    '$ferimentos', '$ladoFerimento', '$faceFerimento', '$tipoFerimento',
    '$qcabeca1grau', '$qcabeca2grau', '$qcabeca3grau', '$qcabeca4grau', '$qpescoco1grau', '$qpescoco2grau', '$qpescoco3grau', '$qpescoco4grau', '$qtant1grau', '$qtant2grau', '$qtant3grau', '$qtant4grau', '$qtpos1grau', '$qtpos2grau', '$qtpos3grau', '$qtpos4grau', '$qgenital1grau', '$qgenital2grau', '$qgenital3grau', '$qgenital4grau', '$qmembroid1grau', '$qmembroid2grau', '$qmembroid3grau', '$qmembroid4grau', '$qmembroie1grau', '$qmembroie2grau', '$qmembroie3grau', '$qmembroie4grau', '$qmembrosd1grau', '$qmembrosd2grau', '$qmembrosd3grau', '$qmembrosd4grau', '$qmembrose1grau', '$qmembrose2grau', '$qmembrose3grau', '$qmembrose4grau',
    '$objetosRecolhidos',
    '$abdomen', '$afundamentoCranio', '$agitacao', '$amnesia', '$anginaPeito','$apineia', '$bradicardia', '$bradipneia', '$broncoAspirando' '$cefaleia', '$cianose', '$cianoseLabios', '$cianoseExtremidade', '$convulsao', '$decorticacao', '$deformidade', '$descerebracao', '$desmaio', '$desvioTraqueia', '$dispineia', '$dorLocal', '$edemaGeneralizados', '$edemaLocalizados', '$enfisemaSubcutaneo', '$entaseJugular', '$facePalida', '$hipertensao', '$hipotensao', '$hemorragiaInterna', '$hemorragiaExterna', '$nauseaVomito', '$nasoragia', '$obito', '$otorreia', '$otorragia', '$ovace', '$paradaCardiaca', '$paradaRespiratoria', '$priapismo', '$pruridoPele', '$pupilasAnisocoria', '$pupilasIsocoria', '$pupilasMidriase', '$pupilasMiose', '$pupilasReagente', '$pupilasNreagente', '$sede', '$sinalBattle', '$sinalGuaxinim', '$sudorese', '$taquipneia', '$taquicardia', '$tontura', '$outrosSintomas', '$osintomasTexto',
    '$ciclista', '$condutorMoto', '$gestante', '$passageiroBancofrente', '$passageiroMoto', '$condutorCarro', '$clinico', '$trauma', '$passageiroBtras', '$pedestre',
    '$conducao', '$decisao',
    '$aspiracao', '$avaliacao', '$avaliacaoDirigida', '$avaliacaoContinuada', '$chaveRautek', '$canulaGuedel', '$desobstrucaoVa', '$empregoDea', '$gerenciamentoRiscos', '$limpezaFerimento', '$curativos', '$compressivo', '$encravamento', '$ocular', '$queimadura', '$simples', '$trespontas', '$imobilizacoes', '$membroInfd', '$membroInfe', '$membroSupd', '$membroSupe', '$quadril', '$cervical', '$macaRodas', '$macaRigida', '$ponte', '$retiradoCapacete', '$rcp', '$rolamento90', '$rolamento180', '$tomadaDecisao', '$tratadoChoque', '$usoCanula', '$usoColar', '$tamanhoUsoColar', '$usoKed', '$usoTtf', '$ventilacaoSuporte', '$oxigenioTerapia', '$oxigenioterapiaTexto', '$reanimador', '$reanimadorTexto', '$meioa', '$meioaCelesc', '$meioaDefesacivil', '$meioaPolicia', '$meioaCivil', '$meioaMilitar', '$meioaPre', '$meioaPrf', '$meioaSamu', '$meioaUsa', '$meioaUsb', '$meioaCit', '$outrosProcedimentos', '$outrospTexto',
    '$ataduras8', '$ataduras12', '$ataduras20', '$ataduraQuantidade', '$mantaAluminizada', '$mantaQuantidade', '$cateterOculos', '$cateterQuantidade', '$pasDea', '$pasQuantidade','$compressaComum', '$compressaQuantidade', '$sondaAspiracao', '$sondaQuantidade', '$kitsH', '$kitsP', '$kitsQ', '$kitsQuantidade', '$soroFisiologico', '$soroQuantidade', '$luvasDescartaveis', '$luvasQuantidade', '$talasPapp', '$talasPapg', '$talasQuantidade', '$mascarasDescartaveis', '$mascaraQuantidades', '$outroMaterial', '$outroM', '$outromQuantidade',
    '$baseEstabiliza', '$baseQuantidade', '$ttfAdulto', '$ttfInfantil', '$ttfQuantidade', '$colarN', '$colarPP', '$colarP', '$colarQuantidade', '$tiranteAranha', '$tiranteQuantidade', '$colarM', '$colarG', '$colarTam', '$colarTamm', '$colar2quantidade', '$tiranteCabeca', '$tirantecQuantidade', '$coxinsEstabiliza', '$coxinsQuantidade', '$canula', '$canulaQuantidade', '$ked', '$kedAdulto', '$kedInfantil', '$kedQuantidade', '$outroMaterial2', '$outrom2', '$outrom2Quantidade', '$maca', '$macaQuantidade', '$outroMaterial3', '$outrom3', '$outrom3Quantidade',
    '$observacoesImportantes', '$disturbioComportamento', '$encontradoCapacete', '$encontradoCinto', '$parabrisasAvariado', '$caminhandoCena', '$painelAvariado', '$volanteTorcido', '$nUsd', '$Nocorrencia', '$desp', '$kmFinal', '$codIr', '$codPs', '$siaSus',
    '$eu', '$rgNumero', '$cpfNumero', '$testemunha', '$docTestemunha', '$testemunha2', '$docTestemunha2', '$medicoAtendimento', '$socorrista1', '$socorrista2', '$socorrista3', '$demandante', '$equipe', '$ficha', '$fibra')";


$execucao = mysqli_query($con, $sqlFicha);

if($execucao){
  $data = array("erro" => false, "mensagem" => "Login executado com sucesso");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();

} else {

  $data = array("erro" => true, "mensagem" => "Usuário não encontrado no sistema");
  header("Content-Type: application/json");
  echo json_encode($data);
  exit();
}
// Fechar a conexão com o banco de dados
$conn->close();
?>