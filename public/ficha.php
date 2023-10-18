<?php

include "db.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

session_start();

$oqAconteceu = $_POST["oq_aconteceu"];
$outrasVezes = ($_POST['outrasVezes'] === 'sim') ? true : false;
$quantoTempo = $_POST["quanto_tempo"];
$problemaSaude = ($_POST['problemaSaude'] === 'sim') ? true : false;
$quaisProblemas = $_POST["quais_problemas"];
$medicacao = ($_POST['medicacao'] === 'sim') ? true : false;
$horaMedicacao = $_POST["hora_medicacao"];
$quaisMedicacoes = $_POST["quais_medicacoes"];
$alergico = ($_POST['alergico'] === 'sim') ? true : false;
$alergia = $_POST["alergia"];
$ingeriu = ($_POST["ingeriu"] === 'sim') ? true : false;
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
$medicacaoGestacao = ($_POST['medicacaoGestacao'] === 'sim') ? true : false;
$nomeMedico = $_POST["nome_medico"];
$complicacoes = ($_POST['complicacoes'] === 'sim') ? true : false;
$primeiroFilho = ($_POST['primeiroFilho'] === 'sim') ? true : false;
$quantosFilhos = $_POST["quantos_filhos"];
$inicioContracao = $_POST["inicio_contracao"];
$duracaoContracao = $_POST["duracao_contracao"];
$intervaloContracao = $_POST["intervalo_contracao"];
$sentePressao = ($_POST['pressao_quadril'] === 'sim') ? true : false;
$rupturaBolsa = ($_POST['ruptura'] === 'sim') ? true : false;
$inspecaoVisual = ($_POST['inspecao'] === 'sim') ? true : false;
$partoRealizado = ($_POST['parto'] === 'sim') ? true : false;
$horaNascimento = $_POST["hora_nascimento"];
$sexoBebe = $_POST["sexo_bebe"];
$nomeBebe = $_POST["nome_bebe"];

$causadoAnimais = ($_POST['causado_animais'] === 'true') ? 1 : 0;
$meioTransporte = ($_POST['meio_transporte'] === 'true') ? 1 : 0;
$desmoronamentoDeslizamento = ($_POST['desmoronamento_deslizamento'] === 'true') ? 1 : 0;
$emergenciaMedica = ($_POST['emergencia_medica'] === 'true') ? 1 : 0;
$queda2m = ($_POST['queda_2m'] === 'true') ? 1 : 0;
$tentativaSuicidio = ($_POST['tentativa_suicidio'] === 'true') ? 1 : 0;
$quedaPropriaAltura = ($_POST['queda_propriaAltura'] === 'true') ? 1 : 0;
$afogamento = ($_POST['afogamento'] === 'true') ? 1 : 0;
$agressao = ($_POST['agressao'] === 'true') ? 1 : 0;
$atropelamento = ($_POST['atropelamento'] === 'true') ? 1 : 0;
$choqueEletrico = ($_POST['choque_eletrico'] === 'true') ? 1 : 0;
$desabamento = ($_POST['desabamento'] === 'true') ? 1 : 0;
$domestico = ($_POST['domestico'] === 'true') ? 1 : 0;
$esportivo = ($_POST['esportivo'] === 'true') ? 1 : 0;
$intoxicacao = ($_POST['intoxicacao'] === 'true') ? 1 : 0;
$quedaBicicleta = ($_POST['queda_bicicleta'] === 'true') ? 1 : 0;
$quedaMoto = ($_POST['queda_moto'] === 'true') ? 1 : 0;
$quedaNivel = ($_POST['queda_nivel'] === 'true') ? 1 : 0;
$trabalho = ($_POST['trabalho'] === 'true') ? 1 : 0;
$transferencia = ($_POST['transferencia'] === 'true') ? 1 : 0;
$outros = ($_POST['outros'] === 'true') ? 1 : 0;
$outrosTexto = $_POST["outros_texto"];

$espontanea = ($_POST['espontanea'] === 'true') ? 1 : 0;
$espontaneaMenor = ($_POST['espontanea_menor'] === 'true') ? 1 : 0;
$comando = ($_POST['comando'] === 'true') ? 1 : 0;
$comandoMenor = ($_POST['comando_menor'] === 'true') ? 1 : 0;
$estimulo = ($_POST['estimulo'] === 'true') ? 1 : 0;
$estimuloMenor = ($_POST['estimulo_menor'] === 'true') ? 1 : 0;
$nenhuma = ($_POST['nenhuma'] === 'true') ? 1 : 0;
$nenhumaMenor = ($_POST['nenhuma_menor'] === 'true') ? 1 : 0;
$orientado = ($_POST['orientado'] === 'true') ? 1 : 0;
$pfApropriadas = ($_POST['pf_apropriadas'] === 'true') ? 1 : 0;
$confuso = ($_POST['confuso'] === 'true') ? 1 : 0;
$palavrasInapropriadas = ($_POST['palavras_inapropriadas'] === 'true') ? 1 : 0;
$inapropriadasMenor = ($_POST['inapropriadas_menor'] === 'true') ? 1 : 0;
$choroGrito = ($_POST['choro_grito'] === 'true') ? 1 : 0;
$pIncompreensiveis = ($_POST['p_incompreensiveis'] === 'true') ? 1 : 0;
$sIncompreensiveis = ($_POST['s_incompreensiveis'] === 'true') ? 1 : 0;
$nenhumaMenor2 = ($_POST['nenhuma_menor2'] === 'true') ? 1 : 0;
$nenhumaResposta = ($_POST['nenhuma_resposta'] === 'true') ? 1 : 0;
$oComandos = ($_POST['o_comandos'] === 'true') ? 1 : 0;
$oProtamente = ($_POST['o_protamente'] === 'true') ? 1 : 0;
$localizaMenor = ($_POST['localiza_menor'] === 'true') ? 1 : 0;
$localiza = ($_POST['localiza'] === 'true') ? 1 : 0;
$movimentoRetirada = ($_POST['movimento_retirada'] === 'true') ? 1 : 0;
$retiradaEstimulado = ($_POST['retirada_estimulado'] === 'true') ? 1 : 0;
$flexaoAnormal = ($_POST['flexao_anormal'] === 'true') ? 1 : 0;
$flexaoMenor = ($_POST['flexao_menor'] === 'true') ? 1 : 0;
$extensaoAnormal = ($_POST['extensao_anormal'] === 'true') ? 1 : 0;
$extensaoMenor = ($_POST['extensao_menor'] === 'true') ? 1 : 0;
$nenhuma3 = ($_POST['nenhuma_3'] === 'true') ? 1 : 0;
$ausencia = ($_POST['ausencia'] === 'true') ? 1 : 0;
$total = $_POST["total"];
$totalMenor = $_POST["total_menor"];

$pressao = $_POST["pressao"];
$pulso = $_POST["pulso"];
$respiracao = $_POST["respiracao"];
$saturacao = $_POST["saturacao"];
$temperatura = $_POST["temperatura"];
$perfusao = $_POST["perfusao"];
$anormalNormal = $_POST["anormal_normal"];

$psiquiatrico = ($_POST['psiquiatrico'] === 'true') ? 1 : 0;
$respiratorio = ($_POST['respiratorio'] === 'true') ? 1 : 0;
$respiratorioOpcoes = $_POST['respiratorio_opcoes'];
$diabetes = ($_POST['diabetes'] === 'true') ? 1 : 0;
$diabetesOpcoes = $_POST['diabetes_opcoes'];
$obstetrico = ($_POST['obstetrico'] === 'true') ? 1 : 0;
$obstetricoOpcoes = $_POST['obstetrico_opcoes'];
$transporte = ($_POST['transporte'] === 'true') ? 1 : 0;
$transporteOpcoes = $_POST['transporte_opcoes'];
$outrosProblemas = ($_POST['outros_problemas'] === 'true') ? 1 : 0;
$outrosText = $_POST['outros_text'];

$numeroCorpo = $_POST["numerocorpo"];
$fratura = ($_POST['fratura'] === 'true') ? 1 : 0;
$ferimento = ($_POST['ferimento'] === 'true') ? 1 : 0;
$hemorragias = ($_POST['hemorragias'] === 'true') ? 1 : 0;
$esviceracao = ($_POST['esviceracao'] === 'true') ? 1 : 0;
$fab = ($_POST['fab'] === 'true') ? 1 : 0;
$amputacao = ($_POST['amputacao'] === 'true') ? 1 : 0;
$queimadura1 = ($_POST['queimadura1'] === 'true') ? 1 : 0;
$queimadura2 = ($_POST['queimadura2'] === 'true') ? 1 : 0;
$queimadura3 = ($_POST['queimadura3'] === 'true') ? 1 : 0;

$ferimentos = $_POST["ferimentos"];
$ladoFerimento = $_POST["lado_ferimento"];
$faceFerimento = $_POST["face_ferimento"];
$tipoFerimento = $_POST["tipo_ferimento"];

$qcabeca1grau = ($_POST['qcabeca_1grau'] === 'true') ? 1 : 0;
$qcabeca2grau = ($_POST['qcabeca_2grau'] === 'true') ? 1 : 0;
$qcabeca3grau = ($_POST['qcabeca_3grau'] === 'true') ? 1 : 0;
$qcabeca4grau = ($_POST['qcabeca_4grau'] === 'true') ? 1 : 0;
$qpescoco1grau = ($_POST['qpescoco_1grau'] === 'true') ? 1 : 0;
$qpescoco2grau = ($_POST['qpescoco_2grau'] === 'true') ? 1 : 0;
$qpescoco3grau = ($_POST['qpescoco_3grau'] === 'true') ? 1 : 0;
$qpescoco4grau = ($_POST['qpescoco_4grau'] === 'true') ? 1 : 0;
$qtant1grau = ($_POST['qtant_1grau'] === 'true') ? 1 : 0;
$qtant2grau = ($_POST['qtant_2grau'] === 'true') ? 1 : 0;
$qtant3grau = ($_POST['qtant_3grau'] === 'true') ? 1 : 0;
$qtant4grau = ($_POST['qtant_4grau'] === 'true') ? 1 : 0;
$qtpos1grau = ($_POST['qtpos_1grau'] === 'true') ? 1 : 0;
$qtpos2grau = ($_POST['qtpos_2grau'] === 'true') ? 1 : 0;
$qtpos3grau = ($_POST['qtpos_3grau'] === 'true') ? 1 : 0;
$qtpos4grau = ($_POST['qtpos_4grau'] === 'true') ? 1 : 0;
$qgenital1grau = ($_POST['qgenital_1grau'] === 'true') ? 1 : 0;
$qgenital2grau = ($_POST['qgenital_2grau'] === 'true') ? 1 : 0;
$qgenital3grau = ($_POST['qgenital_3grau'] === 'true') ? 1 : 0;
$qgenital4grau = ($_POST['qgenital_4grau'] === 'true') ? 1 : 0;
$qmembroid1grau = ($_POST['qmembroid_1grau'] === 'true') ? 1 : 0;
$qmembroid2grau = ($_POST['qmembroid_2grau'] === 'true') ? 1 : 0;
$qmembroid3grau = ($_POST['qmembroid_3grau'] === 'true') ? 1 : 0;
$qmembroid4grau = ($_POST['qmembroid_4grau'] === 'true') ? 1 : 0;
$qmembroie1grau = ($_POST['qmembroie_1grau'] === 'true') ? 1 : 0;
$qmembroie2grau = ($_POST['qmembroie_2grau'] === 'true') ? 1 : 0;
$qmembroie3grau = ($_POST['qmembroie_3grau'] === 'true') ? 1 : 0;
$qmembroie4grau = ($_POST['qmembroie_4grau'] === 'true') ? 1 : 0;
$qmembrosd1grau = ($_POST['qmembrosd_1grau'] === 'true') ? 1 : 0;
$qmembrosd2grau = ($_POST['qmembrosd_2grau'] === 'true') ? 1 : 0;
$qmembrosd3grau = ($_POST['qmembrosd_3grau'] === 'true') ? 1 : 0;
$qmembrosd4grau = ($_POST['qmembrosd_4grau'] === 'true') ? 1 : 0;
$qmembrose1grau = ($_POST['qmembrose_1grau'] === 'true') ? 1 : 0;
$qmembrose2grau = ($_POST['qmembrose_2grau'] === 'true') ? 1 : 0;
$qmembrose3grau = ($_POST['qmembrose_3grau'] === 'true') ? 1 : 0;
$qmembrose4grau = ($_POST['qmembrose_4grau'] === 'true') ? 1 : 0;

$objetosRecolhidos = $_POST["objetos_recolhidos"];

$abdomen = ($_POST['abdomen'] === 'true') ? 1 : 0;
$afundamentoCranio = ($_POST['afundamento_cranio'] === 'true') ? 1 : 0;
$agitacao = ($_POST['agitacao'] === 'true') ? 1 : 0;
$apineia = ($_POST['apineia'] === 'true') ? 1 : 0;
$bradicardia = ($_POST['bradicardia'] === 'true') ? 1 : 0;
$bradipneia = ($_POST['bradipneia'] === 'true') ? 1 : 0;
$broncoAspirando = ($_POST['bronco_aspirando'] === 'true') ? 1 : 0;
$cefaleia = ($_POST['cefaleia'] === 'true') ? 1 : 0;
$cianose = ($_POST['cianose'] === 'true') ? 1 : 0;
$cianoseLabios = ($_POST['cianoseLabios'] === 'true') ? 1 : $cianose;
$cianoseExtremidade = ($_POST['cianoseExtremidade'] === 'true') ? 1 : $cianose;
$convulsao = ($_POST['convulsao'] === 'true') ? 1 : 0;
$decorticacao = ($_POST['decorticacao'] === 'true') ? 1 : 0;
$deformidade = ($_POST['deformidade'] === 'true') ? 1 : 0;
$descerebracao = ($_POST['descerebracao'] === 'true') ? 1 : 0;
$desmaio = ($_POST['desmaio'] === 'true') ? 1 : 0;
$desvioTraqueia = ($_POST['desvioTraqueia'] === 'true') ? 1 : 0;
$dispineia = ($_POST['dispneia'] === 'true') ? 1 : 0;
$dorLocal = ($_POST['dorLocal'] === 'true') ? 1 : 0;
$edema = ($_POST['edema'] === 'true') ? 1 : 0;
$edemaGeneralizados = ($_POST['edemaGeneralizados'] === 'true') ? 1 : $edema;
$edemaLocalizados = ($_POST['edemaLocalizados'] === 'true') ? 1 : $edema;
$enfisemaSubcutaneo = ($_POST['enfisemaSubcutaneo'] === 'true') ? 1 : 0;
$entaseJugular = ($_POST['entaseJugular'] === 'true') ? 1 : 0;
$facePalida = ($_POST['facePalida'] === 'true') ? 1 : 0;
$hipertensao = ($_POST['hipertensao'] === 'true') ? 1 : 0;
$hipotensao = ($_POST['hipotensao'] === 'true') ? 1 : 0;
$hemorragia = ($_POST['hemorragia'] === 'true') ? 1 : 0;
$hemorragiaInterna = ($_POST['hemorragiaInterna'] === 'true') ? 1 : $hemorragia;
$hemorragiaExterna = ($_POST['hemorragiaExterna'] === 'true') ? 1 : $hemorragia;
$nauseaVomito = ($_POST['nauseaVomito'] === 'true') ? 1 : 0;
$nasoragia = ($_POST['nasoragia'] === 'true') ? 1 : 0;
$obito = ($_POST['obito'] === 'true') ? 1 : 0;
$otorreia = ($_POST['otorreia'] === 'true') ? 1 : 0;
$ovace = ($_POST['ovace'] === 'true') ? 1 : 0;
$paradaCardiaca = ($_POST['paradaCardiaca'] === 'true') ? 1 : $parada;
$paradaRespiratoria = ($_POST['paradaRespiratoria'] === 'true') ? 1 : $parada;
$priapismo = ($_POST['priapismo'] === 'true') ? 1 : 0;
$pruridoPele = ($_POST['pruridoPele'] === 'true') ? 1 : 0;
$pupilasAnisocoria = ($_POST['pupilasAnisocoria'] === 'true') ? 1 : $pupilas;
$pupilasIsocoria = ($_POST['pupilasIsocoria'] === 'true') ? 1 : $pupilas;
$pupilasMidriase = ($_POST['pupilasMidriase'] === 'true') ? 1 : $pupilas;
$pupilasMiose = ($_POST['pupilasMiose'] === 'true') ? 1 : $pupilas;
$pupilasReagente = ($_POST['pupilasReagente'] === 'true') ? 1 : $pupilas;
$pupilasNreagente = ($_POST['pupilasNreagente'] === 'true') ? 1 : $pupilas;
$sede = ($_POST['sede'] === 'true') ? 1 : 0;
$sinalBattle = ($_POST['sinalBattle'] === 'true') ? 1 : 0;
$sinalGuaxinim = ($_POST['sinalGuaxinim'] === 'true') ? 1 : 0;
$sudorese = ($_POST['sudorese'] === 'true') ? 1 : 0;
$taquipneia = ($_POST['taquipneia'] === 'true') ? 1 : 0;
$taquicardia = ($_POST['taquicardia'] === 'true') ? 1 : 0;
$tontura = ($_POST['tontura'] === 'true') ? 1 : 0;
$outrosSintomas = ($_POST['outrosSintomas'] === 'true') ? 1 : 0;
$osintomasTexto = $_POST["osintomas_texto"];

$ciclista = ($_POST["ciclista"] === 'true') ? 1 : 0;
$condutorMoto = ($_POST["condutorMoto"] === 'true') ? 1 : 0;
$gestante = ($_POST["gestante"] === 'true') ? 1 : 0;
$passageiroBancofrente = ($_POST["passageiroBancofrente"] === 'true') ? 1 : 0;
$passageiroMoto = ($_POST["passageiroMoto"] === 'true') ? 1 : 0;
$condutorCarro = ($_POST["condutorCarro"] === 'true') ? 1 : 0;
$clinico = ($_POST["clinico"] === 'true') ? 1 : 0;
$trauma = ($_POST["trauma"] === 'true') ? 1 : 0;
$passageiroBtras = ($_POST["passageiroBtras"] === 'true') ? 1 : 0;
$pedestre = ($_POST["pedestre"] === 'true') ? 1 : 0;

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
$meioaCivil = ($_POST['meioa_civil'] === 'sim') ? 1 : 0;
$meioaMilitar = ($_POST['meioa_militar'] === 'sim') ? 1 : 0;
$meioaPre = ($_POST['meioa_pre'] === 'sim') ? 1 : 0;
$meioaPrf = ($_POST['meioa_prf'] === 'sim') ? 1 : 0;
$meioaSamu = ($_POST['meioa_samu'] === 'sim') ? 1 : 0;
$meioaUsa = ($_POST['meioa_usa'] === 'sim') ? 1 : 0;
$meioaUsb = ($_POST['meioa_usb'] === 'sim') ? 1 : 0;
$meioaCit = ($_POST['meioa_cit'] === 'sim') ? 1 : 0;
$outrosProcedimentos = ($_POST["outros_procedimentos"] === 'sim') ? 1 : 0;
$outrospTexto = $_POST["outrosp_texto"];

$ataduras = ($_POST['ataduras'] === 'sim') ? 1 : 0;
$ataduras8 = ($_POST['ataduras8'] === 'sim') ? 1 : 0;
$ataduras12 = ($_POST['ataduras12'] === 'sim') ? 1 : 0;
$ataduras20 = ($_POST['ataduras20'] === 'sim') ? 1 : 0;
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
$kits = ($_POST['kits'] === 'sim') ? 1 : 0;
$kitsH = ($_POST['kitsH'] === 'sim') ? 1 : 0;
$kitsP = ($_POST['kitsP'] === 'sim') ? 1 : 0;
$kitsQ = ($_POST['kitsQ'] === 'sim') ? 1 : 0;
$kitsQuantidade = $_POST["kits_quantidade"];
$soroFisiologico = ($_POST['soro_fisiologico'] === 'sim') ? 1 : 0;
$soroQuantidade = $_POST["soro_quantidade"];
$luvasDescartaveis = ($_POST['luvas_descartaveis'] === 'sim') ? 1 : 0;
$luvasQuantidade = $_POST["luvas_quantidade"];
$talasPap = ($_POST['talas_pap'] === 'sim') ? 1 : 0;
$talasPapp = ($_POST['talas_papp'] === 'sim') ? 1 : 0;
$talasPapg = ($_POST['talas_papg'] === 'sim') ? 1 : 0;
$talasQuantidade = $_POST["talas_quantidade"];
$mascarasDescartaveis = ($_POST['mascaras_descartaveis'] === 'sim') ? 1 : 0;
$mascarasQuantidade = $_POST["mascara_quantidade"];
$outroMaterial = ($_POST["outro_material"] === 'sim') ? 1 : 0;
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


// Verifique se o valor de "conducao" é uma das opções válidas
if ($conducao === "deitada" || $conducao === "semi_sentada" || $conducao === "sentada") {

  // Verifique se o valor de "decisao" é uma das opções válidas
  if ($decisao === "critico" || $decisao === "instavel" || $decisao === "potencialmente_instavel" || $decisao === "estavel") {

    if ($meioaCivil || $meioaMilitar || $meioaPre || $meioaPrf) {
      $meioaPolicia = 1;
    }

    if ($meioa_usa || $meioa_usb) {
      $meioaSamu = 1;
    }
    // Verifique a lógica para preencher automaticamente campos dependentes
    if ($ataduras8 || $ataduras12 || $ataduras20) {
      $ataduras = 1;
    }

    if ($kitsH || $kitsP || $kitsQ) {
      $kits = 1;
    }

    if ($talasPapp || $talasPapg) {
      $talasPap = 1;
    }
    
    // Montar a consulta SQL para a tabela "ficha"

    $sqlFicha = "INSERT INTO ficha (oq_aconteceu, outras_vezes, quanto_tempo, problema_saude, quais, medicacao, ultima_medicacao, quais_medicacao, alergico, especifique, ingeriu, horario_ingeriu,
    periodo_gestacao, medicacao_gestacao, nome_medico, complicacoes, primeiro_filho, quantos_filhos, inicio_contracao, duracao_contracao, intervalo_contracao, sente_pressao, ruptura_bolsa, inspecao_visual, parto_realizado, hora_nascimento, sexo_bebe, nome_bebe,
    causado_animais, meio_transporte, desmoronamento_deslizamento, emergencia_medica, queda_2m, tentativa_suicidio, queda_propriaAltura, afogamento, agressao, atropelamento, choque_eletrico, desabamento, domestico, esportivo, intoxicacao, queda_bicicleta, queda_moto, queda_nivel, trabalho, transferencia, outros, outros_texto,
    espontanea, espontanea_menor, comando, comando_menor, estimulo, estimulo_menor, nenhuma, nenhuma_menor, orientado, pf_apropriadas, confuso, palavras_inapropriadas, inapropriadas_menor, choro_grito, p_incompreensiveis, s_incompreensiveis, nenhuma_menor2, nenhuma_resposta, o_comandos, o_protamente, localiza_menor, localiza, movimento_retirada, retirada_estimulado, flexao_anormal, flexao_menor, extensao_anormal, extensao_menor, nenhuma_3, ausencia, total_menor, total,
    psiquiatrico, respiratorio, respiratorio_opcoes, diabetes, diabetes_opcoes, obstetrico, obstetrico_opcoes, transporte, transporte_opcoes, outros_problemas, outros_text,
    numero_corpo, fratura, ferimento, hemorragias, esviceracao, fab, amputacao, queimadura1, queimadura2, queimadura3,
    local_ferimento, lado_ferimento, face_ferimento, tipo_ferimento,
    qcabeca_1grau, qcabeca_2grau, qcabeca_3grau, qcabeca_4grau, qpescoco_1grau, qpescoco_2grau, qpescoco_3grau, qpescoco_4grau, qtant_1grau, qtant_2grau, qtant_3grau, qtant_4grau, qtpos_1grau, qtpos_2grau, qtpos_3grau, qtpos_4grau, qgenital_1grau, qgenital_2grau, qgenital_3grau, qgenital_4grau, qmembroid_1grau, qmembroid_2grau, qmembroid_3grau, qmembroid_4grau, qmembroie_1grau, qmembroie_2grau, qmembroie_3grau, qmembroie_4grau, qmembrosd_1grau, qmembrosd_2grau, qmembrosd_3grau, qmembrosd_4grau, qmembrose_1grau, qmembrose_2grau, qmembrose_3grau, qmembrose_4grau,
    objetos_recolhidos,
    abdomen, afundamento_cranio, agitacao, apineia, bradicardia, bradipneia, bronco_aspirando, cefaleia, cianose, cianose_labios, cianose_extremidade, convulsao, decorticacao, deformidade, descerebracao, desmaio, desvio_traqueia, dispineia, dor_local, edema, edema_generalizados, edema_localizados, enfisema_subcutaneo, entase_jugular, face_palida, hipertensao, hipotensao, hemorragia, hemorragia_interna, hemorragia_externa, nausea_vomito, nasoragia, obito, otorreia, ovace, parada_cardiaca, parada_respiratoria, priapismo, prurido_pele, pupilas_anisocoria, pupilas_isocoria, pupilas_midriase, pupilas_miose, pupilas_reagente, pupilas_nreagente, sede, sinal_battle, sinal_guaxinim, sudorese, taquipneia, taquicardia, tontura, outros_sintomas, osintomas_texto,
    ciclista, condutor_moto, gestante, passageiro_bancofrente, passageiro_moto, condutor_carro, clinico, trauma, passageiro_btras, pedestre,
    conducao, decisao,
    aspiracao, avaliacao_inicial, avaliacao_dirigida, avaliacao_continuada, chave_rautek, canula_guedel, desobstrucao_va, emprego_dea, gerenciamento_riscos, limpeza_ferimento, curativos, compressivo, encravamento, ocular, queimadura, simples, 3_pontas, imobilizacoes, membro_infd, membro_infe, membro_supd, membro_supe, quadril, cervical, maca_rodas, maca_rigida, ponte, retirado_capacete, rcp, rolamento_90, rolamento_180, tomada_decisao, tratado_choque, uso_canula, uso_colar,tamanho_usocolar,  uso_ked, uso_ttf, ventilacao_suporte, oxigenioterapia, oxigenioterapia_texto, reanimador, reanimador_texto, meioa, meioa_celesc, meioa_defesacivil, meioa_policia, meioa_civil, meioa_militar, meioa_pre, meioa_prf, meioa_samu, meioa_usa, meioa_usb, meioa_cit, outros_procedimentos, outrosp_texto,
    ataduras, ataduras_8, ataduras_12, ataduras_20, atadura_quantidade, manta_aluminizada, manta_quantidade, cateter_oculos, cateter_quantidade, pas_dea, pas_quantidade, compressa_comum, compressa_quantidade, sonda_aspiracao, sonda_quantidade, kits, kits_h, kits_p, kits_q, kits_quantidade, soro_fisiologico, soro_quantidade, luvas_descartaveis, luvas_quantidade, talas_pap, talas_papp, talas_papg, talas_quantidade, mascaras_descartaveis, mascara_quantidade, outro_material, outrom, outrom_quantidade,
    observacoes_importantes, disturbio_comportamento, encontrado_capacete, encontrado_cinto, parabrisas_avariado, caminhando_cena, painel_avariado, volante_torcido,n_usd, n_ocorrencia, desp, km_final, cod_ir, cod_ps, h_ch, sia_sus,
    eu, rg_numero, cpf_numero, testemunha, doc_testemunha, testemunha2, doc_testemunha2, medico_atendimento, socorrista1, socorrista2, socorrista3, demandante, equipe, respon_ficha, respon_fibra) 
    
    VALUES ('$oqAconteceu', '$outrasVezes', '$quantoTempo', '$problemaSaude', '$quaisProblemas', '$medicacao', '$horaMedicacao', '$quaisMedicacoes', '$alergico', '$alergia', '$ingeriu', '$ingeriuHorario'
    '$periodoGestacao', '$medicacaoGestacao', '$nomeMedico', '$complicacoes', '$primeiroFilho', '$quantosFilhos', '$inicioContracao', '$duracaoContracao', '$intervaloContracao', '$sentePressao', '$rupturaBolsa', '$inspecaoVisual', '$partoRealizado', '$horaNascimento', '$sexoBebe', '$nomeBebe',
    '$causadoAnimais', '$meioTransporte', '$desmoronamentoDeslizamento', '$emergenciaMedica', '$queda2m', '$tentativaSuicidio', '$quedaPropriaAltura', '$afogamento', '$agressao', '$atropelamento', '$choqueEletrico', '$desabamento', '$domestico', '$esportivo', '$intoxicacao', '$quedaBicicleta', '$quedaMoto', '$quedaNivel', '$trabalho', '$transferencia', '$outros', '$outrosTexto',
    '$espontanea', '$espontaneaMenor', '$comando', '$comandoMenor', '$estimulo', '$estimuloMenor', '$nenhuma', '$nenhumaMenor', '$orientado', '$pfApropriadas', '$confuso', '$palavrasInapropriadas', '$inapropriadasMenor', '$choroGrito', '$pIncompreensiveis', '$sIncompreensiveis', '$nenhumaMenor2', '$nenhumaResposta', '$oComandos', '$oProtamente', '$localizaMenor', '$localiza', '$movimento_retirada', '$retiradaEstimulado', '$flexaoAnormal', '$flexaoMenor', '$extensaoAnormal', '$extensaoMenor', '$nenhuma3', '$ausencia', '$totalMenor', $total',
    '$psiquiatrico', '$respiratorio', '$respiratorioOpcoes', '$diabetes', '$diabetesOpcoes', '$obstetrico', '$obstetricoOpcoes', '$transporte', '$transporteOpcoes', '$outrosProblemas', '$outrosTexto',
    '$numeroCorpo', '$fratura', '$ferimento', '$hemorragias', '$esviceracao', '$fab', '$amputacao', '$queimadura1', '$queimadura2', '$queimadura3',
    '$ferimentos', '$ladoFerimento', '$faceFerimento', '$tipoFerimento',
    '$qcabeca1grau', '$qcabeca2grau', '$qcabeca3grau', '$qcabeca4grau', '$qpescoco1grau', '$qpescoco2grau', '$qpescoco3grau', '$qpescoco4grau', '$qtant1grau', '$qtant2grau', '$qtant3grau', '$qtant4grau', '$qtpos1grau', '$qtpos2grau', '$qtpos3grau', '$qtpos4grau', '$qgenital1grau', '$qgenital2grau', '$qgenital3grau', '$qgenital4grau', '$qmembroid1grau', '$qmembroid2grau', '$qmembroid3grau', '$qmembroid4grau', '$qmembroie1grau', '$qmembroie2grau', '$qmembroie3grau', '$qmembroie4grau', '$qmembrosd1grau', '$qmembrosd2grau', '$qmembrosd3grau', '$qmembrosd4grau', '$qmembrose1grau', '$qmembrose2grau', '$qmembrose3grau', '$qmembrose4grau',
    '$objetosRecolhidos',
    '$abdomen', '$afundamentoCranio', '$agitacao', '$apineia', '$bradicardia', '$bradipneia', '$broncoAspirando' '$cefaleia', '$cianose', '$cianoseLabios', '$cianoseExtremidade', '$convulsao', '$decorticacao', '$deformidade', '$descerebracao', '$desmaio', '$desvioTraqueia', '$dispineia', '$dorLocal', '$edema', '$edemaGeneralizados', '$edemaLocalizados', '$enfisemaSubcutaneo', '$entaseJugular', '$facePalida', '$hipertensao', '$hipotensao', '$hemorragia', '$hemorragiaInterna', '$hemorragiaExterna', '$nauseaVomito', '$nasoragia', '$obito', '$otorreia', '$ovace', '$paradaCardiaca', '$paradaRespiratoria', '$priapismo', '$pruridoPele', '$pupilasAnisocoria', '$pupilasIsocoria', '$pupilasMidriase', '$pupilasMiose', '$pupilasReagente', '$pupilasNreagente', '$sede', '$sinalBattle', '$sinalGuaxinim', '$sudorese', '$taquipneia', '$taquicardia', '$tontura', '$outrosSintomas', '$osintomasTexto',
    '$ciclista', '$condutorMoto', '$gestante', '$passageiroBancofrente', '$passageiroMoto', '$condutorCarro', '$clinico', '$trauma', '$passageiroBtras', '$pedestre',
    '$conducao', '$decisao',
    '$aspiracao', '$avaliacao', '$avaliacaoDirigida', '$avaliacaoContinuada', '$chaveRautek', '$canulaGuedel', '$desobstrucaoVa', '$empregoDea', '$gerenciamentoRiscos', '$limpezaFerimento', '$curativos', '$compressivo', '$encravamento', '$ocular', '$queimadura', '$simples', '$trespontas', '$imobilizacoes', '$membroInfd', '$membroInfe', '$membroSupd', '$membroSupe', '$quadril', '$cervical', '$macaRodas', '$macaRigida', '$ponte', '$retiradoCapacete', '$rcp', '$rolamento90', '$rolamento180', '$tomadaDecisao', '$tratadoChoque', '$usoCanula', '$usoColar', '$tamanhoUsoColar', '$usoKed', '$usoTtf', '$ventilacaoSuporte', '$oxigenioTerapia', '$oxigenioterapiaTexto', '$reanimador', '$reanimadorTexto', '$meioa', '$meioaCelesc', '$meioaDefesacivil', '$meioaPolicia', '$meioaCivil', '$meioaMilitar', '$meioaPre', '$meioaPrf', '$meioaSamu', '$meioaUsa', '$meioaUsb', '$meioaCit', '$outrosProcedimentos', '$outrospTexto',
    '$ataduras', '$ataduras8', '$ataduras12', '$ataduras20', '$ataduraQuantidade', '$mantaAluminizada', '$mantaQuantidade', '$cateterOculos', '$cateterQuantidade', '$pasDea', '$pasQuantidade','$compressaComum', '$compressaQuantidade', '$sondaAspiracao', '$sondaQuantidade', '$kits', '$kitsH', '$kitsP', '$kitsQ', '$kitsQuantidade', '$soroFisiologico', '$soroQuantidade', '$luvasDescartaveis', '$luvasQuantidade', '$talasPap', '$talasPapp', '$talasPapg', '$talasQuantidade', '$mascarasDescartaveis', '$mascaraQuantidades', '$outroMaterial', '$outroM', '$outromQuantidade',
    '$observacoesImportantes', '$disturbioComportamento', '$encontradoCapacete', '$encontradoCinto', '$parabrisasAvariado', '$caminhandoCena', '$painelAvariado', '$volanteTorcido', '$nUsd', '$Nocorrencia', '$desp', '$kmFinal', '$codIr', '$codPs', '$siaSus',
    '$eu', '$rgNumero', '$cpfNumero', '$testemunha', '$docTestemunha', '$testemunha2', '$docTestemunha2', '$medicoAtendimento', '$socorrista1', '$socorrista2', '$socorrista3', '$demandante', '$equipe', '$ficha', '$fibra')";

    //dados iniciais

    

    //sinais vitais

    //tabela material deixados no hospital

  }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>