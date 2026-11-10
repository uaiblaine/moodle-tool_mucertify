<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Portuguese (Brazil) language strings.
 *
 * @package     tool_mucertify
 * @copyright   2026 Anderson Blaine
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allcertifications'] = 'Todas as certificações';
$string['archived'] = 'Arquivada';
$string['assignment'] = 'Atribuição';
$string['assignment_archive'] = 'Arquivar atribuição';
$string['assignment_delete'] = 'Excluir atribuição';
$string['assignment_restore'] = 'Restaurar atribuição';
$string['assignment_update'] = 'Atualizar atribuição';
$string['assignments'] = 'Atribuições';
$string['assignmentsources'] = 'Origens de atribuição';
$string['blockprogramreuse'] = 'Bloquear reutilização de programa';
$string['blockprogramreuse_help'] = 'Se habilitado, cada programa pode ser usado apenas uma vez por usuário nesta certificação, incluindo os períodos revogados. Não é possível adicionar períodos manualmente com um programa que já foi usado, e a recertificação automática não é iniciada até que um programa de recertificação diferente seja selecionado.

Os programas precisam ser duplicados manualmente antes de cada recertificação, por exemplo com o script CLI de duplicação de programas, e o novo programa precisa ser selecionado nas configurações do período de certificação.';
$string['certificates'] = 'Certificados';
$string['certification'] = 'Certificação';
$string['certification_actions'] = 'Ações da certificação';
$string['certification_archive'] = 'Arquivar certificação';
$string['certification_archive_info'] = 'Arquivar a certificação:

* arquiva as alocações de programa relevantes,
* impede atualizações da certificação,
* e, em geral, oculta a certificação dos usuários comuns.

Arquivar é uma etapa obrigatória antes de excluir a certificação.';
$string['certification_create'] = 'Adicionar certificação';
$string['certification_delete'] = 'Excluir certificação';
$string['certification_delete_info'] = 'Ao excluir a certificação, todos os dados da certificação são excluídos e os usuários são removidos da alocação nos programas.';
$string['certification_move'] = 'Mover certificação';
$string['certification_restore'] = 'Restaurar certificação';
$string['certification_restore_info'] = 'Restaurar a certificação reverte as alterações feitas durante o arquivamento da certificação.

No entanto, recomenda-se verificar depois todas as configurações da certificação e os usuários atribuídos.';
$string['certification_update'] = 'Atualizar certificação';
$string['certificationidnumber'] = 'ID da certificação';
$string['certificationimage'] = 'Imagem da certificação';
$string['certificationname'] = 'Nome da certificação';
$string['certifications'] = 'Certificações';
$string['certificationsactive'] = 'Ativas';
$string['certificationsarchived'] = 'Arquivadas';
$string['certificationstatus'] = 'Status da certificação';
$string['certificationstatus_any'] = 'Qualquer';
$string['certificationstatus_archived'] = 'Arquivada';
$string['certificationstatus_certified'] = 'Certificado';
$string['certificationstatus_expired'] = 'Expirada';
$string['certificationstatus_notcertified'] = 'Não certificado';
$string['certificationstatus_temporary'] = 'Válida temporariamente';
$string['certificationstatus_valid'] = 'Válida';
$string['certificationurl'] = 'URL da certificação';
$string['certifieddate'] = 'Data de conclusão da certificação';
$string['certifieduntiltemporary'] = 'Certificação temporária até';
$string['cohort_usage_source'] = 'Certificações: {$a}';
$string['currentcontextonly'] = 'Excluir subcategorias';
$string['customfields'] = 'Campos personalizados da certificação';
$string['customfields_assignment'] = 'Campos personalizados da atribuição de certificação';
$string['customfieldsettings'] = 'Configurações comuns dos campos personalizados da certificação';
$string['customfieldvisible:assigned'] = 'Usuários atribuídos à certificação';
$string['customfieldvisible:assignee'] = 'Usuário atribuído';
$string['customfieldvisible:everyone'] = 'Todos que podem ver outros detalhes da certificação';
$string['customfieldvisible:viewcapability'] = 'Usuários com a permissão de ver certificações';
$string['customfieldvisibleto'] = 'O conteúdo do campo é visível para';
$string['delay'] = 'Atraso';
$string['delay_oneunit'] = 'Use apenas uma unidade de tempo.';
$string['delayafter'] = '{$a->delay} após {$a->after}';
$string['delaybefore'] = '{$a->delay} antes de {$a->before}';
$string['error_programreuse'] = 'Este programa já foi usado em outro período do usuário; a reutilização de programa está bloqueada nas configurações da certificação.';
$string['errornoassignment'] = 'A certificação não está atribuída';
$string['errornoassignments'] = 'Nenhuma atribuição de certificação encontrada.';
$string['errornocertifications'] = 'Nenhuma certificação encontrada.';
$string['errornomycertifications'] = 'Nenhuma certificação atribuída encontrada.';
$string['errornorequests'] = 'Nenhuma solicitação de certificação encontrada';
$string['event_assignment_archived'] = 'Atribuição de certificação do usuário arquivada';
$string['event_assignment_created'] = 'Usuário atribuído à certificação';
$string['event_assignment_deleted'] = 'Usuário removido da atribuição da certificação';
$string['event_assignment_restored'] = 'Atribuição de certificação do usuário restaurada';
$string['event_assignment_updated'] = 'Atribuição de certificação do usuário atualizada';
$string['event_assignment_viewed'] = 'Atribuição de certificação visualizada';
$string['event_certification_archived'] = 'Certificação arquivada';
$string['event_certification_created'] = 'Certificação criada';
$string['event_certification_deleted'] = 'Certificação excluída';
$string['event_certification_restored'] = 'Certificação restaurada';
$string['event_certification_updated'] = 'Certificação atualizada';
$string['event_period_certified'] = 'Usuário certificado';
$string['event_period_created'] = 'Período de certificação criado';
$string['event_period_deleted'] = 'Período de certificação excluído';
$string['event_period_updated'] = 'Período de certificação atualizado';
$string['evidence_default'] = 'Evidência padrão';
$string['evidence_default_text'] = 'Envio de períodos de certificação históricos';
$string['evidence_details'] = 'Detalhes da evidência';
$string['evidence_details_help'] = 'Os detalhes da evidência explicam por que a certificação foi concedida ou revogada.';
$string['expirationafter'] = 'Expira após';
$string['fromdate'] = 'Válida a partir de';
$string['graceperiod'] = 'Período de carência';
$string['history_upload'] = 'Enviar histórico';
$string['history_upload_assign'] = 'Criar novas atribuições';
$string['history_upload_column_ignore'] = 'Não utilizada';
$string['history_upload_column_number'] = 'Coluna {$a}';
$string['history_upload_column_timecertified'] = 'Data da certificação';
$string['history_upload_columns'] = 'Significado das colunas';
$string['history_upload_columns_headers'] = 'A primeira linha contém os nomes das colunas';
$string['history_upload_columns_info'] = 'Informe o que cada coluna contém. {$a} linhas foram lidas.';
$string['history_upload_counts'] = 'Prontas para importar: {$a->imported}. Ignoradas: {$a->skipped}. Problemas: {$a->error}.';
$string['history_upload_done'] = '{$a->imported} períodos de certificação importados, {$a->assigned} usuários atribuídos, {$a->skipped} ignorados.';
$string['history_upload_error_ambiguous'] = 'Mais de um usuário corresponde a "{$a}".';
$string['history_upload_error_assigned'] = 'O usuário já está atribuído.';
$string['history_upload_error_columntwice'] = 'Cada significado de coluna só pode ser usado uma vez.';
$string['history_upload_error_columnunknown'] = 'Este significado de coluna não é conhecido.';
$string['history_upload_error_date'] = 'Data inválida "{$a}".';
$string['history_upload_error_dateorder'] = 'O período deve começar antes de expirar e expirar depois da data da certificação.';
$string['history_upload_error_empty'] = 'Nenhuma linha utilizável foi encontrada.';
$string['history_upload_error_existing'] = 'O período de certificação já existe.';
$string['history_upload_error_future'] = 'O início do período e a data da certificação não podem estar no futuro.';
$string['history_upload_error_headers'] = 'Informe se a primeira linha contém os nomes das colunas.';
$string['history_upload_error_missing'] = 'Nenhum usuário corresponde a "{$a}".';
$string['history_upload_error_nodatarows'] = 'Além dos nomes das colunas, não há dados.';
$string['history_upload_error_nodate'] = 'Falta uma data.';
$string['history_upload_error_nodatecolumns'] = 'As colunas devem conter as datas de início e de expiração do período.';
$string['history_upload_error_notassigned'] = 'O usuário não está atribuído.';
$string['history_upload_error_nouser'] = 'Uma coluna deve identificar o usuário.';
$string['history_upload_error_nouservalue'] = 'A linha não identifica um usuário.';
$string['history_upload_error_rowsize'] = 'Todas as linhas devem ter o mesmo número de colunas.';
$string['history_upload_failed'] = 'Nada foi importado, {$a->error} linhas têm problemas.';
$string['history_upload_more_rows'] = '{$a} linhas a mais não são exibidas.';
$string['history_upload_options'] = 'Opções de envio';
$string['history_upload_refresh'] = 'Atualizar pré-visualização';
$string['history_upload_result_error'] = 'Problema';
$string['history_upload_result_imported'] = 'Será importada';
$string['history_upload_result_skipped'] = 'Ignorada';
$string['history_upload_skip_ambiguous'] = 'Ignorar linhas que correspondem a mais de um usuário';
$string['history_upload_skip_existing'] = 'Ignorar períodos que já existem';
$string['history_upload_skip_info'] = 'Linhas com problema interrompem o envio, a menos que sejam ignoradas aqui. Nada é gravado até que os dados sejam verificados.';
$string['history_upload_skip_invalid'] = 'Ignorar linhas com valores ausentes ou datas inválidas';
$string['history_upload_skip_missing'] = 'Ignorar linhas sem usuário correspondente';
$string['history_upload_skip_notassigned'] = 'Ignorar usuários que não estão atribuídos';
$string['history_upload_skipassigned'] = 'Ignorar usuários já atribuídos';
$string['history_upload_source'] = 'Envio';
$string['history_upload_source_info'] = 'Envie um arquivo CSV ou cole os dados. Os usuários podem ser identificados por nome de usuário, endereço de e-mail ou número de ID; as colunas devem conter as datas de início e de expiração do período, e outras colunas podem conter a data da certificação e os detalhes da evidência.';
$string['management'] = 'Gerenciamento de certificações';
$string['management_certification_general_actions'] = 'Ações da certificação';
$string['management_certification_users_actions'] = 'Ações de usuários';
$string['messageprovider:approval_reject_notification'] = 'Notificação de rejeição de solicitação de certificação';
$string['messageprovider:approval_request_notification'] = 'Notificação de solicitação de aprovação de certificação';
$string['messageprovider:assignment_notification'] = 'Notificação de atribuição de certificação';
$string['messageprovider:cc_supervisor_notification'] = 'Cópia das notificações de certificação dos subordinados';
$string['messageprovider:renewalblocked_notification'] = 'Notificação de recertificação bloqueada';
$string['messageprovider:unassignment_notification'] = 'Notificação de remoção de atribuição de certificação';
$string['messageprovider:valid_notification'] = 'Notificação de validade da certificação';
$string['mucertify:admin'] = 'Administração avançada de certificações';
$string['mucertify:assign'] = 'Atribuir usuários a certificações';
$string['mucertify:configurecustomfields'] = 'Configurar campos personalizados de certificação';
$string['mucertify:delete'] = 'Excluir certificações';
$string['mucertify:edit'] = 'Adicionar e atualizar certificações';
$string['mucertify:unassign'] = 'Remover usuários de certificações';
$string['mucertify:view'] = 'Ver gerenciamento de certificações';
$string['mucertify:viewusercertifications'] = 'Ver certificações de outros usuários';
$string['mycertifications'] = 'Minhas certificações';
$string['never'] = 'Nunca';
$string['noexpiration'] = 'Sem expiração';
$string['notallocated'] = 'Não alocado';
$string['notification_assignment'] = 'Usuário atribuído';
$string['notification_assignment_body'] = 'Olá {$a->user_fullname},

você foi atribuído à certificação "{$a->certification_fullname}".';
$string['notification_assignment_description'] = 'Notificação enviada aos usuários quando são atribuídos à certificação.';
$string['notification_assignment_subject'] = 'Notificação de atribuição de certificação';
$string['notification_cc_supervisor_body'] = 'Olá {$a->supervisor_fullname},

uma notificação foi enviada ao seguinte usuário:

* {$a->subordinate_title}: {$a->user_fullname}
* Tipo de notificação: {$a->notification_name}
* Certificação relacionada: {$a->certification_fullname}

';
$string['notification_cc_supervisor_subject'] = 'Notificação de {$a->supervisor_title} - {$a->certification_fullname}';
$string['notification_renewalblocked'] = 'Recertificação bloqueada';
$string['notification_renewalblocked_body'] = 'Olá {$a->user_fullname},

sua recertificação em "{$a->certification_fullname}" não pôde ser iniciada, porque o programa de recertificação atual já foi usado em um de seus períodos de certificação anteriores.

* a certificação atual expira em: {$a->period_untildate}

Entre em contato com seu gestor.
';
$string['notification_renewalblocked_description'] = 'Notificação enviada aos usuários quando a recertificação não é iniciada porque a reutilização de programa está bloqueada e eles já usaram o programa de recertificação.';
$string['notification_renewalblocked_subject'] = 'Problema na recertificação';
$string['notification_unassignment'] = 'Usuário removido da atribuição';
$string['notification_unassignment_body'] = 'Olá {$a->user_fullname},

sua atribuição à certificação "{$a->certification_fullname}" foi removida.';
$string['notification_unassignment_description'] = 'Notificação enviada aos usuários quando são removidos da atribuição da certificação.';
$string['notification_unassignment_subject'] = 'Notificação de remoção de atribuição de certificação';
$string['notification_valid'] = 'Certificação válida';
$string['notification_valid_body'] = 'Olá {$a->user_fullname},

sua certificação "{$a->certification_fullname}" agora é válida:

* válida a partir de: {$a->period_fromdate}
* expira em: {$a->period_untildate}
* recertificação abre em: {$a->period_recertificationdate}
';
$string['notification_valid_description'] = 'Notificação enviada aos usuários quando a certificação deles se torna válida.';
$string['notification_valid_subject'] = 'Notificação de certificação válida';
$string['notificationdates'] = 'Notificações';
$string['notifications'] = 'Notificações da certificação';
$string['notset'] = 'Não definido';
$string['period'] = 'Período de certificação';
$string['period_create'] = 'Adicionar período';
$string['period_delete'] = 'Excluir período';
$string['period_update'] = 'Substituir datas do período';
$string['periods'] = 'Períodos de certificação';
$string['periodstatus'] = 'Status';
$string['periodstatus_archived'] = 'Arquivado';
$string['periodstatus_certified'] = 'Certificado';
$string['periodstatus_expired'] = 'Expirado';
$string['periodstatus_failed'] = 'Reprovado';
$string['periodstatus_future'] = 'Futuro';
$string['periodstatus_overdue'] = 'Atrasado';
$string['periodstatus_pending'] = 'Pendente';
$string['periodstatus_revoked'] = 'Revogado';
$string['pluginname'] = 'Certificações';
$string['pluginname_desc'] = 'Ferramenta de certificação e recertificação';
$string['privacy:metadata:field:archived'] = 'Indicador de arquivamento';
$string['privacy:metadata:field:assignmentid'] = 'ID da atribuição';
$string['privacy:metadata:field:certificationid'] = 'ID da certificação';
$string['privacy:metadata:field:datajson'] = 'Dados em JSON';
$string['privacy:metadata:field:programid'] = 'ID do programa';
$string['privacy:metadata:field:quantity'] = 'Quantidade';
$string['privacy:metadata:field:rejectedby'] = 'Rejeitada por';
$string['privacy:metadata:field:sourceid'] = 'ID da origem';
$string['privacy:metadata:field:timecertified'] = 'Data da certificação';
$string['privacy:metadata:field:timecertifiedtemp'] = 'Data até a qual está certificado temporariamente';
$string['privacy:metadata:field:timefrom'] = 'Data de início da certificação';
$string['privacy:metadata:field:timerejected'] = 'Data da rejeição';
$string['privacy:metadata:field:timerequested'] = 'Data da solicitação';
$string['privacy:metadata:field:timerevoked'] = 'Data da revogação da certificação';
$string['privacy:metadata:field:timeuntil'] = 'Data até a qual está certificado';
$string['privacy:metadata:field:timewindowdue'] = 'Data de vencimento da janela';
$string['privacy:metadata:field:timewindowend'] = 'Data de término da janela';
$string['privacy:metadata:field:timewindowstart'] = 'Data de início da janela';
$string['privacy:metadata:field:userid'] = 'ID do usuário';
$string['privacy:metadata:table:tool_mucertify_assignment'] = 'Tabela de atribuições de usuários';
$string['privacy:metadata:table:tool_mucertify_period'] = 'Tabela de períodos de certificação';
$string['privacy:metadata:table:tool_mucertify_request'] = 'Tabela de solicitações de certificação';
$string['program1'] = 'Programa de certificação';
$string['program2'] = 'Programa de recertificação';
$string['purchaseaccess'] = 'Comprar acesso';
$string['recertification'] = 'Recertificação';
$string['recertifications'] = 'Recertificações';
$string['recertify'] = 'Recertificar automaticamente';
$string['recertifybefore'] = 'Recertificar antes da expiração';
$string['recertifyifexpired'] = 'Se expirada';
$string['resettype1'] = 'Redefinição do programa de certificação';
$string['resettype2'] = 'Redefinição do programa de recertificação';
$string['revokeddate'] = 'Data da revogação';
$string['selectcategory'] = 'Selecionar categoria';
$string['settings'] = 'Configurações da certificação';
$string['source'] = 'Origem';
$string['source_active_locked'] = 'A origem não pode ser desativada enquanto houver usuários atribuídos por meio dela.';
$string['source_approval'] = 'Solicitações com aprovação';
$string['source_approval_active_desc'] = 'Os usuários solicitam a atribuição e os gestores de certificação aprovam ou rejeitam as solicitações.';
$string['source_approval_allownew'] = 'Permitir aprovações';
$string['source_approval_allownew_desc'] = 'Permitir adicionar novas origens de _solicitações com aprovação_ às certificações';
$string['source_approval_allowrequest'] = 'Permitir novas solicitações';
$string['source_approval_confirm'] = 'Confirme que você deseja solicitar a atribuição à certificação.';
$string['source_approval_daterejected'] = 'Data da rejeição';
$string['source_approval_daterequested'] = 'Data da solicitação';
$string['source_approval_inactive_desc'] = 'Os usuários não podem solicitar atribuição; as solicitações pendentes são excluídas.';
$string['source_approval_makerequest'] = 'Solicitar acesso';
$string['source_approval_notification_approval_reject_body'] = 'Olá {$a->user_fullname},

sua solicitação de acesso à certificação "{$a->certification_fullname}" foi rejeitada.

{$a->reason}
';
$string['source_approval_notification_approval_reject_subject'] = 'Notificação de rejeição de solicitação de certificação';
$string['source_approval_notification_approval_request_body'] = '
O usuário {$a->user_fullname} solicitou acesso à certificação "{$a->certification_fullname}".
';
$string['source_approval_notification_approval_request_subject'] = 'Notificação de solicitação de certificação';
$string['source_approval_rejectionreason'] = 'Motivo da rejeição';
$string['source_approval_request'] = 'Solicitação';
$string['source_approval_requestallowed'] = 'As solicitações são permitidas';
$string['source_approval_requestapprove'] = 'Aprovar solicitação';
$string['source_approval_requestdelete'] = 'Excluir solicitação';
$string['source_approval_requestnotallowed'] = 'As solicitações não são permitidas';
$string['source_approval_requestpending'] = 'Solicitação de acesso pendente';
$string['source_approval_requestreject'] = 'Rejeitar solicitação';
$string['source_approval_requestrejected'] = 'A solicitação de acesso foi rejeitada';
$string['source_approval_requests'] = 'Solicitações';
$string['source_cohort'] = 'Atribuição automática por coorte';
$string['source_cohort_active_desc'] = 'Os membros dos coortes selecionados são atribuídos automaticamente.';
$string['source_cohort_allownew'] = 'Permitir atribuição por coorte';
$string['source_cohort_allownew_desc'] = 'Permitir adicionar novas origens de _atribuição automática por coorte_ às certificações';
$string['source_cohort_cohortstoassign'] = 'Atribuir coortes';
$string['source_cohort_inactive_desc'] = 'Os membros do coorte não são atribuídos automaticamente; a seleção de coortes é descartada.';
$string['source_manual'] = 'Atribuição manual';
$string['source_manual_active_desc'] = 'Os gestores de certificação atribuem usuários um a um ou os enviam em lote.';
$string['source_manual_assignusers'] = 'Atribuir usuários';
$string['source_manual_inactive_desc'] = 'Não é possível atribuir usuários manualmente.';
$string['source_manual_upload_column_ignore'] = 'Não utilizada';
$string['source_manual_upload_column_number'] = 'Coluna {$a}';
$string['source_manual_upload_columns'] = 'Significado das colunas';
$string['source_manual_upload_columns_headers'] = 'A primeira linha contém os nomes das colunas';
$string['source_manual_upload_columns_info'] = 'Informe o que cada coluna contém. {$a} linhas foram lidas.';
$string['source_manual_upload_counts'] = 'Prontos para atribuir: {$a->assigned}. Ignorados: {$a->skipped}. Problemas: {$a->error}.';
$string['source_manual_upload_done'] = '{$a->assigned} usuários atribuídos, {$a->skipped} ignorados.';
$string['source_manual_upload_error_ambiguous'] = 'Mais de um usuário corresponde a "{$a}".';
$string['source_manual_upload_error_assigned'] = 'O usuário já está atribuído.';
$string['source_manual_upload_error_columntwice'] = 'Cada significado de coluna só pode ser usado uma vez.';
$string['source_manual_upload_error_columnunknown'] = 'Este significado de coluna não é conhecido.';
$string['source_manual_upload_error_date'] = 'Data inválida "{$a}".';
$string['source_manual_upload_error_duplicate'] = 'O usuário está listado mais de uma vez.';
$string['source_manual_upload_error_empty'] = 'Nenhuma linha utilizável foi encontrada.';
$string['source_manual_upload_error_headers'] = 'Informe se a primeira linha contém os nomes das colunas.';
$string['source_manual_upload_error_missing'] = 'Nenhum usuário corresponde a "{$a}".';
$string['source_manual_upload_error_nodatarows'] = 'Além dos nomes das colunas, não há dados.';
$string['source_manual_upload_error_nouser'] = 'Uma coluna deve identificar o usuário.';
$string['source_manual_upload_error_nouservalue'] = 'A linha não identifica um usuário.';
$string['source_manual_upload_error_rowsize'] = 'Todas as linhas devem ter o mesmo número de colunas.';
$string['source_manual_upload_failed'] = 'Nada foi atribuído, {$a->error} linhas têm problemas.';
$string['source_manual_upload_more_rows'] = '{$a} linhas a mais não são exibidas.';
$string['source_manual_upload_options'] = 'Opções de envio';
$string['source_manual_upload_refresh'] = 'Atualizar pré-visualização';
$string['source_manual_upload_result_assigned'] = 'Será atribuído';
$string['source_manual_upload_result_error'] = 'Problema';
$string['source_manual_upload_result_skipped'] = 'Ignorado';
$string['source_manual_upload_skip_ambiguous'] = 'Ignorar linhas que correspondem a mais de um usuário';
$string['source_manual_upload_skip_assigned'] = 'Ignorar usuários que já estão atribuídos ou listados mais de uma vez';
$string['source_manual_upload_skip_info'] = 'Linhas com problema interrompem o envio, a menos que sejam ignoradas aqui. Nada é gravado até que os dados sejam verificados.';
$string['source_manual_upload_skip_invalid'] = 'Ignorar linhas com valores ausentes ou datas inválidas';
$string['source_manual_upload_skip_missing'] = 'Ignorar linhas sem usuário correspondente';
$string['source_manual_upload_source'] = 'Envio';
$string['source_manual_upload_source_info'] = 'Envie um arquivo CSV ou cole os dados. Os usuários podem ser identificados por nome de usuário, endereço de e-mail ou número de ID; as outras colunas podem conter as datas de abertura da janela, de vencimento da certificação, de fechamento da janela, de expiração e da certificação temporária.';
$string['source_manual_uploadusers'] = 'Enviar atribuições';
$string['source_selfassignment'] = 'Autoatribuição';
$string['source_selfassignment_active_desc'] = 'Os usuários se atribuem à certificação; uma chave de inscrição e um limite de usuários são opcionais.';
$string['source_selfassignment_allownew'] = 'Permitir autoatribuição';
$string['source_selfassignment_allownew_desc'] = 'Permitir adicionar novas origens de _autoatribuição_ às certificações';
$string['source_selfassignment_allowsignup'] = 'Permitir novas inscrições';
$string['source_selfassignment_assign'] = 'Inscrever-se';
$string['source_selfassignment_confirm'] = 'Confirme que você deseja ser atribuído à certificação.';
$string['source_selfassignment_enable'] = 'Habilitar autoatribuição';
$string['source_selfassignment_inactive_desc'] = 'Os usuários não podem se atribuir; as configurações de autoatribuição são descartadas.';
$string['source_selfassignment_key'] = 'Chave de inscrição';
$string['source_selfassignment_keyrequired'] = 'A chave de inscrição é obrigatória';
$string['source_selfassignment_maxusers'] = 'Máximo de usuários';
$string['source_selfassignment_maxusers_status'] = 'Usuários {$a->count}/{$a->max}';
$string['source_selfassignment_maxusersreached'] = 'O número máximo de usuários autoatribuídos já foi atingido';
$string['source_selfassignment_signupallowed'] = 'As inscrições são permitidas';
$string['source_selfassignment_signupnotallowed'] = 'As inscrições não são permitidas';
$string['stoprecertify'] = 'Recertificação interrompida';
$string['tabassignment'] = 'Configurações de atribuição';
$string['tabgeneral'] = 'Geral';
$string['tabsettings'] = 'Configurações do período';
$string['tabusers'] = 'Usuários';
$string['tabvisibility'] = 'Visibilidade no catálogo';
$string['tagarea_tool_mucertify_certification'] = 'Certificações';
$string['taskcron'] = 'Tarefa cron de certificações';
$string['tasktriggercertificate'] = 'Acionar a emissão de certificados pelo cron o quanto antes';
$string['untildate'] = 'Expiração';
$string['updateassignments'] = 'Atualizar configurações de atribuição';
$string['updatecertificatetemplate'] = 'Atualizar modelo de certificado';
$string['updaterecertification'] = 'Atualizar recertificação';
$string['updatesource'] = 'Atualizar {$a}';
$string['validfrom'] = 'Válida a partir de';
$string['windowdueafter'] = 'Vencimento após';
$string['windowduedate'] = 'Vencimento da certificação';
$string['windowendafter'] = 'Fechamento da janela após';
$string['windowenddate'] = 'Fechamento da janela';
$string['windowstartdate'] = 'Abertura da janela';
