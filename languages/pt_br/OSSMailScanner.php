<?php
/* {[The file is published on the basis of YetiForce Public License that can be found in the following directory: licenses/License.html]} */
$languageStrings = [
	'OSSMailScanner' => 'Escanear Mensagem',
	'OSSMailScanner_manual' => 'Escanear Mensagem',
	'E-mail Accounts' => 'Contas E-mail',
	'Action' => 'Ação',
	'Desc' => 'Descrição',
	'username' => 'Usuário',
	'mail_host' => 'Servidor',
	'language' => 'Idioma',
	'nazwa' => 'Nome da função',
	'katalog' => 'Diretório do arquivo',
	'opis' => 'Descrição',
	'CreatedEmail' => 'Criar mensagem email',
	'BindContacts' => 'Relacionar com Contatos',
	'BindAccounts' => 'Relacionar com Contas',
	'BindLeads' => 'Relacionar com Leads',
	'BindSSalesProcesses' => 'Relacioanr com Oportunidades',
	'BindHelpDesk' => 'Relacionar com Chamados',
	'BindProject' => 'Relacioanr com Projeto',
	'BindServiceContracts' => 'Relacionar com Contratos',
	'BindCompetition' => 'Relacionar com Concorrente',
	'BindOSSEmployees' => 'Relacionar com Colaboradores',
	'BindPartners' => 'Relacionar com Parceiros',
	'BindVendors' => 'Relacionar com Fornecedores',
	'BindCampaigns' => 'Relacionar com Campanhas',
	'created_Accounts' => 'Criar Conta',
	'created_Contacts' => 'Criar Contato',
	'CreatedHelpDesk' => 'Criar Chamado',
	'update_HelpDesk' => 'Atualizar Chamado',
	'update_Accounts' => 'Atualizar Conta',
	'update_Contacts' => 'Atualizar Contato',
	'desc_CreatedEmail' => 'Adicionar email no CRM.',
	'desc_BindCompetition' => 'Criar relação da mensagem de e-mail com registro do Concorrente que contém o endereço de e-mail.',
	'desc_BindOSSEmployees' => 'Criar relação da mensagem de e-mail com registro do Colaborador que contém o endereço de e-mail.',
	'desc_BindPartners' => 'Criar relação da mensagem de e-mail com o registro do Parceiro que contém o endereço de e-mail.',
	'desc_BindVendors' => 'Criar relação da mensagem de e-mail com o registro do Fornecedor que contém o endereço de e-mail.',
	'desc_BindContacts' => 'Criar relação da mensagem de e-mail com o registro do Contato que contém o endereço de e-mail.',
	'desc_BindAccounts' => 'Criar relação da mensagem de e-mail com a Conta que possuir este endereço de email.',
	'desc_BindLeads' => 'Criar relação da mensagem de e-mail com o Lead que possuir este endereço de email.',
	'desc_BindSSalesProcesses' => 'Criar relação da mensagem de e-mail que possuir no Assunto, o mesmo prefixo atribuído à Oportunidade.',
	'desc_BindHelpDesk' => 'Criar relação da mensagem de e-mail que possuir no Assunto, o mesmo prefixo atribuído ao Chamado.',
	'desc_BindProject' => 'Criar relação da mensagem de e-mail que possuir no Assunto, o mesmo prefixo atribuído ao Projeto.',
	'desc_BindServiceContracts' => 'Criar relação da mensagem de e-mail com o Projeto, cuja Conta relacionada possua o mesmo e-mail.',
	'desc_BindCampaigns' => 'Criar relação da mensagem de e-mail que possuir no Assunto, o mesmo prefixo atribuído à Campanha.',
	'desc_created_Accounts' => 'Ciar Descrição nas Contas',
	'desc_created_Contacts' => 'Criar Descrição nos Contatos',
	'desc_CreatedHelpDesk' => 'Cria Descrição nos Chamados',
	'desc_update_HelpDesk' => 'Atualizar Decrição nos Chamados',
	'desc_update_Accounts' => 'Atualizar Descrição nas Contas',
	'desc_update_Contacts' => 'Atualizar Descrição nos Contatos',
	'Folder configuration' => 'Configuração de Pasta',
	'Actions' => 'Ações',
	'MailView config' => 'configuração',
	'General Configuration' => 'Configuração Geral',
	'Search email configuration' => 'Pesquisar configuração do e-mail',
	'LBL_TICKET_REOPEN' => 'Criar/Abrir ticket',
	'LBL_OPEN_TICKET' => 'Abrir ticket com a situação "Aguardando resposta"',
	'LBL_CREATE_TICKET' => 'Criar novo ticket',
	'LBL_NO_ACTION' => 'Relacionar ao ticket atual (se a ação de relacionar for adicionada)',
	'LBL_CONFTAB_CHANGE_TICKET_STATUS' => 'O que o scanner deve fazer quando recebermos um e-mail sobre um ticket já fechado?',
	'Alert_no_module_title' => 'Este módulo não foi encontrado ou está desativado.',
	'Alert_no_module_desc' => 'O módulo de Scanner exige que você instale e ative o módulo OSSMail. Verifique se este módulo encontra-se instalado, caso contrário, será necessário instala-lo.',
	'Alert_no_accounts_title' => 'A conta de e-mail não foi encontrada',
	'Alert_no_accounts_desc' => 'Para ativar o Escaner de Mensagens é necessário que você esteja conectado com uma conta de e-mail no módulo OSSMail.',
	'Alert_info_tab_actions' => 'O arquivo com as ações do e-mail está localizado em: modules/OSSMailScanner/scanneractions/',
	'Alert_no_email_acconts' => 'A conta de e-mail não foi encontrada',
	'Alert_no_email_acconts_desc' => 'Para configurar as pastas, você precisa esta conectato para escolher as caixas de correio.',
	'Alert_info_tab_email_search' => 'Escolha os campos que serão utilizados para pesquisar os destinatários da mensagem de e-mail.',
	'Alert_info_tab_folder' => 'Escolha as pastas que serão escaneadas durante o download das mensagens de e-mails. ',
	'Alert_info_tab_accounts' => 'Escolha quais ações deverão ser executadas para as contas de e-mail individuais.',
	'Alert_info_tab_record_numbering' => 'Os prefixos são utilizados para relacionar as mensagens de e-mails com outros dados no CRM. Esta relação é funcional somente para módulos que estão com seus prefixos configurados (isto é, que não estejam vazios).',
	'Alert_active_cron' => 'Nenhuma tarefa ativa no Agendador.',
	'Alert_active_cron_desc' => 'Não foi possível localizar tarefas na Agenda para o módulo de Escaner ou uma das tarefas está inativa. Para que o Escaner de Mensagens funcione adequadamente, é necessário que todas as tarefas estejam ativas (MailScannerAction, MailScannerVerification)',
	'Alert_active_crontime' => 'As chamadas agendadas estão com frequência incorreta.',
	'Alert_active_crontime_desc' => 'A frequência da tarefa "MailScannerAction" deve ser pelo menos o dobro da frequência da tarefa "MailScannerVerification"',
	'All_folder' => 'Todas',
	'Received' => 'Recebidas',
	'Sent' => 'Enviadas',
	'Spam' => 'Spam',
	'Trash' => 'Lixo',
	'Function_list' => 'Lista de funções',
	'Folder_list' => 'Lista de pastas',
	'Record Numbering' => 'Prefixos',
	'ConfigCustomRecordNumbering' => 'Configuração nuemeração',
	'Module' => 'Módulo',
	'Alert_scanner_not_work' => 'nenhum prefixo, o Escaner de Mensagens não está funcionando',
	'Roundcube config' => 'Configuração do Roundcube',
	'LBL_SAVE' => 'Salvar configuração',
	'Spam' => 'Spam',
	'Spam' => 'Spam',
	'JS_save_info' => 'A lista de ações foi salva',
	'JS_saveuser_info' => 'O Usuário soi salvo',
	'LBL_SAVE_FOLDER_INFO' => 'A lista de pastas foi salva',
	'JS_save_fields_info' => 'A lista de campos foi salva',
	'JS_save_config_info' => 'A configuração foi salva',
	'Cron' => 'CRON',
	'RunCron' => 'Iniciar escaner manualmente',
	'startTime' => 'Hora início',
	'endTime' => 'Hora final',
	'status' => 'Status',
	'account' => 'Conta',
	'action' => 'Acão',
	'folder' => 'Pasta',
	'count' => 'Emails verificados',
	'who' => 'Usuário',
	'OK' => 'ok',
	'In progress' => 'Em realização',
	'Error' => 'Erro',
	'email_to_notify' => 'E-mail de notificação',
	'time_to_notify' => 'Tempo para notificar (min) (min)',
	'StopCron' => 'Para o escaneamento manualmente',
	'Manually stopped' => 'Parado Manualmente',
	'stop_user' => 'Escaneamento parou pelo',
	'Email_Subject' => 'Notificação: O CRON está sendo executado há bastante tempo',
	'Email_Body' => 'Olá<br /><br />CRON está executando durante muito tempo, verifique se o sistema de e-mail está funcionando corretamente.<br /><br />Administração',
	'Email_FromName' => 'Intranet Dialo CRON',
	'JS_info_restart_ok' => 'O CRON foi desbloqueado',
	'permissions_all' => 'Visível para todos',
	'permissions_vtiger' => 'Baseado nas permissões do YetiForce',
	'permissions_user_email' => 'Baseado no endereço do usuário',
	'Permissions' => 'Permissões',
	'User' => 'Usuário',
	'None' => 'Escolher usuário',
	'User list' => 'Lista dos usuários',
	'identities_name' => 'Nome identidade',
	'identities_adress' => 'Endereço identidade',
	'identities_del' => 'Apagar identidade',
	'show_identities' => 'Exibir identidades',
	'IMAP_ERROR' => 'Não foi possível conectar o servidor de e-mail',
	'ERROR_ACTIVE_CRON' => 'Não foi possível ligar o escaneamento, pois CRON está ativo no momento.',
	'Change ticket status' => 'Mudar Situação do Ticket',
	'Change_ticket_status' => 'Atualizar Situação do Ticket',
	'Alert_info_conftab_change_ticket_status' => 'Esta opção permite alterar o status do Chamado para "Respondido", quando o Escaner de Mensagens encontrar um e-mail enviado por um Cliente, relacionado com este Chamado.',
	'Action_DisabledModule' => 'Desabilitar módulo',
	'Action_EnabledModule' => 'Habilitar módulo',
	'Action_UpdateModule' => 'Atualizar módulo',
	'Action_InstallModule' => 'Instalar módulo',
	'Action_Bind' => 'Marcado para vincular',
	'Action_CronMailScanner' => 'CRON - Escaneando E-mail',
	'Action_CronBind' => 'CRON - Vincular',
	'Action_ChangeType' => 'Alterar tipo de mensagem',
	'AccontDeleteOK' => 'Conta apagada',
	'No' => 'Não',
	'LBL_MAIL_LOGS' => 'Log das Mensagens',
	'Group list' => 'Lista Grupo',
	'LBL_ACTIVE_MAIL' => 'Ativo',
	'LBL_INACTIVE_MAIL' => 'Inativo',
	'LBL_EXCEPTIONS' => 'Exceções',
	'LBL_EXCEPTIONS_CREATING_EMAIL' => 'Endereços omitidos durante execução do procedimento de criação de mensagens de e-mails',
	'LBL_EXCEPTIONS_CREATING_TICKET' => 'Endereços omitidos durante execuçao do procedimento de criaçao de Chamados',
	'LBL_WRITE_AND_ENTER' => 'Digite o endereço e pressione Enter',
	'ERR_NO_CONFIGURATION_FOLDERS' => 'Nenhuma configuração de pasta',
	'LBL_SHOW_ACCOUNT_DETAILS' => 'Exibit detalhes da Conta',
	'LBL_EDIT_FOLDER_ACCOUNT' => 'Editar pastas',
	'LBL_ALERT_EDIT_FOLDER' => 'Ao apagar a pasta e adiciona-la novamente, ira reiniciar o Escaner de Mensagens para as pastas selecionadas.',
	'LBL_DELETE_ACCOUNT' => 'Apagar Conta',
];
