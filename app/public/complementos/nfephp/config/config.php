<?php
/**
 * Par�metros de configura��o do sistema
 * �ltima altera��o em 12-01-2014 19:40:33 
 **/

//###############################
//########## GERAL ##############
//###############################
// tipo de ambiente esta informa��o deve ser editada pelo sistema
// 1-Produ��o 2-Homologa��o
// esta vari�vel ser� utilizada para direcionar os arquivos e
// estabelecer o contato com o SEFAZ
$ambiente=2;
//esta vari�vel cont�m o nome do arquivo com todas as url dos webservices do sefaz
//incluindo a versao dos mesmos, pois alguns estados n�o est�o utilizando as
//mesmas vers�es
$arquivoURLxml="nfe_ws2.xml";
$arquivoURLxmlCTe="cte_ws1.xml";
//Diret�rio onde ser�o mantidos os arquivos com as NFe em xml
//a partir deste diret�rio ser�o montados todos os subdiret�rios do sistema
//de manipula��o e armazenamento das NFe e CTe
$arquivosDir="app/public/complementos/nfephp/nfe";
$arquivosDirCTe="app/public/complementos/nfephp/cte";
//URL base da API, passa a ser necess�ria em virtude do uso dos arquivos wsdl
//para acesso ao ambiente nacional
$baseurl="http://www.inovaminas.com.br/nfe/app/public/complementos/nfephp";
//Vers�o em uso dos shemas utilizados para valida��o dos xmls
$schemes="PL_006r";
$schemesCTe="PL_CTE_104";

//###############################
//###### EMPRESA EMITENTE #######
//###############################
//Nome da Empresa
$empresa="FAZAO";
//Sigla da UF
$UF="MG";
//C�digo da UF
$cUF="00";
//N�mero do CNPJ
$cnpj="0000000000";

//###############################
//#### CERITIFICADO DIGITAL #####
//###############################
//Nome do certificado que deve ser colocado na pasta certs da API
$certName="www_inovaminas_com_br.crt";
//Senha da chave privada
$keyPass="";
//Senha de decripta�ao da chave, normalmente n�o � necessaria
$passPhrase="";

//###############################
//############ DANFE ############
//###############################
//Configura��o do DANFE
$danfeFormato="P"; //P-Retrato L-Paisagem 
$danfePapel="A4"; //Tipo de papel utilizado 
$danfeCanhoto=1; //se verdadeiro imprime o canhoto na DANFE 
$danfeLogo="/home/inovamin/public_html/nfe/app/public/complementos/nfephp/images/logo.jpg"; //passa o caminho para o LOGO da empresa 
$danfeLogoPos="L"; //define a posi��o do logo na Danfe L-esquerda, C-dentro e R-direta 
$danfeFonte="Helvetica"; //define a fonte do Danfe limitada as fontes compiladas no FPDF (Times) 
$danfePrinter="hpteste"; //define a impressora para impress�o da Danfe 

//###############################
//############ DACTE ############
//###############################
//Configura��o do DACTE
$dacteFormato="P"; //P-Retrato L-Paisagem 
$dactePapel="A4"; //Tipo de papel utilizado 
$dacteCanhoto=1; //se verdadeiro imprime o canhoto na DANFE 
$dacteLogo="/home/inovamin/public_html/nfe/app/public/complementos/nfephp/images/logo.jpg"; //passa o caminho para o LOGO da empresa 
$dacteLogoPos="L"; //define a posi��o do logo na Danfe L-esquerda, C-dentro e R-direta 
$dacteFonte="Times"; //define a fonte do Danfe limitada as fontes compiladas no FPDF (Times) 
$dactePrinter="hpteste"; //define a impressora para impress�o da Dacte 

//###############################
//############ EMAIL ############
//###############################
//Configura��o do email
$mailAuth="1"; //ativa ou desativa a obrigatoriedade de autentica��o no envio de email, na maioria das vezes ativar 
$mailFROM="nfe@mm.com"; //identifica��o do emitente 
$mailHOST="server5.mm.org"; //endere�o do servidor SMTP 
$mailUSER="nfe@mm.com"; //username para autentica��o, usando quando mailAuth � 1
$mailPASS="bb7oexty"; //senha de autentica��o do servi�o de email
$mailPROTOCOL="ssl"; //protocolo de email utilizado (classe alternate)
$mailPORT="465"; //porta utilizada pelo smtp (classe alternate)
$mailFROMmail="nfe@mm.com"; //para altera��o da identifica��o do remetente, pode causar problemas com filtros de spam 
$mailFROMname="Way"; //para indicar o nome do remetente 
$mailREPLYTOmail="nfe@mm.com"; //para indicar o email de resposta
$mailREPLYTOname="Way "; //para indicar email de c�pia
$mailIMAPhost="mail.mm.com.br"; //url para o servidor IMAP
$mailIMAPport="143"; //porta do servidor IMAP
$mailIMAPsecurity="tls"; //esquema de seguran�a do servidor IMAP
$mailIMAPnocerts="novalidate-cert"; //desabilita verifica��o de certificados do Servidor IMAP
$mailIMAPbox="INBOX"; //caixa postal de entrada do servidor IMAP
$mailLayoutFile=""; //layout da mensagem do email

//###############################
//############ PROXY ############
//###############################
//Configura��o de Proxy
$proxyIP=""; //ip do servidor proxy, se existir 
$proxyPORT=""; //numero da porta usada pelo proxy 
$proxyUSER=""; //nome do usu�rio, se o proxy exigir autentica��o
$proxyPASS=""; //senha de autentica��o do proxy 

?>