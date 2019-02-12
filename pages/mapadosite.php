<?php

/**
 * Version info
 *
 * @package    theme
 * @subpackage moodleidg
 * @copyright  2018 Fábio Rodrigues dos Santos - fabio.santos@ifrr.edu.br
 */

require_once('../../../config.php');
require_once('../lib.php');
$PAGE->set_context(context_system::instance());
$thispageurl = new moodle_url('/theme/moodleidg/pages/mapadosite.php');
$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('admin');
$PAGE->set_title("Mapa do Site - IFRR"); // COLOCAR O ORGÃO.
$PAGE->set_heading("Mapa do Site"); // colocar um titulo em cima
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_docs_path('');
$PAGE->set_pagelayout('standard');

echo $OUTPUT->header();
?>
    <div class="row-fluid">
        <div class="span9">

            <div class="row-fluid module">

                <div class="span8 variacao-module-03 module">
                    <div class="outstanding-header">				<h2 class="outstanding-title">Assuntos</h2>

                    </div>

                    <ul class="menu">
                        <li class="item-107"><a href="/historico">Histórico</a></li><li class="item-110"><a href="/expansao-da-rede-federal">Expansão da Rede Federal</a></li><li class="item-317 deeper parent"><a href="/centenario-da-rede-federal">Centenário da Rede Federal</a><ul><li class="item-318"><a href="/centenario-da-rede-federal/centenario-da-rede-federal-de-educacao-profissional-e-tecnologica">Centenário da Rede Federal de Educação Profissional e Tecnológica</a></li></ul></li><li class="item-111"><a href="/instituicoes">Instituições</a></li><li class="item-152"><a href="/colegiados">Colegiados</a></li><li class="item-254"><a href="/identidade-visual">Identidade Visual</a></li><li class="item-262"><a href="/perguntas-frequentes1">Perguntas Frequentes</a></li><li class="item-264"><a href="/legislacao-e-atos-normativos">Legislação e Atos Normativos</a></li><li class="item-309"><a href="/videos-destaque">Vídeos Destaque</a></li><li class="item-313"><a href="/infraestrutura-projetos">Infraestrutura - Projetos</a></li><li class="item-314"><a href="/polos-de-inovacao">Polos de Inovação</a></li><li class="item-315"><a href="/acoes-e-programas-na-ept">Ações e Programas na EPT</a></li><li class="item-319 deeper parent"><a href="/plafor">Plafor</a><ul><li class="item-320"><a href="/plafor/apresentacao">Apresentação</a></li><li class="item-321"><a href="/plafor/documentos">Documentos</a></li><li class="item-322"><a href="/plafor/editais">Editais</a></li><li class="item-323"><a href="/plafor/publicacoes">Publicações</a></li><li class="item-324"><a href="/plafor/videos">Vídeos</a></li><li class="item-325"><a href="/plafor/links-uteis">Links úteis</a></li><li class="item-326"><a href="/plafor/acoes">Ações</a></li><li class="item-327"><a href="/plafor/contato">Contato</a></li></ul></li></ul>




                </div>
                <div class="span4 module">
                    <div class="outstanding-header">				<h2 class="outstanding-title">Sobre</h2>

                    </div>

                    <ul class="menu">
                        <li class="item-112"><a href="http://portal.mec.gov.br/institucional" target="_blank">Institucional</a></li><li class="item-114"><a href="http://portal.mec.gov.br/auditorias" target="_blank">Auditoria</a></li><li class="item-115"><a href="http://www3.transparencia.gov.br/TransparenciaPublica/jsp/convenios/convenioTexto.jsf?consulta=4&amp;consulta2=0&amp;CodigoOrgao=26000" target="_blank">Convênios</a></li><li class="item-116"><a href="http://portal.mec.gov.br/despesas" target="_blank">Despesas</a></li><li class="item-259"><a href="http://portal.mec.gov.br/gastos-com-publicidade" target="_blank">Gastos com Publicidade</a></li><li class="item-117"><a href="http://portal.mec.gov.br/licitacoes-e-contratos" target="_blank">Licitações e contratos</a></li><li class="item-118"><a href="http://www.portaldatransparencia.gov.br/servidores/OrgaoExercicio-ListaServidores.asp?CodOS=15000&amp;DescOS=MINISTERIO%20DA%20EDUCACAO&amp;CodOrg=15000&amp;DescOrg=MINISTERIO%20DA%20EDUCACAO" target="_blank">Servidores</a></li><li class="item-260"><a href="/" target="_blank">Sobre a Lei de Acesso à Informação</a></li><li class="item-120"><a href="http://portal.mec.gov.br/servico-de-informacao-ao-cidadao-sic" target="_blank">Serviço de Informação ao Cidadão (SIC)</a></li><li class="item-119"><a href="http://portal.mec.gov.br/informacoes-classificadas" target="_blank">Informações classificadas</a></li><li class="item-113"><a href="http://portal.mec.gov.br/acoes-e-programas" target="_blank">Ações e Programas</a></li></ul>




                </div>

            </div>

        </div>
        <div class="span3">

            <div class="row-fluid module ">
                <div class="outstanding-header">			 	<h2 class="outstanding-title"><span>Serviços</span></h2>
                </div>									<ul class="menu">
                    <li class="item-131"><a href="/perguntas-frequentes">Perguntas frequentes</a></li><li class="item-132"><a href="/contato">Contato</a></li><li class="item-261"><a href="http://www.inovaif.gov.br/ " target="_blank">Sistema InovaIF</a></li></ul>

            </div>
            <div class="row-fluid module ">
                <div class="outstanding-header">			 	<h2 class="outstanding-title"><span>Redes Sociais</span></h2>
                </div>									<ul class="menu">
                    <li class="item-140"><a href="http://portal.mec.gov.br/acessibilidade" target="_blank">Acessibilidade</a></li><li class="item-141"><a href="#" class="toggle-contraste">Alto contraste</a></li><li class="item-142 current active"><a href="/mapa-do-site">Mapa do site</a></li></ul>

            </div>

        </div>
    </div>
<?php
echo $OUTPUT->footer();

